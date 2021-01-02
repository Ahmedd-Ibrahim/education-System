<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teacher';

    protected $fillable = ['name','bdate','gender','desc','avatar','phone','subject_id'];

    protected $hidden= ['pivot'];


    public function getImagePath(){
        $val = $this->avatar;
        if($val !== ''){
            return asset( 'style/backend/images/'.$val);
        }
        if($this->gender == 'female'){
            return asset( 'style/backend/images/defaults/students/female.png');
        } else {
            return asset( 'style/backend/images/defaults/students/male.jpg');
        }
    }


    /*Begin Relations*/

    public function Subjects()
    {
        return $this->belongsToMany(Subject::class,'teacher_subject');
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
