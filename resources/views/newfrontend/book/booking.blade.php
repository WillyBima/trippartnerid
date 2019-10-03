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
    		<h2 class="heading text-capitalize text-center mb-lg-5 mb-4" style="font-family: Cambria;"> Booking Perjalanan Anda</h2>
    		<div class="contact-grids">
    			<div class="row">
    				<div class="col-lg-7 contact-left-form">
    					<form action="{{url('/cari-armada')}}" method="post" class="row">
                {{csrf_field()}}
    						<div class="col-sm-6 form-group contact-forms">
                  <input id="startDate" class="form-control datepicker" name="tanggal_pergi" type="text" value="" placeholder="Tanggal Berangkat" required>
    						</div>
    						<div class="col-sm-6 form-group contact-forms">
    						  <input id="endDate" class="form-control datepicker" name="tanggal_pulang" type="text" value="" placeholder="Tanggal Pulang" required>
    						</div>
    						<div class="col-sm-6 form-group contact-forms">
                  <select class="form-control" name="kota_asal">
                    <option value="Jakarta">Jakarta</option>
                  </select>
    						</div>
    						<div class="col-sm-6 form-group contact-forms">
                  <select class="form-control" name="kota_tujuan">
                    @foreach($rute as $kota_tujuan)
                      <option value="{{$kota_tujuan->nama_kota}}">{{$kota_tujuan->nama_kota}}</option>
                    @endforeach
                  </select>
    						</div>
                <div class="col-sm-6 form-group contact-forms">
                  <select name="jenis_bus" class="form-control">
                    <option value="">Pilih Jenis Bus yang di inginkan</option>
                    <option value="Small Bus">Small Bus</option>
                    <option value="Medium Bus">Medium Bus</option>
                    <option value="Big Bus">Big Bus</option>
                  </select>
    						</div>
    						<div class="col-md-12 booking-button">
    							<button class="btn btn-block btn-lg" role="button" style="font-family: Cambria; background-color: #25aae2; color: #ffffff;"> Cari Armada</button>
    						</div>
                <div class="col-md-12 text-center" style="margin-top: 10px;">
                  <div class="alert alert-warning">
                    <a style="font-size: 15px; font-family: Cambria; color: #25aae2;">Harap pastikan perjalanan Anda terselesaikan pada periode yang dipilih</a>
                  </div>
                </div>
    					</form>
    				</div>
    				<div class="col-lg-5 contact-right pl-lg-5" style="font-family: Cambria;">

              <div class="image-tour position-relative">
						  <img src="{{url('assets/img/images/borobudur.jpg')}}" alt="" class="img-fluid" />
					    </div>

            	<h4>Tour Description</h4>
    					<p class="mt-3"  style="font-family: Cambria;">Duis nisi sapien, elementum finibus ferme ntum ed eget, aliquet et leo. Mauris hendrerit vel ex.
    					vitae luctus massa. Phas ellus sed aliquam leo et dolor. Vestibulum ullamcorper massa eut sed fringilla.</p>
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
    <script>
        var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        $('#startDate').datepicker({
            uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: today,
            maxDate: function () {
                return $('#endDate').val();
            }
        });
        $('#endDate').datepicker({
            uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: function () {
                return $('#startDate').val();
            }
        });
    </script>
    <!-- endscript -->
  </body>
</html>
