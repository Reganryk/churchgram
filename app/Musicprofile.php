<?php

namespace App;
use App\Music;

use Illuminate\Database\Eloquent\Model;

class Musicprofile extends Model
{
      public function music()
    {
        return $this->belongsTo(Music::class);
    }
}
