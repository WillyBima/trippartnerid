<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class DashboardUser extends Controller
{
    public function dashuser()
    {
      //panggil si id orang login
      $email = Auth::guard('users')->user()->email;
      $order = DB::table('order')->select('*')->where('email',$email)->get();

      return view('frontend.dashboard.dashboard',['order'=>$order]);
    }

    public function myOrder()
    {
      //panggil si id orang login
      $email = Auth::guard('users')->user()->email;
      $order = DB::table('order')->select('*')->where([['email',$email],['status','!=','Selesai']])->get();

      return view('frontend.dashboard.myOrder',['order'=>$order]);
    }

    public function history()
    {
      $email = Auth::guard('users')->user()->email;
      $order = DB::table('order')->select('*')->where([['email',$email],['status','=','Selesai']])->get();
      return view('frontend.dashboard.history',['order'=>$order]);
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

    public function ubahakun($id)
    {
      $user = User::find($id);

      $user->nama_lengkap = $request['nama_lengkap'];
      $user->email        = $request['email'];
      $user->password     = $request['password'];
      $user->save();
      return redirect('/dashboardUser');
    }
}
