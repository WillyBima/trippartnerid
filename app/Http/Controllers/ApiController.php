<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

class ApiController extends Controller
{
    //API DATA BUS
    public function data_bus()
    {
        $databus = DB::table('bus')
                 ->join('po', 'po.id', '=', 'bus.nama_po')
                 ->select('po.id','po.nama_po','bus.jenis_bus','bus.nama_bus','bus.gambar_bus','bus.keterangan','bus.slug')
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
          $dataharga = DB::table('harga')->select('*')->get();
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
      public function data_history_order()
      {
          $datahistory = DB::table('history_order')->select('*')->get();
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
}
