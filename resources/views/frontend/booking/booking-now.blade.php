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
                <p>Harga Sewa Bus</p>
                <!-- @foreach($harga as $harga) -->
                <p>{{$harga->kota_asal}} - {{$harga->kota_tujuan}} : Rp.{{number_format($harga->harga, 2)}}/hari</p>
                <!-- @endforeach -->
              </div>
              <div class="col-md-6">

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
        @if(!Auth::guard('users')->user())
          <div class="row text-center">
            <div class="col-md-12">
              <p class="title-form">OOOPPsss..</p>
              <p class="title-form">Login Terlebih Dahulu</p>
              <a href="{{url('/login')}}" class="btn" role="button"
              style="background-color: #f96d01; color: #ffffff;
              font-family: Cambria; margin-left: 5px;">LOGIN</a>
            </div>
          </div>
        @else
          <form role="form" action="{{url('/boking/submit-order/checkout')}}" method="post">
            {{ csrf_field() }}
            <div class="row text-center">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group row">
                <label for="">Nama Pemesan</label>
                <input type="text" value="{{Auth::guard('users')->user()->nama_lengkap}}" name="nama" class="form-control mb-2 mr-sm-2" placeholder="Nama anda" required disabled>
              </div>
              <div class="form-group row">
                <label for="">Email Pemesan</label>
                <input type="email" value="{{Auth::guard('users')->user()->email}}" name="email" class="form-control mb-2 mr-sm-2" placeholder="Email anda" required disabled>
              </div>
              <div class="form-group row">
                <label for="">Nomor Handphone</label>
                <input type="text" name="no_hp" class="form-control mb-2 mr-sm-2" placeholder="Nomor Handphone anda" required>
              </div>
              <div class="form-group row">
                <label for="">Nama Bus</label>
                <input type="text" value="{{$harga->nama_bus}}"name="nama_bus" class="form-control mb-2 mr-sm-2" placeholder="Nama Bus" required>
              </div>
              <div class="form-group row">
                <label for="">Harga Sewa</label>
                <input type="text" value="{{$harga->harga}}" name="harga" class="form-control mb-2 mr-sm-2" placeholder="Harga Bus" required>
              </div>
              <div class="form-group row">
                <label for="">Kota Asal</label>
                <input type="text" value="{{$harga->kota_asal}}" name="alamat_jemput" class="form-control mb-2 mr-sm-2" placeholder="Kota Asal" required>
              </div>
              <div class="form-group row">
                <label for="">Kota Tujuan</label>
                <input type="text" value="{{$harga->kota_tujuan}}" name="alamat_tujuan" class="form-control mb-2 mr-sm-2" placeholder="Kota Tujuan" required>
              </div>
              <div class="form-group row">
                 <label for="" style="">Tanggal Berangkat</label>
                 <input id="startDate" class="form-control datepicker" name="tanggal_pergi" type="text" value="" required>
              </div>
              <div class="form-group row">
                 <label for="" style="">Tanggal Pulang</label>
                 <input id="endDate" class="form-control datepicker" name="tanggal_pulang" type="text" value="" required>
              </div>
              <button type="submit" class="btn btn-block" style="background: #f96d01; color: #fff">Submit</button>
            </div>
            <div class="col-md-3"></div>
            </div>
          </form>
        @endif
      </div>
    </section>

    <!-- FOOTER -->
    @yield('footer-frontend')
    <!-- end Footer -->

    <!-- script -->
    @yield('script-frontend')
    <script>
        var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        $('#startDate').datepicker({
            uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: today,
            maxDate: function () {
                return $('#endDate').val();
            }
        });
        $('#endDate').datepicker({
            uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: function () {
                return $('#startDate').val();
            }
        });
    </script>
    <!-- endscript -->
  </body>
</html>
