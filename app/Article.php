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
    public function author()
    {
        /*, 'user_id'set foreign key as 2nd argument because the key it looks for is based on the methodName_id, so have to specify what ID we want by passing it in*/
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
