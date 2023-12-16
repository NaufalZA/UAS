<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RumahMurah | Log in</title>
 
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
 
  <link rel="stylesheet" href="../assets/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Rumah</b>Murah</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Selamat Datang</p>
 
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger text-light" role="alert">
              {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Email / Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <style>
        .small-link {
          font-size: 0.7em;
          position: relative;
          top: -20px;
        }
        .login-row {
          margin-top: -10px; /* adjust this value as needed */
        }        
        </style>

        <div class="row">
          <div class="col-12 text-right">
            <a href="forgot-password.html" class="small-link">Lupa Password?</a>
          </div>
          <!-- /.col -->
        </div>
        <div class="row login-row">
          <div class="col-5 mx-auto">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      <style>
      .small-text {
        font-size: 0.8em; /* adjust this value as needed */
      }
      </style>

      <p class="mb-0 mt-3 text-center small-text">
        <!-- <a href="{{ route('register') }}" class="text-center">Daftar Gratis</a> -->
        Belum punya akun? <a href="{{ route('register') }}">Daftar Gratis</a>
      </p>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
 
<!-- jQuery -->
<script src="../assets/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/adminlte.min.js"></script>            
</body>
</html>