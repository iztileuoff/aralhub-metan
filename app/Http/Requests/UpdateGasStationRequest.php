<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGasStationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'is_open' => ['boolean'],
            'open_time' => ['date_format:H:i'],
            'close_time' => ['date_format:H:i'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
