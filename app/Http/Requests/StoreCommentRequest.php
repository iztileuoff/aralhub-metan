<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'text' => ['required', 'string', 'max:1000'],
            'name' => ['required', 'string', 'max:256'],
            'phone' => ['required', 'string'],
            'gas_station_id' => ['required', 'exists:gas_stations,gas_station_id'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
