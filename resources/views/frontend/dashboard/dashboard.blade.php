<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- title -->
    <title>DashboardUser</title>
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
            <div class="row">
              <h4 style="margin-bottom: 20px;">DASHBOARD SAYA</h4>
                <div class="col-md-12" style="border: solid 1px #95a5a6;; padding: 30px; border-radius: 10px;">
                    <h5 style="text-transform: capitalize;"><b>Hallo, {{Auth::guard('users')->user()->nama_lengkap}}</b></h5>
                    <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                </div>
              <h4 style="margin-top: 30px; margin-bottom: 20px;">ACCOUNT INFORMATION</h4>
            </div>

            <div class="row" style="margin-bottom: 30px;">
              <div class="col-md-6" style="padding-left: 0px;">
                <div class="contactInfo" style="border: solid 1px #95a5a6;; padding: 30px; border-radius: 10px;">
                  <h5><b>Contact Information</b></h5>
                  <hr style="width: auto; border-bottom: 1px solid #95a5a6;">
                  <a href="{{url('/dashboardUser/accountInfo')}}"><img src="{{url('assets/img/icon/pencil.png')}}" style="margin-left: 350px;"></a>
                  <br><br>
                  <p style="text-transform: capitalize;">{{Auth::guard('users')->user()->nama_lengkap}}</p>
                  <p>{{Auth::guard('users')->user()->email}}</p>
                </div>
              </div>
              @foreach($order as $order)
              <div class="col-md-6" style="padding-right: 0px;">
                <div class="myOrder" style="border: solid 1px #95a5a6;; padding: 25px; border-radius: 10px;">
                  <h5><b>My Orders</b></h5>
                  <hr style="width: auto; border-bottom: 1px solid #95a5a6;">
                  <a href="{{url('/dashboardUser/myOrder')}}" style="margin-left: 295px; color: #d35400">Lihat Detail</a>
                  <br><br>
                  <p style="font-size: 20px;"><b><img src="{{url('assets/img/icon/bus depan.png')}}"> {{$order->alamat_jemput}} <img src="{{url('assets/img/icon/next.png')}}" alt=""> {{$order->alamat_tujuan}}</b></p>
                  <p>{{date('l, d F Y', strtotime($order->tanggal_pergi))}}</p>
                </div>
              </div>
              @endforeach
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
