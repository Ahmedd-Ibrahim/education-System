<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teacher';

    protected $fillable = ['name','bdate','gender','desc','avatar','phone','subject_id'];

    protected $hidden= ['pivot'];


    /*Begin Relations*/

    public function Subjects()
    {
        return $this->belongsTo(Subject::class,'subject_id','id');
    }

    public function Classes()
    {
        return $this->belongsToMany(Classes::class,'classes_teachers','teacher_id','class_id');
    }

    public function SubjectSchedulers()
    {
        return $this->hasMany(SubjectScheduler::class,'teacher_id');
    }
    /*End  Relations*/
}
