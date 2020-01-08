<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:190',
            'description' => 'required|min:3|max:190',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:3|max:190',
            'image' => 'required|max:190'
        ];
    }
}