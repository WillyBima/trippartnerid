<!DOCTYPE html>
<html>
  <head>
    <!-- title -->
    <title>TripPartner | Informasi Akun</title>
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
        <div class="row" style="margin-bottom: 30px;">
          <h4 style="margin-bottom: 20px;">UBAH INFORMASI AKUN</h4>
          <div class="col-lg-12 col-md-12 contact-left-form">
            <h5><b>Account Information</b></h5>
            <hr style="width: auto; border-bottom: 1px solid #95a5a6;"><br>
            @foreach($ubah as $ubah)
            <form action="{{url('/dashboard-user/ubahakun/.$ubah->email')}}" method="post">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-sm-6">
                  <div class=" form-group contact-forms">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama" value="{{$ubah->nama_lengkap}}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group contact-forms">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{$ubah->email}}">
                  </div>
                </div>
              </div>
              <h5 style="margin-top: 30px;"><b>Ubah Password</b></h5>
              <hr style="width: auto; border-bottom: 1px solid #95a5a6;">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group contact-forms">
                    <label>Password Baru</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                </div>
                <div class="col-sm-6">

                </div>
              </div>
              <button type="submit" class="btn" style="padding: 10px; margin-top: 20px; margin-left: 700px; font-family: Cambria; background-color: #f96d01; color: #ffffff;">Simpan Perubahan</button>
            </form>
            @endforeach
          </div>
            <a href="{{url('/dashboardUser')}}" style="color: #d35400"><img src="{{url('assets/img/icon/kembali.png')}}" alt=""> Kembali</a>
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
