@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.course.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.courses.update", [$course->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="duration">{{ trans('cruds.course.fields.duration') }}</label>
                <input class="form-control {{ $errors->has('duration') ? 'is-invalid' : '' }}" type="number" name="duration" id="duration" value="{{ old('duration', $course->duration) }}" step="1" required>
                @if($errors->has('duration'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.duration_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="price">{{ trans('cruds.course.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $course->price) }}" step="0.01" required>
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="course_days">{{ trans('cruds.course.fields.course_days') }}</label>
                <input class="form-control {{ $errors->has('course_days') ? 'is-invalid' : '' }}" type="number" name="course_days" id="course_days" value="{{ old('course_days', $course->course_days) }}" step="1">
                @if($errors->has('course_days'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_days') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_days_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.course.fields.course_type') }}</label>
                @foreach(App\Models\Course::COURSE_TYPE_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('course_type') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="course_type_{{ $key }}" name="course_type" value="{{ $key }}" {{ old('course_type', $course->course_type) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="course_type_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('course_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.course.fields.training_type') }}</label>
                <select class="form-control {{ $errors->has('training_type') ? 'is-invalid' : '' }}" name="training_type" id="training_type">
                    <option value disabled {{ old('training_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Course::TRAINING_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('training_type', $course->training_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('training_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('training_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.training_type_helper') }}</span>
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