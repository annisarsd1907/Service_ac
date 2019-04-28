<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo site_url('assets/bower_components')?>/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo site_url('assets/bower_components')?>/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo site_url('assets/bower_components')?>/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo site_url('assets/bower_components')?>/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo site_url('assets/dist')?>/css/Admin.css">
  <link rel="stylesheet" href="<?php echo site_url('assets/dist')?>/css/skins/skin.css">
  <link rel="stylesheet" href="<?php echo site_url('assets/plugins')?>/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <title>Register</title>
</head>

<body class="hold-transition login-page">
<div class="register-box2">
  <div class="register-box-body">
    <p class="login-logo"><b>Daftar</b></p>
    <form action="<?php echo site_url('insertcontroler/proses_insert');?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('username'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?php echo form_error('password'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Ulang Password" name="ulang_password" value="<?php echo set_value('ulang_password'); ?>">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        <?php echo form_error('ulang_password'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Level User" name="level" value="<?php echo set_value('level'); ?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?php echo form_error('level'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" value="<?php echo set_value('nama_lengkap'); ?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?php echo form_error('nama_lengkap'); ?>
      </div>
      <div class="form-group">
      	<button type="submit" class="btn btn-block btn-default">Daftar</button>
      </div>
    </form>
    <div class="row">
      <div class="col-xs-8">
      </div>
      <div class="col-xs-4">
        <form method="post" action="<?php echo site_url('Login') ?>">
          <button type="submit" class="btn btn-block btn-default">Login</button>
        </form>
      </div>
    </div>
  </div>
  </div>
</div>
<script src="<?php echo site_url('assets/bower_components')?>/jquery/dist/jquery.min.js"></script>
<script src="<?php echo site_url('assets/bower_components')?>/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo site_url('assets/bower_components')?>/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo site_url('assets/bower_components')?>/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo site_url('assets/bower_components')?>/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo site_url('assets/bower_components')?>/fastclick/lib/fastclick.js"></script>
<script src="<?php echo site_url('assets/dist')?>/js/adminlte.min.js"></script>
<script src="<?php echo site_url('assets/dist')?>/js/demo.js"></script>
<script src="<?php echo site_url('assets/plugins')?>/iCheck/icheck.min.js"></script>
</body>
