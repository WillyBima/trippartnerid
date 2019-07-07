<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- title -->
    <title>Login Admin</title>
    <!-- end title -->
    @include('master.head')
    @yield('head-frontend')
  </head>

  <body style="height: 100%; background: #ecf0f1;">
    <!-- Content -->
    <section id="login">
      <div class="container-fluid" style="margin-bottom: 50px; margin-top: 70px;">
        <p class="title text-center" style="font-family: Cambria; font-size: 28px; color: #25aae2; margin-bottom: 20px;"><b>Login Admin TripPartner.com</b></p>
        <div class="row">
          <div class="col-md-2">

          </div>
          <div class="col-md-8" style="text-align: -webkit-center;">
            <div class="card" style="width: 500px">
              <form class="login" style="padding: 50px;">
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted text-left">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group forgot-box" style="margin-top: 25px; margin-bottom: 20px;">
			            <a href="#" style="font-family: Cambria; color: #f96d01; font-size: 13px;">Lupa Kata Sandi?</a>
		            </div>

                <a href="#" class="btn btn-block" role="button" style="font-family: Cambria; background-color: #f96d01; color: #ffffff;">Login</a>

                <p class="dont-have-account js-href" style="margin-top: 20px; font-family: Cambria;">
            			Belum punya akun?  <a href="/daftarAdmin" data-state="register" style="font-family: Cambria; color: #f96d01; font-size: 15px;">Daftar Sekarang</a>
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
