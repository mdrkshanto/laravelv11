<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            // 'date' => 'required|date|date_format:Y-n-j,Y-m-d,d-m-Y,j-n-Y,m-d-Y,n-j-Y,Y/n/j,Y/m/d,d/m/Y,j/n/Y,m/d/Y,n/j/Y'
        ];
    }
}
