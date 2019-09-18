<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- title -->
    <title>Account Information</title>
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
          <div class="row" style="margin-bottom: 30px;">
            <h4 style="margin-bottom: 20px;">UBAH INFORMASI AKUN</h4>
              <div class="col-md-12" style="border: solid 1px #95a5a6; padding: 30px; border-radius: 10px;">
                <h5><b>Account Information</b></h5>
                <hr style="width: auto; border-bottom: 1px solid #95a5a6;">
                <br>
                @foreach($ubah as $ubah)
                <form class="" action="{{url('/dashboardUser/ubahakun/.$ubah->email')}}" method="post">
                  {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="nama_lengkap" value="{{$ubah->nama_lengkap}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email" value="{{$ubah->email}}">
                    </div>
                  </div>
                </div>
                <h5 style="margin-top: 30px;"><b>Ubah Password</b></h5>
                <hr style="width: auto; border-bottom: 1px solid #95a5a6;">
                <div class="row" style="margin-top: 50px;">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Password Baru</label>
                      <input type="password" class="form-control" name="password">
                    </div>
                  </div>
                  <div class="col-md-6">

                  </div>
                </div>
              </div>

              <button type="submit" class="btn" style="padding: 10px; margin-top: 20px; margin-left: 730px; font-family: Cambria; background-color: #f96d01; color: #ffffff;">Simpan Perubahan</button>
              </form>
              @endforeach
              <a href="{{url('/dashboardUser')}}" style="color: #d35400"><img src="{{url('assets/img/icon/kembali.png')}}" alt=""> Kembali</a>
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
