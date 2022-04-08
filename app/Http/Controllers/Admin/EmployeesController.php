<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEmployeeRequest;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeesController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Employee::query()->select(sprintf('%s.*', (new Employee())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'employee_show';
                $editGate = 'employee_edit';
                $deleteGate = 'employee_delete';
                $crudRoutePart = 'employees';

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
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : '';
            });
            $table->editColumn('phone', function ($row) {
                return $row->phone ? $row->phone : '';
            });
            $table->editColumn('working_name', function ($row) {
                return $row->working_name ? $row->working_name : '';
            });
            $table->editColumn('working_days', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->working_days ? 'checked' : null) . '>';
            });
            $table->editColumn('from', function ($row) {
                return $row->from ? $row->from : '';
            });
            $table->editColumn('to', function ($row) {
                return $row->to ? $row->to : '';
            });
            $table->editColumn('working_days_1', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->working_days_1 ? 'checked' : null) . '>';
            });
            $table->editColumn('from_1', function ($row) {
                return $row->from_1 ? $row->from_1 : '';
            });
            $table->editColumn('to_1', function ($row) {
                return $row->to_1 ? $row->to_1 : '';
            });
            $table->editColumn('working_days_2', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->working_days_2 ? 'checked' : null) . '>';
            });
            $table->editColumn('from_2', function ($row) {
                return $row->from_2 ? $row->from_2 : '';
            });
            $table->editColumn('to_3', function ($row) {
                return $row->to_3 ? $row->to_3 : '';
            });
            $table->editColumn('working_day_3', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->working_day_3 ? 'checked' : null) . '>';
            });
            $table->editColumn('from_3', function ($row) {
                return $row->from_3 ? $row->from_3 : '';
            });
            $table->editColumn('to_4', function ($row) {
                return $row->to_4 ? $row->to_4 : '';
            });
            $table->editColumn('working_days_4', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->working_days_4 ? 'checked' : null) . '>';
            });
            $table->editColumn('from_4', function ($row) {
                return $row->from_4 ? $row->from_4 : '';
            });
            $table->editColumn('to_5', function ($row) {
                return $row->to_5 ? $row->to_5 : '';
            });
            $table->editColumn('working_days_5', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->working_days_5 ? 'checked' : null) . '>';
            });
            $table->editColumn('from_5', function ($row) {
                return $row->from_5 ? $row->from_5 : '';
            });
            $table->editColumn('to_6', function ($row) {
                return $row->to_6 ? $row->to_6 : '';
            });
            $table->editColumn('salary', function ($row) {
                return $row->salary ? $row->salary : '';
            });
            $table->editColumn('contract_percentage', function ($row) {
                return $row->contract_percentage ? $row->contract_percentage : '';
            });
            $table->editColumn('commission', function ($row) {
                return $row->commission ? $row->commission : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'working_days', 'working_days_1', 'working_days_2', 'working_day_3', 'working_days_4', 'working_days_5']);

            return $table->make(true);
        }

        return view('admin.employees.index');
    }

    public function create()
    {
        abort_if(Gate::denies('employee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.employees.create');
    }

    public function store(StoreEmployeeRequest $request)
    {
        $employee = Employee::create($request->all());

        return redirect()->route('admin.employees.index');
    }

    public function edit(Employee $employee)
    {
        abort_if(Gate::denies('employee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.employees.edit', compact('employee'));
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());

        return redirect()->route('admin.employees.index');
    }

    public function show(Employee $employee)
    {
        abort_if(Gate::denies('employee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employee->load('employeeAppointments', 'employeeReservations');

        return view('admin.employees.show', compact('employee'));
    }

    public function destroy(Employee $employee)
    {
        abort_if(Gate::denies('employee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employee->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeRequest $request)
    {
        Employee::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
