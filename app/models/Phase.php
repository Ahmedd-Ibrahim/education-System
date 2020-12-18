<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    protected $table = 'phases';
    protected $fillable = ['name'];

    /* Begin Relations*/
    public function PhaseYear()
    {
        return $this->hasMany(PhaseYear::class,'phase','id');
    }

    public function PhaseScheduler()
    {
        return $this->hasMany(ClassScheduler::class,'phase_id');

    }

    /* End Relations*/

}
