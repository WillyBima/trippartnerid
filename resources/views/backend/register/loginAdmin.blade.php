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
            <div class="card" style="width: 450px">
              <form action="{{url('/login/loginAdmin')}}" method="post" class="login" style="padding: 50px;">
                {{ csrf_field() }}
              <form class="login" style="padding: 50px;">
                <div class="form-group">
                  <input type="text" class="form-control" name="user_name" placeholder="User Name">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group forgot-box" style="margin-top: 25px; margin-bottom: 20px;">
			            <a href="#" style="font-family: Cambria; color: #f96d01; font-size: 13px;">Lupa Kata Sandi?</a>
		            </div>

                <button class="btn btn-block" style="font-family: Cambria; background-color: #f96d01; color: #ffffff;">Login</button>
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
