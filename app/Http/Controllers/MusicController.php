<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Userprofile;
use App\Musicprofile;
use App\Post;
use App\Postimage;
use DB;
class MusicController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:music');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    Auth::guard('music')->check();
    if( Auth::guard('music')->user()->musicprofile()->exists()){
        } else{
        $user_id = Auth::user()->id;
        $banner = 'def.jpg';
        $propic = 'def.jpg';
        $musicprofile = new Musicprofile;
        $musicprofile->propic = $propic;
        $musicprofile->propic = $banner;
        $musicprofile->music_id = $user_id;
        $musicprofile->save();
        }

    if(Auth::guard('music')->user()->status == 'new'){
        $status = 'visible';
        $id= Auth::user()->id;
        $music = music::find($id);
        $music->status = $status;
        $music->save();
        }
        return view('music.music');
    }


}
