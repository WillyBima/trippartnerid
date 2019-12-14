<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

use App\Bus;
use App\Fasilitas;
use App\FasilitasBus;
use App\Kota;
use App\Rute;
use App\Harga;
use Session;

use Auth;

class PerhitunganController extends Controller
{
  public function search(Request $request)
  {
    $rute = DB::table('kota')->select('*')->get();

    $pergi = date(strtotime($request['tanggal_pergi']));
    $perginya = date('Y-m-d',strtotime($request['tanggal_pergi']));
    $pulang = date(strtotime($request['tanggal_pulang']));
    $pulangnya = date('Y-m-d',strtotime($request['tanggal_pulang']));

    $jml_hari = ($pulang-$pergi)/86400+1;

    $data = $request->all();

    $tanggal_pergi  = $data['tanggal_pergi'];
    $tanggal_pulang = $data['tanggal_pulang'];
    $kota_asal      = $data['kota_asal'];
    $kota_tujuan    = $data['kota_tujuan'];
    $jenis_bus      = $data['jenis_bus'];

    // dd($tanggal_pergi,$tanggal_pulang,$kota_asal,$kota_tujuan,$jenis_bus);

    $hasil = DB::table('harga')
           ->join('bus','bus.id','harga.nama_bus')
           ->join('rute','rute.id','harga.rute_bus')
           ->select('*')
           ->where([['kota_asal',$kota_asal], ['kota_tujuan',$kota_tujuan],['jenis_bus',$jenis_bus]])
           ->get();
    // dd($hasil);

    $hasil_array = array();
    foreach($hasil as $hasil)
    {
        $id            = $hasil->id;
        $nama_bus      = $hasil->nama_bus;
        $harga         = $hasil->harga * $jml_hari;
        $jenis_bus     = $hasil->jenis_bus;
        $kota_asal     = $hasil->kota_asal;
        $kota_tujuan   = $hasil->kota_tujuan;
        $slug          = $hasil->slug;
        $tanggal_pergi  = $data['tanggal_pergi'];
        $tanggal_pulang = $data['tanggal_pulang'];

        $hasil = array('id'=>$id,'nama_bus'=>$nama_bus,'harga'=>$harga,'jenis'=>$jenis_bus,'kota_asal'=>$kota_asal,'kota_tujuan'=>$kota_tujuan,'slug'=>$slug, 'tanggal_pergi'=>$tanggal_pergi,'tanggal_pulang'=>$tanggal_pulang);
        array_push($hasil_array, $hasil);
    }
    // dd($hasil_array);
    $hasil_akhir = collect($hasil_array)->sortBy('harga')->toArray();
    // dd($hasil_akhir);

    return view('newfrontend.book.hasil', ['hasil'=>$hasil, 'hasil_array'=>$hasil_array, 'rute'=>$rute]);
  }

  public function detailarmada($slug)
  {

    $rute = DB::table('rute')
          ->select('*')
          ->get();

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

    // dd($datafasilitasbus);

    // dd($databus, $harga);
    return view('newfrontend.book.detailarmada', ['rute'=>$rute,'databus'=>$databus, 'datafasilitas'=>$datafasilitas, 'datafasilitasbus'=>$datafasilitasbus]);
  }

