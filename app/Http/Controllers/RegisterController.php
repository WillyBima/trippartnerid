<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Admin;

use Auth;
use Mail;

class RegisterController extends Controller
{
    public function daftar()
    {
      return view('frontend.register.daftar');
    }

    public function doRegister(Request $request)
    {
      $input = $request->all();

      $user = new User();

      $user->nama_lengkap = $request['nama_lengkap'];
      $user->email        = $request['email'];
      $user->password     = bcrypt($request['password']);
      $user->user_level   = 1;
      $user->activation_code = str_random(20) . $request['email'];

      $data = [
        'email' => $request['email'],
        'activation_code' => $user->activation_code,
      ];
      // dd($user->nama_lengkap,$user->email,$user->activation_code, $data);
      // dd($data, $input);
      $user->save();
      $this->sendEmail($data,$input);

      return redirect('/login');
    }

    public function sendEmail($data, $input)
    {
      // dd($data,$input);
      Mail::send('frontend.email.viewemail', $data, function($message) use ($input)
      {
        $message->subject('Konfirmasi Akun Email TripParner');
        $message->from('admin@trippartner.id', 'TripPartner Indonesia');
        $message->to($input['email']);
      });
    }

    public function activate($code, User $user)
    {
      if ($user->activateAccount($code)) {
        return'Activated!';
      }
      return 'Fail';
    }

    public function login()
    {
      return view('frontend.register.login');
    }

    public function loginpost(Request $request){

      $auth = Auth::guard('users')->attempt([
        'email'   => $request->input('email'),
        'password'=> $request->input('password')
      ], true);

      if($auth)
      {
        return redirect('/dashboardUser');
      }
      else{
        return redirect()->back();
      }
    }

    public function loginadmin(Request $request)
    {
      $auth = Auth::guard('admin')->attempt([
        'user_name'   => $request->input('user_name'),
        'password'    => $request->input('password')
      ], true);

      if($auth)
      {
        return redirect('/dashboardAdmin');
      }
      else{
        return redirect()->back();
      }
    }

    public function logout()
    {
      Auth::guard('users')->logout();
      return redirect('/login');
    }
}
