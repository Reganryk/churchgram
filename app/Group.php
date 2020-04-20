<?php

namespace App;
use App\User;
use App\Post;
use App\Card;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['user_id','uname', 'groupcat_id', 'about', 'banner', 'propic', 'propic_url', 'propic_ext', 'banner_url', 'banner_ext', 'propic_size', 'banner_size'];

        public function user()
    {
        return $this->belongsTo(User::class);
    }

         public function post()
    {
        return $this->hasMany(Post::class);
    }
    public function card()
    {
        return $this->hasMany(Card::class);
    }
}

