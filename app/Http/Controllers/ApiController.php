<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Validator;

use App\Bus;
use App\User;
use App\Po;
use App\Comment;
use App\Order;
use App\Fasilitas;
use App\FasilitasBus;
use App\Kota;
use App\Rute;
use App\Harga;
use App\Tracking;
use App\Supir;
use App\Http\Controllers\PerhitunganController;

use Auth;

class ApiController extends Controller
{
    //API DATA BUS

    public $successStatus = 200;
    public function data_bus()
    {
        $databus = DB::table('bus')
                 ->join('po', 'po.id', '=', 'bus.nama_po')
                 ->select('po.id','po.nama_po','bus.jenis_bus','bus.nama_bus','bus.gambar_bus','bus.slug')
                 ->get();
        if(is_null($databus)){
          return response()->json([
            'message'=>'Data Gagal Diambil',
            'status'=>401,
          ]);
        }
        return response()->json([
          'message'=>'Data Berhasil Diambil',
          'status'=>200,
          'data'=>$databus,
        ]);
      }
      //END DATA BUS
      public function get_profile(Request $request)
      {
        $email = $request->input('email');
        $data_akun = DB::table('users') ->select('*')->where('email','=', $email)->get();
        if (is_null($data_akun)) {
          return response()->json([
            'message'=>'Data Gagal Diambil',
            'status'=>401,
          ]);
        }
        return response()->json([
          'message'=>'Data Berhasil Diambil',
          'status'=>200,
          'data'=>$data_akun,
        ]);
      }

      //editprofile
      public function edit_profile(Request $request)
      {
        $email = $request->input('email');
        $nama = $request->input('nama_lengkap');
        $id = $request->input('id');

        $data_profil = DB::table('users')
                    ->select('*')
                    ->where('email', '=', $email)
                    ->get();

        if (count($data_profil) > 0) {
          $edit_profile = User::find($id);

          $edit_profile->email      = $request->input('email');
          $edit_profile->nama_lengkap       = $request->input('nama_lengkap');

          $edit_profile->save();
          return response()->json([
              'message'=>'Edit Profil Berhasil',
              'status'=>200,
              'data'=>$edit_profile,
          ]);
        } else {
          return response()->json([
              'message'=>'Gagal Dikirim',
              'status'=>400,
          ]);
        }
      }
      //API DATA PO BUS
      public function data_po()
      {
          $datapo = DB::table('po')->select('*')->get();
          if(is_null($datapo)){
            return response()->json([
              'message'=>'Data Gagal Diambil',
              'status'=>401,
            ]);
          }
          return response()->json([
            'message'=>'Data Berhasil Diambil',
            'status'=>200,
            'data'=>$datapo,
          ]);
        }
        //END DATA BUS

