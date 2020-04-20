<?php

namespace App\Http\Controllers\church;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Redirect;
use Auth;

class MsgController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth:church');
    }


        public function churchmsgs(Request $request)
    {

        return view('church.msg.msgs', compact([]));
    }
}
