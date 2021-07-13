<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandFormRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check();
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:100|unique:brands,name,' . $this->id,
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'description' => 'nullable|string|max:10000'
        ];
    }
}
