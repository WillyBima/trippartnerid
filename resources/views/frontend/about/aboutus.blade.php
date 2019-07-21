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
                <p class="desc-about">PT. Vallung Pramana Rancang adalah perusahaan biro perjalanan wisata yang didirikan pada tanggal
                   6 Oktober 2015 oleh bapak Iswandi Hanindyo Kusuma sebagai direktur dan ibu Iswanti Nayana sebagai komisaris.
                   Tujuan didirikannya perusahaan ini adalah untuk membantu masyarakat luas dalam memenuhi kebutuhan wisata yang
                   setiap waktu permintaannya semakin banyak. Pada awal pembentukan, hanya ada 3 karyawan saja yang bekerja di
                   PT. Vallung Pramana Rancang.</p>
                   <p class="desc-about">Pada awal berdirinya, PT. Vallung Pramana Rancang memiliki banyak partner dalam menunjang
                     kegiatan umum perusahaan, seperti bekerjasama dengan travel agent, maskapai penerbangan dan hotel – hotel yang
                     tersebar dibeberapa daerah Indonesia. Namun dikarenakan manajemen perusahaan yang kurang baik, di tahun berikutnya
                     PT. Vallung Pramana Rancang tidak mampu lagi dalam melanjutkan kerjasama dengan berbagai pihak, yang mengakibatkan
                     pemutusan kontrak kerjasama. Seiring berjalannya waktu, dan dengan manajemen yang kurang baik dari pemilik sehingga
                     membuat PT. Vallung Pramana Rancang mengalami kemunduran dalam mencapai tujuan perusahaannya.</p>
                     <p class="desc-about">Pada bulan Februari 2017, PT. Vallung Pramana Rancang merekrut 2 orang karyawan baru untuk
                       membantu dalam mendorong perusahaan dalam mencapai tujuannya secara maksimal. Dan pada tahun 2017, pemilik
                       PT. Vallung Pramana Rancang sudah tidak sanggup lagi dalam menjalankan tugasnya sebagai direktur dan komisaris,
                       yang pada akhirnya tugas tersebut dipercayakan kepada kedua karyawan baru tersebut karena dianggap mampu membuat
                       PT. Vallung Pramana Rancang menjadi maju seperti saat pertama didirikan. Terbukti hingga sekarang PT. Vallung Pramana Rancang
                       sudah mulai dikenal dikalangan masyarakat sebagai perusahaan biro perjalanan wisata, tempat reservasi bus pariwisata,
                       dan menjual berbagai paket wisata ke berbagai tempat di pulau Jawa, Bali, dan Lombok.</p>
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
                <p class="title-fact text-center" style="margin-bottom: 0px;">4+</p>
                <p class="subtitle-fact text-center">Tahun Pengalaman</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image text-center">
                <img src="{{url('assets/img/icon/icon.png')}}" class="img-fluid"><br><br>
                <p class="title-fact text-center" style="margin-bottom: 0px">50+</p>
                <p class="subtitle-fact text-center">Armada Transportasi</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image text-center">
                <img src="{{url('assets/img/icon/passenger.png')}}" class="img-fluid"><br><br>
                <p class="title-fact text-center" style="margin-bottom: 0px;">200+</p>
                <p class="subtitle-fact text-center">Jumlah Penumpang</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image text-center">
                <img src="{{url('assets/img/icon/clipboard-with-pencil-.png')}}" class="img-fluid"><br><br>
                <p class="title-fact text-center" style="margin-bottom: 0px">100+</p>
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
