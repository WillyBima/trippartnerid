<!DOCTYPE html>
<html>
  <head>
    <!-- title -->
    <title>TripPartner | Kontak</title>
    <!-- end title -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    @include('master.head')
    @yield('head-frontend')
  </head>

  <body style="height: 100%;">
    <!-- Navbar -->
    @include('master.body')
    @yield('newnavbar-frontend')
    <!-- End Navbar -->

    <!-- banner -->
<section class="banner_inner" id="home"  style="background-image: url('{{asset('assets/img/images/pantaibali.jpg')}}');">
	<div class="banner_inner_overlay">
	</div>
</section>
<!-- //banner -->


<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5 py-sm-3" style="font-family: Cambria;">
			<h2 class="heading text-capitalize text-center mb-sm-5 mb-4"> Info Kontak Kami</h2>
			<ul class="list-unstyled row text-center mt-lg-5 mt-4 px-lg-5">
                <li class="col-md-4 col-sm-6 adress-w3pvt-info">
                    <div class=" adress-icon">
                        <span class="fa fa-map-marker"></span>
                    </div>

                    <h6>Alamat</h6>
                    <p>Ged. SATMARINDO Lt.1
                        <br>Jalan Ampera Raya no.5, Jakarta Selatan </p>
                </li>

                <li class="col-md-4 col-sm-6 adress-w3pvt-info mt-sm-0 mt-4">
                    <div class="adress-icon">
                        <span class="fa fa-envelope-open-o"></span>
                    </div>
                    <h6>Handphone & Email</h6>
                    <p>+62 857-7233-5514</p>
                    <a href="" class="mail">trippartner@gmail.com</a>
                </li>
                <li class="col-md-4 col-sm-6 adress-w3pvt-info mt-md-0 mt-4">

                    <div class="adress-icon">
                        <span class="fa fa-comments-o"></span>
                    </div>

                    <h6>Sosial Media</h6>
					<ul class="social_section_1info mt-2">
						<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
						<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
					</ul>
                </li>
            </ul>

			<div class="contact-grids mt-5">
				<div class="row">
					<div class="col-lg-6 col-md-6 contact-left-form">
						<form action="{{url('/kontak-kami/submitpesan')}}" method="post">
              {{ csrf_field() }}
              <div class=" form-group contact-forms">
							  <input type="text" class="form-control" name="nama" placeholder="Nama" required="">
							</div>
							<div class="form-group contact-forms">
							  <input type="email" class="form-control" name="email" placeholder="Email" required="">
							</div>
							<div class="form-group contact-forms">
							  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
							</div>
							<div class="form-group contact-forms">
							  <textarea class="form-control" name="keterangan" placeholder="Pesan" rows="3" required=""></textarea>
							</div>
							<button type="submit" class="btn btn-block" style="background: #f96d01; color: #fff">Submit</button>
						</form>
					</div>
					<div class="col-lg-6 col-md-6 contact-right pl-lg-5">
						<h4>Apakah anda memiliki pertanyaan untuk kami? tulis pesan anda.</h4>
						<p class="mt-md-4 mt-2" style="font-family: Cambria;">Duis nisi sapien, elementum finibus fermentum eget, aliquet et leo. Mauris hendrerit vel ex.
						Quisque vitae luctus massa. Phas ellus sed aliquam leo. Vestibulum ullamcorper massa eut sed fringilla. Integer ultrices finibus sed nisi.
						in convallis felis da bus sit amet  aliquet et leo dolor sit amet aliquet.</p>
					</div>
				</div>
			</div>
	</div>
</section>
<!-- //Contact -->

<!-- map -->
<div class="map p-2">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7930280233227!2d106.81473971476954!3d-6.2909115954469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1f8702206a7%3A0x225a93da62a49068!2sSatmarindo%2C%20Kec.%20Ps.%20Minggu%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1568821436265!5m2!1sid!2sid"></iframe>
</div>
<!-- //map -->

    <!-- FOOTER -->
    @yield('newfooter')
    <!-- end Footer -->

    <!-- move top -->
    <div class="move-top text-right">
    	<a href="#home" class="move-top">
    		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
    	</a>
    </div>
    <!-- move top -->

    <!-- script -->
    @yield('script-frontend')
    <!-- endscript -->
  </body>
</html>
