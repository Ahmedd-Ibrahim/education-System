<?php

namespace App\models\front;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['username','email','phone','message'];

    protected $table = 'contact';
    
}
