<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';

    protected $fillable = ['name','container','phaseYear'];
    /* Begin Relations */

    public function PhaseYear()
    {
        return $this->belongsTo(PhaseYear::class,'phaseYear','id');
    }

    public function Teachers(){
        return $this->belongsToMany(Teacher::class,'classes_teachers','class_id','teacher_id');
    }

    public function Students(){
        return $this->hasMany(Student::class,'class_id','id');
    }

    public function ClassSchedulers(){
        return $this->hasMany(ClassScheduler::class,'class_id');
    }
    /* End  Relations */
}
