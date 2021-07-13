<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check();
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:100|unique:products,name,' . $this->id,
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'description' => 'nullable|string|max:30000',
            'brand_id' => 'nullable|string|max:30000',
            'category_id' => 'nullable|string|max:30000',
            'price' => 'numeric|min:0',
            'quantity' => 'numeric|min:0',
            'active' => 'required|boolean'
        ];
    }
}
