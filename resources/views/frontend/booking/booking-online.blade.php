<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- title -->
    <title>Booking Online</title>
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

    <!-- Header Title -->
        <section id="header">
            <div class="container-fluid" style="background-image: url({{url('assets/img/header.jpg')}});
            margin-bottom: 40px;
            background-size: cover;
            height: auto;
            padding: 25px;">
                <p class="title-header"><b>BOOKING ONLINE</b></p>
                <p class="subtitle-header"> Beranda > Booking Online</p>
            </div>
        </section>

        <!-- booking now -->
        <section id="booking">
            <div class="container-fluid" style="background-image: url({{url('assets/img/searching.png')}}); background-size: cover;padding: 20px;">
                <div class="row" style="padding: 20px;">
                  <div class="col-md-1"></div>
                    <div class="col-md-5" style="margin-top: 30px;">
                      <div class="form-group">
                          <input id="nama" type="text" class="form-control" placeholder="Kota Asal">
                      </div>
                      <div class="row">
                        <div class="col-md-5">

                        </div>
                        <div class="col-md-7">
                          <div class="form-group">
                              <input type="date" class="form-control" placeholder="Tanggal Berangkat">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5" style="margin-top: 30px;">
                      <div class="form-group">
                          <input id="nama" type="text" class="form-control" placeholder="Kota Tujuan">
                      </div>
                      <div class="row">
                        <div class="col-md-7">
                          <div class="form-group">
                              <input type="date" class="form-control" placeholder="Tanggal Berangkat">
                          </div>
                        </div>
                        <div class="col-md-5">

                        </div>
                      </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                  <div class="col-md-4">

                  </div>
                  <div class="col-md-4 text-center">
                    <div class="form-group">
                        <input id="nama" type="text" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <input id="nama" type="text" class="form-control" placeholder="Nama">
                    </div>
                    <a href="#" class="btn btn-lg" role="button" style="font-family: Century Gothic; background-color: #f96d01; color: #ffffff; margin-top: 30px;"><span class="fa fa-search color-white"></span> Cari Sekarang</a>
                  </div>
                  <div class="col-md-4">

                  </div>
                </div>
                <div class="row" style="margin-top: 50px; margin-bottom: 30px;">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-8 text-center">
                    <div class="alert alert-warning">
                      <a style="font-size: 15px; font-family: Century Gothic; color: #25aae2;">Harap pastikan perjalanan Anda terselesaikan pada periode yang dipilih</a>
                      <!-- <p class="" style="font-size: 10px; font-family: Century Gothic; color: #25aae2;">Harap pastikan perjalanan Anda terselesaikan pada periode yang dipilih </p> -->
                    </div>
                  </div>
                  <div class="col-md-2">

                  </div>
                </div>
            </div>
        </section>

        <section>
          <div class="container-fluid" style="margin-bottom: 30px;">
            <div class="row" style="margin-top: 20px;">
              <div class="col-md-12 text-center">
                <div class="alert alert-primary">
                  <a style="font-size: 14px; font-family: Century Gothic; color: #25aae2;">Menampilkan bis yang melayani rute Depok City, West Java, Indonesia ke Bandung, Bandung City, West Java pada 12/01/2019 - 17/01/2019</a>
                </div>
              </div>
            </div>
            <div class="row text-center" style="margin-top: 20px;">
              <div class="col-md-12">
                <p class="title" style="font-family: Century Gothic; font-size: 28px; color: #25aae2">Hasil Pencarian Sistem</p>
                <hr style="width: 1000px; border-bottom: 1px solid #25aae2;">
              </div>
            </div>

            <div class="row" style="margin-left: 30px; margin-top: 20px;">
              <div class="col-md-4">
                <div class="card" style="width:360px">
                  <img class="card-img-top" src="{{url('assets/img/bus1.jpg')}}" alt="Card image" style="width:100%">
                  <p class="title text-center" style="font-family: Century Gothic; font-size: 25px; color: #25aae2; margin-top: 10px;">Bus Pariwisata 1</p>
                  <div class="row" style="margin-left:0px;">
                    <div class="col-md-12" style="padding-left: 5px;">
                      <p style="font-family: Century Gothic; font-size: 15px; color: #25aae2">
                        <i class="fa fa-users" style="color: #f96d01; font-size: 18px;"></i> 47 Seat
                      </p>
                      <p style="font-family: Century Gothic; font-size: 15px; color: #25aae2">
                        <i class="fa fa-asterisk" style="color: #f96d01; font-size: 18px;"></i> AC Executive Class
                      </p>
                      <p style="font-family: Century Gothic; font-size: 15px; color: #25aae2">
                        <i class="fa fa-wifi" style="color: #f96d01; font-size: 18px;"></i> On Wifi
                      </p>
                      <p style="font-family: Century Gothic; font-size: 15px; color: #25aae2">
                        <i class="fa fa-bed" style="color: #f96d01; font-size: 18px;"></i> Bantal dan Selimut
                      </p>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-12">
                      <button type="button" class="btn btn-outline-info">Rp. 20.000.000</button><br>
                      <a href="#" class="btn" role="button" style="margin-top: 15px; margin-bottom: 20px; font-family: Century Gothic; background-color: #f96d01; color: #ffffff;">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="width:360px">
                  <img class="card-img-top" src="{{url('assets/img/bus1.jpg')}}" alt="Card image" style="width:100%">
                  <p class="title text-center" style="font-family: Century Gothic; font-size: 25px; color: #25aae2; margin-top: 10px;">Bus Pariwisata 2</p>
                  <div class="row" style="margin-left:0px;">
                    <div class="col-md-12" style="padding-left: 5px;">
                      <p style="font-family: Century Gothic; font-size: 15px; color: #25aae2">
                        <i class="fa fa-users" style="color: #f96d01; font-size: 18px;"></i> 47 Seat
                      </p>
                      <p style="font-family: Century Gothic; font-size: 15px; color: #25aae2">
                        <i class="fa fa-asterisk" style="color: #f96d01; font-size: 18px;"></i> AC Executive Class
                      </p>
                      <p style="font-family: Century Gothic; font-size: 15px; color: #25aae2">
                        <i class="fa fa-wifi" style="color: #f96d01; font-size: 18px;"></i> On Wifi
                      </p>
                      <p style="font-family: Century Gothic; font-size: 15px; color: #25aae2">
                        <i class="fa fa-bed" style="color: #f96d01; font-size: 18px;"></i> Bantal dan Selimut
                      </p>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-12">
                      <button type="button" class="btn btn-outline-info">Rp. 20.000.000</button><br>
                      <a href="#" class="btn" role="button" style="margin-top: 15px; margin-bottom: 20px; font-family: Century Gothic; background-color: #f96d01; color: #ffffff;">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="width:360px">
                  <img class="card-img-top" src="{{url('assets/img/bus1.jpg')}}" alt="Card image" style="width:100%">
                  <p class="title text-center" style="font-family: Century Gothic; font-size: 25px; color: #25aae2; margin-top: 10px;">Bus Pariwisata 3</p>
                  <div class="row" style="margin-left:0px;">
                    <div class="col-md-12" style="padding-left: 5px;">
                      <p style="font-family: Century Gothic; font-size: 15px; color: #25aae2">
                        <i class="fa fa-users" style="color: #f96d01; font-size: 18px;"></i> 47 Seat
                      </p>
                      <p style="font-family: Century Gothic; font-size: 15px; color: #25aae2">
                        <i class="fa fa-asterisk" style="color: #f96d01; font-size: 18px;"></i> AC Executive Class
                      </p>
                      <p style="font-family: Century Gothic; font-size: 15px; color: #25aae2">
                        <i class="fa fa-wifi" style="color: #f96d01; font-size: 18px;"></i> On Wifi
                      </p>
                      <p style="font-family: Century Gothic; font-size: 15px; color: #25aae2">
                        <i class="fa fa-bed" style="color: #f96d01; font-size: 18px;"></i> Bantal dan Selimut
                      </p>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-12">
                      <button type="button" class="btn btn-outline-info">Rp. 20.000.000</button><br>
                      <a href="#" class="btn" role="button" style="margin-top: 15px; margin-bottom: 20px; font-family: Century Gothic; background-color: #f96d01; color: #ffffff;">Lihat Selengkapnya</a>
                    </div>
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
