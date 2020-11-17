<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    protected $table = 'phases';
    protected $fillable = ['name'];

    /* Begin Relations*/
    public function PhaseYear(){
        return $this->hasMany(PhaseYear::class,'phase','id');
    }
    /* End Relations*/

}
