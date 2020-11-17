<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = [
       'id', 'name', 'gender', 'desc','year','bdate','avatar','class_id','address','phone'
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

    public function Class(){
        return $this->belongsTo(Classes::class,'class_id','id');
    }

    public function HealthReports(){

        return $this->hasMany(HealthReport::class, 'student_id');

    }

    public function Subjects(){
        return $this->belongsToMany(Subject::class, 'student_subject','student_id');
    }

    public function FoodCycle(){
        return $this->hasOne(FoodCycle::class, 'student_id');
    }
/* End  Relations*/

}
