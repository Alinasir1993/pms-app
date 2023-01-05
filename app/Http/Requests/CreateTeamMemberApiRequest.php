<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTeamMemberApiRequest extends FormRequest
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
            'name' => 'required',
            'user_id' => 'required',
            'team_id' => 'required',
        ];
    }
    public function messages() {
        return[
          'name.required' => 'Please Enter the team member name',
          'user.id' => 'Please enter the user id',
          'team_id' =>  'Please enter the team id',
        ];
    }
}
