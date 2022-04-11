<?php

namespace App\Http\Requests;

use App\Models\Employee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'min:2',
                'max:100',
                'required',
            ],
            'phone' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'working_name' => [
                'string',
                'min:3',
                'required',
            ],
            'from' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'to' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'from_1' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'to_1' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'from_2' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'to_3' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'from_3' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'to_4' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'from_4' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'to_5' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'from_5' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'to_6' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'salary' => [
                'required',
            ],
            'contract_percentage' => [
                'numeric',
                'required',
            ],
            'commission' => [
                'required',
            ],
        ];
    }
}
