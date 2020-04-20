<?php

namespace App;
use App\Album;
use App\Userplaylist;

use Illuminate\Database\Eloquent\Model;

class Albumtrack extends Model
{
      public function album()
    {
        return $this->belongsTo(Album::class);
    }

       public function userplaylist()
    {
        return $this->hasMany(Userplaylist::class,);
    }
}
