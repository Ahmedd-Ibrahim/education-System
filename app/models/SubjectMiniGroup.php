<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SubjectMiniGroup extends Model
{

    protected $table = 'subject_mini_groups';

    protected $fillable = ['name', 'subject_id'];

    /* Begin Relations */

    public function Subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function Students()
    {
        return $this->belongsToMany(Student::class, 'subject_mini_group_student');
    }

    public function SubjectSchedulers()
    {
        return $this->hasMany(SubjectScheduler::class,'subject_mini_group_id');
    }

    /* End Relations */
}
