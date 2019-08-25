<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\User;
use Auth;

class DashboarduserController extends Controller
{
  public function dashuser()
  {
    //panggil si id orang login
    $email = Auth::guard('users')->user()->email;
    $order = DB::table('order')->select('*')->where('email',$email)->orderBy('created_at','DESC')->limit(1)->get();

    return view('frontend.dashboard.dashboard',['order'=>$order]);
  }

  public function myOrder()
  {
    //panggil si id orang login
    $email = Auth::guard('users')->user()->email;
    $order = DB::table('order')->select('*')->where([['email',$email],['status','!=','Selesai']])->orderBy('created_at','DESC')->get();

    return view('frontend.dashboard.myOrder',['order'=>$order]);
  }

  public function history()
  {
    $email = Auth::guard('users')->user()->email;
    $order = DB::table('order')->select('*')->where([['email',$email],['status','=','Selesai']])->get();
    return view('frontend.dashboard.history',['order'=>$order]);
  }

  public function accountInfo()
  {
    $email = Auth::guard('users')->user()->email;
    $ubah  = DB::table('users')->select('*')->where([['email',$email]])->get();
    // dd($ubah);
    return view('frontend.dashboard.accountInfo',['ubah'=>$ubah]);
  }

  public function ubahakun(Request $request, $email)
  {
    $email = Auth::guard('users')->user()->email;
    $user = DB::table('users')->select('*')->where('email',$email)->first();
    // dd($user);
    // $user->nama_lengkap = $request['nama_lengkap'];
    // $user->password     = $request['password'];
    // // dd($user->nama_lengkap, $user->password);
    // $user->save();
    $user = User::where('email', $email)
          ->update([
             'nama_lengkap'=> request()->nama_lengkap,
             'password'=> bcrypt($request['password']),
          ]);
    // dd($user);
    return redirect('/dashboardUser');
  }
}
