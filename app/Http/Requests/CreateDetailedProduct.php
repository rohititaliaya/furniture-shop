<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDetailedProduct extends FormRequest
{

    public function authorize(): bool
    {
        // check permission here
        return true;
    }
    public function rules()
    {
        // validate here
        return [
            'sku' => 'required|unique:product_details,sku',
            'name' => 'required',
            'color_id' => 'required',
            'size' => 'required',
            'original_price' => 'required',
            'discount_price' => 'nullable|numeric|min:0',
            'warranty_month' => 'required|numeric',
            'quantities' => 'required|numeric|min:0',
        ];
    }
    public function messages()
    {
        // response message here
        return [
            'sku.unique' => 'The sku have already existed.',
            'sku.required' => 'The sku field is required.',
            'name.required' => 'The name field is required.',
            'color_id.required' => 'The color field is required.',
            'size.required' => 'The size field is required.',
            'original_price.required' => 'The original price field is required.',
            'discount_price.numeric' => 'The discount price field must be a number.',
            'discount_price.min' => 'The discount price field must be at least 0.',
            'warranty_month.required' => 'The warranty month field is required.',
            'warranty_month.numeric' => 'The warranty month field must be a number.',
            'quantities.required' => 'The quantities field is required.',
            'quantities.numeric' => 'The quantities field must be a number.',
            'quantities.min' => 'The quantities field must be at least 0.',
        ];
    }
}
