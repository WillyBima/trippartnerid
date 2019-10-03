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
    		<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Detail Armada</h2>
    		<div class="contact-grids">
    			<div class="row">
    				<div class="col-lg-12 contact-left-form" style="margin-bottom: 20px;">
    					<form action="#" method="post" class="row text-center">
                @foreach($databus as $databus)
                <div class="col-sm-6 form-group contact-forms">
                  <img src="{{url('img/bus/'.$databus->gambar_bus)}}" alt="" class="img-fluid abt-image" />
    						</div>
    						<div class="col-sm-6 form-group contact-forms">
                  <h5 class="mt-3"><strong>Fasilitas Bus {{$databus->nama_bus}}</strong></h5>
                  @foreach($datafasilitasbus as $fasilitas)
                  <div class="col-sm-6">
                    <p>
                      <p style="font-family: Cambria; font-size: 18px; color: #25aae2"><i class="{{$fasilitas->icon}}"></i>{{$fasilitas->nama_fasilitas}}</p>
                    </p>
                  </div>
                  @endforeach
    						</div>

    					</form>
    				</div>
            <div class="col-lg-12 contact-left-form">
              <h5 class="mt-3 text-center"><strong>Data Pemesanan</strong></h5><br>
    					<form action="#" method="post" class="row text-center">
                {{ csrf_field() }}
                <div class="col-sm-6 form-group contact-forms">
                  <input type="text" class="form-control" name="nama" value="{{Auth::guard('users')->user()->nama_lengkap}}" placeholder="Nama" required="">
    						</div>
    						<div class="col-sm-6 form-group contact-forms">
    						  <input type="email" class="form-control" name="email" value="{{Auth::guard('users')->user()->email}}" placeholder="Email" required="">
    						</div>
    						<div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" name="nama_bus" value="{{$databus->nama_bus}}" placeholder="Nama Bus" required="">
    						</div>
                <div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" name="harga" placeholder="Harga Bus" required="">
    						</div>
                <div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" name="kota_asal" placeholder="Kota Asal" required="">
    						</div>
                <div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" name="kota_tujuan" placeholder="Kota Tujuan" required="">
    						</div>
                <div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" name="tanggal_pergi" placeholder="Tanggal Berangkat" required="">
    						</div>
                <div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" name="tanggal_pulang" placeholder="Tanggal Pulang" required="">
    						</div>
                <div class="col-sm-6 form-group contact-forms">
    						  <input type="text" class="form-control" name="no_hp" placeholder="Nomor Handphone" required="">
    						</div>
                <div class="col-sm-6 form-group contact-forms">
    						  <textarea class="form-control" name="" placeholder="Detail Alamat Penjemputan" rows="3" required=""></textarea>
                  <textarea class="form-control" style="margin-top: 15px;" name="" placeholder="Detail Alamat Tujuan" rows="3" required=""></textarea>
    						</div>
                <div class="col-sm-6 form-group contact-forms">

    						</div>
    					</form>
              <button class="btn btn-block sent-butnn">Kirim Data Pemesanan</button>
    				</div>
    			</div>
    		</div>
        @endforeach
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
