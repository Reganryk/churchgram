<?php

namespace App;
namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Auth;
use App\Userprofile;
use App\Card;
use App\User;
use App\Usertwin;

class ProfileController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }



//===================================================================================================================
//Autheticated user Profile
      public function profile(Request $request)
    {
    	if( Auth::user()->userprofile()->exists()){
    	} else{
    		$user_id = Auth::user()->id;
    	$userprofile = new Userprofile;
        $userprofile->user_id = $user_id;
        $userprofile->save();
    	}

    	// if(is_null(Auth::user()->Userprofile->propic)){
     //      return view('front.user.propic')->with('profile', 'Add your Profile Picture to View your Profile');
    	// }

     //    if(is_null(Auth::user()->Userprofile->banner)){
     //      return view('front.user.bannerpic')->with('profile', 'Add your Profile Picture to View your Profile');
     //    }

        return redirect()->route('userfinishedprofile',[ 'uname'=> str_slug(Auth::user()->uname) ]);
    }

        public function userfinishedprofile(Request $request)
    {

        $userprofile = Auth::user()->userprofile;
        $usercards = Auth::user()->card()->get();
        $userposts = Auth::user()->post()->orderBy('created_at','desc')->get();
        return view('front.user.authprofile.profile', compact(['userprofile','usercards','userposts']));
    }


     public function uploadpropic(Request $request)
    {
        $should_delete = false;
        $this->validate($request, [
            'propic' => 'required|image'
        ]);
        //  return 'it works';
        $mfileNameText = $request->file('propic');
        $mfileName = \pathinfo($mfileNameText, \PATHINFO_FILENAME);
        $mfileExt = $request->file('propic')->getClientOriginalExtension();
        $input['imagename'] = time() . '.'. $mfileNameText->getClientOriginalExtension();
        $fileNameToStore = $input['imagename'];
        $path = $request->file('propic')->storeAs('public/users/profilepics', $fileNameToStore);

        $userprofile = Auth::user()->userprofile;
        if ($userprofile) {
            if (($userprofile->propic)) {
                $avatar = Auth::user()->userprofile()->find( $userprofile->id);
                $avatar->propic = $fileNameToStore;
            } else {

                $avatar = $userprofile->avatar;
                $should_delete = $userprofile->propic_url;
            }
            $avatar->propic_url = $path;
            $avatar->propic_ext = $mfileExt;
            $avatar->propic_size = $request->file('propic')->getClientSize();
            $avatar->save();

            if ($should_delete) {

                Storage::delete([ $path . $should_delete]);
            }
        }

        return redirect()->route('userprofile',[ 'uname'=> str_slug(Auth::user()->uname) ]);
    }

         public function uploadbanner(Request $request)
    {
        $should_delete = false;
        $this->validate($request, [
            'banner' => 'required|image'
        ]);


        //  return 'it works';
        $mfileNameText = $request->file('banner');
        $mfileName = \pathinfo($mfileNameText, \PATHINFO_FILENAME);
        $mfileExt = $request->file('banner')->getClientOriginalExtension();
        $input['imagename'] = time() . '.'. $mfileNameText->getClientOriginalExtension();
        $fileNameToStore = $input['imagename'];
        $path = $request->file('banner')->storeAs('public/users/banners', $fileNameToStore);

        $userprofile = Auth::user()->userprofile;


        if ($userprofile) {
            if (($userprofile->banner)) {
                $avatar = Auth::user()->userprofile()->find( $userprofile->id);
                $avatar->banner = $fileNameToStore;
            } else {

                $avatar = $userprofile->banner;
                $should_delete = $userprofile->banner_url;
            }
            $avatar->banner_url = $path;
            $avatar->banner_ext = $mfileExt;
            $avatar->banner_size = $request->file('banner')->getClientSize();
            $avatar->save();
            if ($should_delete) {

                Storage::delete([ $path . $should_delete]);
            }
        }

        return redirect()->route('userprofile',[ 'uname'=> str_slug(Auth::user()->uname) ]);
    }

      public function gallery()
    {
        return view('front.user.authprofile.gallery');
    }



  public function friends()
    {
        return view('front.user.authprofile.friends');
    }



  public function history()
    {
        return view('front.user.authprofile.history');
    }





//===================================================================================================================
//public profile code

      public function userprofileview(Request $request, $id)
    {
        $userprofile = User::find($id);
        return view('front.user.publicprofile.userprofile', compact(['userprofile']));
    }





//=======================================================================================================
//twining user by other users
    public function usertwinuser($uname){
        $usercount = User::where('uname', $uname)->count();
        if ($usercount>0) {
            $user_id = Auth::user()->id;
            $twin_id = User::getUserID($uname);
            $twin = New Usertwin;
            $twin->user_auth = $user_id;
            $twin->user_twin = $twin_id;
            $twin->save();
            return redirect()->back();
        }else{
            abort(404);

        }
    }

    //untwining user by other users
    public function useruntwinuser( $user_twin){
            $twin = Usertwin::where('user_auth' == Auth::user()->id)->where('user_twin' == $user_twin);
            $twin->delete();
            return redirect()->back();

    }

//User Cards
      public function storecard(Request $request)
    {
        $user_id = Auth::user()->id;
        $card = new Card;
        if($request->hasFile('bckimage')){
        $mfileNameText = $request->file('bckimage');
        $mfileName = \pathinfo($mfileNameText, \PATHINFO_FILENAME);
        $mfileExt = $request->file('bckimage')->getClientOriginalExtension();
        $input['imagename'] = time() . '.'. $mfileNameText->getClientOriginalExtension();
        $fileNameToStore = $input['imagename'];
        $path = $request->file('bckimage')->storeAs('public/users/cards', $fileNameToStore);
        $card->bckimage = $fileNameToStore;
        }
        $card->cat= $request->cat;
        $card->body = $request->body;
        $card->colored = $request->colored;
        $card->tag = $request->tag;
        $card->user_id = $user_id;
        $card->save();
        return redirect()->back()->with('success', 'Card Create Successfully');
    }


}
