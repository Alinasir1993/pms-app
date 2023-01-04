<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBusinessApiRequest extends FormRequest
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
            "business_owner_firstname"  => "required",
            "business_name"  => "required",
            "business_contact_number"  => "required",
            "business_email"  => "required|email",
            "business_address"  => "required",
            "business_city"  => "required",
            "business_state"  => "required",
            "business_country"  => "required",
            "business_type"  => "required",
        ];
    }

    public function messages()
    {
        return [
            "business_firstname.required" => "Please enter a Business firstname",
            "business_name.required" => "Please enter a business name",
            "business_contact_number.required" => "Please enter a business contact number",
            "business_email.required" => "Please enter a business email",
            "business_address.required" => "Please enter a business address",
            "business_city.required" => "Please enter a business city",
            "business_state.required" => "Please enter a business state",
            "business_country.required" => "Please enter a business country",
            "business_type.required" => "Please enter a business type",
        ];
    }
}
