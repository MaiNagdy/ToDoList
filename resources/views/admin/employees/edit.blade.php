@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.employee.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employees.update", [$employee->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.employee.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $employee->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.employee.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $employee->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone">{{ trans('cruds.employee.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="number" name="phone" id="phone" value="{{ old('phone', $employee->phone) }}" step="1" required>
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="working_name">{{ trans('cruds.employee.fields.working_name') }}</label>
                <input class="form-control {{ $errors->has('working_name') ? 'is-invalid' : '' }}" type="text" name="working_name" id="working_name" value="{{ old('working_name', $employee->working_name) }}" required>
                @if($errors->has('working_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('working_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.working_name_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('working_days') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="working_days" value="0">
                    <input class="form-check-input" type="checkbox" name="working_days" id="working_days" value="1" {{ $employee->working_days || old('working_days', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="working_days">{{ trans('cruds.employee.fields.working_days') }}</label>
                </div>
                @if($errors->has('working_days'))
                    <div class="invalid-feedback">
                        {{ $errors->first('working_days') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.working_days_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="from">{{ trans('cruds.employee.fields.from') }}</label>
                <input class="form-control timepicker {{ $errors->has('from') ? 'is-invalid' : '' }}" type="text" name="from" id="from" value="{{ old('from', $employee->from) }}">
                @if($errors->has('from'))
                    <div class="invalid-feedback">
                        {{ $errors->first('from') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.from_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="to">{{ trans('cruds.employee.fields.to') }}</label>
                <input class="form-control timepicker {{ $errors->has('to') ? 'is-invalid' : '' }}" type="text" name="to" id="to" value="{{ old('to', $employee->to) }}">
                @if($errors->has('to'))
                    <div class="invalid-feedback">
                        {{ $errors->first('to') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.to_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('working_days_1') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="working_days_1" value="0">
                    <input class="form-check-input" type="checkbox" name="working_days_1" id="working_days_1" value="1" {{ $employee->working_days_1 || old('working_days_1', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="working_days_1">{{ trans('cruds.employee.fields.working_days_1') }}</label>
                </div>
                @if($errors->has('working_days_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('working_days_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.working_days_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="from_1">{{ trans('cruds.employee.fields.from_1') }}</label>
                <input class="form-control timepicker {{ $errors->has('from_1') ? 'is-invalid' : '' }}" type="text" name="from_1" id="from_1" value="{{ old('from_1', $employee->from_1) }}">
                @if($errors->has('from_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('from_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.from_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="to_1">{{ trans('cruds.employee.fields.to_1') }}</label>
                <input class="form-control timepicker {{ $errors->has('to_1') ? 'is-invalid' : '' }}" type="text" name="to_1" id="to_1" value="{{ old('to_1', $employee->to_1) }}">
                @if($errors->has('to_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('to_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.to_1_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('working_days_2') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="working_days_2" value="0">
                    <input class="form-check-input" type="checkbox" name="working_days_2" id="working_days_2" value="1" {{ $employee->working_days_2 || old('working_days_2', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="working_days_2">{{ trans('cruds.employee.fields.working_days_2') }}</label>
                </div>
                @if($errors->has('working_days_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('working_days_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.working_days_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="from_2">{{ trans('cruds.employee.fields.from_2') }}</label>
                <input class="form-control timepicker {{ $errors->has('from_2') ? 'is-invalid' : '' }}" type="text" name="from_2" id="from_2" value="{{ old('from_2', $employee->from_2) }}">
                @if($errors->has('from_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('from_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.from_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="to_3">{{ trans('cruds.employee.fields.to_3') }}</label>
                <input class="form-control timepicker {{ $errors->has('to_3') ? 'is-invalid' : '' }}" type="text" name="to_3" id="to_3" value="{{ old('to_3', $employee->to_3) }}">
                @if($errors->has('to_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('to_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.to_3_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('working_day_3') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="working_day_3" value="0">
                    <input class="form-check-input" type="checkbox" name="working_day_3" id="working_day_3" value="1" {{ $employee->working_day_3 || old('working_day_3', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="working_day_3">{{ trans('cruds.employee.fields.working_day_3') }}</label>
                </div>
                @if($errors->has('working_day_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('working_day_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.working_day_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="from_3">{{ trans('cruds.employee.fields.from_3') }}</label>
                <input class="form-control timepicker {{ $errors->has('from_3') ? 'is-invalid' : '' }}" type="text" name="from_3" id="from_3" value="{{ old('from_3', $employee->from_3) }}">
                @if($errors->has('from_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('from_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.from_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="to_4">{{ trans('cruds.employee.fields.to_4') }}</label>
                <input class="form-control timepicker {{ $errors->has('to_4') ? 'is-invalid' : '' }}" type="text" name="to_4" id="to_4" value="{{ old('to_4', $employee->to_4) }}">
                @if($errors->has('to_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('to_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.to_4_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('working_days_4') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="working_days_4" value="0">
                    <input class="form-check-input" type="checkbox" name="working_days_4" id="working_days_4" value="1" {{ $employee->working_days_4 || old('working_days_4', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="working_days_4">{{ trans('cruds.employee.fields.working_days_4') }}</label>
                </div>
                @if($errors->has('working_days_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('working_days_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.working_days_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="from_4">{{ trans('cruds.employee.fields.from_4') }}</label>
                <input class="form-control timepicker {{ $errors->has('from_4') ? 'is-invalid' : '' }}" type="text" name="from_4" id="from_4" value="{{ old('from_4', $employee->from_4) }}">
                @if($errors->has('from_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('from_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.from_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="to_5">{{ trans('cruds.employee.fields.to_5') }}</label>
                <input class="form-control timepicker {{ $errors->has('to_5') ? 'is-invalid' : '' }}" type="text" name="to_5" id="to_5" value="{{ old('to_5', $employee->to_5) }}">
                @if($errors->has('to_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('to_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.to_5_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('working_days_5') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="working_days_5" value="0">
                    <input class="form-check-input" type="checkbox" name="working_days_5" id="working_days_5" value="1" {{ $employee->working_days_5 || old('working_days_5', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="working_days_5">{{ trans('cruds.employee.fields.working_days_5') }}</label>
                </div>
                @if($errors->has('working_days_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('working_days_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.working_days_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="from_5">{{ trans('cruds.employee.fields.from_5') }}</label>
                <input class="form-control timepicker {{ $errors->has('from_5') ? 'is-invalid' : '' }}" type="text" name="from_5" id="from_5" value="{{ old('from_5', $employee->from_5) }}">
                @if($errors->has('from_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('from_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.from_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="to_6">{{ trans('cruds.employee.fields.to_6') }}</label>
                <input class="form-control timepicker {{ $errors->has('to_6') ? 'is-invalid' : '' }}" type="text" name="to_6" id="to_6" value="{{ old('to_6', $employee->to_6) }}">
                @if($errors->has('to_6'))
                    <div class="invalid-feedback">
                        {{ $errors->first('to_6') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.to_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="salary">{{ trans('cruds.employee.fields.salary') }}</label>
                <input class="form-control {{ $errors->has('salary') ? 'is-invalid' : '' }}" type="number" name="salary" id="salary" value="{{ old('salary', $employee->salary) }}" step="0.01" required>
                @if($errors->has('salary'))
                    <div class="invalid-feedback">
                        {{ $errors->first('salary') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.salary_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="contract_percentage">{{ trans('cruds.employee.fields.contract_percentage') }}</label>
                <input class="form-control {{ $errors->has('contract_percentage') ? 'is-invalid' : '' }}" type="number" name="contract_percentage" id="contract_percentage" value="{{ old('contract_percentage', $employee->contract_percentage) }}" step="0.01" required>
                @if($errors->has('contract_percentage'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contract_percentage') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.contract_percentage_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="commission">{{ trans('cruds.employee.fields.commission') }}</label>
                <input class="form-control {{ $errors->has('commission') ? 'is-invalid' : '' }}" type="number" name="commission" id="commission" value="{{ old('commission', $employee->commission) }}" step="0.01" required>
                @if($errors->has('commission'))
                    <div class="invalid-feedback">
                        {{ $errors->first('commission') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.commission_helper') }}</span>
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