<?php

namespace App\Http\Requests\update;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequst extends FormRequest
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
            'email' => ['required', Rule::unique('users')->ignore($this->user)],
            'password' => 'required',
            'role'     => 'required',
        ];
    }

    public function messages()
    {
        return [
            '*.required'     => 'this  field is required',
            'email.unique'     => 'this  field is must be unique',

        ];
    }
}
