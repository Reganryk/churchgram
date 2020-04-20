<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Password;

class ChurchForgotPasswordController extends Controller
{
        use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:church');
    }

    protected function broker()
    {
      return Password::broker('churches');
    }

    public function showLinkRequestForm()
    {
        return view('auth.passwords.email_church');
    }
}
