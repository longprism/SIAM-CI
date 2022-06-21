  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kartu Rencana Studi</h1>
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
                <h3 class="card-title">Daftar Mata Kuliah</h3>

                <div class="card-tools">
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-<?php if(!$user[0]->status || count($krs)>0) {echo '3 d-flex justify-content-center';} else {echo '0';}?>">
              <?php if (!$user[0]->status) { ?>
                <i>Anda bukan mahasiswa aktif.</i>
                <?php } else if (count($krs)>0) { ?>
                <i>Anda sudah merancang KRS untuk semester ini.</i>
                <?php } else { ?>
                <form id="krs1" action="<?php base_url(); ?>krs/insert" method="post">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Kode</th>
                      <th>Mata Kuliah</th>
                      <th>Kelas</th>
                      <th>Hari</th>
                      <th>Jam</th>
                      <th>SKS</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach ($matkul as $matk) { ?>
                    <tr>
                        <td><?php echo $matk->kode_matkul; ?></td>
                        <td><?php echo $matk->nama_matkul; ?></td>
                        <td><?php echo $matk->kelas; ?></td>
                        <td><?php echo $matk->hari; ?></td>
                        <td><?php echo $matk->jam; ?></td>
                        <td><?php echo $matk->sks; ?></td>
                        <td><div class="icheck-primary m-1">
                          <input type="checkbox" name="cekmat[]" value="<?php echo $matk->kode_matkul; ?>">
                        </div></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <div class="card-footer clearfix">
                <a href="javascript:{}" onclick="document.getElementById('krs1').submit();" class="btn btn-sm btn-info float-right">Pilih & Setujui</a>
              </div>
              </form>
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