      public function logintester(Request $request){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
             $user = Auth::user();
             $success['token'] =  $user->createToken('MyApp')-> accessToken;
             return response()->json(['success' => $success], $this-> successStatus);
         }
         else{
             return response()->json(['error'=>'Unauthorised'], 401);
         }

      }

      //End Login
      //API DATA KOTA
      public function data_kota()
      {
          $datakota = DB::table('kota')->select('*')->get();
          if(is_null($datakota)){
            return response()->json([
              'message'=>'Data Gagal Diambil',
              'status'=>401,
            ]);
          }
          return response()->json([
            'message'=>'Data Berhasil Diambil',
            'status'=>200,
            'data'=>$datakota,
          ]);
        }
      //END DATA KOTA

      //API Data supir
      public function data_supir()
      {
        $datasupir = DB::table('supir')->select('*')->get();
        if(is_null($datasupir)){
          return response()->json([
            'message'=>'Data Gagal Diambil',
            'status'=>401,
          ]);
        }
        return response()->json([
          'message'=>'Data Berhasil Diambil',
          'status'=>200,
          'data'=>$datasupir,
        ]);
      }
      //END DATA supir

      //API DATA COMMENT
      public function data_comment()
      {
          $datacomment = DB::table('comment')->select('*')->get();
          if(is_null($datacomment)){
            return response()->json([
              'message'=>'Data Gagal Diambil',
              'status'=>401,
            ]);
          }
          return response()->json([
            'message'=>'Data Berhasil Diambil',
            'status'=>200,
            'data'=>$datacomment,
          ]);
        }
      //END DATA COMMENT

      //API DATA FASILITAS_BUS
      public function data_fasilitas_bus()
      {
          $datafasilitasbus = DB::table('fasilitas_bus')
                            ->join('fasilitas','fasilitas.id_fasilitas','=','fasilitas_bus.id_fasilitas')
                            ->join('bus','bus.id','=','fasilitas_bus.id_bus')
                            ->select('*')
                            ->get();
          if(is_null($datafasilitasbus)){
            return response()->json([
              'message'=>'Data Gagal Diambil',
              'status'=>401,
            ]);
          }
          return response()->json([
            'message'=>'Data Berhasil Diambil',
            'status'=>200,
            'data'=>$datafasilitasbus,
          ]);
        }
      //END DATA FASILITASBUS

      //API DATA HARGA
      public function data_harga()
      {
          $dataharga = DB::table('harga')
                     ->join('bus','bus.id','harga.nama_bus')
                     ->join('rute','rute.id','harga.rute_bus')
                     ->select('*')
                     ->get();
          if(is_null($dataharga)){
            return response()->json([
              'message'=>'Data Gagal Diambil',
              'status'=>401,
            ]);
          }
          return response()->json([
            'message'=>'Data Berhasil Diambil',
            'status'=>200,
            'data'=>$dataharga,
          ]);
        }
      //END DATA HARGA

      //API DATA HISTORY ORDER
      public function data_history_order(Request $request)
      {
        $email = $request->input('email');
        $status =$request->input('status');
        $datahistory = DB::table('order') ->select('*')->where([['email','=', $email], ['status', '=', $status]])->get();
          if(is_null($datahistory)){
            return response()->json([
              'message'=>'Data Gagal Diambil',
              'status'=>401,
            ]);
          }
          return response()->json([
            'message'=>'Data Berhasil Diambil',
            'status'=>200,
            'data'=>$datahistory,
          ]);
        }
      //END DATA HISTORY ORDER

      //API DATA ORDER
      public function data_order()
      {
          $dataorder = DB::table('order')->select('*')->get();
          if(is_null($dataorder)){
            return response()->json([
              'message'=>'Data Gagal Diambil',
              'status'=>401,
            ]);
          }
          return response()->json([
            'message'=>'Data Berhasil Diambil',
            'status'=>200,
            'data'=>$dataorder,
          ]);
        }
      //END DATA HISTORY ORDER

      //API DATA RUTE
      public function data_rute()
      {
          $datarute = DB::table('rute')->select('*')->get();
          if(is_null($datarute)){
            return response()->json([
              'message'=>'Data Gagal Diambil',
              'status'=>401,
            ]);
          }
          return response()->json([
            'message'=>'Data Berhasil Diambil',
            'status'=>200,
            'data'=>$datarute,
          ]);
        }
      //END DATA RUTE

      //API GET Lokasi

      public function data_tracking()
      {
        $datatracking = DB::table('tracking')->select('*')
        ->where([['status', '=', 1]])
        ->get();
        if(is_null($datatracking)){
          return response()->json([
            'message'=>'Data Gagal Diambil',
            'status'=>401,
          ]);
        }
        return response()->json([
          'message'=>'Data Berhasil Diambil',
          'status'=>200,
          'data'=>$datatracking,
        ]);
      }
      //END Data Lokasi
      //API DATA PO BUS
      public function data_user()
      {
          $datauser = DB::table('users')->select('*')->get();
          if(is_null($datauser)){
            return response()->json([
              'message'=>'Data Gagal Diambil',
              'status'=>401,
            ]);
          }
          return response()->json([
            'message'=>'Data Berhasil Diambil',
            'status'=>200,
            'data'=>$datauser,
          ]);
        }
        //END DATA BUS

        //Login
        public function login()
        {
          if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
              $user = Auth::user();
              $success['token'] =  $user->createToken('trippartner')->accessToken;
              return response()->json(['success' => $success, 'error' => "false", 'user'=>$user], $this->successStatus);
          }
          else{
              return response()->json(['error'=>'true', 'error_msg'=>'Wrong Credentials'], 401);
          }
        }

        //API REGISTER
        public function register(Request $request)
        {
          $user = new User;
          $user->nama_lengkap   = $request->input('nama_lengkap');
          $user->email          = $request->input('email');
          $user->password       = bcrypt($request->input('password'));
          $user->user_level     = $request->input('user_level');

          $user->save();
          return response()->json([
              'message'=>'Pemesanan Berhasil Dilakukan',
              'status'=>200,
              'data'=>$user,
          ]);
        }

        //API POST DATA PEMESANAN
        public function add_data_pemesanan(Request $request)
        {
          $order = new Order;
          $order->nama           = $request->input('nama');
          $order->email          = $request->input('email');
          $order->no_hp          = $request->input('no_hp');
          $order->nama_bus       = $request->input('nama_bus');
          $order->harga          = $request->input('harga');
          $order->alamat_jemput  = $request->input('alamat_jemput');
          $order->alamat_tujuan  = $request->input('alamat_tujuan');
          $order->tanggal_pergi  = $request->input('tanggal_pergi');
          $order->tanggal_pulang = $request->input('tanggal_pulang');
          $order->status         = $request->input('status');

          $order->save();
          return response()->json([
              'message'=>'Pemesanan Berhasil Dilakukan',
              'status'=>200,
              'data'=>$order,
          ]);
        }
        //END API Pemesanan

        //API POST COMMENT
        public function add_data_comment(Request $request)
        {
          $comment = new Comment;
          $comment->nama           = $request->input('nama');
          $comment->email          = $request->input('email');
          $comment->subject        = $request->input('subject');
          $comment->keterangan     = $request->input('keterangan');

          $comment->save();
          return response()->json([
              'message'=>'Kritik Saran Berhasil Dikirim',
              'status'=>200,
              'data'=>$comment,
          ]);
        }
        //END API COMMENT


        //API POST TRACKING
        public function add_tracking(Request $request)
        {
          $id_supir = $request->input('id_supir');
          $id_bus = $request->input('id_bus');
          $id_tracking = $request->input('id_tracking');

          $data_tracking = DB::table('tracking')
                      ->select('*')
                      ->where([['id_supir', '=', $id_supir], ['id_bus', '=', $id_bus]])
                      ->get();

          if (count($data_tracking) > 0) {
            $tracking = Tracking::find($id_tracking);

            $tracking->id_bus         = $request->input('id_bus');
            $tracking->latitude       = $request->input('latitude');
            $tracking->longitude      = $request->input('longitude');
            $tracking->status         = $request->input('status');

            $tracking->save();
            return response()->json([
                'message'=>'Tracking Berhasil Dikirim',
                'status'=>200,
                'data'=>$tracking,
            ]);
          } else {
            $tracking = new Tracking;
            $tracking->id_bus         = $request->input('id_bus');
            $tracking->id_supir       = $request->input('id_supir');
            $tracking->latitude       = $request->input('latitude');
            $tracking->longitude      = $request->input('longitude');
            $tracking->status         = $request->input('status');

            $tracking->save();
            return response()->json([
                'message'=>'Tracking Berhasil Dikirim',
                'status'=>200,
                'data'=>$tracking,
            ]);
          }
        }

        public function search_bus(Request $request)
        {

          $kota_asal = $request->input('kota_asal');
          $kota_tujuan = $request->input('kota_tujuan');
          $jenis_bus = $request->input('jenis_bus');
          $harga = $request->input('harga');
          $fasilitas = $request->input('fasilitas');

          $perhitunganController = new PerhitunganController;

          $hasil_akhir =  $perhitunganController->caribus($kota_asal, $kota_tujuan, $jenis_bus, $harga, $fasilitas);

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
                     ->where([['kota_asal',$kota_asal], ['kota_tujuan',$kota_tujuan]])
                     ->get();
          // dd($bus_akhir);

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

          return response()->json([
              'message'=>'Pencarian Berhasil',
              'status'=>200,
              'data'=>[
                'bus'=>$bus_akhir,
                'fasilitas'=>$fasilitas_bus,
          ]]);
        }
}
