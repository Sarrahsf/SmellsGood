<!DOCTYPE html>

<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <link rel="shotcut icon" href="images/parfumlogoo.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Smells Good | Parfume</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    @include('user/header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('user/sidebar')

  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->

    <!-- Main content -->
    
    <div class="content">
      <div class="container-fluid">
    @yield('content')
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
               <div class="card card-primary card-outline">
               <div class="card-body">
                <center><h2><b><font color="pink">SELAMAT DATANG DI "SMELLS GOOD"</font></b></h2><br>
                  <center>Selamat Berbelanja !</center><br>
                 <img src="{{url('images/parfumlogoo.jpg')}}" width="300px" height="300px">
                </center><br>
                <p class="card-text">
                  Smells Good merupakan sebuah aplikasi untuk para pecinta parfum. Smells Good menjual parfum-parfum yang mungkin sulit ditemukan di offline store yang berada di Indonesia dan juga produk-produk Smells Good dijamin original.
                </p>
              </div>
            </div>
            </div>

           
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div> 

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('user/footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
