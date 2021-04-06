<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $guarded = [];
    public function path()
    {
        return route('articles.show', $this);
    }

    public function user()
    {
        # user who wrote it
        return $this->belongsTo(User::class); // select * from user where project_id = 1
    }
}
