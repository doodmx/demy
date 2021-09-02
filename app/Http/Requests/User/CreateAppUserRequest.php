<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateAppUserRequest extends FormRequest
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
            'name'     => 'required',
            'lastname' => 'required',
            'whatsapp' => 'required|regex:/^\+(?:[0-9]?){6,14}[0-9]$/',
            'email'    => 'required|email|unique:user,email',
            'password' => 'required|min:6|confirmed',
            'terms'    => 'required'
        ];
    }
}
