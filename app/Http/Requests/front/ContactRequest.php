<?php

namespace App\Http\Requests\front;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'username' =>'required|string',
            'email' =>'required|email',
            'phone' =>'required|Integer',
            'message' =>'required',
        ];
    }

    public function messages()
    {
        return [

            '*.required' =>'This filed is required',
        ];
    }
}
