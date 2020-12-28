<?php

namespace App\model\front;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    //


    protected $fillable = ['title','image'];
    public $timestamps = true;
}
