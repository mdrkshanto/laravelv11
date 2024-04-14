<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            // 'date' => 'required|date|date_format:Y-n-j,Y-m-d,d-m-Y,j-n-Y,m-d-Y,n-j-Y,Y/n/j,Y/m/d,d/m/Y,j/n/Y,m/d/Y,n/j/Y'
            'image' => 'required|array',
            'image.*' => 'file|image',
        ];
    }

    public function messages()
    {
        return [
            // 'image.*.required' => 'Each image is required.',
            'image.*.file' => 'Each input type must be a file.',
            'image.*.image' => 'Each file must be an image.',
        ];
    }
}
