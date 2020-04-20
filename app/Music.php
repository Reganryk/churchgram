<?php

namespace App;
use App\Music;
use App\Post;
use App\Album;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\MusicResetPasswordNotification;

class Music extends Authenticatable
{
    use Notifiable;

    protected $guard = 'music';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'name', 'email', 'password','user_id', 'phone','uname','location','city', 'country','recording_studio',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MusicResetPasswordNotification($token));
    }

           public function musicprofile()
    {
        return $this->hasOne(Musicprofile::class);
    }

           public function Post()
    {
        return $this->hasMany(Post::class);
    }

          public function Postimage()
    {
        return $this->hasMany(Postimage::class);
    }

           public function album()
    {
        return $this->hasMany(Album::class);
    }
}
