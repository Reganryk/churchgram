<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Auth;
use App\Church;
use App\Churchreg;
use Location;

class ChurchController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function allchurches()
    {
        return view('front.church.allchurches');
    }


      public function mychurches(){

        $churches = Church::all();
        return view('front.church.mychurches', compact(['churches']));
    }

          public function churchprofile(Request $request, $uname)
    {
    	$church = Church::find($uname);
        return view('front.church.churchprofile', compact(['church']));
    }


     ///user create church

    public function registerchurch()
        {
            if(Auth::check()){
                if(Auth::user()->churchreg()->exists()){
                    return view('front.church.churchregstep2');
                }
              return view('front.church.churchregstep1');
            }
            return Redirect()->route('login');
        }

//for step 1
    public function usercreatechurch1(Request $request)
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
                if(Auth::user()->churchreg()->exists()){
                     return view('front.church.churchregstep2')->with('success','Please Finish Up');
                 }else{
                $churchreg1 = Churchreg::create([
                        'user_id'=> $user_id,
                        'name' => $request->name,
                        'phone' =>$request->phone,
                        'email' =>$request->email,
                        'password' =>Hash::make($request['password']),
                    ]);
                return Redirect()->route('usercreatechurch2')->with('success','Your about to Finish');
                 }

                }

        return Redirect()->route('login');
         }
    }

   public function usercreatechurch2(){
     $userchurchreg = Auth::user()->churchreg($id);
     return view('front.church.churchregstep2', compact('userchurchreg'));
   }

//for step 2
    public function usercreatechurch2create(Request $request, $id)
        {
         if(Auth::check()){
            $validator=Validator::make($request->all(),[
                // 'uname' => 'required|unique:churchregs',
                'city' => 'required',
                'country' => 'required',
                'headpastor' => 'required',
            ]);
            if($validator->fails()){
            return back()->withErrors($validator)->withInput()->with('success','Something wrong with the Inputs your Inserting. Check again');}

            else{
                $ip= \Request::ip();
                $data = \Location::get($ip);
                 dd($data);
                $churchreg2 = Churchreg::find($id);
                $churchreg2->uname = $request->uname;
                $churchreg2->city = $request->city;
                $churchreg2->country = $request->country;
                $churchreg2->location =  $position;
                $churchreg2->headpastor = $request->headpastor;
                $churchreg2->save();
            return view('front.church.churchregstep3', compact('churchreg2'))->with('success','Your Infomation has been Submitted');
            }
        return Redirect()->route('login');
        }
    }


}


