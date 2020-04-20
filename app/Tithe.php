<?php

namespace App;
use App\Tithetype;

use Illuminate\Database\Eloquent\Model;

class Tithe extends Model
{

	  protected $fillable = [
        'user_id', 'tithetype_id', 'amount', 'paymethod_id'];
           public function tithetype()
    {
        return $this->belongsTo(Tithetype::class);
    }
}
