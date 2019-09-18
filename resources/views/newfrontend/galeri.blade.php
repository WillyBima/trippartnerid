<!DOCTYPE html>
<html>
  <head>
    <!-- title -->
    <title>TripPartner | Galeri</title>
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

<!-- destinations -->
<section class="destinations py-5" id="destinations">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="heading text-capitalize text-center"> Galeri Armada</h3>
		<p class="text mt-2 mb-5 text-center">Berikut ini merupakan beberapa Armada yang bekerjasama dengan TripPartner.id.</p>
		<div class="row inner-sec-w3layouts-w3pvt-lauinfo">
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center">
				<h4 class="destination mb-3">BB1 Manhattan</h4>
				<div class="image-position position-relative">
					<img src="{{url('assets/img/images/china.jpg')}}" class="img-fluid" alt="">
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center">
				<h4 class="destination mb-3">BB1 HIBA UTAMA</h4>
				<div class="image-position position-relative">
					<img src="{{url('assets/img/images/malaysia.jpg')}}" class="img-fluid" alt="">
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mt-md-0 mt-4">
				<h4 class="destination mb-3">bb1 Scorpion H</h4>
				<div class="image-position position-relative">
					<img src="{{url('assets/img/images/japan.jpg')}}" class="img-fluid" alt="">
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mt-md-0 mt-4">
				<h4 class="destination mb-3">bb1 Ardana tour</h4>
				<div class="image-position position-relative">
					<img src="{{url('assets/img/images/singapore.jpg')}}" class="img-fluid" alt="">
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
