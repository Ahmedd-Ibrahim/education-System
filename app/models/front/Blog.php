<?php

namespace App\models\front;
use App\models\front\Comment;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $table = 'blog';

    protected $fillable = ['title','intro','image','content'];

    public function Comments()
    {
        return $this->hasMany(Comment::class,'blog_id');
    }
}
