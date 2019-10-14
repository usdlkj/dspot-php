<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'first_name' => 'required|max:70',
            'last_name' => 'required|max:70',
            'email' => 'required|unique:registrations|max:70',
            'mobile_number' => 'required|unique:registrations|max:20',
            'dive_center' => 'required|max:100',
            'bank' => 'required|max:80',
            'transaction_number' => 'required|unique:registrations|max:50',
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'The email has already been registered.',
            'mobile_number.unique' => 'The mobile number has already been registered.',
            'transaction_number.unique' => 'The transaction number has already been registered.',
        ];
    }
}
