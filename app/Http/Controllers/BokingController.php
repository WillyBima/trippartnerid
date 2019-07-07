<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Order;
use App\Bus;
use App\Fasilitas;
use App\FasilitasBus;

class BokingController extends Controller
{
    public function boking()
    {
      return view('frontend.booking.booking-online');
    }

    public function bookingnow($slug)
    {
      $databus = DB::table('bus')
               ->select('*')
               ->where('slug', '=', $slug)
               ->get();

      $datafasilitas = DB::table('fasilitas')
                     ->select('*')
                     ->get();


      $datafasilitasbus = DB::table('fasilitas_bus')
                        ->join('fasilitas', 'fasilitas_bus.id_fasilitas', '=', 'fasilitas.id_fasilitas')
                        ->join('bus', 'fasilitas_bus.id_bus', '=', 'bus.id_bus')
                        ->where('bus.slug',$slug)
                        ->select('fasilitas.nama_fasilitas', 'fasilitas.icon')
                        ->get();

      return view('frontend.booking.booking-now', ['databus'=>$databus, 'datafasilitas'=>$datafasilitas, 'datafasilitasbus'=>$datafasilitasbus]);
    }

    public function submitBoking(Request $request)
    {
      // $rules = [
      //   'nama'           => 'required',
      //   'email'          => 'required',
      //   'no_hp'          => 'required',
      //   'nama_bus'       => 'required',
      //   'harga'          => 'required',
      //   'alamat_jemput'  => 'required',
      //   'alamat_tujuan'  => 'required',
      //   'tanggal_pergi'  => 'required',
      //   'tanggal_pulang' => 'required',
      // ];
      //
      // $message = [
      //   'required' => 'Data tidak boleh dikosongkan',
      // ];
      //
      // $this->validate($request,$rules,$message);

      $order = new Order();
      $order->nama = $request['nama'];
      $order->email = $request['email'];
      $order->no_hp = $request['no_hp'];
      $order->nama_bus = $request['nama_bus'];
      $order->harga = $request['harga'];
      $order->alamat_jemput = $request['alamat_jemput'];
      $order->alamat_tujuan = $request['alamat_tujuan'];
      $order->tanggal_pergi = $request['tanggal_pergi'];
      $order->tanggal_pulang = $request['tanggal_pulang'];
      $order->status = 'Belum Diproses';

      $order->save();
      return redirect('/');
    }
}
