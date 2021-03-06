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
                <p class="subtitle-header"> Beranda > Booking Online > Hasil Pencarian</p>
            </div>
        </section>

        <!-- booking now -->
        <section>
          <div class="container-fluid" style="margin-bottom: 30px;">
            @if(count($hasil_array) < 1)
            <div class="contactInfo text-center" style="font-family: Cambria; border: solid 1px #95a5a6;; padding: 70px; border-radius: 10px; margin-bottom: 30px;">
              <p style="text-transform: capitalize;">Bus yang Anda Inginkan tidak ditemukan</p>
              <p>Cek Pencarian Anda !!!</p>
              <a href="{{url('/boking')}}" class="btn btn-sm card-btn" role="button">Lihat Selengkapnya</a>
            </div>
            @else
            <div class="row" style="margin-top: 20px;">
              <div class="col-md-12 text-center">
                <div class="alert alert-primary">
                  <a style="font-size: 14px; font-family: Cambria; color: #25aae2;">Menampilkan bis yang melayani rute Depok City, West Java, Indonesia ke Bandung, Bandung City, West Java pada 12/01/2019 - 17/01/2019</a>
                </div>
              </div>
            </div>
            <div class="row text-center" style="margin-top: 20px;">
              <div class="col-md-12">
                <p class="title" style="font-family: Cambria; font-size: 28px; color: #25aae2">Hasil Pencarian Sistem Rekomendasi</p>
                <hr style="width: 1000px; border-bottom: 1px solid #25aae2;">
              </div>
            </div>
            <?php $a = 0; ?>
            @for($i=0; $i<count($hasil_array); $i++)
            <div class="row" style="font-family: Cambria; padding-left: 60px; padding-right: 60px; margin-top: 20px;">
              <div class="col-md-12" style="border: solid 1px #95a5a6;; padding: 30px; border-radius: 10px;">
                <div class="row">
                  <div class="col-md-3">
                    <p><b>Nama Bus</b></p>
                    <p>{{$hasil_array[$i]['nama_bus']}}</p>
                  </div>
                  <div class="col-md-3">
                    <p><b>Rute Perjalanan</b></p>
                    <p>{{$hasil_array[$i]['kota_asal']}} - {{$hasil_array[$i]['kota_tujuan']}}</p>
                  </div>
                  <div class="col-md-3 text" style="padding-left: 40px;">
                    <p><b>Jenis Bus</b></p>
                    <p>{{$hasil_array[$i]['jenis']}}</p>
                  </div>
                  <div class="col-md-3" style="text-align: center;">
                    <p style="font-size: 20px; margin-top: 10px;"><b>RP. {{number_format($hasil_array[$i]['harga'], 2)}}</b>/hari</p>

                    <a href="{{url('/boking/booking-now/'.$hasil_array[$i]['slug'])}}" class="btn btn-sm card-btn" role="button">Lihat Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
            @endfor
            @endif
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
