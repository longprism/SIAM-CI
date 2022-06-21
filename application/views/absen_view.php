  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Presensi Online</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Pembelajaran</h3>

                <div class="card-tools">
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-<?php if(count($absen)==0) {echo '3 d-flex justify-content-center';} else {echo '0';}?>">
              <?php if (count($absen)==0) { ?>
                <i>Tidak ada pembelajaran yang sedang berlangsung.</i>
                <?php } else { ?>
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Mata Kuliah</th>
                      <th>Kelas</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($absen as $abs) { ?>
                    <tr>
                      <td><?php echo $abs->nama_matkul; ?></td>
                      <td><?php echo $abs->kelas; ?></td>
                      <?php if (count($session)>0) { ?>
                      <td>Absensi sudah terekam</td>
                      <?php } else { ?>
                      <td>
                        <div class="input-group">
                        <form id="absen1" action="<?php base_url(); ?>absen/insert" method="post">
                          <input type="hidden" name="kodem" value="<?php echo $abs->kode_matkul; ?>">
                          <input type="hidden" name="kodea" value="1">
                          <input type="hidden" name="idatt" value="<?php echo $abs->id_att_session ?>">
                          <button class="mr-2 btn btn-success" type="submit">Hadir</button>
                        </form>
                        <form id="absen2" action="<?php base_url(); ?>absen/insert" method="post">
                          <input type="hidden" name="kodem" value="<?php echo $abs->kode_matkul; ?>">
                          <input type="hidden" name="idatt" value="<?php echo $abs->id_att_session ?>">
                          <input type="hidden" name="kodea" value="2">
                          <button class="mr-2 btn btn-warning" type="submit">Izin</button>
                        </form>
                        <form id="absen3" action="<?php base_url(); ?>absen/insert" method="post">
                          <input type="hidden" name="kodem" value="<?php echo $abs->kode_matkul; ?>">
                          <input type="hidden" name="kodea" value="3">
                          <input type="hidden" name="idatt" value="<?php echo $abs->id_att_session ?>">
                          <button class="mr-2 btn btn-danger" type="submit">Alpha</button>
                        </form>
                        </div>
                      </td>
                      <?php } ?>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <?php } ?>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->