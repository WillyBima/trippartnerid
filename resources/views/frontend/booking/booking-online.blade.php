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
                <p class="title-header"><b>BOOKING BUS</b></p>
                <p class="subtitle-header"> Beranda > Booking Bus</p>
            </div>
        </section>

        <!-- booking now -->
        <section id="booking">
            <div class="container-fluid" style="background-image: url({{url('assets/img/searching.png')}}); background-size: cover;padding: 20px; font-family: Cambria; margin-bottom: 50px">
              <form action="{{url('/cari-bus')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6">

                      </div>
                      <div class="col-md-6">

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4"></div>
                      <div class="col-md-4 text-center">
                        <div class="form-group">
                          <label>Rute Perjalanan</label>
                          <select class="form-control" name="kota_asal">
                            @foreach($rute as $kota_asal)
                              <option value="{{$kota_asal->nama_kota}}">{{$kota_asal->nama_kota}}</option>
                            @endforeach
                          </select><br>
                          <select class="form-control" name="kota_tujuan">
                            @foreach($rute as $kota_tujuan)
                              <option value="{{$kota_tujuan->nama_kota}}">{{$kota_tujuan->nama_kota}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <select name="jenis_bus" class="form-control">
                            <option value="">Pilih Jenis Bus yang di inginkan</option>
                            <option value="Small Bus">Small Bus</option>
                            <option value="Medium Bus">Medium Bus</option>
                            <option value="Big Bus">Big Bus</option>
                          </select>
                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modaljenis" style="margin-top: 7px; margin-left: 380px;">
                            <span class="fa fa-exclamation-circle color-white"></span>
                          </button>
                        </div>
                        <div class="form-group">
                            <input type="text" name="harga" class="form-control" placeholder="Harga Bus yang di inginkan" required>
                        </div>
                        <div class="form-group">
                          <select name="fasilitas" class="form-control">
                            <option value="">Pilih Fasilitas</option>
                            <option value="1">Fasilitas kelas 1</option>
                            <option value="2">Fasilitas kelas 2</option>
                            <option value="3">Fasilitas kelas 3</option>
                          </select>
                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" style="margin-top: 7px; margin-left: 380px;">
                            <span class="fa fa-exclamation-circle color-white"></span>
                          </button>
                        </div>
                        <button class="btn btn-lg" role="button" style="font-family: Cambria; background-color: #f96d01; color: #ffffff; margin-top: 30px;"><span class="fa fa-search color-white"></span> Cari Sekarang</button>
                      </div>
                      <div class="col-md-4"></div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Fasilitas Bus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Fasilitas Kelas 1 : memiliki 1-3 Fasilitas</p>
                            <p>Fasilitas Kelas 2 : memiliki 4-6 Fasilitas</p>
                            <p>Fasilitas Kelas 3 : memiliki 7-n Fasilitas</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="modaljenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Jenis Bus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Small Bus   : memiliki 18-20 seat</p>
                            <p>Medium Bus  : memiliki 30-34 seat</p>
                            <p>Big Bus     : memiliki 49-55 seat</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
                <div class="row" style="margin-top: 50px; margin-bottom: 30px;">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-8 text-center">
                    <div class="alert alert-warning">
                      <a style="font-size: 15px; font-family: Cambria; color: #25aae2;">Harap pastikan perjalanan Anda terselesaikan pada periode yang dipilih</a>
                      <!-- <p class="" style="font-size: 10px; font-family: Century Gothic; color: #25aae2;">Harap pastikan perjalanan Anda terselesaikan pada periode yang dipilih </p> -->
                    </div>
                  </div>
                  <div class="col-md-2">

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
