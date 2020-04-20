<?php

namespace App;
use App\Churchprofile;
use App\User;
use App\Post;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ChurchResetPasswordNotification;

class Church extends Authenticatable
{
    use Notifiable;

    protected $guard = 'church';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','user_id', 'phone','uname','location','city', 'country','headpastor',
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
        $this->notify(new ChurchResetPasswordNotification($token));
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
