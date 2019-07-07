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
                  <a href="{{url('/dashboardUser')}}">My Dashboard</a>
              </li>
              <hr>
              <li>
                  <a href="{{url('/dashboardUser/myOrder')}}">My Orders</a>
              </li>
              <hr>
              <li>
                  <a href="{{url('/dashboardUser/historyOrder')}}">History Orders</a>
              </li>
              <hr>
              <li>
                  <a href="{{url('/dashboardUser/accountInfo')}}">Account Information</a>
              </li>
              <hr>
              <li>
                  <a href="#">Logout</a>
              </li>
          </ul>
      </div>
    <div id="page-content-container" style="padding-left: 130px;padding-top: 0px;padding-right: 85px; font-family: Cambria;">
        <div class="container-fluid">
          <div class="row" style="margin-bottom: 30px;">
            <h4 style="margin-bottom: 20px;">EDIT ACCOUNT INFORMATION</h4>
              <div class="col-md-12" style="border: solid 1px #95a5a6; padding: 30px; border-radius: 10px;">
                <h5><b>Account Information</b></h5>
                <hr style="width: auto; border-bottom: 1px solid #95a5a6;">
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="nama" placeholder="....." required>
                    </div>
                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="text" class="form-control" name="nama" placeholder="....." required>
                      <input type="checkbox" name="ubahpass" value="ubahpass"> Ganti Password<br>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="nama" placeholder="....." required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12" style="border: solid 1px #95a5a6; padding: 30px; border-radius: 10px; margin-top: 40px; font-family: Cambria;">
                <h5><b>Ganti Password</b></h5>
                <hr style="width: auto; border-bottom: 1px solid #95a5a6;">
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Password Sekarang</label>
                      <input type="text" class="form-control" name="nama" placeholder="....." required>
                    </div>
                    <div class="form-group">
                      <label>Password Baru</label>
                      <input type="text" class="form-control" name="nama" placeholder="....." required>
                      <input type="checkbox" name="ubahpass" value="ubahpass"> Ganti Password<br>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-top: 86px;">
                    <div class="form-group">
                      <label>Konfirmasi Password Baru</label>
                      <input type="text" class="form-control" name="nama" placeholder="....." required>
                    </div>
                  </div>
                </div>
              </div>
              <a href="" class="btn" role="button" style="padding: 10px; margin-top: 20px; margin-left: 800px; font-family: Cambria; background-color: #f96d01; color: #ffffff;">SIMPAN</a>
              <a href="" style="color: #d35400"><img src="{{url('assets/img/icon/kembali.png')}}" alt=""> Kembali</a>
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
