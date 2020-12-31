<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class BasicsInfo extends Model
{
    protected $table    = 'basie_info';

    protected $fillable = ['name','email','address','phone','logo','fb_link','twitter_link','insta_link','google_link'];
}
