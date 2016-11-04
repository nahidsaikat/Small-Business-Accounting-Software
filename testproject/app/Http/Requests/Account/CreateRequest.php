<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            "acc_name" => "required",
            "acc_code" => "required|unique:accounts,acc_code",
            "balance" => "required|numeric",
            "type" => "required",
            "date" => "required|date",
        ];
    }
}
