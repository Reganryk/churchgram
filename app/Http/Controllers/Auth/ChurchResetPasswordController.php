<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Password;
use Auth;
class ChurchResetPasswordController extends Controller
{
        use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/church';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:church');
    }

    protected function guard()
    {
      return Auth::guard('church');
    }

    protected function broker()
    {
      return Password::broker('churches');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset_church')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
