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
    <section id="login">
      <div class="container-fluid" style="margin-top: 30px;">
        <p class="title text-center" style="font-family: Cambria; font-size: 24px; color: #25aae2; margin-bottom: 20px;">Daftar Sekarang dan Dapatkan Manfaatnya!</p>
        <div class="row">
          <div class="col-md-2">

          </div>
          <div class="col-md-8" style="text-align: -webkit-center;">
            <div class="card" style="width: 500px">
              <form class="login" style="padding: 50px;">
                <div class="form-group">
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Lengkap">
                </div>

                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat Email">
                </div>

                <div class="form-group">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Kata Sandi">
                </div>

                <div class="form-group">
                  <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Konfirmasi Kata Sandi">
                </div>

                <p class="privacy-policy-txt" style="font-family: Cambria; font-size: 14px; margin-top: 30px; margin-bottom: 30px;">
				          Dengan mengklik button “Daftar” di bawah ini, saya setuju dengan <a href='privacy-policy' style="color: #f96d01;">Kebijakan Privasi
                  </a> serta <a href='tos' style="color: #f96d01;">Syarat dan Ketentuan</a> TripPlan.com			</p>

                <a href="#" class="btn btn-block" role="button" style="font-family: Cambria; background-color: #f96d01; color: #ffffff;">Daftar</a>

                <p class="dont-have-account js-href" style="margin-top: 20px; font-family: Cambria;">
            			Sudah punya akun?  <a href="/login" data-state="register" style="font-family: Cambria; color: #f96d01; font-size: 15px;">Login Sekarang</a>
            		</p>
              </form>
            </div>
          </div>
          <div class="col-md-2">

          </div>
        </div>
      </div>
    </section>
  </body>
</html>
