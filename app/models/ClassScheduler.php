<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ClassScheduler extends Model
{
    //

    protected $table = 'class_scheduler';
    protected $fillable = ['name'];


    /* Begin Relation */
    public function Days(){
        return $this->hasMany(Day::class,'class_scheduler_id');
    }


    public function class()
    {
        return $this->belongsTo(Classes::class,'class_id');
    }

    /* End  Relation */
}
