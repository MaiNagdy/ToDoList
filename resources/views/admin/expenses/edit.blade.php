@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.expense.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.expenses.update", [$expense->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="expense_category_id">{{ trans('cruds.expense.fields.expense_category') }}</label>
                <select class="form-control select2 {{ $errors->has('expense_category') ? 'is-invalid' : '' }}" name="expense_category_id" id="expense_category_id">
                    @foreach($expense_categories as $id => $entry)
                        <option value="{{ $id }}" {{ (old('expense_category_id') ? old('expense_category_id') : $expense->expense_category->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('expense_category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('expense_category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.expense.fields.expense_category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="entry_date">{{ trans('cruds.expense.fields.entry_date') }}</label>
                <input class="form-control date {{ $errors->has('entry_date') ? 'is-invalid' : '' }}" type="text" name="entry_date" id="entry_date" value="{{ old('entry_date', $expense->entry_date) }}">
                @if($errors->has('entry_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('entry_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.expense.fields.entry_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.expense.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $expense->description) }}">
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.expense.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="employee_name_id">{{ trans('cruds.expense.fields.employee_name') }}</label>
                <select class="form-control select2 {{ $errors->has('employee_name') ? 'is-invalid' : '' }}" name="employee_name_id" id="employee_name_id">
                    @foreach($employee_names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('employee_name_id') ? old('employee_name_id') : $expense->employee_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.expense.fields.employee_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="salary_id">{{ trans('cruds.expense.fields.salary') }}</label>
                <select class="form-control select2 {{ $errors->has('salary') ? 'is-invalid' : '' }}" name="salary_id" id="salary_id">
                    @foreach($salaries as $id => $entry)
                        <option value="{{ $id }}" {{ (old('salary_id') ? old('salary_id') : $expense->salary->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('salary'))
                    <div class="invalid-feedback">
                        {{ $errors->first('salary') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.expense.fields.salary_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="salary_commission_id">{{ trans('cruds.expense.fields.salary_commission') }}</label>
                <select class="form-control select2 {{ $errors->has('salary_commission') ? 'is-invalid' : '' }}" name="salary_commission_id" id="salary_commission_id">
                    @foreach($salary_commissions as $id => $entry)
                        <option value="{{ $id }}" {{ (old('salary_commission_id') ? old('salary_commission_id') : $expense->salary_commission->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('salary_commission'))
                    <div class="invalid-feedback">
                        {{ $errors->first('salary_commission') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.expense.fields.salary_commission_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="amount">{{ trans('cruds.expense.fields.amount') }}</label>
                <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" type="number" name="amount" id="amount" value="{{ old('amount', $expense->amount) }}" step="0.01" required>
                @if($errors->has('amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.expense.fields.amount_helper') }}</span>
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