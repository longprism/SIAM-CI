<?php
if ($msg!=null) {
    $msg = $msg;
} else {
  $msg = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php base_url();?>plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php base_url();?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php base_url();?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php base_url();?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php base_url();?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">

<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?php base_url();?>index2.html" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <div class="alert alert-danger alert-dismissible" style="display: <?php echo ($msg==2)?'':'none' ?>">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
        gk berhasil
      </div>
      <div class="alert alert-success alert-dismissible<?php echo ($msg==1)?'':'none' ?>">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Success!</h5>
        berhasil
      </div>
      <form action="<?php base_url();?>register/insert" method="post">
        <div class="input-group mb-3">
          <input name="nama" type="text" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="nim" type="text" class="form-control" placeholder="nim">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="seleksi" type="text" class="form-control" placeholder="seleksi">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="jurusan" type="text" class="form-control" placeholder="jurusan">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="nmrujian" type="text" class="form-control" placeholder="nomor ujian">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="tgllahir" type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
          <div class="input-group-append">
            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="alamat" type="text" class="form-control" placeholder="alamat">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="aktif" value="true">
              <label for="agreeTerms">
               Aktif?
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?php base_url();?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php base_url();?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- InputMask -->
<script src="<?php base_url();?>plugins/moment/moment.min.js"></script>
<script src="<?php base_url();?>plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php base_url();?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- AdminLTE App -->
<script src="<?php base_url();?>dist/js/adminlte.min.js"></script>
<script>
  $(function (){
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

  })
</script>
</body>
</html>
