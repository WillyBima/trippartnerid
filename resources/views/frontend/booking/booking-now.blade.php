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
      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-12">
            <p class="title-detail">Detail Armada</p>
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
                @foreach($databus as $db)
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

            <div class="row" style="margin-top: 20px;">

              <div class="col-md-12">

                <div class="row">
                  @foreach($datafasilitasbus as $fasilitas)
                  <div class="col-md-3">
                    <p>
                      <i class="{{$fasilitas->icon}}" style="color: #f96d01; font-size: 50px;"></i>
                      <p style="font-family: Century Gothic; font-size: 18px; color: #25aae2">{{$fasilitas->nama_fasilitas}}</p>
                    </p>
                  </div>
                  @endforeach
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Form -->
    <section>
      <div class="container-fluid" style="margin-top: 60px; margin-bottom: 30px;">
        <div class="row text-center">
          <div class="col-md-12">
            <p class="title-form" style="margin-bottom: 0px;">Booking Sekarang Juga !</p>
            <p class="subtitle-form">harap isi data diri anda dengan benar</p>
            <hr style="width: 1000px; border-bottom: 1px solid #25aae2;">
          </div>
        </div>

          <form role="form" action="{{url('/boking/submit-order')}}" method="post">
            {{ csrf_field() }}
            @foreach($databus as $data)
            <div class="row text-center">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <input type="text" name="nama" class="form-control mb-2 mr-sm-2" placeholder="Nama anda">
              <input type="email" name="email" class="form-control mb-2 mr-sm-2" placeholder="Email anda">
              <input type="text" name="no_hp" class="form-control mb-2 mr-sm-2" placeholder="Nomor Handphone anda">
              <input type="text" value="{{$data->nama_bus}}"name="nama_bus" class="form-control mb-2 mr-sm-2" placeholder="Nama Bus">
              <input type="text" value="900000" name="harga" class="form-control mb-2 mr-sm-2" placeholder="Harga Bus">
              <input type="text" name="alamat_jemput" class="form-control mb-2 mr-sm-2" placeholder="Kota Asal">
              <input type="text" name="alamat_tujuan" class="form-control mb-2 mr-sm-2" placeholder="Kota Tujuan">

              <div class="form-group">
                 <label for="" style="">Tanggal Berangkat</label>
                 <input class="form-control" name="tanggal_pergi" type="date" value="">
              </div>
              <div class="form-group">
                 <label for="" style="">Tanggal Pulang</label>
                 <input class="form-control" name="tanggal_pulang" type="date" value="">
              </div>
              <button type="submit" class="btn btn-block" style="background: #f96d01; color: #fff">Submit</button>            </div>
            <div class="col-md-3"></div>
            </div>
            @endforeach
          </form>
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
