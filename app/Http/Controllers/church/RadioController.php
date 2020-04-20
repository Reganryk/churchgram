<?php

namespace App\Http\Controllers\church;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Redirect;
use Auth;

class RadioController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth:church');
    }


        public function churchradio(Request $request)
    {

        return view('church.radio.radio');
    }
}
