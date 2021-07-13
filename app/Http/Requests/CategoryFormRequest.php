<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check();
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:100|unique:categories,name,' . $this->id,
            'parent_id' => 'nullable|integer',
            'description' => 'nullable|string|max:10000'
        ];
    }
}
