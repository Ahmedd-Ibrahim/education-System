<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;


class SubjectScheduler extends Model
{

    protected $table = 'subject_scheduler';
    protected $fillable = ['desc', 'start_at','end_at',
        'subject_id','teacher_id','subject_mini_group_id',
        'class_id','group_id','year_id','day_id'
    ];


    public function Days()
    {
       return $this->belongsToMany(Day::class, 'day_subject_scheduler','subject_scheduler_id','day_id');
    }
    public function Day()
    {
        return $this->belongsTo(Day::class,'day_id');
    }

    public function Subject()
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }

    public function Teacher()
    {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }

    public function SubjectMiniGroup()
    {
        return $this->belongsTo(SubjectMiniGroup::class,'subject_mini_group_id');
    }

    public function Class()
    {
        return $this->belongsTo(Classes::class,'class_id');
    }

    public function Group()
    {
        return $this->belongsTo(Group::class,'group_id');
    }
    public function Year()
    {
        return $this->belongsTo(PhaseYear::class,'year_id');
    }
}
