<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    //

    protected $fillable = ['name','day_id'];


    /* Begin relations */
    public function ClassScheduler()
    {
        return $this->belongsTo(ClassScheduler::class,'class_scheduler');
    }

    public function SubjectSchedulers()
    {
      return $this->belongsToMany(SubjectScheduler::class, 'day_subject_scheduler','day_id','subject_scheduler_id');
    }
    /* End Relations */
}
