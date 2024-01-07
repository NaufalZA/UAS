<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RumahMurah | User Profile</title>
 
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-free/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('logout') }}" class="nav-link">Log Out</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
    
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('product.index') }}" class="brand-link">
        <img src="{{ asset('assets/img/Logo.png')}}" alt="RumahMurah Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">RumahMurah</span>
    </a>
 
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/img/avatar4.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <script>
        window.onload = function() {
          var nameElement = document.querySelector('.user-name');
          var name = nameElement.textContent;
          var words = name.split(' ');

          if (words.length > 2) {
            words.splice(2, 0, '<br>');
            nameElement.innerHTML = words.join(' ');
          }
        };
        </script>

        <div class="info">
          <a href="{{ route('profile.index') }}" class="d-block user-name">{{ Auth::user()->name }}</a>
        </div>
      </div>
 
      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Halaman
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="{{ route('product.index') }}" class="{{ Request::is('product') ? 'nav-link active' : 'nav-link' }}"> 
                    <i class="far fa-circle nav-icon"></i>
                    <p>Home</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('product.create') }}" class="{{ Request::is('product/create') ? 'nav-link active' : 'nav-link' }}"> 
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jual Rumah</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('product.my') }}" class="{{ Request::is('product/my') ? 'nav-link active' : 'nav-link' }}"> 
                    <i class="far fa-circle nav-icon"></i>
                    <p>Rumah Saya</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('profile.purchase') }}" class="{{ Request::is('profile/purchase') ? 'nav-link active' : 'nav-link' }}"> 
                    <i class="far fa-circle nav-icon"></i>
                    <p>History</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('profile.index') }}" class="{{ Request::is('profile') ? 'nav-link active' : 'nav-link' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Profil</p>
                  </a>
              </li>
              @if(auth()->user()->level == "Admin")
              <li class="nav-item">
                  <a href="{{ route('approve') }}" class="{{ Request::is('approve') ? 'nav-link active' : 'nav-link' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Approve</p>
                  </a>
              </li>
              @endif
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @if(session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
    @if(session('error'))
      <div class="alert alert-danger" role="alert">
        {{ session('error') }}
      </div>
    @endif
 
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> -->
 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
 
<!-- jQuery -->
<script src="../assets/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/js/demo.js"></script>
</body>
</html>