<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Sekolah</title>
  <style type="text/css">
    .preloader {
      top: 0;
      left: 0;
      width: 100%;
      height: 90%;
      z-index: 9999;
      position: fixed;
      background-color: white;
    }

    .loading {
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      position: absolute;
      animation: mymove 1.5s infinite alternate;
    }
  </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
  <link href="../fontawesome/css/all.css" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">

  <div class="preloader">
    <div class="loading">
      <img src="Gambar/loading41.gif">
    </div>
  </div>
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-primary navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <div class="media-body">
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <div class="media-body">
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <div class="media-body">
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
             <img h6 class="font-weight-bold">&nbsp;&nbsp;<b><font color="white">
              Hallo, {{ Auth::user()->name }}!
            </font></b></h6>
            </a>
            @if (auth()->user()->role =="siswa")
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="/user_profile">
              <i class="fa-solid fa-user"></i>
                Profile
              </a>
            </div>
            @endif
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <!-- <img src="Gambar/logoo.jpg" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <marquee><b>SMK INFORMATIKA UTAMA</b></marquee>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Cari" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
              <a href="/dashboard" class="nav-link active">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  <font color="black">Dashboard</font>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/profile" class="nav-link active">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  <font color="black">Profile SMK</font>
                </p>
              </a>
            </li>
            
          
            @if (auth()->user()->role =="admin")
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <font color="black">Form Utama</font>
                </p>
                <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            @endif 

              @if (auth()->user()->role =="admin")
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/pengajar" class="nav-link">
                    <i class="far fa-circle nav-icon text-black"></i>
                    <p>
                      <font color="black">Pengajar</font>
                    </p>
                  </a>
                </li>
                </ul>
              @endif 
               
              @if (auth()->user()->role =="admin")
                <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/kelas" class="nav-link">
                    <i class="far fa-circle nav-icon text-black"></i>
                    <p>
                      <font color="black">Kelas</font>
                    </p>
                  </a>
                </li>
                </ul>
              @endif 

             
              <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
                <p>
                  <font color="black">Form Siswa</font>
                </p>
                <i class="right fas fa-angle-left"></i>
                </p>
              </a>
           
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/siswa" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      <font color="black">Data Siswa</font>
                    </p>
                  </a>
                </li>
                </ul>

                <li class="nav-item">
                  <a href="{{'logout'}}" class="nav-link" onclick="return confirm('Apakah Anda Ingin Keluar?')"> 
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                      <font color="black">
                        Keluar
                      </font>
                    </p>
                  </a>
                </li>
              </ul>
            </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <!-- <h1 class="m-0">Halaman Utama</h1> -->
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="container">
      <div class="card card-primary card-outline mt-3">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-head container-fluid" style="margin-top: 10px;">
                <div class="pull-right"> </br>
              <div class="panel-body">
              <span class="brand-text font-weight-black"><h4><center>SELAMAT DATANG DI</center></h4></span> </p>
              <h5><center><b>SISTEM INFORMASI SMK INFORMATIKA UTAMA</b></center></h5>
              <center>
                <img src="Gambar/logoo.jpg" height="10%" width="15%" class="brand-image img-circle elevation-3" style="opacity: .8">
              </center>
              <p>
                <center>Jl.JCC Kompleks PT PLN P3B Jawa Bali No.61 Krukut, Kec. Limo, Kota Depok</center>
              </div>
            </div>
          </div>
        </div>
      </div>
          <!-- /.row -->
          <!-- /.col-md-6 -->
        </div>
        <!-- /.col -->
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            </br>
            
            <section class="content">
           <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          
          <div class="row">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-lg-3 col-6">
              <!-- small box -->
              @if (auth()->user()->role =="admin")
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3>{{ $jumlah_kelas }}</h3>
                  <p>Kelas</p>
                </div>
                <div class="icon">
                  <i class="fas fa-exclamation"></i>
                </div>
              </div>
            </div>

             <!-- ./col -->
             <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{ $jumlah_pengajar }}</h3>

                  <p>Pengajar</p>
                </div>
                <div class="icon">
                  <i class="fas fa-dna"></i>
                </div>
              </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{ $jumlah_siswa }}</h3>

                  <p>Siswa</p>
                </div>
                <div class="icon">
                  <i class="fas fa-map"></i>
                </div>
              </div>
            </div>
            @endif
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->
       
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
  <!-- To the right -->
  <!-- Default to the left -->
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
  <!-- sweetalert/konfirmasi sebelum hapus -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
  <script>
    if ($('#table-data')) {
      $('#table-data').DataTable()
    }
  </script>

  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.preloader').delay('50000').fadeout();
    });
  </script>
</body>

</html>