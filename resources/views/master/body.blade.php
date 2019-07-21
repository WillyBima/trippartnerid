@section('header-frontend')
<section id="logo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <a href="{{url('/')}}"><img src="{{url('assets/img/icon/logobaru.png')}}" class="img-fluid" style="width: 180px; height: 59px; margin-top: 17px; margin-left: 100px;"></a>
      </div>

      <div class="col-md-4 text-center">

      </div>

      <div class="col-md-4" style="margin-top: 30px;">
        @if(!Auth::guard('users')->user())
        <a href="{{url('/login')}}" style="font-family: Cambria; font-size: 15px; color: #f96d01;
        margin-left: 130px;"><img src="{{url('assets/img/icon/user.png')}}"
        width="30" height="30" class="" alt="" style=""> USER LOGIN</a>

        <a href="{{url('/daftar')}}" class="btn" role="button"
        style="background-color: #f96d01; color: #ffffff;
        font-family: Cambria; margin-left: 5px;">DAFTAR</a>
        @else
        <a href="{{url('/dashboardUser')}}" style="font-family: Cambria; font-size: 20px; color: #f96d01;
        margin-left: 180px; text-transform: capitalize;"><img src="{{url('assets/img/icon/user.png')}}"
        width="30" height="30" class="" alt="" style="">
          {{Auth::guard('users')->user()->nama_lengkap}}</a>
        @endif
      </div>
    </div>
  </div>
</section>
@endsection

@section('navbar-frontend')
<section id="Navbar">
  <div class="container-fluid" style="padding-left:0px; padding-right: 0px;">
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="margin-top: 10px; background: #25aae2;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars" style="text-align: center; margin-right: 340px;">
          <ul class="nav navbar-nav mr-auto"></ul>
          <ul class="navbar-nav text-center" style="font-family: Cambria;">
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}"><span class="fa fa-home color-white"></span> BERANDA</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/boking')}}"><span class="fa fa-search color-white"></span> BOOKING BUS</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/armada')}}"><span class="fa fa-bus-alt color-white"></span> ARMADA</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/tentang')}}"><span class="fa fa-address-card color-white"></span> TENTANG KAMI</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/kontak')}}"><span class="fa fa-phone-volume color-white"></span> KONTAK KAMI</a>
              </li>
          </ul>
      </div>
    </nav>
  </div>
</section>
@endsection

@section('footer-frontend')
<section>
    <div class="container-fluid content-footer" style="background-image: url({{url('assets/img/footer.jpg')}});">
        <div class="row">
            <div class="col-md-3 text-center" style="margin-top: 12px;">
                <p class="judul" style="font-family: Cambria; font-size: 20px; color: #fff">Profil Perusahaan</p>
                <p class="deskripsi" style="font-family: Cambria; font-size: 14px; color: #fff">PT. Vallung Pramana Rancang adalah perusahaan biro perjalanan wisata yang didirikan pada tanggal
                   6 Oktober 2015 oleh bapak Iswandi Hanindyo Kusuma sebagai direktur dan ibu Iswanti Nayana sebagai komisaris.
                   Tujuan didirikannya perusahaan ini adalah untuk membantu masyarakat luas dalam memenuhi kebutuhan wisata yang
                   setiap waktu permintaannya semakin banyak. Pada awal pembentukan, hanya ada 3 karyawan saja yang bekerja di
                   PT. Vallung Pramana Rancang. </p>
            </div>

            <div class="col-md-3 text-center" style="margin-top: 12px;">
                <p class="judul" style="font-family: Cambria; font-size: 20px; color: #fff">Informasi Perusahaan</p>
                <p class="alamat" style="font-family: Cambria; font-size: 14px; color: #fff">
                Jalan Parkit no.6 Rt.2 Rw.2 Beji Timur Depok</p>
                <p class="nohp" style="font-family: Cambria; font-size: 14px; color: #fff">
                081289765243</p>
                <p class="nohp" style="font-family: Cambria; font-size: 14px; color: #fff">
                081289765243</p>
                <p class="email" style="font-family: Cambria; font-size: 14px; color: #fff">
                triplan.tour@gmail.com</p>
            </div>

            <div class="col-md-3 text-center" style="margin-top: 12px;">
                <p class="judul" style="font-family: Cambria; font-size: 20px; color: #fff">Link Navbar</p>
                <a href="{{url('/')}}" style="letter-spacing: 2px; font-family: Cambria; font-size: 14px; color: #fff">Beranda</a><br>
                <a href="{{url('/boking')}}" style="letter-spacing: 2px; font-family: Cambria; font-size: 14px; color: #fff">Booking Online</a><br>
                <a href="{{url('/armada')}}" style="letter-spacing: 2px; font-family: Cambria; font-size: 14px; color: #fff">Armada</a><br>
                <a href="{{url('/kontak')}}" style="letter-spacing: 2px; font-family: Cambria; font-size: 14px; color: #fff">Tentang Kami</a><br>
                <a href="{{url('/tentang')}}" style="letter-spacing: 2px; font-family: Cambria; font-size: 14px; color: #fff">Kontak Kami</a>
            </div>

            <div class="col-md-3 text-center" style="margin-top: 12px;">
                <p class="judul" style="font-family: Cambria; font-size: 20px; color: #fff">Kritik dan Saran</p>
                <p class="deskripsi" style="font-family: Cambria; font-size: 14px; color: #fff">Enter Your Email and we'll send you more information..</p>
                <form action="" method="post">
                    <div class="form-group">
                        <input id="email" type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <textarea id="keterangan" class="form-control" rows="4" style="resize: none;" placeholder="Tuliskan Keterangan"></textarea>
                    </div>
                    <button type="button" class="btn btn-block" style="background-color: #f96d01; color: #ffffff; font-family: Cambria;">Submit</button>
                </form>
            </div>
        </div>
        <hr style="width: auto; border-bottom: 4px solid #FFFFFF;">
        <div class="row">
            <div class="col-md-3">
                <p class="" style="letter-spacing: 2px; font-family: Cambria; font-size: 13px; color: #fff">TripPartner.com  &copy; 2019</p>
            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3 text-right">
                <a class="" href=""><img src="{{url('assets/img/icon/fb.png')}}" class="img-fluid" alt=""> </a>
                <a class="" href=""><img src="{{url('assets/img/icon/twitter.png')}}" class="img-fluid" alt=""> </a>
                <a class="" href=""><img src="{{url('assets/img/icon/ig.png')}}" class="img-fluid" alt=""> </a>
                <a class="" href=""><img src="{{url('assets/img/icon/google.png')}}" class="img-fluid" alt=""> </a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script-frontend')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- bootstrap js file -->
<script type="text/javascript" src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- js file -->
<script type="text/javascript" src="{{url('assets/js/jquery-3.2.1.min.js')}}"></script>

<!-- owl carousel js -->
<script type="text/javascript" src="{{url('assets/OwlCarousel/dist/owl.carousel.min.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
@endsection
