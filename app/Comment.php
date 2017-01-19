<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // protects comments table
    protected $guarded = [];

    // commenting user
    public function author()
    {
        return $this->belongsTo(User::class, 'from_user');
    }

  //returns post of any comment
  public function post()
  {
    return $this->belongsTo(Post::class, 'on_post');
  }
}
