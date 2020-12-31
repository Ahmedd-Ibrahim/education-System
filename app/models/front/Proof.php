<?php

namespace App\models\front;

use Illuminate\Database\Eloquent\Model;

class Proof extends Model
{
    
    protected $table = 'proof';

    protected $fillable = ['description','title','sub_title','image'];
}
