<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;

class Postimage extends Model
{
     protected $fillable = ['user_id','post_id', 'image_url', 'image_ext', 'image_size', 'image'];

        public function post()
    {
        return $this->belongsTo(Post::class);
    }

           public function user()
    {
        return $this->belongsTo(User::class);
    }
}
