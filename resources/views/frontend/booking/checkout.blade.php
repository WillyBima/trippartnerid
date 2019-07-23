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
            <p class="subtitle-header"> Beranda > Booking Online > Detail Pemesanan</p>
        </div>
    </section>

    <!-- Content -->
    <section>
      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-12">
            <p class="title-detail">Detail Pemesanan Bus</p>
            <hr style="width: 1250px; border-bottom: 1px solid #25aae2;">
          </div>
        </div>

        <div class="row" style="margin-bottom: 30px;">
          <div class="col-md-12">
            <form role="form" action="{{url('/boking/submit-order')}}" method="post">
              {{ csrf_field() }}
              <div class="row text-center">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <input type="text" value="{{Auth::guard('users')->user()->nama_lengkap}}" name="nama" class="form-control mb-2 mr-sm-2" placeholder="Nama anda">
                <input type="email" value="{{Auth::guard('users')->user()->email}}" name="email" class="form-control mb-2 mr-sm-2" placeholder="Email anda">
                <input type="text" value="{{$dataorder['no_hp']}}" name="no_hp" class="form-control mb-2 mr-sm-2" placeholder="Nomor Handphone anda">
                <input type="text" value="{{$dataorder['nama_bus']}}"name="nama_bus" class="form-control mb-2 mr-sm-2" placeholder="Nama Bus">
                <input type="text" value="Rp. {{number_format($dataorder['harga'],2)}}" name="harga" class="form-control mb-2 mr-sm-2" placeholder="Harga Bus">
                <input type="text" value="{{$dataorder['alamat_jemput']}}" name="alamat_jemput" class="form-control mb-2 mr-sm-2" placeholder="Kota Asal">
                <input type="text" value="{{$dataorder['alamat_tujuan']}}" name="alamat_tujuan" class="form-control mb-2 mr-sm-2" placeholder="Kota Tujuan">
                <input type="text" value="{{$dataorder['tanggal_pergi']}}" name="tanggal_pergi" class="form-control mb-2 mr-sm-2" placeholder="Kota Tujuan">
                <input type="text" value="{{$dataorder['tanggal_pulang']}}" name="tanggal_pulang" class="form-control mb-2 mr-sm-2" placeholder="Kota Tujuan">

                <button type="submit" class="btn btn-block" style="background: #f96d01; color: #fff">Submit Pemesanan</button>
              </div>
              <div class="col-md-3"></div>
              </div>
            </form>
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
