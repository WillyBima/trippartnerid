<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- title -->
    <title>Daftar</title>
    <!-- end title -->
    @include('master.head')
    @yield('head-frontend')
  </head>

  <body style="height: 100%;">
    <!-- Content -->
    <section id="daftar">
      <div class="container-fluid" style="margin-top: 30px;">
        <p class="title text-center" style="font-family: Cambria; font-size: 24px; color: #25aae2; margin-bottom: 20px;">Daftarkan Diri Anda</p>
        <div class="row">
          <div class="col-lg-3"></div>

          <div class="col-lg-6 contact-left-form" style="text-align: -webkit-center; padding-left: 50px; padding-right: 50px;">
  						<form action="{{url('/daftar/daftarCustomer')}}" method="post">
                {{ csrf_field() }}
                <div class=" form-group contact-forms">
  							  <input type="text" name="nama_lengkap" class="form-control" id="formGroupExampleInput" placeholder="Nama Lengkap" required>
  							</div>
  							<div class="form-group contact-forms">
  							  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat Email" required>
  							</div>
  							<div class="form-group contact-forms">
  							  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Kata Sandi" required>
  							</div>

                <p class="privacy-policy-txt" style="font-family: Cambria; font-size: 14px; margin-top: 30px; margin-bottom: 30px;">
				          Dengan mengklik button “Daftar” di bawah ini, saya setuju dengan <a href='privacy-policy' style="color: #f96d01;">Kebijakan Privasi
                  </a> serta <a href='tos' style="color: #f96d01;">Syarat dan Ketentuan</a> TripPartner.id			</p>

                  <button type="submit" class="btn btn-block" style="font-family: Cambria; background-color: #f96d01; color: #ffffff;">Daftar</button>

                  <p class="dont-have-account js-href" style="margin-top: 20px; font-family: Cambria;">
              			Sudah punya akun?  <a href="{{url('/login')}}" data-state="register" style="font-family: Cambria; color: #f96d01; font-size: 15px;">Login Sekarang</a>
              		</p>
  						</form>
          </div>

          <div class="col-lg-3"></div>
        </div>
      </div>
    </section>
  </body>
</html>
