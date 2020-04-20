<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Redirect;
use Auth;

use App\Churchreg;
use App\Church;


class ChurchController extends Controller
{
	   public function churchregrequests(){

		$churchregs = Churchreg::where('status', 'new')->get();
		return view('admin.church.churchregs', compact('churchregs'));
		}

		public function churchregdetails(Request $request, $id){

		$churchreg = Churchreg::find($id);

		return view('admin.church.churchregdetails', compact('churchreg'));
		}

		public function churchregapprove(Request $request, $id){
        if(Auth::check()){
        	$churchreg = Churchreg::find($id);
            $approve = 'approve';
            if($churchreg->status == 'approve')
            {
            return Redirect()->back()->with('success','Church Register already Approved');
            }
            else
            {
            $churchreg->status = $approve;
	        $churchreg->save();

			 Church::create([
		            'name' => $churchreg->name,
		            'phone' => $churchreg->phone,
		            'email' => $churchreg->email,
		            'password' => $churchreg->password,
		        	'uname' => $churchreg->uname,
		            'city' => $churchreg->city,
		            'country' => $churchreg->country,
		            'location' => $churchreg->location,
		            'headpastor' => $churchreg->headpastor,
        	]);

            return Redirect()->back()->with('success','Church Register and Created');

            }

        }
		return Redirect()->route('admin.logout');
		}

}
