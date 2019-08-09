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

  <title>SMELLS GOOD | Parfume</title>

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
          
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->

    
  <!-- Main content -->
  <center>
  <h2>List Parfume</h2>

  <form action="{{url('/produk/cari')}}" method="GET">
    <input type="text" name="cari" placeholder="Cari Parfum .." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
  </form> <br>

  <table width= "80%" border-collapse="collapse" box-shadow=" 0, 2px, 3px, 1px, #ddd" border-color="" overflow="hidden" border="10px, solid, #fff" style="background:#eee">
  <tr>
    <th>No</th>
    <th>Nama Parfum</th>
    <th>Photo</th>
    <th>Harga</th>
  </tr>
  @foreach ($produk as $row)
  <tr>
    <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
    <td>{{ $row->nama }}</td>
    <td><img width="150px" src="{{ url('/uploads/'.$row->photo) }}" class="img"</td>
    <td>{{ $row->harga}}</td>
  </tr>
  @endforeach
</table>
</center>
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