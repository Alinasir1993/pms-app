<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class CreateUserRequest extends FormRequest
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
            "name"  => "required",
            "email"=> "required|email|unique:users",
            "password" => "required|min:5",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Please enter a name",
            "email.required" => "Please enter a email",
            "email.unique" => "Email already exist",
            "password.min" => "Please write min 5 character",
            "password.required" => "Please write some password",
        ];
    }
}
