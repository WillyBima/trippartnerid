<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- title -->
    <title>Beranda</title>
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

    <!-- Carousel -->
    <section id="slide">
        <div id="demo" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active text-center">
              <img src="{{url('assets/img/corousel12.jpg')}}" alt="Los Angeles" width="auto" height="auto" class="img-fluid">
              <div class="carousel-caption" style="margin-bottom: 70px;">
                <p class="text-right" style="font-family: Cambria; font-size: 30px; color: #fff">TRIPPARTNER.COM</p>
                <p class="text-right" style="font-family: Cambria; font-size: 20px; color: #fff">Perusahaan Penyedia
                Jasa Sewa Bus Terbaik<br> dan Terpercaya</p>
                <br>
                <a href="{{url('/tentang')}}" class="btn" role="button" style="font-family: Cambria; margin-top: 30px; background-color: #f96d01; color: #ffffff; margin-left: 800px;">TENTANG KAMI</a>
              </div>
            </div>
            <div class="carousel-item text-center">
              <img src="{{url('assets/img/corousel2.jpg')}}" alt="Chicago" width="auto" height="auto">
              <div class="carousel-caption" style="margin-bottom: 70px;">
                <p class="text-right" style="font-family: Cambria; font-size: 30px; color: #fff">TRIPPARTNER.COM</p>
                <p class="text-right" style="font-family: Cambria; font-size: 20px; color: #fff">Perusahaan Kami Memiliki Armada Terbaik<br> dan Terpercaya</p>
                <br>
                <a href="{{url('/armada')}}" class="btn" role="button" style="font-family: Cambria; margin-top: 30px; background-color: #f96d01; color: #ffffff; margin-left: 800px;">ARMADA KAMI</a>
              </div>
            </div>
            <div class="carousel-item text-center">
              <img src="{{url('assets/img/corousel3.jpg')}}" alt="New York" width="auto" height="auto">
              <div class="carousel-caption" style="margin-bottom: 70px;">
                <p class="text-right" style="font-family: Cambria; font-size: 30px; color: #fff">TRIPPARTNER.COM</p>
                <p class="text-right" style="font-family: Cambria; font-size: 20px; color: #fff">Gunakan Sistem Rekomendasi untuk Memilih<br> Bus Terbaik</p>
                <br>
                <a href="{{url('/boking')}}" class="btn" role="button" style="font-family: Cambria; margin-top: 30px; background-color: #f96d01; color: #ffffff; margin-left: 800px;">BOOKING BUS</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
    </section>
    <!-- End Carousel -->

    <!-- WHY US -->
    <section id="mengapa">
        <div class="container-fluid content-mengapa" style="margin-top: 30px;">
            <p class="title text-center">MENGAPA MEMILIH <b> TRIPPARTNER.COM?</b></p>
            <p class="subtitle text-center">Kami memberikan solusi
            terbaik untuk kebutuhan transportasi anda</p>
            <hr style="width: 1000px; border-bottom: 1px solid #25aae2;">
            <div class="row" style="margin-top: 40px;">
                <div class="col-md-4">
                    <div class="image bg-color-blue text-center">
                        <img src="{{url('assets/img/icon/high-five.png')}}" class="img-fluid"><br><br>
                        <p class="title-manfaat text-center">TERPERCAYA</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image text-center">
                        <img src="{{url('assets/img/icon/support.png')}}" class="img-fluid"><br><br>
                        <p class="title-manfaat text-center">PELAYANAN TERBAIK</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image bg-color-blue text-center">
                        <img src="{{url('assets/img/icon/hand.png')}}" class="img-fluid"><br><br>
                        <p class="title-manfaat text-center">HARGA TERBAIK</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ARMADA -->
    <section id="armada">
      <div class="container-fluid" style="margin-top: 40px;">
        <p class="title text-center"><b>ARMADA KAMI</b></p>
        <p class="subtitle text-center">Kami memberikan solusi
        terbaik untuk kebutuhan transportasi anda</p>
        <hr style="width: 1000px; border-bottom: 1px solid #25aae2;">
        <div class="row">
          <div class="col-md-4 text-center" style="padding: 30px;">
            <div class="card" style="width:400px">
              <img class="card-img-top" src="{{url('assets/img/bus1.jpg')}}" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Small Bus</h4>
                <p class="card-description">Small Bus merupakan ukuran bus terkecil didalam pemesanan, Bus yang memiliki kapasitas 17-22 seat.</p>
                <a href="{{url('/armada')}}" class="btn btn-sm card-btn" role="button">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-center" style="padding: 30px;">
            <div class="card" style="width:400px">
              <img class="card-img-top" src="{{url('assets/img/bus1.jpg')}}" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Medium Bus</h4>
                <p class="card-description">Medium Bus merupakan jenis bus menengah yang dimiliki, yang memiliki kapasitas 30-45 seat.</p>
                <a href="{{url('/armada')}}" class="btn btn-sm card-btn" role="button">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-center" style="padding: 30px;">
            <div class="card" style="width:400px">
              <img class="card-img-top" src="{{url('assets/img/bus1.jpg')}}" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Big Bus</h4>
                <p class="card-description">Big bus merupakan bus dengan ukuran paling besar yang bisa dipesan, memiliki kapasitas 49-60 seat.</p>
                <a href="{{url('/armada')}}" class="btn btn-sm card-btn" role="button">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Booking Now -->
    <section id="booking">
        <div class="container-fluid booking" style="background-image: url({{url('assets/img/booking.jpg')}}); background-size: cover; margin-top: 30px; height: 150px; width: auto;">
          <div class="row">
            <div class="col-md-6">
              <p class="title-booking">
                <b> BOOKING SEKARANG. . . </b></p>
              <p class="subtitle-booking">Kami memberikan solusi
                terbaik untuk kebutuhan transportasi anda</p>
            </div>
            <div class="col-md-6">
              <a href="{{url('/boking')}}" class="btn" role="button" style="width: 384px; height: 68px; margin-top: 40px; margin-left: 150px; font-family: Cambria; background-color: #f96d01; color: #ffffff; padding-top: 20px;">BOOKING ONLINE SEKARANG</a>
            </div>
          </div>
        </div>
    </section>

    <!-- FOOTER -->
    @yield('footer-frontend')
    <!-- end Footer -->

    <!-- script -->
    @yield('script-frontend')
    <!-- endscript -->
    <script>
    $.getJSON('http://dev.farizdotid.com/api/daerahindonesia/provinsi',function(data){
      console.log(data);
    });
    </script>
  </body>
</html>
