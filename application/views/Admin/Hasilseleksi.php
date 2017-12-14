<?php $this->load->view($header); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pendaftar Bidikmisi
        
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <div class="box-header">
            <span><a role="button" href="<?=base_url('print') ?>" class="btn btn-success"><i class="fa fa-print bigicon" >&nbsp;&nbsp;Cetak</i></a></span>
            <br /><br />
            
              <h3 class="box-title">Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Siswa</th>
                  <th>Gender</th>
                  <th>Kota Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat Siswa</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  
                  <?php foreach ($acc as $key) {?>
                  
                <tr>
                  <td><?= $key->nama_siswa ?></td>
                  <td><?= $key->jenis_kelamin ?></td>
                  <td><?= $key->kota_lahir ?></td>
                  <td><?= $key->tgl_lahir ?></td>
                  <td><?= $key->alamat_siswa ?></td>
                  <td><?= $key->status ?></td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama Siswa</th>
                  <th>Gender</th>
                  <th>Kota Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat Siswa</th>
                  <th>Status</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
<?php $this->load->view($footer);?>