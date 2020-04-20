<?php

namespace App;
use App\User;
use App\Albumtrack;
use App\Album;

use Illuminate\Database\Eloquent\Model;

class Userplaylist extends Model
{
        public function user()
    {
        return $this->belongsTo(User::class);
    }

       public function albumtrack()
    {
        return $this->hasMany(Albumtrack::class);
    }
       public function album()
    {
        return $this->hasMany(Album::class);
    }


      public static function getUserPlist($id){
    $getUserPlist = Userplaylist::select('id')->where('album_id', $id)->first();
       return $getUserPlist->id;
    }
}
