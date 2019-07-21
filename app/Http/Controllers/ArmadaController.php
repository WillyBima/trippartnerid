<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Bus;
use App\Po;

class ArmadaController extends Controller
{
    public function armada()
    {
      $po = DB::table('po')->select('*')->get();
      return view('frontend.armada.armada',['po'=>$po]);
    }

    public function detailarmada($slug)
    {
      $datapo = DB::table('po')
               ->select('*')
               ->where('slug', '=', $slug)
               ->get();

      $big_bus = DB::table('bus')
               ->join('po', 'po.id', '=', 'bus.nama_po')
               ->select('bus.nama_bus', 'bus.slug', 'bus.gambar_bus')
               ->where([['po.slug',$slug],['jenis_bus', '=', 'Big Bus']])
               ->get();

      $medium_bus = DB::table('bus')
                  ->join('po', 'po.id', '=', 'bus.nama_po')
                  ->select('bus.nama_bus', 'bus.slug', 'bus.gambar_bus')
                  ->where([['po.slug',$slug],['jenis_bus', '=', 'Medium Bus']])
                  ->get();

       $small_bus = DB::table('bus')
                   ->join('po', 'po.id', '=', 'bus.nama_po')
                   ->select('bus.nama_bus', 'bus.slug', 'bus.gambar_bus')
                   ->where([['po.slug',$slug],['jenis_bus', '=', 'Small Bus']])
                   ->get();

      return view('frontend.armada.detail-armada', ['big_bus'=>$big_bus, 'medium_bus'=>$medium_bus, 'small_bus'=>$small_bus, 'datapo'=>$datapo]);
    }

    public function bookarmada($slug){
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
            ->where('bus.slug',$slug)
            ->get();
            // dd($harga);

      return view('frontend.booking.booking-bus', ['rute'=>$rute,'databus'=>$databus, 'datafasilitas'=>$datafasilitas, 'datafasilitasbus'=>$datafasilitasbus, 'harga'=>$harga]);
}
}
