<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Order;
use App\Bus;
use App\Fasilitas;
use App\FasilitasBus;
use App\Harga;

class BokingController extends Controller
{
    public function boking()
    {
      $rute = DB::table('kota')->select('*')->get();

      return view('frontend.booking.booking-online', ['rute'=>$rute]);
    }

    public function newbooking()
    {
      $rute = DB::table('kota')->select('*')->get();

      return view('frontend.booking.newbooking', ['rute'=>$rute]);
    }

    public function bookingnow($slug, $rutenya)
    {

      // dd($rutenya);
      $rute = DB::table('rute')->select('*')->get();
      // dd($slug);
      $databus = DB::table('bus')
               ->select('*')
               ->where('slug', '=', $slug)
               ->get();

      $datafasilitas = DB::table('fasilitas')
                     ->select('*')
                     ->get();


      $datafasilitasbus = DB::table('fasilitas_bus')
                        ->join('fasilitas', 'fasilitas_bus.id_fasilitas', '=', 'fasilitas.id_fasilitas')
                        ->join('bus', 'fasilitas_bus.id_bus', '=', 'bus.id')
                        ->where('bus.slug',$slug)
                        ->select('fasilitas.nama_fasilitas', 'fasilitas.icon')
                        ->get();

      $harga = DB::table('harga')
             ->join('bus','bus.id','harga.nama_bus')
             ->join('rute','rute.id','harga.rute_bus')
             ->select('*')
             ->where([['bus.slug',$slug], ['rute.id', $rutenya]])
             ->get();
             // dd($harga);

      return view('frontend.booking.booking-now', ['rute'=>$rute,'databus'=>$databus, 'datafasilitas'=>$datafasilitas, 'datafasilitasbus'=>$datafasilitasbus, 'harga'=>$harga]);
    }

    public function submitBoking(Request $request)
    {
      $rules = [
        'nama'           => 'required',
        'email'          => 'required',
        'no_hp'          => 'required',
        'nama_bus'       => 'required',
        'harga'          => 'required',
        'alamat_jemput'  => 'required',
        'alamat_tujuan'  => 'required',
        'tanggal_pergi'  => 'required',
        'tanggal_pulang' => 'required',
      ];

      $message = [
        'required' => 'Data tidak boleh dikosongkan',
      ];

      $this->validate($request,$rules,$message);

      // $pergi = date(strtotime($request['tanggal_pergi']));
      // $perginya = date_create_from_format('MM/dd/YYYY', $pergi);
      // $pulang = date(strtotime($request['tanggal_pulang']));
      // $pulangnya = date_create_from_format('MM/DD/YYYY', $request['tanggal_pulang']);
      // $jml_hari = ($pulang-$pergi)/86400+1;

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
      // dd(date_create_from_format('MM/dd/YYYY',$order->tanggal_pergi), $order->tanggal_pulang);
      $order->status = 'Belum Diproses';

      // $dataorder = [
      //   'nama'            => $request['nama'],
      //   'email'           => $request['email'],
      //   'no_hp'           => $request['no_hp'],
      //   'nama_bus'        => $request['nama_bus'],
      //   'harga'           => $request['harga']*$jml_hari,
      //   'alamat_jemput'   => $request['alamat_jemput'],
      //   'alamat_tujuan'   => $request['alamat_tujuan'],
      //   'tanggal_pergi'   => $request['tanggal_pergi'],
      //   'tanggal_pulang'  => $request['tanggal_pulang'],
      // ];
      // dd($dataorder);

      $order->save();
      // $this->checkout($dataorder);
      return redirect('/dashboardUser/myOrder');
    }

    public function checkout(Request $request)
    {
      $pergi = date(strtotime($request['tanggal_pergi']));
      $perginya = date('Y-m-d',strtotime($request['tanggal_pergi']));
      $pulang = date(strtotime($request['tanggal_pulang']));
      $pulangnya = date('Y-m-d',strtotime($request['tanggal_pulang']));

      $jml_hari = ($pulang-$pergi)/86400+1;

      $dataorder = [
        'nama'            => Auth::guard('users')->user()->nama_lengkap,
        'email'           => Auth::guard('users')->user()->email,
        'no_hp'           => $request['no_hp'],
        'nama_bus'        => $request['nama_bus'],
        'harga'           => $request['harga'] * $jml_hari,
        'alamat_jemput'   => $request['alamat_jemput'],
        'alamat_tujuan'   => $request['alamat_tujuan'],
        'tanggal_pergi'   => $perginya,
        'tanggal_pulang'  => $pulangnya,
      ];

      return view('frontend.booking.checkout',['dataorder'=> $dataorder]);
    }
}
