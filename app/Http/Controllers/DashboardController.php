<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
use App\Admin;

use PDF;
use Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
      return view('backend.dashboard.index');
    }

    public function pdf($id)
    {
      $order = DB::table('order')->select('*')->where('id',$id)->get();
      return view('backend.pdf',['order'=>$order]);
    }

    // History
    public function menuhistory()
    {
      $order = DB::table('order')->select('*')->where('status','=','Selesai')->get();
      return view('backend.history.menuHistory',['order'=>$order]);
    }

    //MENU KOTA
    public function menukota()
    {
      $kota = DB::table('kota')->select('*')->get();
      return view('backend.kota.menuKota',['kota'=>$kota]);
    }

    public function tambahkota(Request $request)
    {
      $kota = new Kota();

      $kota->nama_kota = $request['nama_kota'];
      $kota -> save();

      return redirect('/MenuKota');
    }

    public function createkota()
    {
      return view('backend.kota.tambahKota');
    }

    public function editkota($id)
    {
      $kota = DB::table('kota')->select('*')->where('kota.id',$id)->get();
      return view('backend.kota.editKota', ['kota'=>$kota]);
    }

    public function updatekota(Request $request, $id)
    {
      $kota = Kota::find($id);

      $kota->nama_kota = $request['nama_kota'];
      $kota->save();
      return redirect('/MenuKota');
    }

    public function hapusKota($id)
    {
      Kota::destroy($id);

      return redirect('/MenuKota');
    }

    //MENU HARGA
    public function menuharga()
    {
      $harga = DB::table('harga')
               ->join('bus', 'bus.id', '=', 'harga.nama_bus')
               ->join('rute', 'rute.id', '=', 'harga.rute_bus')
               ->select('*')
               ->get();
      return view('backend.harga.menuHarga',['harga'=>$harga]);
    }

    public function tambahharga(Request $request)
    {
      $harga = new Harga();

      $harga->nama_bus = $request['nama_bus'];
      $harga->rute_bus = $request['rute_bus'];
      $harga->harga = $request['harga'];
      $harga -> save();

      return redirect('/MenuHarga');
    }

    public function createharga()
    {
      $bus = DB::table('bus')->select('*')->get();
      $rute = DB::table('rute')->select('*')->get();
      return view('backend.harga.tambahHarga',['bus'=>$bus, 'rute'=>$rute]);
    }

    public function editharga($id)
    {
      $harga = DB::table('harga')
               ->join('bus', 'bus.id', '=', 'harga.nama_bus')
               ->join('rute', 'rute.id', '=', 'harga.rute_bus')
               ->where('harga.id',$id)
               ->select('*')
               ->get();
      return view('backend.harga.editHarga', ['harga'=>$harga]);
    }

    public function updateharga(Request $request, $id)
    {
      $harga = Harga::find($id);

      $harga->nama_bus = $request['nama_bus'];
      $harga->rute_bus = $request['rute_bus'];
      $harga->harga = $request['harga'];
      $harga->save();
      return redirect('/MenuHarga');
    }

    public function hapusharga($id)
    {
      Harga::destroy($id);

      return redirect('/MenuHarga');
    }

    //MENU RUTE
    public function menurute()
    {
      $rute = DB::table('rute')->select('*')->get();
      return view('backend.rute.menuRute',['rute'=>$rute]);
    }

    public function tambahrute(Request $request)
    {
      $rute = new Rute();

      $rute->kota_asal = $request['kota_asal'];
      $rute->kota_tujuan = $request['kota_tujuan'];
      $rute -> save();

      return redirect('/MenuRute');
    }

    public function createrute()
    {
      $kota = DB::table('kota')->select('*')->get();
      $rute = DB::table('rute')->select('*')->get();

      return view('backend.rute.tambahRute',['kota'=>$kota, 'rute'=>$rute]);
    }

    public function editrute($id)
    {
      $rute = DB::table('rute')->select('*')->where('rute.id',$id)->get();
      return view('backend.rute.editRute', ['rute'=>$rute]);
    }

    public function updaterute(Request $request, $id)
    {
      $rute = Rute::find($id);

      $rute->kota_asal = $request['kota_asal'];
      $rute->kota_tujuan = $request['kota_tujuan'];
      $rute->save();
      return redirect('/MenuRute');
    }

    public function hapusRute($id)
    {
      Rute::destroy($id);

      return redirect('/MenuRute');
    }

    // MENU BUS
    public function menubus()
    {
      $bus = DB::table('bus')
               ->join('po', 'po.id', '=', 'bus.nama_po')
               ->select('po.id','po.nama_po', 'bus.id', 'bus.jenis_bus','bus.nama_bus','bus.gambar_bus')
               ->get();
      return view('backend.bus.menuBus',['bus'=>$bus]);
    }

    public function tambahData(Request $request)
    {
        //MASUKIN DATA BUS
        $bus = new Bus();
        // Tambah data gambar bus
        $_gambar = $request->file('gambar_bus');
        $nama_gambar = $_gambar->getClientOriginalName();
        $request->file('gambar_bus')->move('img/bus/',$nama_gambar);

        $slug= str_replace(' ', '-',$request['nama_bus']);

        $bus->nama_po = $request['nama_po'];
        $bus->jenis_bus = $request['jenis_bus'];
        $bus->nama_bus = $request['nama_bus'];
        $bus->slug = strtolower($slug);
        $bus->gambar_bus = $nama_gambar;

        $bus->save();

        //MASUKIN DATA FASILITUS
        $_data = $request->except('_token');
        $_fasilitas = count($_data['fasilitas']);
        for($i=0; $i<$_fasilitas; $i++)
        {
          $fasilitasbus = new FasilitasBus;
          $fasilitasbus->id_bus = $bus->id;
          $fasilitasbus->id_fasilitas = $_data['fasilitas'][$i];
          $fasilitasbus->save();
        }

        return redirect('/MenuBus');
    }

    public function createData()
    {
      $fasilitas = DB::table('fasilitas')->select('*')->get();
      $po = DB::table('po')->select('*')->get();
      return view('backend.bus.tambahBus',['fasilitas'=>$fasilitas, 'po'=>$po]);
    }

    public function viewData($id)
    {
      $bus = DB::table('bus')
               ->join('po', 'po.id', '=', 'bus.nama_po')
               ->select('*')
               ->where('bus.id',$id)
               ->get();
      return view('backend.bus.viewBus',['bus'=>$bus]);
    }

    public function editData($id)
    {
      $bus = DB::table('bus')
               ->join('po', 'po.id', '=', 'bus.nama_po')
               ->select('bus.id as id','po.id as id_po', 'po.nama_po','bus.nama_bus', 'bus.jenis_bus', 'bus.gambar_bus')
               ->where('bus.id',$id)
               ->get();

      $po = DB::table('po')->select('*')->get();
      return view('backend.bus.editBus', ['bus'=>$bus, 'po'=>$po]);
    }

    public function updateData(Request $request, $id)
    {
      $bus = Bus::find($id);

      $_gambar = $request->file('gambar_bus');
      if(is_null($_gambar)){
        $nama_gambar = DB::table('bus')->select('gambar_bus')->where('bus.id',$id)->first()->gambar_bus;
      }else{
        $_gambar = $request->file('gambar_bus');
        $nama_gambar = $_gambar->getClientOriginalName();
        $request->file('gambar_bus')->move('img/bus/',$nama_gambar);
        $bus->gambar_bus = $nama_gambar;
      }

      $bus->nama_po = $request['nama_po'];
      $bus->jenis_bus = $request['jenis_bus'];
      $bus->nama_bus = $request['nama_bus'];
      $bus->slug = Str::slug($request['nama_bus'],'-');
      $bus->gambar_bus = $nama_gambar;
      $bus->save();
      return redirect('/MenuBus');
    }

    public function destroy($id)
    {
      Bus::destroy($id);

      return redirect('/MenuBus');
    }

    // END MENU BUS

    // MENU PO BUS
    public function menupo()
    {
      $po = DB::table('po')->select('*')->get();
      return view('backend.po.menuPo',['po'=>$po]);
    }

    public function tambahpo(Request $request)
    {
        $po = new Po();
        // Tambah data gambar po
        $_gambar = $request->file('gambar_po');
        $nama_gambar = $_gambar->getClientOriginalName();
        $request->file('gambar_po')->move('img/po/',$nama_gambar);

        $slug = str_replace(' ', '-',$request['nama_po']);

        $po->nama_po = $request['nama_po'];
        $po->slug = strtolower($slug);
        $po->gambar_po = $nama_gambar;

        $po->save();
        return redirect('/MenuPO');
    }

    public function createpo()
    {
      return view('backend.po.tambahPo');
    }

    public function editPo($id)
    {
      $po = DB::table('po')->select('*')->where('id',$id)->get();
      return view('backend.po.editPo', ['po'=>$po]);
    }

    public function updatePo(Request $request, $id)
    {
      $po = Po::find($id);

      $_gambar = $request->file('gambar_po');
      if(is_null($_gambar)){
        $nama_gambar = DB::table('po')->select('gambar_po')->where('po.id',$id)->first()->gambar_po;
      }else{
        $_gambar = $request->file('gambar_po');
        $nama_gambar = $_gambar->getClientOriginalName();
        $request->file('gambar_po')->move('img/po/',$nama_gambar);
        $bus->gambar_po = $nama_gambar;
      }

      $po->nama_po = $request['nama_po'];
      $po->slug = Str::slug($request['nama_po'], '-');
      $po->gambar_po = $nama_gambar;

      $po->save();
      return redirect('/MenuPO');
    }

    public function viewPo($id)
    {
      $po = DB::table('po')->select('*')->where('id',$id)->get();
      return view('backend.po.viewPo',compact('po'));
    }

    public function hapuspo($id)
    {
      Po::destroy($id);

      return redirect('/MenuPO');
    }

    // END MENU PO BUS

    // MENU User
    public function menuUser()
    {
      $user = DB::table('users')->select('*')->get();
      return view('backend.user.menuUser',['user'=>$user]);
    }

    public function viewUser($id)
    {
      $user = DB::table('users')->select('*')->where('id',$id)->get();
      return view('backend.user.viewUser',compact('user'));
    }

    public function createadmin()
    {
      return view('backend.user.tambahUser');
    }

    public function tambahadmin(Request $request)
    {
        $admin = new Admin();

        $admin->nama_lengkap = $request['nama_lengkap'];
        $admin->user_name    = $request['user_name'];
        $admin->password     = bcrypt($request['password']);
        $admin->user_level   = $request['user_level'];

        $admin->save();
        return redirect('/MenuUser');
    }

    public function logout()
    {
      Auth::guard('admin')->logout();
      return redirect('/loginAdmin');
    }

    // END MENU User

    // MENU Order
    public function menuorder()
    {
      $order = DB::table('order')->select('*')->where('status','!=','Selesai')->get();
      return view('backend.order.menuOrder',['order'=>$order]);
    }

    public function viewOrder($id)
    {
      $order = DB::table('order')->select('*')->where('id',$id)->get();
      return view('backend.order.viewOrder',compact('order'));
    }

    public function cetak_pdf($id)
    {
    	$order = DB::table('order')->select('*')->where('id',$id)->get();

    	$pdf = PDF::loadview('backend.pdf',['order'=>$order]);
    	return $pdf->download('invoice-order-'.$order[0]->nama.'-'.$order[0]->created_at);
    }

    public function editorder($id)
    {
      $order = DB::table('order')->select('*')->where('id',$id)->get();
      return view('backend.order.editOrder', ['order'=>$order]);
    }

    public function updateorder(Request $request, $id)
    {
      $order = Order::find($id);

      $order->status = $request['status'];
      $order->save();
      return redirect('/MenuOrder');
    }

    public function hapusOrder($id)
    {
      Order::destroy($id);

      return redirect('/MenuOrder');
    }

    // menu comment
    public function menucomment()
    {
      $comment = DB::table('comment')->select('*')->get();
      return view('backend.comment.comment',['comment'=>$comment]);
    }

    public function viewComment($id)
    {
      $comment = DB::table('comment')->select('*')->where('id',$id)->get();
      return view('backend.comment.viewComment',compact('comment'));
    }

    public function hapusComment($id)
    {
      Comment::destroy($id);

      return redirect('/menuComment');
    }

    // end Menu Comment

    // login
    public function adminLogin()
    {
      return view('backend.register.loginAdmin');
    }

}
