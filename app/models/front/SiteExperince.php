<?php

namespace App\models\front;

use Illuminate\Database\Eloquent\Model;

class SiteExperince extends Model
{
    protected $table = 'site_experince';

    protected $fillable =
    ['title','description',
    'reowrd','reowrd_number',
    'parent','parent_number',
    'child','child_number',
    'teacher','teacher_number'
];
}
