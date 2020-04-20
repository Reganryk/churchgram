<?php

namespace App;
use App\Church;
use App\Churchreg;
use App\Music;
use App\Group;
use App\Userprofile;
use App\Card;
use App\Post;
use App\Usertwin;
use App\Postlike;
use App\Postdislike;
use App\Postcomment;
use App\Postimage;
use App\Userplaylist;


use DB;
use Cache;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'uname', 'email', 'uphone', 'sex', 'password', 'dob', 'church_id', 'city', 'country',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function isOnline(){

         return Cache::has('is_online'. $this->id);

    }

    public function userprofile()
    {
        return $this->hasOne(Userprofile::class);
    }

    public function churchreg()
    {
        return $this->hasOne(Churchreg::class);
    }

    public function church()
    {
        return $this->belongsTo(Church::class);
    }

    public function music()
    {
        return $this->hasOne(Music::class);
    }

     public function group()
    {
        return $this->hasMany(Group::class);
    }

    public function musicreg()
    {
        return $this->hasOne(Musicreg::class);
    }

    public function card()
    {
        return $this->hasMany(Card::class);
    }

    public function Post()
    {
        return $this->hasMany(Post::class);
    }

    public function postlike()
    {
        return $this->hasMany(Postlike::class);
    }

    public function Postimage()
    {
        return $this->hasMany(Postimage::class);
    }

    public function Postcomment()
    {
        return $this->hasMany(Postcomment::class);
    }

    public function userplaylist()
    {
        return $this->hasMany(Userplaylist::class);
    }


    public function twins()
    {
        return $this->hasMany(Usertwin::class,'user_twin', 'user_auth');
    }

        public function usertwins()
    {
        return $this->hasMany(Usertwin::class,'user_auth');
    }

      public function usertwinsreq()
    {
        return $this->hasMany(Usertwin::class,'user_twin');
    }

    public static function getUserID($uname){
    $getUserID = User::select('id')->where('uname',$uname)->first();
        return $getUserID->id;
    }


}
