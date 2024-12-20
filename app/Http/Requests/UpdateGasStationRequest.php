<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGasStationRequest extends FormRequest
{
    public function rules()
    {
        return [
            'is_open' => ['boolean'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
