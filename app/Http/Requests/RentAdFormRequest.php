<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentAdFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'type' => 'required',
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'required|image',
        ];
    }
    public function messages()
    {
        return [
            'type.required' => 'Please provide a sale product type',
            'name.required' => 'Please provide a sale product name',
            'image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extension'
        ];
    }
}
