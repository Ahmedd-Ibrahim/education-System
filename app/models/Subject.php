<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['id','name','desc'];
    protected $hidden= ['pivot'];


/*Begin Relations*/
    public function Teachers(){
        return $this->hasMany(Teacher::class,'subject_id','id');
    }

    public function Students()
    {
        return $this->belongsToMany(Student::class,'student_subject','subject_id');
    }

    public function SubjectSchedulers()
    {
        return $this->hasMany(SubjectScheduler::class,'subject_id');
    }
/*End Relations*/

}
