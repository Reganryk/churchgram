<?php

namespace App;
use App\User;
use App\Post;

use Illuminate\Database\Eloquent\Model;

class Postdislike extends Model
{
        protected $fillable = ['post_id', 'user_id','status'];

        public function user()
    {
        return $this->belongsTo(User::class);
    }

       public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
