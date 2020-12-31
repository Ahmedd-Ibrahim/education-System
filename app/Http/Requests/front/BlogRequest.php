<?php

namespace App\Http\Requests\front;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
            'intro' => 'sometimes',
            'image' => 'sometimes',
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'this field is required',
        ];
    }
}
