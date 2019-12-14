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
<section class="banner_inner" id="home" style="background-image: url('{{asset('assets/img/images/pantaibali.jpg')}}');">
	<div class="banner_inner_overlay">
	</div>
</section>
<!-- //banner -->

<!-- destinations -->
<section class="destinations py-5" id="destinations" style="font-family: Cambria;">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="heading text-capitalize text-center"> Galeri Armada</h3>
		<p class="text mt-2 mb-5 text-center">Berikut ini merupakan beberapa Armada yang bekerjasama dengan TripPartner.id.</p>
		<div class="row inner-sec-w3layouts-w3pvt-lauinfo">
      @foreach($bus as $bus)
      <div class="col-md-3 col-sm-6 col-6 destinations-grids text-center">
				<h4 class="destination mb-3" style=" margin-top: 30px;">{{$bus->nama_bus}}</h4>
				<div class="image-position position-relative">
					<img src="{{url('img/bus/'.$bus->gambar_bus)}}" class="img-fluid" style="width: 252px; height: 252px;" alt="">
				</div>
			</div>
      @endforeach
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