  public function hitung(Request $request)
  {
      $rute = DB::table('kota')->select('*')->get();
      $data = $request->all();

      $kota_asal = $data['kota_asal'];
      $kota_tujuan = $data['kota_tujuan'];
      $jenis_bus = $data['jenis_bus'];
      $harga = $data['harga'];
      $fasilitas = $data['fasilitas'];

      $perhitunganController = new PerhitunganController;
      $hasil_akhir = $perhitunganController->cariBus($kota_asal, $kota_tujuan, $jenis_bus, $harga, $fasilitas);

      // dd($hasil_akhir);

      $array_ids = array();
      for ($i=0; $i < count($hasil_akhir); $i++) {
        array_push($array_ids, [$hasil_akhir[$i]['id']]);
      }

      // dd($array_ids);

      $placeholders = implode(',',array_fill(0, count($array_ids), '?'));
      $bus_akhir = DB::table('harga')
                 ->join('bus','bus.id','harga.nama_bus')
                 ->join('rute','rute.id','harga.rute_bus')
                 ->select('*')
                 ->whereIn('bus.id',$array_ids)
                 ->orderByRaw("field(bus.id,{$placeholders})", $array_ids)
                 ->where([['kota_asal',$kota_asal], ['kota_tujuan',$kota_tujuan],['Harga','<=',$harga]])
                 ->get();
      $bus_akhir_banget = collect($bus_akhir)->sortBy('harga')->toArray();
      // dd($bus_akhir_banget);

       $fasilitas_bus = array();
       for ($i=0; $i < count($hasil_akhir); $i++) {
         $fasilitas = DB::table('fasilitas_bus')
                        ->join('fasilitas', 'fasilitas_bus.id_fasilitas', '=', 'fasilitas.id_fasilitas')
                        ->join('bus', 'fasilitas_bus.id_bus', '=', 'bus.id')
                        ->where('bus.id',[$hasil_akhir[$i]['id']])
                        ->orderByRaw("field(bus.id,{$placeholders})", $array_ids)
                        ->select('fasilitas.nama_fasilitas', 'fasilitas.icon')
                        ->get();
          array_push($fasilitas_bus, $fasilitas);
       }

      // dd($fasilitas_bus);

      return view('newfrontend.book.hasil', ['bus_akhir'=>$bus_akhir_banget, 'rute'=>$rute, 'fasilitas_bus'=>$fasilitas_bus]);
  }

