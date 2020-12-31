<?php

namespace App\Http\Requests\front;

use Illuminate\Foundation\Http\FormRequest;

class SiteSubjectRequest extends FormRequest
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
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',

        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'this field is required',
            'mimes.required' => 'the image type must be [png,jpg,jpeg]',
        ];
    }
}
