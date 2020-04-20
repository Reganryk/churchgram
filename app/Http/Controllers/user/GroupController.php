<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Auth;
use Redirect;

use App\Group;

class GroupController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }


    public function allgroups(){

 		$groups = Group::all();
    	return view('front.group.groups', compact(['groups']));
    }
  public function joinedgroups(){

    	$groups = Group::all();
    	return view('front.group.mygroups', compact(['groups']));
    }

      public function groupmember(Request $request,$id){

        $groupmember = Group::find($id);
    	return view('front.group.groupmember', compact([' groupmember']));
    }

      public function groupadmin(Request $request,$id){

         $groupadmin = Group::find($id);
        return view('front.group.groupadmin', compact(['groupadmin']));
    }


  public function addgroup(Request $request){
     if(Auth::check()){

            $validator=Validator::make($request->all(),[
                'uname' => 'required',
                'about' => 'required',
            ]);
            if($validator->fails()){
            return back()->withErrors($validator)->withInput()->with('success','Something wrong with the Inputs your Inserting. Check again');}else{
                $banner = 'def.jpg';
                $propic = 'def.jpg';
                $group =  Group::create([
                'uname' => $request->uname,
                'about' => $request->about,
                'groupcat_id' => $request->groupcat_id,
                'user_id' =>Auth::user()->id,
                'banner' =>$banner,
                'propic' =>$propic,
                ]);

            }
            return redirect()->route('user.joinedgroups');
         }

    }
}
