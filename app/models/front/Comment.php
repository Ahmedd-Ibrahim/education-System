<?php

namespace App\models\front;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['name','email','content','active','blog_id'];

    public function Blog()
    {
        return $this->belongsTo(Blog::class,'blog_id');
    }

}
