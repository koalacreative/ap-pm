<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Angkasa Pura | Property</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css")}}">
  <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css"> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset("assets/font-awesome-4.6.3/css/font-awesome.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset("assets/css/ionicons.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("assets/css/AdminLTE.css")}}" >
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset("assets/css/skins/_all-skins.css")}}" >

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  @include('header')
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          {{ $page_title or "Page Title" }}
          <small></small>
        </h1>
        <p class="breadcrumb">
          Selasa, 23 Agustus 2016
        </p>
      </section>

      <!-- Main content -->
      <section class="content">
          @yield('content')
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  @include('footer')
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset("assets/plugins/jQuery/jquery-2.2.3.min.js")}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset("assets/bootstrap/js/bootstrap.min.js")}}"></script>
<!-- SlimScroll -->
<script src="{{ asset("assets/plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>
<!-- FastClick -->
<script src="{{ asset("assets/plugins/fastclick/fastclick.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("assets/js/app.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset("assets/js/demo.js")}}"></script>
<!-- DataTables -->
<script src="{{ asset("assets/js/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("assets/js/dataTables.bootstrap.min.js") }}"></script>
<!-- App scripts -->
@stack('scripts')
</body>
</html>
