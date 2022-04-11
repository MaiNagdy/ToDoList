<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyClientRequest;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ClientsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('client_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Client::query()->select(sprintf('%s.*', (new Client())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'client_show';
                $editGate = 'client_edit';
                $deleteGate = 'client_delete';
                $crudRoutePart = 'clients';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });

            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('telephone', function ($row) {
                return $row->telephone ? $row->telephone : '';
            });
            $table->editColumn('address', function ($row) {
                return $row->address ? $row->address : '';
            });
            $table->editColumn('course_required', function ($row) {
                return $row->course_required ? Client::COURSE_REQUIRED_RADIO[$row->course_required] : '';
            });
            $table->editColumn('required_training', function ($row) {
                return $row->required_training ? $row->required_training : '';
            });
            $table->editColumn('number_of_days', function ($row) {
                return $row->number_of_days ? $row->number_of_days : '';
            });
            $table->editColumn('amount_paid', function ($row) {
                return $row->amount_paid ? $row->amount_paid : '';
            });
            $table->editColumn('remainig_amount', function ($row) {
                return $row->remainig_amount ? $row->remainig_amount : '';
            });
            $table->editColumn('amount_total', function ($row) {
                return $row->amount_total ? $row->amount_total : '';
            });
            $table->editColumn('learn_before', function ($row) {
                return $row->learn_before ? Client::LEARN_BEFORE_RADIO[$row->learn_before] : '';
            });
            $table->editColumn('where', function ($row) {
                return $row->where ? $row->where : '';
            });
            $table->editColumn('how_you_know_us', function ($row) {
                return $row->how_you_know_us ? $row->how_you_know_us : '';
            });
            $table->editColumn('contract', function ($row) {
                return $row->contract ? $row->contract : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.clients.index');
    }

    public function create()
    {
        abort_if(Gate::denies('client_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.clients.create');
    }

    public function store(StoreClientRequest $request)
    {
        $client = Client::create($request->all());

        return redirect()->route('admin.clients.index');
    }

    public function edit(Client $client)
    {
        abort_if(Gate::denies('client_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.clients.edit', compact('client'));
    }

    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->update($request->all());

        return redirect()->route('admin.clients.index');
    }

    public function show(Client $client)
    {
        abort_if(Gate::denies('client_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $client->load('clientReservations', 'clientIncomes');

        return view('admin.clients.show', compact('client'));
    }

    public function destroy(Client $client)
    {
        abort_if(Gate::denies('client_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $client->delete();

        return back();
    }

    public function massDestroy(MassDestroyClientRequest $request)
    {
        Client::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
