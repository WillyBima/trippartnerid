<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- title -->
    <title>Login</title>
    <!-- end title -->
    @include('master.head')
    @yield('head-frontend')
  </head>

  <body style="height: 100%;">
    <!-- Content -->
    <section id="login">
      <div class="container-fluid" style="margin-bottom: 50px; margin-top: 70px;">
        <p class="title text-center" style="font-family: Cambria; font-size: 28px; color: #25aae2; margin-bottom: 20px;"><b>Login TripPartner.id</b></p>
        <div class="row">
          <div class="col-md-3">

          </div>
          <div class="col-md-6 contact-left-form" style="text-align: -webkit-center; padding-left: 50px; padding-right: 50px;">
            <form action="{{url('/login/loginCustomer')}}" method="post">
              {{ csrf_field() }}
              <div class=" form-group contact-forms">
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted text-left">Kami tidak akan pernah membagikan email Anda kepada orang lain.</small>
              </div>
              <div class="form-group contact-forms">
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
              </div>

              <button class="btn btn-block" style="font-family: Cambria; background-color: #f96d01; color: #ffffff;">Login</button>

              <p class="dont-have-account js-href" style="margin-top: 30px; font-family: Cambria;">
                Belum punya akun?  <a href="{{url('/daftar')}}" data-state="register" style="font-family: Cambria; color: #f96d01; font-size: 15px;">Daftar Sekarang</a>

            </form>
          </div>
          <div class="col-md-3">

          </div>
        </div>
      </div>
    </section>
  </body>
</html>
