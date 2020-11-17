<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class FoodCycle extends Model
{


    protected $table = 'food_cycle';
    protected $fillable = ['title','image'];
    /* Begin Relations */
    public function Student(){
        return $this->belongsTo(Student::class,'student_id');
    }
    /* End Relations */
}
