<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReplyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'is_open' => ['required', 'boolean'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string'],
            'gas_station_id' => ['required', 'string'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
