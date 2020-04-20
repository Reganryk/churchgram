<?php

namespace App;
use App\User;
use App\Card;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
          public function user()
    {
        return $this->belongsTo(User::class);
    }

      public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
