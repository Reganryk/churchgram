<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Usertwin extends Model

{

        public function userauth()
    {
        return $this->belongsTo(User::class, 'user_auth');
    }

         public function usertwin()
    {
        return $this->belongsTo(User::class, 'user_twin');
    }

      public static function getUsertwinID($user_twin){
    $getUsertwinID = Usertwin::select('id')->where('user_twin',$user_twin)->first();
        return $getUsertwinID->id;
    }
}
