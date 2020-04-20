<?php

namespace App\Http\Controllers\church;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Redirect;
use Auth;
use App\Post;

class AccountController extends Controller
{
     //
     public function __construct()
    {
        $this->middleware('auth:church');
    }

        public function churchaccount(Request $request)
    {
        $churchprofile = Auth::user()->churchprofile;
        $churchposts = Auth::user()->post()->orderBy('created_at','desc')->get();
        return view('church.account.profile', compact(['churchprofile','churchposts']));
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
        $path = $request->file('propic')->storeAs('public/church/profilepics', $fileNameToStore);

        $churchprofile = Auth::user()->churchprofile;
        if ($churchprofile) {
            if (is_null($churchprofile->propic)) {
                $avatar = Auth::user()->churchprofile()->find( $churchprofile->id);
                $avatar->propic = $fileNameToStore;
            } else {

                $avatar = $churchprofile->avatar;
                $should_delete = $churchprofile->propic_url;
            }
            $avatar->propic_url = $path;
            $avatar->propic_ext = $mfileExt;
            $avatar->propic_size = $request->file('propic')->getClientSize();
            $avatar->save();
            if ($should_delete) {

                Storage::delete([ $path . $should_delete]);
            }
        }

        return redirect()->route('churchprofile',[ 'uname'=> str_slug(Auth::user()->uname) ]);
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
        $path = $request->file('banner')->storeAs('public/church/banners', $fileNameToStore);

        $churchprofile = Auth::user()->churchprofile;


        if ($churchprofile) {
            if (is_null($churchprofile->banner)) {
                $avatar = Auth::user()->churchprofile()->find( $churchprofile->id);
                $avatar->banner = $fileNameToStore;
            } else {

                $avatar = $churchprofile->banner;
                $should_delete = $churchprofile->banner_url;
            }
            $avatar->banner_url = $path;
            $avatar->banner_ext = $mfileExt;
            $avatar->banner_size = $request->file('banner')->getClientSize();
            $avatar->save();
            if ($should_delete) {

                Storage::delete([ $path . $should_delete]);
            }
        }

        return redirect()->route('churchprofile',[ 'uname'=> str_slug(Auth::user()->uname) ]);
    }


}
