<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Student extends Model
{

    use  Notifiable;
    protected $fillable = [
       'id', 'name', 'gender', 'desc','year','bdate','avatar','class_id','address','phone','group_id'
    ];

    /*Get avatar path from db*/

    public function getAvatarPath(){
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

/* Begin Relations*/

    public function Class()
    {
        return $this->belongsTo(Classes::class,'class_id','id');
    }

    public function HealthReports()
    {
        return $this->hasMany(HealthReport::class, 'student_id');
    }

    public function Subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subject','student_id');
    }

    public function FoodCycles()
    {
        return $this->hasMany(FoodCycle::class, 'student_id');
    }

    public function SubjectMiniGroups()
    {
        return $this->belongsToMany(SubjectMiniGroup::class,'subject_mini_group_student');
    }

    public function Group()
    {
        return $this->belongsTo(Group::class,'group_id');
    }

/* End  Relations*/

}
