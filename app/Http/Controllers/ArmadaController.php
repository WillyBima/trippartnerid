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
}
