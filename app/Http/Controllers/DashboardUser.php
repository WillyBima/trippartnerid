<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardUser extends Controller
{
    public function dashuser()
    {
      return view('frontend.dashboard.dashboard');
    }

    public function myOrder()
    {
      return view('frontend.dashboard.myOrder');
    }

    public function history()
    {
      return view('frontend.dashboard.history');
    }

    public function address()
    {
      return view('frontend.dashboard.address');
    }

    public function newsletter()
    {
      return view('frontend.dashboard.newsletter');
    }

    public function accountInfo()
    {
      return view('frontend.dashboard.accountInfo');
    }
}
