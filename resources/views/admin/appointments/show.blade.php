@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.appointment.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.appointments.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.id') }}
                        </th>
                        <td>
                            {{ $appointment->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.client_name') }}
                        </th>
                        <td>
                            {{ $appointment->client_name->written_at ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.course') }}
                        </th>
                        <td>
                            {{ $appointment->course->course_type ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.employee') }}
                        </th>
                        <td>
                            {{ $appointment->employee->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.start_time') }}
                        </th>
                        <td>
                            {{ $appointment->start_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.end_time') }}
                        </th>
                        <td>
                            {{ $appointment->end_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.session_number') }}
                        </th>
                        <td>
                            {{ $appointment->session_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.session_type') }}
                        </th>
                        <td>
                            {{ App\Models\Appointment::SESSION_TYPE_RADIO[$appointment->session_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.session_date') }}
                        </th>
                        <td>
                            {{ $appointment->session_date }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.appointments.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection