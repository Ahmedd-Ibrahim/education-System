<?php

namespace App\models\front;

use Illuminate\Database\Eloquent\Model;

class SiteSubject extends Model
{


    protected $table = 'site_subject';

    protected $fillable = ['name','description','image'];
}
