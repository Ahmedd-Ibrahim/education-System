<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    //

    protected $fillable = ['name','day_id'];

    /* Begin relations */
    public function PhaseScheduler(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ClassScheduler::class,'class_scheduler');
    }

    public function SubjectSchedulers(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
      return $this->belongsToMany(SubjectScheduler::class, 'day_subject_scheduler','day_id','subject_scheduler_id');
    }

    public function Scheduleres(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SubjectScheduler::class,'day_id');
    } // subjectScheduler

    /* End Relations */
}
