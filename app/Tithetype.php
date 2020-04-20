<?php

namespace App;
use App\Tithe;

use Illuminate\Database\Eloquent\Model;

class Tithetype extends Model
{
   protected $fillable = [
        'title', 'about'];

           public function tithe()
    {
        return $this->hasMany(Tithe::class);
    }
}
