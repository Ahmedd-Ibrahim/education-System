<?php

namespace App\Http\Requests\front;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'email' =>'required|email',
            'name' =>'required',
            'content' =>'required',
            'blog_id' =>'required',
        ];
    }
    public function messages()
    {
        return [
            '*.required' =>'this field is required',
            'email.email'=>'Write your email correct'
        ];
    }
}
