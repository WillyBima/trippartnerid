<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function daftar()
    {
      return view('frontend.register.daftar');
    }

    public function login()
    {
      return view('frontend.register.login');
    }
}
