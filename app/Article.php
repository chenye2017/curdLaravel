<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function comments()
    {
        return $this->hasMany(\App\Comment::class, 'article_id', 'id');
    }
}
