<!DOCTYPE html>
<html>
  <head>
    <!-- title -->
    <title>TripPartner | Booking</title>
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
    <section class="banner_inner" id="home">
    	<div class="banner_inner_overlay">
    	</div>
    </section>
    <!-- //banner -->


    <!-- Booking -->
    <section class="contact py-5">
    	<div class="container py-lg-5 py-sm-4">
    		<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Booking Perjalanan Anda</h2>
    		<div class="contact-grids">
    			<div class="row">
    				<div class="col-lg-7 contact-left-form">
    					<form action="#" method="post" class="row">
    						<div class="col-sm-6 form-group contact-forms">
                  <input type="text" class="form-control" placeholder="Tanggal Berangkat" required="">
    						</div>
    						<div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" placeholder="Tanggal Pulang" required="">
    						</div>
    						<div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" placeholder="Kota Asal" required="">
    						</div>
    						<div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" placeholder="Kota Tujuan" required="">
    						</div>
                <div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" placeholder="Jenis Bus" required="">
    						</div>
    						<div class="col-md-12 booking-button">
    							<button class="btn btn-block sent-butnn">Cari Armada</button>
    						</div>
                <div class="col-md-12 text-center" style="margin-top: 10px;">
                  <div class="alert alert-warning">
                    <a style="font-size: 15px; font-family: Cambria; color: #25aae2;">Harap pastikan perjalanan Anda terselesaikan pada periode yang dipilih</a>
                  </div>
                </div>
    					</form>
    				</div>
    				<div class="col-lg-5 contact-right pl-lg-5">

    					<div class="image-tour position-relative">
    						<img src="images/banner1.jpg" alt="" class="img-fluid" />
    						<p><span class="fa fa-tags"></span> <span>20$ - 15% off</span></p>
    					</div>

    					<h4>Tour Description</h4>
    					<p class="mt-3">Duis nisi sapien, elementum finibus ferme ntum ed eget, aliquet et leo. Mauris hendrerit vel ex.
    					vitae luctus massa. Phas ellus sed aliquam leo et dolor. Vestibulum ullamcorper massa eut sed fringilla.</p>

    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- //Booking -->

    <!-- destinations -->
    <section class="destinations py-5" id="destinations">
    	<div class="container py-xl-5 py-lg-3">
    		<!-- <h3 class="heading text-capitalize text-center"> Destinasi Favorit</h3> -->
    		<p class="text mt-2 mb-5 text-center" style="font-size: 18px">Beberapa Destinasi Favorit Customer.</p>
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
