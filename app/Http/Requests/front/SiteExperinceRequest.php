<?php

namespace App\Http\Requests\front;

use Illuminate\Foundation\Http\FormRequest;

class SiteExperinceRequest extends FormRequest
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
            'title' =>'required',
            'description' => 'required',
            'reowrd' => 'required',
            'reowrd_number' => 'required',
            'parent' => 'required',
            'parent_number' => 'required',
            'child' => 'required',
            'child_number' => 'required',
            'teacher' => 'required',
            'teacher_number' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'this field is required'
        ];
    }
}
