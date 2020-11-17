<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class HealthReport extends Model
{
    protected $table = 'health_report';

    protected $fillable = ['report_date', 'title', 'content', 'image', 'student_id'];


    /* Begin Relations */
    public function Student(){
        return $this->belongsTo(Student::class,'student_id');
    }
    /* End Relations */
}
