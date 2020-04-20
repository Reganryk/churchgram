<?php

namespace App;
use App\Church;

use Illuminate\Database\Eloquent\Model;

class Churchprofile extends Model
{
    public function church()
    {
        return $this->belongsTo(Church::class);
    }

           public function churchprofile()
    {
        return $this->hasOne(Churchprofile::class);
    }

        public function userchurch()
    {
        return $this->hasMany(User::class);
    }

          public function post()
    {
        return $this->hasMany(Post::class);
    }
}
