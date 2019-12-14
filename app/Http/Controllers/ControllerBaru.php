<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use App\Bus;
use App\Po;
use App\Comment;
use App\Kota;
use App\Rute;
use App\User;
use App\Order;
use Auth;

class ControllerBaru extends Controller
{
  public function newberanda()
  {
    return view('newfrontend.beranda');
  }

  public function newabout()
  {
    return view('newfrontend.about');
  }

  public function galeri()
  {
    $bus = DB::table('bus')->select('*')->get();
    // dd($bus);
    return view('newfrontend.galeri',['bus'=>$bus]);
  }

  public function kontak()
  {
    return view('newfrontend.kontak');
  }

  public function submitpesan(Request $request)
  {
    $comment = new Comment();
    $comment->nama = $request['nama'];
    $comment->email = $request['email'];
    $comment->subject = $request['subject'];
    $comment->keterangan = $request['keterangan'];

    $comment->save();
    return redirect('/kontak-kami');
  }

  public function booking()
  {
    $rute = DB::table('kota')->select('*')->get();

    return view('newfrontend.book.booking', ['rute'=>$rute]);
  }

  public function submitpesanan(Request $request)
  {
    $order = new Order();
    $order->nama           = Auth::guard('users')->user()->nama_lengkap;
    $order->email          = Auth::guard('users')->user()->email;
    $order->no_hp          = $request['no_hp'];
    $order->nama_bus       = $request['nama_bus'];
    $order->harga          = $request['harga'];
    $order->alamat_jemput  = $request['alamat_jemput'];
    $order->alamat_tujuan  = $request['alamat_tujuan'];
    $order->tanggal_pergi  = $request['tanggal_pergi'];
    $order->tanggal_pulang = $request['tanggal_pulang'];
    $order->status         = 'Belum Diproses';

    $order->save();
    return redirect('/dashboard-user/pesanan-saya');
  }

  public function hasil()
  {
    return view('newfrontend.book.hasil');
  }


  public function dashboarduser()
  {
    $email = Auth::guard('users')->user()->email;
    $order = DB::table('order')->select('*')->where('email',$email)->orderBy('created_at','DESC')->limit(1)->get();
    // dd($order);
    return view('newfrontend.newdashboard.dashboarduser', ['order'=>$order]);
  }

  public function pesanansaya()
  {
    $email = Auth::guard('users')->user()->email;
    $order = DB::table('order')->select('*')->where([['email',$email],['status','!=','Selesai']])->orderBy('created_at','DESC')->get();

    return view('newfrontend.newdashboard.pesanan',['order'=>$order]);
  }

  public function riwayatpesanan()
  {
    $email = Auth::guard('users')->user()->email;
    $order = DB::table('order')->select('*')->where([['email',$email],['status','=','Selesai']])->get();

    return view('newfrontend.newdashboard.riwayatpesanan',['order'=>$order]);
  }

  public function infoakun()
  {
    $email = Auth::guard('users')->user()->email;
    $ubah  = DB::table('users')->select('*')->where([['email',$email]])->get();
    // dd($ubah);

    return view('newfrontend.newdashboard.infoakun',['ubah'=>$ubah]);
  }

}
