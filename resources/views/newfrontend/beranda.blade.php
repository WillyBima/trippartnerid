<!DOCTYPE html>
<html>
  <head>
    <!-- title -->
    <title>TripPartner | Beranda</title>
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
<section class="banner_w3lspvt" id="home">
	<div class="csslider infinity" id="slider1">
		<input type="radio" name="slides" checked="checked" id="slides_1" />
		<input type="radio" name="slides" id="slides_2" />
		<input type="radio" name="slides" id="slides_3" />
		<input type="radio" name="slides" id="slides_4" />
		<ul>
			<li>
				<div class="banner-top">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">TripPartner.id</h3>
								<h4 class="text-wh">Perusahaan Penyedia Jasa Bus Terbaik dan Terpercaya</h4>
								<div class="buttons mt-4">
									<a href="about.html" class="btn mr-2">Tentang Kami</a>
									<a href="booking.html" class="btn">Booking Sekarang</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top1">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">TripPartner.id</h3>
								<h4 class="text-wh">Gunakan Sistem Kami untuk Menentukan Pilihan Bus Anda</h4>
								<div class="buttons mt-4">
									<a href="about.html" class="btn mr-2">Tentang Kami</a>
									<a href="booking.html" class="btn">Booking Sekarang</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top2">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">TripPartner.id</h3>
								<h4 class="text-wh">Kami Memiliki Banyak Armada untuk Anda Gunakan</h4>
								<div class="buttons mt-4">
									<a href="about.html" class="btn mr-2">Tentang Kami</a>
									<a href="booking.html" class="btn">Booking Sekarang</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top3">
					<div class="overlay1">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">It is better to travel than to arrive. Let's Be Adventurers.</h3>
								<h4 class="text-wh">tristique senectus et netus et malesuada</h4>
								<div class="buttons mt-4">
									<a href="about.html" class="btn mr-2">About Us</a>
									<a href="booking.html" class="btn">Book a Tour</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="arrows">
			<label for="slides_1"></label>
			<label for="slides_2"></label>
			<label for="slides_3"></label>
			<label for="slides_4"></label>
		</div>
	</div>
</section>
<!-- //banner -->

<!-- about -->
<section class="about py-5">
	<div class="container py-lg-5 py-sm-4">
		<div class="row">
			<div class="col-lg-6 about-left">
				<h3 class="mt-lg-3">Kami memberikan pelayanan terbaik untuk anda, <strong>Explore with us!</strong></h3>
				<p class="mt-4">PT. Vallung Pramana Rancang adalah perusahaan biro perjalanan wisata yang didirikan pada tanggal
                   6 Oktober 2015 oleh bapak Iswandi Hanindyo Kusuma sebagai direktur dan ibu Iswanti Nayana sebagai komisaris.
                   Tujuan didirikannya perusahaan ini adalah untuk membantu masyarakat luas dalam memenuhi kebutuhan wisata yang
                   setiap waktu permintaannya semakin banyak. Pada awal pembentukan, hanya ada 3 karyawan saja yang bekerja di
                   PT. Vallung Pramana Rancang.</p>
			</div>
			<div class="col-lg-6 about-right text-lg-right mt-lg-0 mt-5">
				<img src="{{url('assets/img/images/about.jpg')}}" alt="" class="img-fluid abt-image" />
			</div>
		</div>
		<div class="row mt-5 text-center">
			<div class="col-lg-3 col-6">
				<div class="counter">
					<span class="fa fa-smile-o"></span>
					<div class="timer count-title count-number">100+</div>
					<p class="count-text text-uppercase">Customers</p>
				</div>
			</div>
			<div class="col-lg-3 col-6">
				<div class="counter">
					<span class="fa fa-bus"></span>
					<div class="timer count-title count-number">150+</div>
					<p class="count-text text-uppercase">Armada Bus</p>
				</div>
			</div>
			<div class="col-lg-3 col-6 mt-lg-0 mt-5">
				<div class="counter">
					<span class="fa fa-map-signs"></span>
					<div class="timer count-title count-number">50</div>
					<p class="count-text text-uppercase">Destinasi</p>
				</div>
			</div>
			<div class="col-lg-3 col-6 mt-lg-0 mt-5">
				<div class="counter">
					<span class="fa fa-gift"></span>
					<div class="timer count-title count-number">5+<span>years</span></div>
					<p class="count-text text-uppercase">Pengalaman</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- how to book -->
<section class="book py-5">
	<div class="container py-lg-5 py-sm-3">
		<h2 class="heading text-capitalize text-center"> Bagaimana Melakukan Pemesanan?</h2>
		<div class="row mt-5 text-center">
			<div class="col-lg-4 col-sm-6">
				<div class="grid-info">
					<div class="icon">
						<span class="fa fa-map-signs"></span>
					</div>
					<h4>Tentukan Destinasi Tujuan</h4>
					<p class="mt-3">Tentukan destinasi tujuan yang akan anda tuju, dengan cara memilih rute perjalanan.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt-sm-0 mt-5">
				<div class="grid-info">
					<div class="icon">
						<span class="fa fa-calendar"></span>
					</div>
					<h4>Tentukan Tanggal Pulang Pergi</h4>
					<p class="mt-3">Selanjutnya, tentukan tanggal keberangkatan untuk dapat melihat harga yang akan dikeluarkan.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt-lg-0 mt-5">
				<div class="grid-info">
					<div class="icon">
						<span class="fa fa-gift"></span>
					</div>
					<h4>Pilih Bus sesuai Kebutuhan</h4>
					<p class="mt-3">Setelah destinasi dan tanggal ditentukan, pilih bus sesuai dengan kebutuhan yang anda inginkan.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //how to book -->

