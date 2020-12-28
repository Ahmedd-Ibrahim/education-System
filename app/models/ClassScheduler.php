<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassScheduler extends Model
{

    protected $table = 'Phase_scheduler';
    protected $fillable = ['name','active'];


    public function getActiveAttribute($key): string
    {

        if(isset($key) & $key == 'true')
        {
            return 'active';
        } else{
            return 'not Active';
        }
    }

    /* Begin Relation */
    public function Days(): HasMany
    {
        return $this->hasMany(Day::class,'phase_scheduler_id');
    }

    public function Phase(): BelongsTo
    {
        return $this->belongsTo(Phase::class,'phase_id');
    }

    /* End  Relation */
}
