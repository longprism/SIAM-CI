  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Akademik</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <a href="<?php base_url(); ?>absen">
              <div class="info-box mb-3 bg-success">
                <span class="info-box-icon"><i class="fas fa-edit"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Presensi Online</span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </a>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <a href="javascript:void(0)">
              <div class="info-box mb-3 bg-secondary">
                <span class="info-box-icon"><i class="fas fa-user-graduate"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Profil Mahasiswa</span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </a>
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <a href="<?php base_url(); ?>krs">
              <div class="info-box mb-3 bg-primary">
                <span class="info-box-icon"><i class="fas fa-plus"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Kartu Rencana Studi</span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </a>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <a href="javascript:void(0)">
              <div class="info-box mb-3 bg-info">
                <span class="info-box-icon"><i class="fas fa-book"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Kartu Hasil Studi</span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </a>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row --> 
        <div class="row">
          <div class="col-md-4">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php base_url(); ?>images/user.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $user[0]->nama; ?></h3>

                <p class="text-muted text-center"><?php echo $user[0]->nim; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Jurusan</b> <a class="float-right"><?php echo $user[0]->jurusan; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Seleksi</b> <a class="float-right"><?php echo $user[0]->seleksi; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Nomor Ujian</b> <a class="float-right"><?php echo $user[0]->nomor_ujian; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Status</b> <a class="float-right">
                      <?php if ($user[0]->status) { ?>
                        <span class="badge badge-success">Aktif</span>
                      <?php } else {?>
                      <span class="badge badge-danger">Tidak Aktif</span>
                      <?php }?>
                    </a>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <!-- /.col -->
          <div class="col-md-8">
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Jadwal Kuliah</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              
              <?php if (count($jadwal)==0) {?>
                <div class="card-body d-flex justify-content-center p-3">
                  <i>Anda belum merancang KRS</i>
                </div>
              <?php } else { ?>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Kode Matkul</th>
                      <th>Mata Kuliah</th>
                      <th>Kelas</th>
                      <th>Hari</th>
                      <th>Jam</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($jadwal as $jad) { ?>
                    <tr>
                      <td><a href="javascript:void(0)"><?php echo $jad->kode_matkul; ?></a></td>
                      <td><?php echo $jad->nama_matkul; ?></td>
                      <td><?php echo $jad->kelas; ?></td>
                      <td><?php echo $jad->hari; ?></td>
                      <td><?php echo $jad->jam; ?></td>
                      <td><span class="badge badge-success">Sudah Disetujui</span></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <?php } ?>

              <!-- /.card-body -->
              <div class="card-footer clearfix">
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Kehadiran</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              
              <?php if (count($hadir)==0) {?>
                <div class="card-body d-flex justify-content-center p-3">
                  <i>Belum ada persetujuan rancangan KRS</i>
                </div>
              <?php } else { ?>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Kode Matkul</th>
                      <th>Mata Kuliah</th>
                      <th>Kelas</th>
                      <th>Tatap Muka</th>
                      <th>Hadir</th>
                      <th>Izin</th>
                      <th>Alpha</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($hadir as $jad) { ?>
                    <tr>
                      <td><?php echo $jad->kode_matkul; ?></td>
                      <td><?php echo $jad->nama_matkul; ?></td>
                      <td><?php echo $jad->kelas; ?></td>
                      <td><?php echo $jad->tatap_muka; ?></td>
                      <td><?php echo $jad->hadir; ?></td>
                      <td><?php echo $jad->izin; ?></td>
                      <td><?php echo $jad->alpha; ?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <?php } ?>

              <!-- /.card-body -->
              <div class="card-footer clearfix">
            </div>
              <!-- /.card-footer -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

