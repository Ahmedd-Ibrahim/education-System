<?php

namespace App\models\front;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $table = 'service';

    protected $fillable = ['title','description'];
}
