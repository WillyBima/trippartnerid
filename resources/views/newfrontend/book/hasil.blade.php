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
    <section class="banner_inner" id="home" style="background-image: url('{{asset('assets/img/images/pantaibali.jpg')}}');">
    	<div class="banner_inner_overlay">
    	</div>
    </section>
    <!-- //banner -->


    <!-- Booking -->
    <section class="contact py-5">
    	<div class="container py-lg-5 py-sm-4">
    		<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Hasil Pencarian Armada</h2>
    		<div class="contact-grids">
          <?php $a = 0; ?>
          @for($i=0; $i<count($hasil_array); $i++)
          <div class="row">
    				<div class="col-lg-12 contact-left-form" style="margin-bottom: 20px;">
    					<form action="#" method="post" class="row text-center">
    						<div class="col-sm-4 form-group contact-forms">
                  <h6>Nama Bus</h6>
                  <p class="mt-3">{{$hasil_array[$i]['nama_bus']}}</p>
    						</div>
    						<div class="col-sm-4 form-group contact-forms">
                  <h6>Rute Perjalanan</h6>
                  <p class="mt-3">{{$hasil_array[$i]['kota_asal']}} - {{$hasil_array[$i]['kota_tujuan']}}</p>
    						</div>
                <div class="col-sm-4 form-group contact-forms">
    						  <h4>RP. {{number_format($hasil_array[$i]['harga'], 2)}}</h4>
                  <a href="{{url('/detail-armada/'.$hasil_array[$i]['slug'])}}" class="btn btn-sm card-btn" role="button">Lihat Selengkapnya</a>
    						</div>
    					</form>
    				</div>
    			</div>
          @endfor
    		</div>
    	</div>
    </section>
    <!-- //Booking -->

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
