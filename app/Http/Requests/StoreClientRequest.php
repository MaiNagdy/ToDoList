<?php

namespace App\Http\Requests;

use App\Models\Client;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreClientRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('client_create');
    }

    public function rules()
    {
        return [
            'written_at' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'name' => [
                'string',
                'required',
            ],
            'telephone' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'required_training' => [
                'string',
                'nullable',
            ],
            'number_of_days' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'amount_paid' => [
                'required',
            ],
            'remainig_amount' => [
                'required',
            ],
            'amount_total' => [
                'required',
            ],
            'where' => [
                'string',
                'nullable',
            ],
            'how_you_know_us' => [
                'string',
                'nullable',
            ],
            'contract' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
