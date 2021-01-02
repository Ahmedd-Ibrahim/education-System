<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['id','name','desc'];
    protected $hidden= ['pivot'];


/*Begin Relations*/
    public function Teachers()
    {
        return $this->belongsToMany(Teacher::class,'teacher_subject');
    }

    public function Students()
    {
        return $this->belongsToMany(Student::class,'student_subject','subject_id');
    }

    public function SubjectSchedulers()
    {
        return $this->hasMany(SubjectScheduler::class,'subject_id');
    }

    public function Groups()
    {
        return $this->belongsToMany(Group::class,'group_subject');
    }

    public function SubjectMiniGroup()
    {
        return $this->hasMany(SubjectMiniGroup::class,'subject_id');
    }
/*End Relations*/

}
