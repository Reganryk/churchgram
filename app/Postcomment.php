<?php

namespace App;
use App\User;
Use App\Post;

use Illuminate\Database\Eloquent\Model;

class Postcomment extends Model
{
     protected $fillable = ['post_id', 'user_id', 'body'];

        public function user()
    {
        return $this->belongsTo(User::class);
    }

       public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
