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
    		<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Hasil Pencarian Armada</h2>
    		<div class="contact-grids">
    			<div class="row">
    				<div class="col-lg-12 contact-left-form" style="margin-bottom: 20px;">
    					<form action="#" method="post" class="row text-center">
    						<div class="col-sm-6 form-group contact-forms">
                  <img src="{{url('assets/img/images/about.jpg')}}" alt="" class="img-fluid abt-image" />
    						</div>
    						<div class="col-sm-6 form-group contact-forms">
                  <h5 class="mt-3"><strong>Fasilitas Bus</strong></h5>
    						</div>
    					</form>
    				</div>
            <div class="col-lg-12 contact-left-form">
              <h5 class="mt-3 text-center"><strong>Data Pemesanan</strong></h5><br>
    					<form action="#" method="post" class="row text-center">
                <div class="col-sm-6 form-group contact-forms">
                  <input type="text" class="form-control" placeholder="Nama" required="">
    						</div>
    						<div class="col-sm-6 form-group contact-forms">
    						  <input type="email" class="form-control" placeholder="Email" required="">
    						</div>
    						<div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" placeholder="Nama Bus" required="">
    						</div>
                <div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" placeholder="Harga Bus" required="">
    						</div>
                <div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" placeholder="Kota Asal" required="">
    						</div>
                <div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" placeholder="Kota Tujuan" required="">
    						</div>
                <div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" placeholder="Tanggal Berangkat" required="">
    						</div>
                <div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" placeholder="Tanggal Pulang" required="">
    						</div>
                <div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" placeholder="Nomor Handphone" required="">
    						</div>
                <div class="col-sm-6 form-group contact-forms">
    						  <textarea class="form-control" placeholder="Alamat Penjemputan" rows="3" required=""></textarea>
    						</div>
    					</form>
              <button class="btn btn-block sent-butnn">Kirim Data Pemesanan</button>
    				</div>
    			</div>
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
