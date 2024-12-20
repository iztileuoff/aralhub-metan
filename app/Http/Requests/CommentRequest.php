<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'gas_station_id' => ['required', 'exists:gas_stations,gas_station_id'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
