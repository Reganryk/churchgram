<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Auth;
use Redirect;


Use App\Music;
use App\Musicreg;
use App\Album;
use App\Userplaylist;
use App\Albumtrack;

class MusicController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function allmusic()
    {

       $allalbums = Album::all();
        return view('front.music.allmusic', compact('allalbums'));
    }

          public function musicprofile(Request $request, $uname)
    {
    	  $music = Music::find($uname);
        return view('front.music.musicprofile', compact(['music']));
    }


        public function albumtracks(Request $request, $id)
    {
         $album= Album::find($id);
         $morefrom = Album::all();
        return view('front.music.albumtracks', compact(['album','morefrom']));
    }


    public function myplaylist(Request $request, $id)
    {

        $albums = Album::where('id' , Auth::user()->userplaylist->album_id)->get();
        return view('front.music.myplaylist', compact(['userplaylists']));
    }



       public function addtrackstoplaylist(Request $request, $id)
    {
          $user_id = Auth::user()->id;
          $album = Album::find($id);
          $album_id = $album->id;
          $playlist = new Userplaylist;
          $playlist->user_id = $user_id;
          $playlist->album_id = $album_id;
          $playlist->save();

        return Redirect()->back();

  }


     ///user create music

    public function registermusic()
        {
            if(Auth::check()){
                if(Auth::user()->musicreg()->exists()){
                    return view('front.music.musicregstep2');
                }
              return view('front.music.musicregstep1');
            }
            return Redirect()->route('login');
        }

//for step 1
    public function usercreatemusic1(Request $request)
        {
         if(Auth::check()){
            $validator=Validator::make($request->all(),[
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
            if($validator->fails()){
            return back()->withErrors($validator)->withInput()->with('success','Something wrong with the Inputs your Inserting. Check again');}

            else{
                $user_id = Auth::user()->id;
                if(Auth::user()->musicreg()->exists()){
                     return Redirect()->route('usercreatemusic2')->with('success','Please Finish Up');
                 }else{
                $musicreg1 = musicreg::create([
                        'user_id'=> $user_id,
                        'name' => $request->name,
                        'phone' =>$request->phone,
                        'email' =>$request->email,
                        'password' =>Hash::make($request['password']),
                    ]);
                return Redirect()->route('usercreatemusic2')->with('success','Your about to Finish');
                 }

                }

        return Redirect()->route('login');
         }
    }

   public function usercreatemusic2(){
     $usermusicreg = Auth::user()->musicreg($id);
     return view('front.music.musicregstep2', compact('usermusicreg'));
   }

//for step 2
    public function usercreatemusic2create(Request $request, $id)
        {
         if(Auth::check()){
            $validator=Validator::make($request->all(),[
                // 'uname' => 'required|unique:musicregs',
                'city' => 'required',
                'country' => 'required',
                'recording_studio' => 'required',
            ]);
            if($validator->fails()){
            return back()->withErrors($validator)->withInput()->with('success','Something wrong with the Inputs your Inserting. Check again');}

            else{
                $musicreg2 = musicreg::find($id);
                $musicreg2->uname = $request->uname;
                $musicreg2->city = $request->city;
                $musicreg2->country = $request->country;
                $musicreg2->location = $request->location;
                $musicreg2->recording_studio = $request->recording_studio;
                $musicreg2->save();
            return view('front.music.musicregstep3', compact('musicreg2'))->with('success','Your Infomation has been Submitted');
            }
        return Redirect()->route('login');
        }
    }

}
