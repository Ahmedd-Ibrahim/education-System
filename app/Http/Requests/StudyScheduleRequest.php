<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudyScheduleRequest extends FormRequest
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
            'scheduler_id'             => 'required',
            'name'                     => 'required',
            'saturday'                 => 'array',
            'saturday.*.subject_id'    => 'required',
            'saturday.*.year_id'    => 'required',
            'saturday.*.subject_mini_group_id' => 'required',
            'saturday.*.teacher_id'     => 'required',
            'saturday.*.class_id'       => 'required',
            'saturday.*.start_at'       => 'required',
            'saturday.*.end_at'         => 'required',
            'saturday.*.group_id'       => 'required',
        ];
    }

    public function messages()
    {
        return [
            '*.required'                        => 'This Field is required',
            'scheduler_id.required'             => 'This Field is required',
            'name.required'                     => 'This Field is required',
            'saturday.required'                 => 'This Field is required',
            'saturday.*.subject_id.required'    => 'This Field is required',
            'saturday.*.subject_mini_group_id.required' => 'This Field is required',
            'saturday.*.teacher_id.required'     => 'This Field is required',
            'saturday.*.class_id.required'       => 'This Field is required',
            'saturday.*.start_at.required'       => 'This Field is required',
            'saturday.*.end_at.required'         => 'This Field is required',
            'saturday.*.group_id.required'       => 'This Field is required',
            'saturday.*.year_id.required'        => 'This Field is required',
        ];
    }
}
