<?php

namespace App\Http\Controllers\church;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Redirect;
use Auth;

class TvController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth:church');
    }


        public function churchtv(Request $request)
    {

        return view('church.tv.tv');
    }
}
