@section('body-backend')

<!-- jQuery 3 -->
<script src="{{url('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{url('admin/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{url('admin/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{url('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{url('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('admin/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('admin/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{url('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{url('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{url('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('admin/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('admin/dist/js/demo.js')}}"></script>
<!-- Data Tables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

@endsection

@section('header-nav')
<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>TP</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg" style="font-family: Cambria;"><b>Admin</b> TripPartner</span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only" style="font-family: Cambria;">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <!-- Notifications: style can be found in dropdown.less -->
        <li class="dropdown notifications-menu" style="font-family: Cambria;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell"></i>
            <span class="label label-warning">10</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header" >You have 10 notifications</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li>
                  <a href="#">
                    <i class="fa fa-users text-aqua"></i> 5 new members joined
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-shopping-cart text-green"></i> 25 Order made
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-comment text-red"></i> 4 Kritik dan Saran
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
      </ul>
    </div>
  </nav>
</header>
@endsection

@section('side-nav')
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel" style="font-family: Cambria;">
      <div class="pull-left image">
        <img src="{{url('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{Auth::guard('admin')->user()->nama_lengkap}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="{{url('/dashboardAdmin')}}">
          <i class="fa fa-tachometer-alt"></i> <span> Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{url('/MenuUser')}}">
          <i class="fa fa-user"></i> <span>Menu User</span>
        </a>
      </li>

      <li class="header">ORDER NAVIGATION</li>
      <li>
        <a href="{{url('/MenuOrder')}}">
          <i class="fa fa-shopping-cart"></i> <span>Menu Order</span>
        </a>
      </li>

      <li>
        <a href="{{url('/MenuHistory')}}">
          <i class="fa fa-cart-arrow-down"></i> <span>Menu History Order</span>
        </a>
      </li>

      <li class="header">BUS NAVIGATION</li>
      <li>
        <a href="{{url('/MenuPO')}}">
          <i class="fa fa-university"></i> <span>Menu PO Bus</span>
        </a>
      </li>

      <li>
        <a href="{{url('/MenuBus')}}">
          <i class="fa fa-bus"></i> <span>Menu Bus</span>
        </a>
      </li>

      <li>
        <a href="{{url('/MenuHarga')}}">
          <i class="fa fa-dollar-sign"></i> <span>Menu Harga Bus</span>
        </a>
      </li>

      <li class="header">RUTE NAVIGATION</li>
      <li>
        <a href="{{url('/MenuKota')}}">
          <i class="fa fa-city"></i> <span>Menu Kota</span>
        </a>
      </li>

      <li>
        <a href="{{url('/MenuRute')}}">
          <i class="fa fa-road"></i> <span>Menu Rute</span>
        </a>
      </li>

      <li class="header">COMMENT NAVIGATION</li>
      <li>
        <a href="{{url('/menuComment')}}">
          <i class="fa fa-comment"></i> <span>Kritik dan Saran</span>
        </a>
      </li>
      <li>
        <a href="{{url('logoutadmin')}}">
          <i class="fa fa-sign-out-alt"></i> <span>Logout</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
@endsection
