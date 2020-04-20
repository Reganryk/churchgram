<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Redirect;
use Auth;

use App\Post;
use App\Church;
use App\Churchprofile;
class ChurchController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:church');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


     Auth::check();
    if( Auth::user()->churchprofile()->exists()){
        } else{
        $user_id = Auth::user()->id;
        $banner = 'def.jpg';
        $propic = 'def.jpg';
        $churchprofile = new Churchprofile;
        $churchprofile->propic = $propic;
        $churchprofile->propic = $banner;
        $churchprofile->church_id = $user_id;
        $churchprofile->save();
        }

    if(Auth::user()->status == 'new'){
        $status = 'visible';
        $id= Auth::user()->id;
        $church = Church::find($id);
        $church->status = $status;
        $church->save();
        }
        return view('church.church');
    }


}
