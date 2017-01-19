<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = 'posts';

    // protect columns from being modified
    protected $guarded = [];

    // posts has many comments
    // returns all comments from that post
    public function comments()
    {
        return $this->hasMany(Comment::class, 'on_post', 'id');
    }

    // one post belongs to one author / admin
    // returns the instance of user who is author (admin)
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }
}
