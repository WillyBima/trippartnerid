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
            <h4 style="margin-bottom: 20px;">HISTORY ORDERS</h4>
              <div class="col-md-12" style="border: solid 1px #95a5a6; padding: 30px; border-radius: 10px;">
                  <p style="font-size: 20px;"><b><img src="{{url('assets/img/icon/bus depan.png')}}"> Depok <img src="{{url('assets/img/icon/next.png')}}" alt=""> Yogyakarta</b></p>
                  <hr style="width: auto; border-bottom: 1px solid #95a5a6;">
                  <div class="row">
                    <div class="col-md-3">
                      <p>PO Bus</p>
                      <p>Hiba Utama</p>
                    </div>
                    <div class="col-md-3">
                      <p>Nama Bus</p>
                      <p>MBHU-Hiba Utama</p>
                    </div>
                    <div class="col-md-3">
                      <p>Rencana Keberangkatan</p>
                      <p>Kamis, 18 Juli 2019</p>
                      <p>12.30 WIB</p>
                    </div>
                    <div class="col-md-3" style="text-align: right;">
                      <p>Order Id</p>
                      <p><b>110318</b></p>
                    </div>
                  </div>
                <p class="btn" role="button" style="padding: 10px; margin-top: 20px; font-family: Cambria; background-color: #f96d01; color: #ffffff;">E-ticket Telah Terbit</p>
              </div>
                <a href="" style="margin-top: 20px; color: #d35400"><img src="{{url('assets/img/icon/kembali.png')}}" alt=""> Kembali</a>
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
