<?php

namespace App\models\front;

use Illuminate\Database\Eloquent\Model;

class StaticTitle extends Model
{

    protected $table = 'static_title';

    protected $fillable = [

        'welcome_title','welcome_desc','welcome_provide_title','welcome_provide_sub_title', // provide section

        'smoth_title','somth_desc', //smoth section

        'professional_title', 'professional_sub_title', // proof

        'subject_title','subject_sub_title', // subject

        'experince_title'


    ];
}
