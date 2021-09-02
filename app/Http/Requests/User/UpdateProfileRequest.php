<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'email'           => 'nullable|email|unique:user,email,' . $this->id . ',id',
            'name'            => 'required',
            'lastname'        => 'required',
            'whatsapp'        => 'required|regex:/^\+(?:[0-9]?){6,14}[0-9]$/',
            'photo'           => 'nullable|mimes:gif,jpg,jpeg,bmp,png'
        ];
    }
}
