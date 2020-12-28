<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name','student_counter'];

    /* Begin Relations */

    public function Subjects()
    {
        return $this->belongsToMany(Subject::class,'group_subject');
    }

    public function PhaseYear()
    {
        return $this->belongsTo(PhaseYear::class,'phase_year_id');
    }
    public function SubjectScheduler()
    {
        return $this->hasMany(SubjectScheduler::class,'group_id');
    }
    public function Students()
    {
        return $this->hasMany(Student::class,'group_id');
    }
    /* End  Relations */
}
