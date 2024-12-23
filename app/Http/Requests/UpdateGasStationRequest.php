<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGasStationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
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
