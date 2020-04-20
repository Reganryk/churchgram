<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tithetype;
use App\Accounttype;

class AlmsController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }


    public function useralmsettings(Request $request)
    {
    	$accounttypes  = Accounttype::all();
    	return view('front.alms.almsettings', compact(['accounttypes']));
    }

     public function useralms(Request $request)
    {

    	return view('front.alms.myalms');
    }

     public function userquickalms(Request $request)
    {

    	return view('front.alms.quickalms');
    }

     public function useralmpayments(Request $request)
    {

    	return view('front.alms.almpayments');
    }

     public function useralmpaymentdetails(Request $request)
    {

    	return view('front.alms.almpaymentdetails');
    }
}
