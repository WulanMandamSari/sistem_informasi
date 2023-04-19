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

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-primary navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
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
      <a href="index3.html" class="brand-link">
      <img src="Gambar/logoo.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-black"><b>SMKI Utama</b></span>
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
                      <font color="black">PROFILE SISWA</font>
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
        @if(session('Data ditambah'))
        <div class="alert alert-primary" role="alert">
          {{session('Data ditambah')}}
        </div>
        @endif

        @if(session('Data diedit'))
        <div class="alert alert-success" role="alert">
          {{session('Data diedit')}}
        </div>
        @endif

        @if(session('Data dihapus'))
        <div class="alert alert-danger" role="alert">
          {{session('Data dihapus')}}
        </div>
        @endif
        <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
              <h1 class="m-0"><center><font color="black">DATA SISWA</font></center></h1>
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
                    <div class="card-body">
                    <label class="col-sm-2 col-form-label">NISN</label> : {{ $user->nisn }}
                    <div class="col-sm-10">
                    </div>
                  </div>
                 
                    <div class="card-body">
                    <label class="col-sm-2 col-form-label">Nama Lengkap</label> : {{ $user->name }}
                    <div class="col-sm-10">
                    </div>
                  </div>
                  
                    <div class="card-body">
                    <label class="col-sm-2 col-form-label">Email</label> : {{ $user->email }}
                    <div class="col-sm-10">
                    </div>
                  </div>
                 
                    <div class="card-body">
                    <label class="col-sm-2 col-form-label">No Handphone</label> : {{ $user->no_telepon }}
                    <div class="col-sm-10">
                    </div>
                  </div>
                 
                    <div class="card-body">
                    <label class="col-sm-2 col-form-label">Tempat Lahir</label> : {{ $user->tempat_lahir }}
                    <div class="col-sm-10">
                    </div>
                  </div>
                  
                    <div class="card-body">
                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label> : {{ date('d F Y', strtotime($user->tgl_lahir)) }}
                    <div class="col-sm-10">
                    </div>
                  </div>
                 
                    <div class="card-body">
                    <label class="col-sm-2 col-form-label">Alamat</label> : {{ $user->alamat }}
                    <div class="col-sm-10">
                    </div>
                  </div>
                 
                    <div class="card-body">
                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label> : {{ $user->jenkel }}
                    <div class="col-sm-10">
                    </div>
                  </div>
                 
                    <div class="card-body">
                    <label class="col-sm-2 col-form-label">Hobi</label> : {{ $user->hobi }}
                    <div class="col-sm-10">
                    </div>
                  </div>
        
              <hr color="#0000FF">
                                  <div class="col-12 grid-margin stretch-card">
                                    <div class="card-body">
                                      <p class="card-description">
                                        <center>Lengkapi Datamu Dibawah Ini!</center>
                                      </p>
                                      
                                    <form method="POST" action="user_profile/{{ $user->id}}" enctype="multipart/form-data">
                                        @csrf 
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="row">     
                                        <div class="form-group col-md-12">
                                              <label>NISN</label>
                                              <input type="text" value="{{ $user->nisn }}" class="form-control" name="nisn">
                                        @if($errors->has('nik'))
                                            <div class="text-danger">
                                              {{ $errors->first('nik')}}
                                            </div>
                                        @endif 
                                          </div>
                                          <div class="form-group col-md-12">
                                              <label>Nama Lengkap</label>
                                              <input type="text" value="{{ $user->name }}" class="form-control" name="name">
                                        @if($errors->has('name'))
                                            <div class="text-danger">
                                              {{ $errors->first('name')}}
                                            </div>
                                        @endif 
                                          </div>
                                          <div class="form-group col-md-12">
                                              <label>Email</label>
                                              <input type="text" value="{{ $user->email }}" class="form-control" name="email">
                                        @if($errors->has('email'))
                                            <div class="text-danger">
                                              {{ $errors->first('email')}}
                                            </div>
                                        @endif 
                                          </div>
                                          <div class="form-group col-md-12">
                                              <label>No Handphone</label>
                                              <input type="text" value="{{ $user->no_telepon }}" class="form-control" name="no_telepon">
                                        @if($errors->has('no_telepon'))
                                            <div class="text-danger">
                                              {{ $errors->first('no_telepon')}}
                                            </div>
                                        @endif 
                                          </div>
                                          <div class="form-group col-md-12">
                                              <label>Tempat Lahir</label>
                                              <input type="text" value="{{ $user->tempat_lahir }}" class="form-control" name="tempat_lahir">
                                        @if($errors->has('tempat_lahir'))
                                            <div class="text-danger">
                                              {{ $errors->first('tempat_lahir')}}
                                            </div>
                                        @endif 
                                          </div>
                                          <div class="form-group col-md-12">
                                              <label>Tanggal Lahir</label>
                                              <input type="date" value="{{ $user->tgl_lahir }}" class="form-control" name="tgl_lahir">
                                        @if($errors->has('tgl_lahir'))
                                            <div class="text-danger">
                                              {{ $errors->first('tgl_lahir')}}
                                            </div>
                                        @endif 
                                          </div>
                                          <div class="form-group col-md-12">
                                              <label>Alamat</label>
                                              <input type="text" value="{{ $user->alamat }}" class="form-control" name="alamat">
                                        @if($errors->has('alamat'))
                                            <div class="text-danger">
                                              {{ $errors->first('alamat')}}
                                            </div>
                                        @endif 
                                          </div>
                                          <div class="form-group col-md-12">
                                              <label>Nama Lengkap</label>
                                              <input type="text" value="{{ $user->name }}" class="form-control" name="name">
                                        @if($errors->has('name'))
                                            <div class="text-danger">
                                              {{ $errors->first('name')}}
                                            </div>
                                        @endif 
                                          </div>
                                          <div class="form-group col-md-12">
                                              <label class="form-label" for="jenkel">Jenis Kelamin :</label>
                                              <p><input type="radio" value="laki-laki" name="jenkel">&nbsp; Laki-laki</input> &nbsp; &nbsp;
                                              <input type="radio" value="Perempuan" name="jenkel">&nbsp; Perempuan</p> 
                                        @if($errors->has('jenkel'))
                                            <div class="text-danger">
                                              {{ $errors->first('jenkel')}}
                                            </div>
                                        @endif 
                                          </div>
                                          <div class="form-group col-md-12">
                                              <label>Hobi</label>
                                              <input type="text" value="{{ $user->hobi }}" class="form-control" name="hobi">
                                        @if($errors->has('hobi'))
                                            <div class="text-danger">
                                              {{ $errors->first('hobi')}}
                                            </div>
                                        @endif 
                                          </div>
                                          </div>
                                              &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-outline-primary">Edit Profile</button>
                                              @if (auth()->user()->role =="admin")
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/dashboard" class="btn btn-outline-danger">Kembali</a>
                                              @endif 
                        
                                              @if (auth()->user()->role =="siswa")
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/dashboard" class="btn btn-outline-danger">Kembali</a>
                                              @endif
                                          </div>
                                      </form>
                                      </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- /.col-md-6 -->
  </div>
  <!-- /.row -->
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
  <!-- <footer class="main-footer"> -->
  <!-- To the right -->
  <!-- Default to the left -->
  <!-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> -->
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
  <script>
    if ($('#table-data')) {
      $('#table-data').DataTable({
        "columnDefs": [{
          "width": "20%",
          "targets": 8
        }]
      })
    }
  </script>
</body>

</html>