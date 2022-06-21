<?php
if ($msg!=null) {
    $msg = $msg;
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
      <p class="login-box-msg">absen</p>

        <div class="input-group mb-3">
          <div class="form-group">
          <!-- <div class="table-responsive">
            <table class="table m-0">
              <thead>
              <tr>
                <th>Kode Matkul</th>
                <th>Mata Kuliah</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td></td>
                <td></td>
              </tr>
              </tbody>
            </table>
          </div> -->
          <form id="krs1" action="<?php base_url(); ?>setabsen/drop" method="post">

          <table class="table table-hover text-nowrap">
              <tbody>
                <?php foreach ($absen as $abs) { ?>
                <tr>
                  <td><?php echo $abs->nama_matkul." ".$abs->kelas; ?></td>
                  <td>
                    <input type="submit" class="btn btn-danger" name="dropabsen" value="<?php echo $abs->id_att_session; ?>">
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            </form>
            <label for="exampleSelectRounded0">Flat <code>.rounded-0</code></label>
            <form action="<?php base_url();?>setabsen/execute" method="post">
            <select name="selectabs" class="custom-select rounded-0">
              <?php foreach ($matkul as $mat) { ?>
                <option value="<?php echo $mat->kode_matkul; ?>"><?php echo $mat->nama_matkul; ?> <?php echo $mat->kelas; ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Jalan</button>
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
