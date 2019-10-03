<!DOCTYPE html>
<html>
  <head>
    <!-- title -->
    <title>TripPartner | Dashboard User</title>
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
            <div class="row">
              <h4 style="margin-bottom: 20px;">DASHBOARD SAYA</h4>
              <div class="col-lg-12 contact-left-form" style="margin-bottom: 20px;">
                <form action="#" method="post" class="row">
                  <div class="col-sm-12 form-group contact-forms">
                    <h5><b>Hallo, {{Auth::guard('users')->user()->nama_lengkap}}</h5>
                    <p class="mt-3">Melalui Dashboard User ini, Anda memiliki kemampuan untuk melihat semua aktivitas terbaru dari akun Anda dan memperbarui informasi akun Anda.
                       Pilih tautan di bawah ini untuk melihat atau mengedit informasi.</p>
                  </div>
                </form>
              </div>
            </div>
              <div class="row" style="margin-bottom: 30px;">
                <div class="col-lg-6 contact-left-form" style="margin-bottom: 20px;">
                  <form action="#" method="post" class="row">
                    <div class="col-lg-12 form-group contact-forms">
                      <h5><b>Informasi Kontak</b></h5>
                      <hr style="width: auto; border-bottom: 1px solid #95a5a6;">
                      <a href="{{url('/dashboard-user/informasi-akun')}}"><img src="{{url('assets/img/icon/pencil.png')}}" style="margin-left: 350px;"></a>
                      <br><br>
                      <p style="text-transform: capitalize;">{{Auth::guard('users')->user()->nama_lengkap}}</p>
                      <p>{{Auth::guard('users')->user()->email}}</p>
                    </div>
                  </form>
                </div>
                @foreach($order as $order)
                <div class="col-lg-6 contact-left-form" style="margin-bottom: 20px;">
                  <form action="#" method="post" class="row">
                    <div class="col-lg-12 form-group contact-forms">
                      <h5><b>My Orders</b></h5>
                      <hr style="width: auto; border-bottom: 1px solid #95a5a6;">
                      <a href="{{url('/dashboard-user/pesanan-saya')}}" style="margin-left: 290px; color: #d35400">Lihat Detail</a>
                      <br><br>
                      <p style="font-size: 20px;"><b><img src="{{url('assets/img/icon/bus depan.png')}}"> {{$order->alamat_jemput}} <img src="{{url('assets/img/icon/next.png')}}" alt=""> {{$order->alamat_tujuan}}</b></p>
                      <p>{{date('l, d F Y', strtotime($order->tanggal_pergi))}}</p>
                    </div>
                  </form>
                </div>
                @endforeach
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
