@section('header-frontend')
<section id="logo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 logo">
        <a href="{{url('/')}}"><img src="{{url('assets/img/icon/logobaru.png')}}" class="img-fluid" style="width: 180px; height: 59px; margin-top: 17px; margin-left: 100px;"></a>
      </div>

      <div class="col-md-4 text-center">

      </div>

      <div class="col-md-4 login" style="margin-top: 30px;">
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

@section('newnavbar-frontend')
<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<h1 class="mt-md-0 mt-2"> <a href="{{url('/')}}"><span class="fa fa-map-signs"></span> TripPartner.id </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class=""><a href="{{url('/')}}">Beranda</a></li>
        <li class=""><a href="{{url('/booking')}}">Booking</a></li>
				<li class=""><a href="{{url('/galeri')}}">Galeri</a></li>
        <li class=""><a href="{{url('/tentang-kami')}}">Tentang Kami</a></li>
				<li class=""><a href="{{url('/kontak-kami')}}">Kontak</a></li>
        @if(!Auth::guard('users')->user())
        <li class="booking"><a href="{{url('/login')}}">LOGIN</a></li>
        @else
        <li class="booking"><a href="{{url('/dashboard-user')}}">{{Auth::guard('users')->user()->nama_lengkap}}</a></li>
        @endif
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->
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
                  <a class="nav-link" href="{{url('/newboking')}}"><span class="fa fa-search color-white"></span> BOOKING BUS</a>
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

@section('newfooter')
<!--footer -->
<footer>
<section class="footer footer_w3layouts_section_1its py-5" style="font-family: Cambria;">
	<div class="container py-lg-4 py-3">
		<div class="row footer-top">
			<div class="col-lg-3 col-sm-6 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Informasi Perusahaan</h3>
				</div>
				<div class="footer-text">
					<p>Alamat : Ged. SATMARINDO Lt.1, Jalan Ampera Raya no.5, Jakarta Selatan</p>
					<p>Kontak : +62 857-7233-5514</p>
					<p>Email : <a href="#">trippartner@gmail.com</a></p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 footer-grid_section mt-sm-0 mt-4">
				<div class="footer-title">
					<h3>Tentang Kami</h3>
				</div>
				<div class="footer-text">
					<p>PT. Valung Pramana Rancang merupakan perusahaan travel yang bergerak dibidang penyewaan Bus, yang menyediakan bus sewa untuk seluruh kota di Jawa dan Bali</p>
				</div>
				<ul class="social_section_1info">
					<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
					<li class="linkedin"><a href="#"><span class="fa fa-instagram"></span></a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Destinasi Perjalanan</h3>
				</div>
				<div class="row">
					<ul class="col-6 links">
						<li><a href="#choose" class="scroll">Cisarua, Bogor </a></li>
						<li><a href="#overview" class="scroll">Anyer </a></li>
						<li><a href="#pricing" class="scroll">Bandung</a></li>
						<li><a href="#faq" class="scroll"> Yogyakarta</a></li>
						<li><a href="#testimonials" class="scroll">Solo </a></li>
						<li><a href="#contact" class="scroll"> Malang </a></li>
					</ul>
					<ul class="col-6 links">
						<li><a href="#">Cibodas </a></li>
						<li><a href="#">Tangerang </a></li>
						<li><a href="#faq" class="scroll">Semarang </a></li>
						<li><a href="#">Surabaya </a></li>
						<li><a href="#">Bali </a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Newsletter</h3>
				</div>
				<div class="footer-text">
					<p>Masukkan Email anda, kami akan memberikan informasi terbaru tentang perusahaan kami.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="copyright py-3 text-center">
	<p>© 2019 TripPartner.id</p>
</div>
<!-- //copyright -->
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

<script type="text/javascript" src="{{url('assets/js/bootstrap-datepicker.min.js')}}"></script>

<!-- owl carousel js -->
<script type="text/javascript" src="{{url('assets/OwlCarousel/dist/owl.carousel.min.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
@endsection
