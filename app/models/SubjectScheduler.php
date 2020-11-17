<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SubjectScheduler extends Model
{
    //

    protected $table = 'subject_scheduler';
    protected $fillable = ['desc', 'start_at','end_at','subject_id','teacher_id'];

    public function Days(){
       return $this->belongsToMany(Day::class, 'day_subject_scheduler','subject_scheduler_id','day_id');
    }

    public function Subject()
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }

    public function Teacher()
    {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }

}
