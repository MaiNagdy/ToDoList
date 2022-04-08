@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.client.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.clients.update", [$client->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="written_at">{{ trans('cruds.client.fields.written_at') }}</label>
                <input class="form-control datetime {{ $errors->has('written_at') ? 'is-invalid' : '' }}" type="text" name="written_at" id="written_at" value="{{ old('written_at', $client->written_at) }}" required>
                @if($errors->has('written_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('written_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.written_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.client.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $client->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="telephone">{{ trans('cruds.client.fields.telephone') }}</label>
                <input class="form-control {{ $errors->has('telephone') ? 'is-invalid' : '' }}" type="number" name="telephone" id="telephone" value="{{ old('telephone', $client->telephone) }}" step="1" required>
                @if($errors->has('telephone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('telephone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.telephone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.client.fields.address') }}</label>
                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{{ old('address', $client->address) }}</textarea>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.client.fields.course_required') }}</label>
                @foreach(App\Models\Client::COURSE_REQUIRED_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('course_required') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="course_required_{{ $key }}" name="course_required" value="{{ $key }}" {{ old('course_required', $client->course_required) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="course_required_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('course_required'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_required') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.course_required_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="required_training">{{ trans('cruds.client.fields.required_training') }}</label>
                <input class="form-control {{ $errors->has('required_training') ? 'is-invalid' : '' }}" type="text" name="required_training" id="required_training" value="{{ old('required_training', $client->required_training) }}">
                @if($errors->has('required_training'))
                    <div class="invalid-feedback">
                        {{ $errors->first('required_training') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.required_training_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="number_of_days">{{ trans('cruds.client.fields.number_of_days') }}</label>
                <input class="form-control {{ $errors->has('number_of_days') ? 'is-invalid' : '' }}" type="number" name="number_of_days" id="number_of_days" value="{{ old('number_of_days', $client->number_of_days) }}" step="1">
                @if($errors->has('number_of_days'))
                    <div class="invalid-feedback">
                        {{ $errors->first('number_of_days') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.number_of_days_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="amount_paid">{{ trans('cruds.client.fields.amount_paid') }}</label>
                <input class="form-control {{ $errors->has('amount_paid') ? 'is-invalid' : '' }}" type="number" name="amount_paid" id="amount_paid" value="{{ old('amount_paid', $client->amount_paid) }}" step="0.01" required>
                @if($errors->has('amount_paid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount_paid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.amount_paid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="remainig_amount">{{ trans('cruds.client.fields.remainig_amount') }}</label>
                <input class="form-control {{ $errors->has('remainig_amount') ? 'is-invalid' : '' }}" type="number" name="remainig_amount" id="remainig_amount" value="{{ old('remainig_amount', $client->remainig_amount) }}" step="0.01" required>
                @if($errors->has('remainig_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('remainig_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.remainig_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="amount_total">{{ trans('cruds.client.fields.amount_total') }}</label>
                <input class="form-control {{ $errors->has('amount_total') ? 'is-invalid' : '' }}" type="number" name="amount_total" id="amount_total" value="{{ old('amount_total', $client->amount_total) }}" step="0.01" required>
                @if($errors->has('amount_total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount_total') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.amount_total_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.client.fields.learn_before') }}</label>
                @foreach(App\Models\Client::LEARN_BEFORE_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('learn_before') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="learn_before_{{ $key }}" name="learn_before" value="{{ $key }}" {{ old('learn_before', $client->learn_before) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="learn_before_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('learn_before'))
                    <div class="invalid-feedback">
                        {{ $errors->first('learn_before') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.learn_before_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="where">{{ trans('cruds.client.fields.where') }}</label>
                <input class="form-control {{ $errors->has('where') ? 'is-invalid' : '' }}" type="text" name="where" id="where" value="{{ old('where', $client->where) }}">
                @if($errors->has('where'))
                    <div class="invalid-feedback">
                        {{ $errors->first('where') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.where_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="how_you_know_us">{{ trans('cruds.client.fields.how_you_know_us') }}</label>
                <input class="form-control {{ $errors->has('how_you_know_us') ? 'is-invalid' : '' }}" type="text" name="how_you_know_us" id="how_you_know_us" value="{{ old('how_you_know_us', $client->how_you_know_us) }}">
                @if($errors->has('how_you_know_us'))
                    <div class="invalid-feedback">
                        {{ $errors->first('how_you_know_us') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.how_you_know_us_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="contract">{{ trans('cruds.client.fields.contract') }}</label>
                <input class="form-control {{ $errors->has('contract') ? 'is-invalid' : '' }}" type="number" name="contract" id="contract" value="{{ old('contract', $client->contract) }}" step="1" required>
                @if($errors->has('contract'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contract') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.contract_helper') }}</span>
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