<?php

namespace App\models\front;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    protected $table = 'professional';

    protected $fillable = ['image','name','job_name','description','twitter_link','fb_link','gmail_link','insta_link'];

    
}
