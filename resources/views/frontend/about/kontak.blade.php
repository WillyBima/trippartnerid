<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- title -->
    <title>Kontak Kami</title>
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
                <p class="title-header"><b>Kontak Kami</b></p>
                <p class="subtitle-header"> Beranda > Kontak Kami </p>
            </div>
        </section>

    <!-- Content -->
      <section id="kontak">
          <div class="container-fluid content-contact" style="">
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-5">
                      <p class="title-contact"><b>Info Kontak Kami</b></p>
                      <P class="subtitle-contact">Silahkan hubungi dan kunjungi jika anda sempat</P>
                      <hr style="width: auto; border-bottom: 2px solid #25aae2;"><br>
                          <div class="row">
                              <div class="col-md-6">
                                <div class="row">
                                  <div class="col-md-3">
                                    <img src="{{url('assets/img/icon/phone-receiver.png')}}" class="img-fluid" alt="" style="margin-top: 10px;">
                                  </div>
                                  <div class="col-md-9">
                                    <p class="title-phone"><b>Phone</b><br>0812 6865 0827</p><br>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="row">
                                  <div class="col-md-3">
                                    <img src="{{url('assets/img/icon/close-envelope.png')}}" class="img-fluid" alt="" style="margin-top: 10px;">
                                  </div>
                                  <div class="col-md-9">
                                    <p class="title-email"><b>E-mail</b><br>tripPartner.tour.id</p><br>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <hr style="width: auto; border-bottom: 2px solid #25aae2;">
                          <br>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-3">
                                  <img src="{{url('assets/img/icon/loc.png')}}" class="img-fluid" alt="" style="margin-top: 10px;">
                                </div>
                                <div class="col-md-9">
                                  <p class="title-alamat"><b>Location:</b><br>Jl.Kalibata tengah no.35B Kalibata - Pancoran Jakarta Selatan, DKI Jakarta,
                                  12740</p><br>
                                </div>
                              </div>
                              <div class="col-md-6">

                              </div>
                            </div>
                          </div>

                          <hr style="width: auto; border-bottom: 2px solid #25aae2;">
                          <p class="title-phone" style="margin-bottom: 0px;"><b>Ikuti Kami dalam: </b></p><br>
                          <a class="" href=""><img src="{{url('assets/img/icon/facebook-logo-button.png')}}" class="img-fluid" alt=""></a>
                          <a class="" href=""><img src="{{url('assets/img/icon/twitter-logo-button.png')}}" class="img-fluid" alt=""></a>
                          <a class="" href=""><img src="{{url('assets/img/icon/instagram.png')}}" class="img-fluid" alt=""></a>
                          <a class="" href=""><img src="{{url('assets/img/icon/google-plus-logo-button.png')}}" class="img-fluid" alt=""></a>
                          <br>
                  </div>

                  <div class="col-md-5">
                    <p class="title-contact" style="margin-bottom: 0px;"><b>Kritik dan Saran Anda</b></p>
                    <P class="subtitle-contact" style="margin-bottom: 15px;">Silahkan hubungi dan kunjungi jika anda sempat</P>
                    <form role="form" action="{{url('/kontak/submitKritik')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="box-body">
                        <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <input type="text" class="form-control" name="nama" placeholder="Nama ..." required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <input type="email" class="form-control" name="email" placeholder="Email ..." required>
                              </div>
                          </div>
                        </div><br>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject ..." required>
                        </div><br>
                        <div class="form-group">
                            <textarea id="keterangan" name="keterangan" class="form-control" rows="8" style="resize: none;" placeholder="Tuliskan Keterangan" required></textarea>
                        </div>
                      </div>
                        <button type="submit" class="btn btn-block" style="background: #f96d01; color: #fff">Submit</button>
                    </form>
                      <div class="col-md-1">
                  </div>
              </div>
              <div class="maps" style="margin-top: 30px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15865.266547173887!2d106.98614006977542!3d-6.221913500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c0b4576be81%3A0x7d499c5a82a98532!2sTitian+Indah!5e0!3m2!1sid!2sid!4v1560923378645!5m2!1sid!2sid" width="1349px" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
