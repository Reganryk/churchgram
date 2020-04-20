<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Accounttype;
class Account extends Model
{
    protected $fillable = ['user_id', 'accounttype_id', 'name','number'];

        public function accounttype()
    {
        return $this->belongsTo(Accounttype::class);
    }

        public function user()
    {
        return $this->belongsTo(User::class);
    }
}
