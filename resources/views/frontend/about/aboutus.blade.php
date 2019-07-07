<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- title -->
    <title>Tentang Kami</title>
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
                <p class="title-header"><b>Tentang Kami</b></p>
                <p class="subtitle-header"> Beranda > Tentang Kami </p>
            </div>
        </section>

    <!-- Content -->
    <section>
        <div class="container-fluid">
            <div class="row">
              <div class="deskripsi-triplan" style="padding: 20px;">
                <p class="title-about"><b>TripPartner.com</b></p>
                <p class="desc-about">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibend
                  um auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet
                  mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat
                  consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                  Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet
                  nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut
                  aliquam massa nisl quis neque. Suspendisse in orci enim.</p><br>
                  <hr style="width: auto; border-bottom: 1px solid #25aae2;">
              </div>
              </div>
        </div>
    </section>

    <!-- WHY US -->
    <section id="mengapa">
        <div class="container-fluid content-mengapa" style="margin-top: 30px;">
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

    <!-- statistik -->
    <section>
      <div class="container-fluid" style="margin-top: 50px;">
        <div class="row">
          <div class="col-md-3" style="text-align: center; padding-right: 0px;">
            <p class="title-armada"><b>Fun Fact about TripPartner</b></p>
          </div>
          <div class="col-md-9" style="margin-top: 4px; padding-left: 0px; padding-right: 0px;">
            <hr style="width: 920px; border-bottom: 2px solid #25aae2;">
          </div>
        </div>
        <div class="row" style="margin-top: 50px;margin-bottom: 50px;">
          <div class="col-md-3">
            <div class="image text-center">
                <img src="{{url('assets/img/icon/cal.png')}}" class="img-fluid"><br><br>
                <p class="title-fact text-center" style="margin-bottom: 0px;">5+</p>
                <p class="subtitle-fact text-center">Tahun Pengalaman</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image text-center">
                <img src="{{url('assets/img/icon/icon.png')}}" class="img-fluid"><br><br>
                <p class="title-fact text-center" style="margin-bottom: 0px">100+</p>
                <p class="subtitle-fact text-center">Armada Transportasi</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image text-center">
                <img src="{{url('assets/img/icon/passenger.png')}}" class="img-fluid"><br><br>
                <p class="title-fact text-center" style="margin-bottom: 0px;">2000+</p>
                <p class="subtitle-fact text-center">Jumlah Penumpang</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image text-center">
                <img src="{{url('assets/img/icon/clipboard-with-pencil-.png')}}" class="img-fluid"><br><br>
                <p class="title-fact text-center" style="margin-bottom: 0px">240+</p>
                <p class="subtitle-fact text-center">Jumlah Order</p>
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
