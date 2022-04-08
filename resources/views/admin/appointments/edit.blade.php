@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.appointment.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.appointments.update", [$appointment->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="client_name_id">{{ trans('cruds.appointment.fields.client_name') }}</label>
                <select class="form-control select2 {{ $errors->has('client_name') ? 'is-invalid' : '' }}" name="client_name_id" id="client_name_id" required>
                    @foreach($client_names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('client_name_id') ? old('client_name_id') : $appointment->client_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('client_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('client_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.client_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="course_id">{{ trans('cruds.appointment.fields.course') }}</label>
                <select class="form-control select2 {{ $errors->has('course') ? 'is-invalid' : '' }}" name="course_id" id="course_id">
                    @foreach($courses as $id => $entry)
                        <option value="{{ $id }}" {{ (old('course_id') ? old('course_id') : $appointment->course->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('course'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.course_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="employee_id">{{ trans('cruds.appointment.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id">
                    @foreach($employees as $id => $entry)
                        <option value="{{ $id }}" {{ (old('employee_id') ? old('employee_id') : $appointment->employee->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="start_time">{{ trans('cruds.appointment.fields.start_time') }}</label>
                <input class="form-control timepicker {{ $errors->has('start_time') ? 'is-invalid' : '' }}" type="text" name="start_time" id="start_time" value="{{ old('start_time', $appointment->start_time) }}" required>
                @if($errors->has('start_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.start_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="end_time">{{ trans('cruds.appointment.fields.end_time') }}</label>
                <input class="form-control timepicker {{ $errors->has('end_time') ? 'is-invalid' : '' }}" type="text" name="end_time" id="end_time" value="{{ old('end_time', $appointment->end_time) }}" required>
                @if($errors->has('end_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.end_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="session_number">{{ trans('cruds.appointment.fields.session_number') }}</label>
                <input class="form-control {{ $errors->has('session_number') ? 'is-invalid' : '' }}" type="number" name="session_number" id="session_number" value="{{ old('session_number', $appointment->session_number) }}" step="1" required>
                @if($errors->has('session_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('session_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.session_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.appointment.fields.session_type') }}</label>
                @foreach(App\Models\Appointment::SESSION_TYPE_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('session_type') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="session_type_{{ $key }}" name="session_type" value="{{ $key }}" {{ old('session_type', $appointment->session_type) === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="session_type_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('session_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('session_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.session_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="session_date">{{ trans('cruds.appointment.fields.session_date') }}</label>
                <input class="form-control date {{ $errors->has('session_date') ? 'is-invalid' : '' }}" type="text" name="session_date" id="session_date" value="{{ old('session_date', $appointment->session_date) }}" required>
                @if($errors->has('session_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('session_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.session_date_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection