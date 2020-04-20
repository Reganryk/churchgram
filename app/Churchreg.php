<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Churchreg extends Model
{


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


       public function user()
    {
        return $this->belongsTo(User::class);
    }
}