<!-- tour packages -->
<!-- <section class="packages py-5">
	<div class="container py-lg-4 py-sm-3">
		<h3 class="heading text-capitalize text-center"> Discover our tour packages</h3>
		<p class="text mt-2 mb-5 text-center">Vestibulum tellus neque, sodales vel mauris at, rhoncus finibus augue. Vestibulum urna ligula, molestie at ante ut, finibus vulputate felis.</p>
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="image-tour position-relative">
					<img src="images/p1.jpg" alt="" class="img-fluid" />
					<p><span class="fa fa-tags"></span> <span>20$</span></p>
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span class="fa fa-map-marker mr-2"></span>Paris, France.</h6>
					<h5 class="my-2">Sodales vel mauris</h5>
					<p class="">Vestibulum tellus neque, et velit mauris at, augue.</p>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>10 Days</span></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="image-tour position-relative">
					<img src="images/p2.jpg" alt="" class="img-fluid" />
					<p><span class="fa fa-tags"></span> <span>20$</span></p>
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span class="fa fa-map-marker mr-2"></span>Los Angles, USA.</h6>
					<h5 class="my-2">Sodales vel mauris</h5>
					<p class="">Vestibulum tellus neque, et velit mauris at, augue.</p>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>10 Days</span></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
				<div class="image-tour position-relative">
					<img src="images/p3.jpg" alt="" class="img-fluid" />
					<p><span class="fa fa-tags"></span> <span>20$</span></p>
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span class="fa fa-map-marker mr-2"></span>Agra, India.</h6>
					<h5 class="my-2">Sodales vel mauris</h5>
					<p class="">Vestibulum tellus neque, et velit mauris at, augue.</p>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>10 Days</span></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
				<div class="image-tour position-relative">
					<img src="images/p4.jpg" alt="" class="img-fluid" />
					<p><span class="fa fa-tags"></span> <span>20$</span></p>
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span class="fa fa-map-marker mr-2"></span>Paris, France.</h6>
					<h5 class="my-2">Sodales vel mauris</h5>
					<p class="">Vestibulum tellus neque, et velit mauris at, augue.</p>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>10 Days</span></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="view-package text-center mt-4">
			<a href="packages.html">View All Packages</a>
		</div>
	</div>
</section> -->
<!-- tour packages -->

<!-- destinations -->
<section class="destinations py-5" id="destinations">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="heading text-capitalize text-center"> Destinasi Favorit</h3>
		<p class="text mt-2 mb-5 text-center">Berikut ini merupakan destinasi favorit yang biasa dikunjungi oleh customer kami sebelumnya, yang bisa jadi pertimbangan untuk anda.</p>
		<div class="row inner-sec-w3layouts-w3pvt-lauinfo">
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center">
				<h4 class="destination mb-3">Bandung</h4>
				<div class="image-position position-relative">
					<img src="{{url('assets/img/images/china.jpg')}}" class="img-fluid" alt="">
					<div class="rating">
						<ul>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
						</ul>
					</div>
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>Bandung</h4>
						<a href="booking.html">Book Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center">
				<h4 class="destination mb-3">Yogyakarta</h4>
				<div class="image-position position-relative">
					<img src="{{url('assets/img/images/malaysia.jpg')}}" class="img-fluid" alt="">
					<div class="rating">
						<ul>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
						</ul>
					</div>
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>Yogyakarta</h4>
						<a href="booking.html">Book Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mt-md-0 mt-4">
				<h4 class="destination mb-3">Malang</h4>
				<div class="image-position position-relative">
					<img src="{{url('assets/img/images/japan.jpg')}}" class="img-fluid" alt="">
					<div class="rating">
						<ul>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
						</ul>
					</div>
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>Malang</h4>
						<a href="booking.html">Book Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mt-md-0 mt-4">
				<h4 class="destination mb-3">Bali</h4>
				<div class="image-position position-relative">
					<img src="{{url('assets/img/images/singapore.jpg')}}" class="img-fluid" alt="">
					<div class="rating">
						<ul>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
						</ul>
					</div>
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>Bali</h4>
						<a href="booking.html">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- destinations -->


<!-- text -->
<section class="text-content">
	<div class="overlay-inner py-5">
		<div class="container py-md-3">
			<div class="test-info">
				<h4 class="tittle">Booking Sekarang!</h4>
				<p class="mt-3">Kami memberikan solusi terbaik untuk kebutuhan transportasi anda</p>
				<div class="text-left mt-4">
						<a href="booking.html">Booking Sekarang</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //text -->

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