  public function cariBus($kota_asal, $kota_tujuan, $jenis_bus, $harga, $fasilitas)
  {
    $bus = DB::table('harga')->join('bus','bus.id','harga.nama_bus')->join('rute','rute.id','harga.rute_bus')->select('bus.id','bus.nama_bus','jenis_bus','harga')->where([['kota_asal',$kota_asal],['kota_tujuan',$kota_tujuan],['jenis_bus',$jenis_bus]])->get();
    $bus_array = array();
    foreach($bus as $bus)
    {
      $id = $bus->id;
      $nama_bus = $bus->nama_bus;
      if($bus->jenis_bus == 'Small Bus'){
        $jenis_bus = 1;
      }elseif($bus->jenis_bus == 'Medium Bus'){
        $jenis_bus = 2;
      }elseif($bus->jenis_bus == 'Big Bus'){
        $jenis_bus = 3;
      }

      $harga = (int)$bus->harga;

      $jumlah_fasilitas = DB::table('fasilitas_bus')->select(DB::raw('count(id_fasilitas) as jumlah'))->groupBy('id_bus')->where('id_bus',$id)->first()->jumlah;
      if($jumlah_fasilitas < 4){
        $jumlah_fasilitas = 1;
      }elseif($jumlah_fasilitas < 7){
        $jumlah_fasilitas = 2;
      }else{
        $jumlah_fasilitas = 3;
      }

      $bus = array('id'=>$id,'nama'=>$nama_bus,'jenis'=>$jenis_bus,'harga'=>$harga,'fasilitas'=>$jumlah_fasilitas);
      array_push($bus_array,$bus);
    }
    // dd($bus_array);
    //Tabel Kuadrat
    $bus_array_kuadrat =  array();
    for($i=0; $i<count($bus_array); $i++){
      $bus_id = $bus_array[$i]['id'];
      $nama_bus = $bus_array[$i]['nama'];
      $bus_jenis = pow($bus_array[$i]['jenis'],2);
      $bus_harga = pow($bus_array[$i]['harga'],2);
      $bus_fasilitas = pow($bus_array[$i]['fasilitas'],2);

      $bus = array('id'=>$bus_id,'nama'=>$nama_bus,'jenis'=>$bus_jenis,'harga'=>$bus_harga,'fasilitas'=>$bus_fasilitas);
      array_push($bus_array_kuadrat,$bus);
    }
    // dd($bus_array_kuadrat);
    //hasil tabel kuadrat
    $hasil_jenis_kuadrat = array(); $hasil_harga_kuadrat = array(); $hasil_fasilitas_kuadrat = array();

    for($i=0; $i<count($bus_array_kuadrat); $i++){
      // array_push($bus_array_kuadrat[$i]['id']);
      array_push($hasil_jenis_kuadrat,$bus_array_kuadrat[$i]['jenis']);
      array_push($hasil_harga_kuadrat,$bus_array_kuadrat[$i]['harga']);
      array_push($hasil_fasilitas_kuadrat,$bus_array_kuadrat[$i]['fasilitas']);
    }

    $hasil_akhir_jenis = sqrt(array_sum($hasil_jenis_kuadrat));
    $hasil_akhir_harga = sqrt(array_sum($hasil_harga_kuadrat));
    $hasil_akhir_fasilitas = sqrt(array_sum($hasil_fasilitas_kuadrat));
    // dd($hasil_akhir_jenis, $hasil_akhir_harga, $hasil_akhir_fasilitas);
    //Normalisasi dan Terbobots
    $normalisasi = array(); $jenis_items = array(); $harga_items = array(); $fasilitas_items = array();

    for($i=0; $i<count($bus_array); $i++){
      $bus_jenis = ($bus_array[$i]['jenis'] / $hasil_akhir_jenis) * 0.26;
      $bus_harga = ($bus_array[$i]['harga'] / $hasil_akhir_harga) * 0.63;
      $bus_fasilitas = ($bus_array[$i]['fasilitas'] / $hasil_akhir_fasilitas) * 0.11;

      array_push($jenis_items,$bus_jenis); array_push($harga_items,$bus_harga); array_push($fasilitas_items,$bus_fasilitas);
      $hasil_normalisasi = array('jenis'=>$bus_jenis,'harga'=>$bus_harga,'fasilitas'=>$bus_fasilitas);
      array_push($normalisasi,$hasil_normalisasi);
    };
    // dd($normalisasi);

    //Matriks Solusi Ideal
    $positif = array(max($jenis_items), min($jenis_items), max($fasilitas_items));
    $negatif = array(min($jenis_items), max($jenis_items), min($fasilitas_items));
    // dd($positif);
    //Jarak Solusi Ideal
    $jarak_solusi_ideal = array();
    for($i=0; $i<count($normalisasi); $i++){
      $jarak_solusi_positif = sqrt(pow(($normalisasi[$i]['jenis'] - $positif[0]),2) + pow(($normalisasi[$i]['harga'] - $positif[1]),2) + pow(($normalisasi[$i]['fasilitas'] - $positif[2]),2));
      $jarak_solusi_negatif = sqrt(pow(($normalisasi[$i]['jenis'] - $negatif[0]),2) + pow(($normalisasi[$i]['harga'] - $negatif[1]),2) + pow(($normalisasi[$i]['fasilitas'] - $negatif[2]),2));

      $data = array('positif'=>$jarak_solusi_positif, 'negatif'=>$jarak_solusi_negatif);
      array_push($jarak_solusi_ideal,$data);
    }
    // dd($jarak_solusi_ideal);

    //Preferensi
    $hasil_final_preferensi = array();
    for($i=0; $i<count($jarak_solusi_ideal); $i++){
      $bus_id = $bus_array[$i]['id'];
      $bus_nama = $bus_array[$i]['nama'];
      $hasil_preferensi = $jarak_solusi_ideal[$i]['negatif'] / array_sum($jarak_solusi_ideal[$i]);

      $bus_akhir = array('hasil'=>$hasil_preferensi,'id'=>$bus_id,'nama'=>$bus_nama);
      array_push($hasil_final_preferensi, $bus_akhir);
    }
    // dd($hasil_final_preferensi);
    // $hasil_akhir = max($hasil_final_preferensi);
    $hasil_akhir = array_reverse(array_values(Arr::sort($hasil_final_preferensi, function ($value) {
          return $value['hasil'];
      })));

      return $hasil_akhir;
  }
}
