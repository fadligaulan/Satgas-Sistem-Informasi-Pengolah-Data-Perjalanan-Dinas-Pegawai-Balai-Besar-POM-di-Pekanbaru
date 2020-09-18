<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Info Kajian Islam | Login</title>
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/fadli.ico') ?>"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css'); ?>">

  <!-- HTML5 Shim and Respond.js'); ?> IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js'); ?> doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'); ?>"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js'); ?>"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Info Kajian Islami</b><br><strong></strong></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan login..!!</p>
    <div class="login100-form-avatar">
      <img src="images/avatar-01.jpg" alt="AVATAR">
    </div>
    <form action="<?php echo site_url('auth/login'); ?>" id="login-form" method="post">
      <div class="form-group has-feedback" data-validate = "Username tidak boleh kosong!">
        <input type="text" name="username" class="form-control" placeholder="Username" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback" data-validate = "Kata sandi tidak boleh kosong!">
        <input type="password" name="pwd" class="form-control" placeholder="Password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-success" value="login">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
      <?php if(validation_errors()): ?>
      <div class="row">  
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-ban"></i> Mohon Maaf!</h4>
              <?php echo validation_errors('<p>', '</p>'); ?>   
        </div>
      </div>
      <?php endif; ?> 
    </form>

    
    <!-- /.social-auth-links -->
    <h4><font color="red">Jika belum punya akun, silahkan daftar terlebih dahulu dibawah ini.</font></h4>
    <h5><a href="<?php echo site_url('takmir-masjid/insert'); ?>" class="text-center">Daftar sebagai Admin Masjid</a></h5>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js'); ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
