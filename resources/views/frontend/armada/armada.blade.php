<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- title -->
    <title>Armada</title>
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
            margin-bottom: 40px;
            background-size: cover;
            height: auto;
            padding: 25px;">
                <p class="title-header"><b>ARMADA</b></p>
                <p class="subtitle-header"> Beranda > Armada</p>
            </div>
        </section>

        <!-- PO ARMADA -->
        <section id="armada">
          <div class="container-fluid" style="margin-bottom: 30px;">
            <div class="row" style="margin-left: 30px;">
              @foreach($po as $armada)
              <div class="col-md-4">
                <div class="card" style="width:399px; margin-bottom: 30px;">
                  <img class="card-img-top" src="{{url('img/po/'.$armada->gambar_po)}}" alt="Card image" style="width: 398px; height: 369px;">
                  <div class="card-body text-center">
                    <p class="card-title" style="font-family: Cambria; text-transform: uppercase;">{{$armada->nama_po}}</p><br>
                    <a href="{{url('/armada/detail-armada/'.$armada->slug)}}" class="btn btn-sm card-btn" role="button">Lihat Selengkapnya</a>
                  </div>
                </div>
              </div>
              @endforeach
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
