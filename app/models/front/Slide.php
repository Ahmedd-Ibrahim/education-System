<?php

namespace App\models\front;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    //


    protected $fillable = ['title','image'];
    public $timestamps = true;
}
