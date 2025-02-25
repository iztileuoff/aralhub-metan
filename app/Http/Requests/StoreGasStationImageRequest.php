<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGasStationImageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'image_file' => ['required', 'image', 'max:2048'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
