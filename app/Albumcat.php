<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Album;

class Albumcat extends Model
{
            public function album()
    {
        return $this->hasMany(Album::class);
    }
}
