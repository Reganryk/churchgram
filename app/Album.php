<?php

namespace App;
use App\Albumtrack;
use App\Userplaylist;

use Illuminate\Database\Eloquent\Model;

use App\Albumcat;

class Album extends Model
{
    public function albumcat()
    {
        return $this->belongsTo(Albumcat::class);
    }

    public function music()
    {
        return $this->belongsTo(Music::class);
    }

    public function albumtrack()
    {
        return $this->hasMany(Albumtrack::class);
    }

public function userplaylist()
    {
        return $this->hasMany(Userplaylist::class);
    }

     public static function getAlbumID($id){
    $getAlbumID= Userplaylist::select('id')->where('id', $id)->first();
       return $getAlbumID->id;
    }

        public function delete(){
    	$this->loadMissing('album');
    	if(count($this->album) >0){
    		foreach ($this->album as $album ) {
    		  $album->delete();
    		}
         }
    	return parent::delete();
    }
}
