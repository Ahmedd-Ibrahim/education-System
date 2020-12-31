<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class baseInfoRequest extends FormRequest
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
            'name'    => 'sometimes',
            'email'   => 'sometimes',
            'address' => 'sometimes',
            'phone'   => 'sometimes' ,
            'logo'    => 'sometimes|mimes:jpeg,png,jpg'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please check this value'
        ];
    }
}
