<?php

namespace App\models\front;

use Illuminate\Database\Eloquent\Model;

class Provide extends Model
{

    protected $table = 'provide';

    protected $fillable = ['title','description','class'];

}
