<?php

namespace App\Http\Requests\front;

use Illuminate\Foundation\Http\FormRequest;

class ProfessionalRequest extends FormRequest
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
            'image' => 'required',
            'name' => 'required',
            'job_name' => 'required',
            'description' => 'required',
        ];
    }
    public function messages()
    {
        return [
            '*.required' => 'This field is required',
        
        ];
    }
}
