<!DOCTYPE html>
<html>
  <head>
    <!-- title -->
    <title>TripPartner | Tentang Kami</title>
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
    <section class="banner_inner" id="home" style="background-image: url('{{asset('assets/img/images/pantaibali.jpg')}}');">
    	<div class="banner_inner_overlay">
    	</div>
    </section>
    <!-- //banner -->

    <!-- about -->
    <section class="about py-5" style="font-family: Cambria;">
    	<div class="container py-lg-5 py-sm-4">
    		<div class="row">
    			<div class="col-lg-6 about-left">
    				<h3 class="mt-lg-3" style="font-family: Cambria;">Kami memberikan pelayanan terbaik untuk anda, <strong>Explore with us!</strong></h3>
    				<p class="mt-4" style="font-family: Cambria;">PT. Vallung Pramana Rancang adalah perusahaan biro perjalanan wisata yang didirikan pada tanggal
                       6 Oktober 2015 oleh bapak Iswandi Hanindyo Kusuma sebagai direktur dan ibu Iswanti Nayana sebagai komisaris.
                       Tujuan didirikannya perusahaan ini adalah untuk membantu masyarakat luas dalam memenuhi kebutuhan wisata yang
                       setiap waktu permintaannya semakin banyak. Pada awal pembentukan, hanya ada 3 karyawan saja yang bekerja di
                       PT. Vallung Pramana Rancang.</p>
    				<p class="mt-3" style="font-family: Cambria;"> Terbukti hingga sekarang PT. Vallung Pramana Rancang
                           sudah mulai dikenal dikalangan masyarakat sebagai perusahaan biro perjalanan wisata, tempat reservasi bus pariwisata,
                           dan menjual berbagai paket wisata ke berbagai tempat di pulau Jawa, Bali, dan Lombok.</p>
    			</div>
    			<div class="col-lg-6 about-right text-lg-right mt-lg-5 mt-5">
    				<img src="{{url('assets/img/images/bus.jpg')}}" alt="" class="img-fluid abt-image" />
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
    	</div>
    </section>
    <!-- //about -->


    <!-- tabs -->
    <section class="choose" id="choose" style="font-family: Cambria; background-image: url('{{asset('assets/img/images/sampan.jpg')}}');">
    	<div class="overlay-all py-5">
    		<div class="container py-lg-5 py-sm-4">
    			<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Mengapa memilih TripPartner.id?</h2>
    			<div class="edu-exp-grids">
    				<div class="tab-main">
    					<input id="tab1" type="radio" name="tabs" class="w3pvt-sm" checked>
    					<label for="tab1">Kami Menawarkan</label>
    					<input id="tab2" type="radio" class="w3pvt-sm" name="tabs">
    					<label for="tab2">Kami Menyediakan</label>
    					<section id="content1">
    						<div class="row text-center">
    							<div class="col-lg-4 col-md-6 inner-w3pvt-wrap">
    								<div class="inner-sec-grid">
    									<span class="fa fa-gift"></span>
    									<h4 class="mt-md-4 mt-2">Pelayanan Terbaik</h4>
    									<p class="mt-3">Lorem ipsum dolor sit amet, conse ctetur elit. Cras lobortis mollis arcu, vel vulputate justo.</p>
    								</div>
    							</div>
    							<div class="col-lg-4 col-md-6 inner-w3pvt-wrap">
    								<div class="inner-sec-grid">
    									<span class="fa fa-bus"></span>
    									<h4 class="mt-md-4 mt-2">Armada Terbaru</h4>
    									<p class="mt-3">Lorem ipsum dolor sit amet, conse ctetur elit. Cras lobortis mollis arcu, vel vulputate justo.</p>
    								</div>
    							</div>
    							<div class="col-lg-4 col-md-6 inner-w3pvt-wrap">
    								<div class="inner-sec-grid">
    									<span class="fa fa-money"></span>
    									<h4 class="mt-md-4 mt-2">Harga Bersahabat</h4>
    									<p class="mt-3">Lorem ipsum dolor sit amet, conse ctetur elit. Cras lobortis mollis arcu, vel vulputate justo.</p>
    								</div>
    							</div>
    						</div>
    					</section>
    					<section id="content2">
    						<div class="row text-center">
    							<div class="col-lg-4 col-md-6 inner-w3pvt-wrap">
    								<div class="inner-sec-grid">
    									<span class="fa fa-headphones"></span>
    									<h4 class="mt-md-4 mt-2">Fasilitas Terbaik</h4>
    									<p class="mt-3">Lorem ipsum dolor sit amet, conse ctetur elit. Cras lobortis mollis arcu, vel vulputate justo.</p>
    								</div>
    							</div>
    							<div class="col-lg-4 col-md-6 inner-w3pvt-wrap">
    								<div class="inner-sec-grid">
    									<span class="fa fa-users"></span>
    									<h4 class="mt-md-4 mt-2">Crew Terbaik</h4>
    									<p class="mt-3">Lorem ipsum dolor sit amet, conse ctetur elit. Cras lobortis mollis arcu, vel vulputate justo.</p>
    								</div>
    							</div>
    							<div class="col-lg-4 inner-w3pvt-wrap">
    								<div class="inner-sec-grid">
    									<span class="fa fa-map-signs"></span>
    									<h4 class="mt-md-4 mt-2">Destinasi Favorit</h4>
    									<p class="mt-3">Lorem ipsum dolor sit amet, conse ctetur elit. Cras lobortis mollis arcu, vel vulputate justo.</p>
    								</div>
    							</div>
    						</div>
    					</section>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- tabs -->

    <!-- testimonials -->
    <section class="testimonials py-5" id="testi" style="font-family: Cambria;">
    	<div class="container py-lg-5 py-md-3">
    			<h3 class="heading text-capitalize text-center mb-lg-5 mb-4"> Komentar Customers</h3>
    		<div class="row pt-xl-4">
    			<div class="col-md-4 test-grid px-lg-4">
    				<div class="testi-info text-center">
    					<p class="text-li">"Sed ut perspiciatis unde omnis ist natus error sit volup tatem acu antium dolor tium sed e ullam dolor amet.</p>
    					<div class="test-img text-center mt-4">
    						<img src="{{url('assets/img/images/te1.jpg')}}" class="img-fluid" alt="user-image">
    					</div>
    					<h3 class="mt-md-4 mt-3">Elisa ker</h3>
    				</div>
    			</div>
    			<div class="col-md-4 test-grid px-lg-4 my-md-0 my-5">
    				<div class="testi-info text-center">
    					<p class="text-li">"Sed ut perspiciatis unde omnis ist natus error sit volup tatem acu antium dolor tium sed e ullam dolor amet.</p>
    					<div class="test-img text-center mt-4">
    						<img src="{{url('assets/img/images/te2.jpg')}}" class="img-fluid" alt="user-image">
    					</div>
    					<h3 class="mt-md-4 mt-3">Johnson</h3>
    				</div>
    			</div>
    			<div class="col-md-4 test-grid px-lg-4">
    				<div class="testi-info text-center">
    					<p class="text-li">"Sed ut perspiciatis unde omnis ist natus error sit volup tatem acu antium dolor tium sed e ullam dolor amet.</p>
    					<div class="test-img text-center mt-4">
    						<img src="{{url('assets/img/images/te3.jpg')}}" class="img-fluid" alt="user-image">
    					</div>
    					<h3 class="mt-md-4 mt-3">Elizabeth</h3>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- //testimonials -->

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
