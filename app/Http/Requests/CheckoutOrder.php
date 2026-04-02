<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutOrder extends FormRequest
{

    public function authorize(): bool
    {
        // check permission here
        return true;
    }
    public function rules()
    {
        $rules = [
            'receiver_name' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required|numeric',
            'phone_number' => ['required', 'regex:/^[6-9][0-9]{9}$/'],
            'payment_method' => 'required',
        ];

        if (!auth()->check()) {
            $rules['email'] = 'required|email|unique:users,email';
            $rules['password'] = 'required|min:8|confirmed';
        }

        return $rules;
    }
    public function messages()
    {
        // response message here
        return [
            'receiver_name.required' => 'The customer name field is required',
            'address.required' => 'The address field is required',
            'phone_number.required' => 'The phone number field is required',
            'phone_number.regex' => 'The phone number format is invalid',
            'payment_method.required' => 'The payment method field is required',
            'email.unique' => 'An account with this email already exists. Please <a href="/login">log in</a>.',
        ];
    }
}
