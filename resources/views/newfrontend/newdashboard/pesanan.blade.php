<!DOCTYPE html>
<html>
  <head>
    <!-- title -->
    <title>TripPartner | Pesanan Saya</title>
    <!-- end title -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    @include('master.head')
    @yield('head-frontend')
  </head>

  <body style="height: 100%;">
    <!-- Navbar -->
    @include('master.body')
    @yield('newnavbar-frontend')
    <!-- End Navbar -->

    <!-- banner -->
    <section class="banner_inner" id="home" style="background-image: url('{{asset('assets/img/images/pantaibali.jpg')}}');">
    	<div class="banner_inner_overlay">
    	</div>
    </section>
    <!-- //banner -->

    <div id="container">
      <div id="sidebar" class="rounded">
          <ul class="sidebar-nav" style="padding-left: 15px; font-family: Cambria;">
              <li style="margin-top: 15px;">
                  <a href="{{url('/dashboard-user')}}">Dashboard Saya</a>
              </li>
              <hr>
              <li>
                  <a href="{{url('/dashboard-user/pesanan-saya')}}">Pesanan Saya</a>
              </li>
              <hr>
              <li>
                  <a href="{{url('/dashboard-user/riwayat-pesanan')}}">Riwayat Pesanan</a>
              </li>
              <hr>
              <li>
                  <a href="{{url('/dashboard-user/informasi-akun')}}">Informasi Akun</a>
              </li>
              <hr>
              <li>
                  <a href="{{url('/logout')}}">Logout</a>
              </li>
          </ul>
      </div>
      <div id="page-content-container" style="padding-left: 130px;padding-top: 0px;padding-right: 85px; font-family: Cambria;">
          <div class="container-fluid">
            <h4 style="margin-bottom: 20px;">PESANAN SAYA</h4>
            @if($order->isEmpty())
            <div class="contactInfo text-center contact-left-form" style="padding: 70px; margin-bottom: 30px;">
              <p style="text-transform: capitalize;">ANDA TIDAK MEMILIKI PESANAN</p>
              <p>PESAN SEKARANG !!!</p>
            </div>
            @else
            <div class="row" style="margin-bottom: 10px;">
                @foreach($order as $order)
                <div class="col-lg-12 contact-left-form" style="margin-bottom: 20px;">
                  <form action="#" method="post" class="row">
                    <div class="col-lg-12 form-group contact-forms">
                      <p style="font-size: 20px;"><b style="margin-right: 10px;"><img src="{{url('assets/img/icon/bus depan.png')}}"> {{$order->alamat_jemput}}<img src="{{url('assets/img/icon/next.png')}}" alt=""> {{$order->alamat_tujuan}}</b>
                        @if($order->status === 'Belum Diproses')
                        <span class="badge btn-warning">{{$order->status}}</span></td>
                        @elseif($order->status === 'Sedang Diproses')
                        <span class="badge btn-primary">{{$order->status}}</span></td>
                        @elseif($order->status === 'Selesai')
                        <span class="badge btn-success">{{$order->status}}</span></td>
                        @endif
                      </p>

                      <hr style="width: auto; border-bottom: 1px solid #95a5a6;">
                      <div class="row text-center">
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
                        <div class="col-md-3">
                          <p>Order Id</p>
                          <p><b>{{$order->id}}</b></p>
                        </div>
                      </div>
                      <hr style="width: auto; border-bottom: 1px solid #95a5a6;">
                      <div class="col-lg-12 text-right">

                        @if($order->status === 'Belum Diproses')
                        <p>Proses Pengecekan Bus</p>

                        @elseif($order->status === 'Sedang Diproses')
                        <p><b>Catatan :</b></p>
                        <p>Harap Lakukan Pembayaran DP Sewa sebesar RP.500.000</p>
                        <p>Transfer ke Rekening :</p>
                        <p>1441-1928-12827 atas nama Khanzan</p>

                        @elseif($order->status === 'Selesai')
                        <p>Harap lakukan pembayaran penuh maksimal H-7 dari Tanggal Keberangkatan, Terima Kasih</p>
                        @endif
                      </div>
                    </div>
                  </form>
                </div>
                @endforeach
                @endif
                  <a href="{{url('/dashboard-user')}}" style="margin-top: 20px; color: #d35400"><img src="{{url('assets/img/icon/kembali.png')}}" alt=""> Kembali</a>
            </div>
          </div>
      </div>
    </div>

    <!-- FOOTER -->
    @yield('newfooter')
    <!-- end Footer -->

    <!-- move top -->
    <div class="move-top text-right">
    	<a href="#home" class="move-top">
    		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
    	</a>
    </div>
    <!-- move top -->

    <!-- script -->
    @yield('script-frontend')
    <!-- endscript -->
  </body>
</html>
