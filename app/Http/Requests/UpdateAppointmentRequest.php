<?php

namespace App\Http\Requests;

use App\Models\Appointment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAppointmentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('appointment_edit');
    }

    public function rules()
    {
        return [
            'client_name_id' => [
                'required',
                'integer',
            ],
            'start_time' => [
                'required',
                'date_format:' . config('panel.time_format'),
            ],
            'end_time' => [
                'required',
                'date_format:' . config('panel.time_format'),
            ],
            'session_number' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'session_type' => [
                'required',
            ],
            'session_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
        ];
    }
}
