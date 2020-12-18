<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PhaseYear extends Model
{

    protected $table = 'phase_years';

    protected $fillable = ['yearsCount','phase'];


    /* Begin Relations*/
    public function Phase()
    {
        return $this->belongsTo(Phase::class,'phase','id');
    }

    public function Classes()
    {
        return $this->hasMany(Classes::class,'phaseYear','id');
    }

    public function Groups()
    {
        return $this->hasMany(Group::class,'phase_year_id');
    }

    public function SubjectScheduler()
    {
        return $this->hasMany(SubjectScheduler::class,'year_id');
    }
    /* End  Relations*/


    public function getYearName(){
        $i = $this->yearsCount;
        switch ($i) {
            case 1:
                return "The first Academic Year";
                break;
            case 2:
                return "The Second Academic Year";
                break;

            case 3:
                return "The Third Academic Year";
                break;

            case 4:
                return "The Fourth Academic Year";
                break;

            case 5:
                return "The Fifth Academic Year";
                break;

            case 6:
                return "The SIXTH Academic Year";
                break;

            case 7:
                return "The SEVENTH Academic Year";
                break;

            default:
                return "This is more than 7 year so its Unknown Year";
                break;

        } // End of switch
    } // End of getYearNAme
} // End of model
