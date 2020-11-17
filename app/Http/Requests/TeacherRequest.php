<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'name'   => 'required| max:100 | min:3',
            'gender' => 'required| in:male,female',
            'phone' => 'required',
            'bdate' => 'required',
            'avatar' => 'mimes:jpeg,png,jpg|max:1014'
        ];
    }
    public function messages()
    {
      return [
        'name.required'  => 'Fill Name input',
        'gender.required'  => 'Fill gender input',
        'bdate.required'  => 'Fill bdate input',
        'phone.required'  => 'Fill phone     input',
        'avatar.mimes'  => 'this image type not allowed',
      ];
    }
}
