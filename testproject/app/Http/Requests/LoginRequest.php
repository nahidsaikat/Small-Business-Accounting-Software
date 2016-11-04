<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
        'name' => 'required|unique:users|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required',
        'account_type' =>'required',
        ];
              
    }
}
