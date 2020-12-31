<?php

namespace App\Http\Requests\front;

use Illuminate\Foundation\Http\FormRequest;

class ProofRequest extends FormRequest
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
            'description' =>'required',
            'title' =>'required',
            'sub_title' =>'required',
            'image' =>'required|mimes:png,jpg,jpeg',
        ];
    }

    public function messages()
    {
        return [

            '*.required' => 'This field is required',
            'image.mimes' => 'The image type must be [png, jpg, jpeg]'
        ];
    }
}
