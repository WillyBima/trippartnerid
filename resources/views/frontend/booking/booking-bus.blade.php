<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- title -->
    <title>Booking Sekarang</title>
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

    <!-- Header -->
    <section id="header">
        <div class="container-fluid" style="background-image: url({{url('assets/img/header.jpg')}});
        margin-bottom: 30px;
        background-size: cover;
        height: auto;
        padding: 25px;">
            <p class="title-header"><b>BOOKING ONLINE</b></p>
            <p class="subtitle-header"> Beranda > Booking Online > Booking Sekarang</p>
        </div>
    </section>

    <!-- Content -->
    <section>
      <div class="container-fluid" style="margin-bottom: 50px;">
        @foreach($databus as $db)
        <div class="row text-center">
          <div class="col-md-12">
            <p class="title-detail">Detail {{$db->nama_bus}}</p>
            <hr style="width: 1250px; border-bottom: 1px solid #25aae2;">
          </div>
        </div>
        <div class="row">

          <div class="col-md-6" style="padding-left: 40px;">
            <div id="demo" class="carousel slide" data-ride="carousel">
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
                <li data-target="#demo" data-slide-to="5"></li>
              </ul>
              <div class="carousel-inner">

                <div class="carousel-item active text-center">
                  <img src="{{url('img/bus/'.$db->gambar_bus)}}" alt="Los Angeles" style="width: 580px;" height="auto">
                </div>
                <div class="carousel-item text-center">
                  <img src="{{url('img/bus/'.$db->gambar_bus)}}" alt="Chicago" style="width: 580px;" height="auto">
                </div>
                <div class="carousel-item text-center">
                  <img src="{{url('img/bus/'.$db->gambar_bus)}}" alt="New York" style="width: 580px;" height="auto">
                </div>
                <div class="carousel-item text-center">
                  <img src="{{url('img/bus/'.$db->gambar_bus)}}" alt="New York" style="width: 580px;" height="auto">
                </div>
                <div class="carousel-item text-center">
                  <img src="{{url('img/bus/'.$db->gambar_bus)}}" alt="New York" style="width: 580px;" height="auto">
                </div>
              @endforeach
              </div>
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <p class="title-detail-bus"><b>Fasilitas Bus</b></p>
              </div>
            </div>

            <div class="row" style="">

              <div class="col-md-12">

                <div class="row">
                  @foreach($datafasilitasbus as $fasilitas)
                  <div class="col-md-3">
                    <p>
                      <p style="font-family: Cambria; font-size: 18px; color: #25aae2"><i class="{{$fasilitas->icon}}"></i>{{$fasilitas->nama_fasilitas}}</p>
                    </p>
                  </div>
                  @endforeach
                </div>
              </div>

            </div>
            <div class="row" style="font-family: Cambria; font-size: 18px; color: #25aae2">
              <div class="col-md-6">
                <p class="title-detail-bus" style="margin-top: 10px;"><b>Harga Sewa Bus</b></p>
                @foreach($harga as $harga)
                <p>{{$harga->kota_asal}} - {{$harga->kota_tujuan}} : Rp.{{$harga->harga}}/hari</p>
                @endforeach
              </div>
              <div class="col-md-6">

              </div>
            </div>
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
  </body>
</html>
