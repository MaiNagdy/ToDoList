@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employee.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.id') }}
                        </th>
                        <td>
                            {{ $employee->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.name') }}
                        </th>
                        <td>
                            {{ $employee->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.email') }}
                        </th>
                        <td>
                            {{ $employee->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.phone') }}
                        </th>
                        <td>
                            {{ $employee->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.working_name') }}
                        </th>
                        <td>
                            {{ $employee->working_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.working_days') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $employee->working_days ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.from') }}
                        </th>
                        <td>
                            {{ $employee->from }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.to') }}
                        </th>
                        <td>
                            {{ $employee->to }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.working_days_1') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $employee->working_days_1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.from_1') }}
                        </th>
                        <td>
                            {{ $employee->from_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.to_1') }}
                        </th>
                        <td>
                            {{ $employee->to_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.working_days_2') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $employee->working_days_2 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.from_2') }}
                        </th>
                        <td>
                            {{ $employee->from_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.to_3') }}
                        </th>
                        <td>
                            {{ $employee->to_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.working_day_3') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $employee->working_day_3 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.from_3') }}
                        </th>
                        <td>
                            {{ $employee->from_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.to_4') }}
                        </th>
                        <td>
                            {{ $employee->to_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.working_days_4') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $employee->working_days_4 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.from_4') }}
                        </th>
                        <td>
                            {{ $employee->from_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.to_5') }}
                        </th>
                        <td>
                            {{ $employee->to_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.working_days_5') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $employee->working_days_5 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.from_5') }}
                        </th>
                        <td>
                            {{ $employee->from_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.to_6') }}
                        </th>
                        <td>
                            {{ $employee->to_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.salary') }}
                        </th>
                        <td>
                            {{ $employee->salary }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.contract_percentage') }}
                        </th>
                        <td>
                            {{ $employee->contract_percentage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.commission') }}
                        </th>
                        <td>
                            {{ $employee->commission }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#employee_appointments" role="tab" data-toggle="tab">
                {{ trans('cruds.appointment.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#employee_reservations" role="tab" data-toggle="tab">
                {{ trans('cruds.reservation.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="employee_appointments">
            @includeIf('admin.employees.relationships.employeeAppointments', ['appointments' => $employee->employeeAppointments])
        </div>
        <div class="tab-pane" role="tabpanel" id="employee_reservations">
            @includeIf('admin.employees.relationships.employeeReservations', ['reservations' => $employee->employeeReservations])
        </div>
    </div>
</div>

@endsection