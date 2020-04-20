<?php

namespace App;
use App\Account;

use Illuminate\Database\Eloquent\Model;

class Accounttype extends Model
{
    protected $fillable = ['title', 'about'];

           public function tithe()
    {
        return $this->hasMany(Account::class);
    }

}
