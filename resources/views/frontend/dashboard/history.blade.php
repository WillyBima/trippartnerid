<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- title -->
    <title>Pesanan Saya</title>
    <!-- end title -->
    @include('master.head')
    @yield('head-frontend')
  </head>

  <body style="height: 100%;">
    <!-- logo atas -->
    @include('master.body')
    @yield('header-frontend')
    <!-- end logo -->

    <!-- Navbar -->
    @yield('navbar-frontend')
    <!-- End Navbar -->

    <div id="container">
      <div id="sidebar" class="rounded">
          <ul class="sidebar-nav" style="padding-left: 15px; font-family: Cambria;">
            <li style="margin-top: 15px;">
                <a href="{{url('/dashboardUser')}}">Dashboard Saya</a>
            </li>
            <hr>
            <li>
                <a href="{{url('/dashboardUser/myOrder')}}">Order Saya</a>
            </li>
            <hr>
            <li>
                <a href="{{url('/dashboardUser/historyOrder')}}">Riwayat Order</a>
            </li>
            <hr>
            <li>
                <a href="{{url('/dashboardUser/accountInfo')}}">Informasi Akun</a>
            </li>
            <hr>
            <li>
                <a href="{{url('/logout')}}">Logout</a>
            </li>
          </ul>
      </div>
    <div id="page-content-container" style="padding-left: 130px;padding-top: 0px;padding-right: 85px; font-family: Cambria;">
        <div class="container-fluid">
          <h4 style="margin-bottom: 20px;">RIWAYAT PEMESANAN</h4>
          @if($order->isEmpty())
          <div class="contactInfo text-center" style="border: solid 1px #95a5a6;; padding: 70px; border-radius: 10px; margin-bottom: 30px;">
            <p style="text-transform: capitalize;">ANDA TIDAK MEMILIKI HISTORY PEMESANAN</p>
            <p>PESAN SEKARANG !!!</p>
          </div>
          @else
          <div class="row" style="margin-bottom: 30px;">
            @foreach($order as $order)
              <div class="col-md-12" style="border: solid 1px #95a5a6; padding: 30px; border-radius: 10px;">
                  <p style="font-size: 20px;"><b><img src="{{url('assets/img/icon/bus depan.png')}}"> {{$order->alamat_jemput}} <img src="{{url('assets/img/icon/next.png')}}" alt=""> {{$order->alamat_tujuan}}</b></p>
                  <hr style="width: auto; border-bottom: 1px solid #95a5a6;">
                  <div class="row">
                    <div class="col-md-3">
                      <p>Nama Bus</p>
                      <p>{{$order->nama_bus}}</p>
                    </div>
                    <div class="col-md-3">
                      <p>Tanggal Berangkat</p>
                      <p>{{date('l, d F Y', strtotime($order->tanggal_pergi))}}</p>
                    </div>
                    <div class="col-md-3">
                      <p>Tanggal Pulang</p>
                      <p>{{date('l, d F Y', strtotime($order->tanggal_pulang))}}</p>
                    </div>
                    <div class="col-md-3" style="text-align: right;">
                      <p>Order Id</p>
                      <p><b>{{$order->id}}</b></p>
                    </div>
                  </div>
                <p class="btn" role="button" style="padding: 10px; margin-top: 20px; font-family: Cambria; background-color: #f96d01; color: #ffffff;">E-ticket Telah Terbit</p>
              </div>
              @endforeach
              @endif
                <a href="{{url('/dashboardUser')}}" style="margin-top: 20px; color: #d35400"><img src="{{url('assets/img/icon/kembali.png')}}" alt=""> Kembali</a>
          </div>
        </div>
    </div>
    </div>

    <!-- FOOTER -->
    @yield('footer-frontend')
    <!-- end Footer -->

    <!-- script -->
    @yield('script-frontend')
    <!-- endscript -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#menu").click(function(e) {
              e.preventDefault();
            $("#container").toggleClass("toggled");
            });
        });
    </script>
  </body>
</html>
