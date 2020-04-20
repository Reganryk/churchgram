<?php

namespace App\Http\Controllers\church;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Redirect;
use Auth;
use App\Tithetype;
use App\Tithe;



class AlmController extends Controller
{
    //
      public function __construct()
    {
        $this->middleware('auth:church');
    }


      public function tithe(Request $request)
    {
         $tithetypes = Tithetype::all();
         $tithes = Tithe::all();
        return view('church.alm.tithe', compact(['tithetypes','tithes']));
    }

    public function createtithetype(Request $request)
    {
    	$validator=Validator::make($request->all(),[
            'title' => 'required',
            'about' => 'required',
        ]);

	    if($validator->fails()){
	    return back()->withErrors($validator)->withInput()->with('success',' Please Select the right Values to continue');
	     }

	     $church_id = Auth::user()->id;
	    Tithetype::create([
        	'title' => $request->title,
        	'about' => $request->about,
        	'church_id' => $church_id,
        ]);
        return redirect()->back()->with('success', 'Tithe Type Created Successfully');

    }


}
