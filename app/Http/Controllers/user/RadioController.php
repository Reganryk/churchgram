<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RadioController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
}
