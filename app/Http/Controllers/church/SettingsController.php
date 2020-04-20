<?php

namespace App\Http\Controllers\church;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Redirect;
use Auth;

class SettingsController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth:church');
    }

          public function accountset(Request $request)
    {

        return view('church.settings.accountset', compact([]));
    }

           public function almset(Request $request)
    {

        return view('church.settings.almset', compact([]));
    }

           public function eventset(Request $request)
    {

        return view('church.settings.eventset', compact([]));
    }

           public function groupset(Request $request)
    {

        return view('church.settings.groupset', compact([]));
    }

           public function radioset(Request $request)
    {

        return view('church.settings.radioset', compact([]));
    }

           public function tvset(Request $request)
    {

        return view('church.settings.tvset', compact([]));
    }

           public function generalset(Request $request)
    {

        return view('church.settings.generalset', compact([]));
    }




}
