<?php $this->load->view($header); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail View Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Detail Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($detail as $key) {?>
            <form action="<?php echo base_url('Acc/').$key->id_siswa; ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Siswa</label>
                  <input type="text" value="<?= $key->nama_siswa ?>" readonly class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kota Lahir</label>
                  <input type="text"  value="<?= $key->kota_lahir ?>" readonly  class="form-control" id="exampleInputPassword1" >
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="text" value="<?= $key->tanggal_lahir ?>" readonly  class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat Siswa</label>
                  <input type="text" value="<?= $key->alamat_siswa ?>" readonly class="form-control" id="exampleInputPassword1" >
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Nama Sekolah</label>
                  <input type="text" value="<?= $key->nama_sekolah ?>" readonly class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nilai</label>
                  <input type="text" value="<?= $key->nilai_siswa ?>" readonly class="form-control" id="exampleInputPassword1" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Prestasi</label>
                  <textarea class="form-control" rows="4" readonly> <?= $key->prestasi?> </textarea>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" value="ditolak" name="Hasil" class="btn btn-primary">Ditolak</button>
              </div>

            
          </div>
          </form>
          <?php } ?>
        </div>

        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Orang Tua </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($detail as $key) {?>
            <form class="form-horizontal" action="<?php echo base_url('Acc/').$key->id_siswa; ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Ayah</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?= $key->nama_ayah ?>" readonly class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Ibu</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?= $key->nama_ibu ?>" readonly class="form-control" id="inputPassword3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Pekerjaan Ayah</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?= $key->pekerjaan_ayah ?>" readonly class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Pekerjaan Ibu</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?= $key->pekerjaan_ibu ?>" readonly class="form-control" id="inputPassword3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Penghasilan Ayah</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?= number_format($key->penghasilan_ayah) ?>" readonly class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Penghasilan Ibu</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?= number_format($key->penghasilan_ibu); ?>" readonly class="form-control" id="inputPassword3">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" value="diterima" name="Hasil" class="btn btn-info pull-right">Diterima</button>
              </div>
              <!-- /.box-footer -->
            </form>
            <?php } ?>
          </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <?php $this->load->view($footer);?>