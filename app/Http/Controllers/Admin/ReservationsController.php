<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyReservationRequest;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Models\Client;
use App\Models\Course;
use App\Models\Employee;
use App\Models\Reservation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ReservationsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('reservation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Reservation::with(['client', 'course', 'employee'])->select(sprintf('%s.*', (new Reservation())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'reservation_show';
                $editGate = 'reservation_edit';
                $deleteGate = 'reservation_delete';
                $crudRoutePart = 'reservations';

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
            $table->addColumn('client_name', function ($row) {
                return $row->client ? $row->client->name : '';
            });

            $table->addColumn('course_course_type', function ($row) {
                return $row->course ? $row->course->course_type : '';
            });

            $table->addColumn('employee_name', function ($row) {
                return $row->employee ? $row->employee->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'client', 'course', 'employee']);

            return $table->make(true);
        }

        return view('admin.reservations.index');
    }

    public function create()
    {
        abort_if(Gate::denies('reservation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clients = Client::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $courses = Course::pluck('course_type', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = Employee::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.reservations.create', compact('clients', 'courses', 'employees'));
    }

    public function store(StoreReservationRequest $request)
    {
        $reservation = Reservation::create($request->all());

        return redirect()->route('admin.reservations.index');
    }

    public function edit(Reservation $reservation)
    {
        abort_if(Gate::denies('reservation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clients = Client::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $courses = Course::pluck('course_type', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = Employee::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $reservation->load('client', 'course', 'employee');

        return view('admin.reservations.edit', compact('clients', 'courses', 'employees', 'reservation'));
    }

    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        $reservation->update($request->all());

        return redirect()->route('admin.reservations.index');
    }

    public function show(Reservation $reservation)
    {
        abort_if(Gate::denies('reservation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $reservation->load('client', 'course', 'employee');

        return view('admin.reservations.show', compact('reservation'));
    }

    public function destroy(Reservation $reservation)
    {
        abort_if(Gate::denies('reservation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $reservation->delete();

        return back();
    }

    public function massDestroy(MassDestroyReservationRequest $request)
    {
        Reservation::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
