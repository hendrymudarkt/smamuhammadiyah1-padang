<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMA Muhammadiyah 1 Padang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
  <!-- Material Icon -->
  <link rel="stylesheet" href="<?php echo site_url('resources/css/ionicons.min.css');?>">
  <!-- Datetimepicker -->
  <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" style="background: #ccc">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url() ?>">SMA Muhammadiyah 1 <b>Padang</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Login</p>

    <?php echo form_open('login/aksi_login'); ?>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="NIS/Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <select name="level" class="form-control">
          <option value="0">Level</option>
          <option value="1">Panitia</option>
          <option value="2">Pendaftar</option>
          <option value="3">Kepala Sekolah</option>
        </select>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            Belum punya akun?
            <a href="<?php echo site_url('register/index') ?>">Daftar</a>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close(); ?>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
  <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
</body>
</html>