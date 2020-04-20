<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Password;
use Auth;

class MusicResetPasswordController extends Controller
{
       use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/music';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:music');
    }

    protected function guard()
    {
      return Auth::guard('music');
    }

    protected function broker()
    {
      return Password::broker('musics');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset_music')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
