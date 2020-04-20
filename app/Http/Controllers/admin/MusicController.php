<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Redirect;
use Auth;

use App\Musicreg;
use App\Music;
class MusicController extends Controller
{
    	   public function musicregrequests(){

		$musicregs = Musicreg::where('status', 'new')->get();
		return view('admin.music.musicregs', compact('musicregs'));
		}

		public function musicregdetails(Request $request, $id){

		$musicreg = Musicreg::find($id);

		return view('admin.music.musicregdetails', compact('musicreg'));
		}

		public function musicregapprove(Request $request, $id){
        if(Auth::check()){
        	$musicreg = Musicreg::find($id);
            $approve = 'approve';
            if($musicreg->status == 'approve')
            {
            return Redirect()->back()->with('success','music Register already Approved');
            }
            else
            {
            $musicreg->status = $approve;
	        $musicreg->save();

			 Music::create([
			 	    'user_id' => $musicreg->user_id,
			 		'church_id' => $musicreg->church_id,
		            'name' => $musicreg->name,
		            'phone' => $musicreg->phone,
		            'email' => $musicreg->email,
		            'password' => $musicreg->password,
		        	'uname' => $musicreg->uname,
		            'city' => $musicreg->city,
		            'country' => $musicreg->country,
		            'recording_studio' => $musicreg->recording_studio,
        	]);

            return Redirect()->back()->with('success','music Register and Created');

            }

        }
		return Redirect()->route('admin.logout');
		}

}
