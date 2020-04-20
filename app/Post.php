<?php

namespace App;
use App\User;
use App\Postcomment;
use App\Postimage;
use App\Postlike;
use App\Postdislike;
use App\Church;
use App\Music;
use App\Spamreport;
use App\Group;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	  protected $fillable = ['user_id','music_id','group_id', 'church_id', 'visible_to', 'body', ];

        public function user()
    {
        return $this->belongsTo(User::class);
    }

          public function postlike()
    {
        return $this->hasMany(Postlike::class);
    }

        public function church()
    {
        return $this->belongsTo(Church::class);
    }

            public function music()
    {
        return $this->belongsTo(Music::class);
    }

     public function group()
    {
        return $this->belongsTo(Group::class);
    }


        public function postimage()
    {
        return $this->hasMany(Postimage::class);
    }

        public function postcomment()
    {
        return $this->hasMany(Postcomment::class);
    }





          public function spamreport()
    {
        return $this->hasMany(Spamreport::class);
    }

     public function delete(){
    $this->loadMissing('post');
    if(count($this->post) >0){
        foreach ($this->post as $post ) {
          $post->delete();
        }
     }
    return parent::delete();
        }

       public static function getPostId($id){
    $getPostId = Post::select('id')->where('id',$id)->first();
        return $getPostId->id;
    }
}
