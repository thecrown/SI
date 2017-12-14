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
              <h3 class="box-title">Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Siswa</th>
                  <th>Nama Sekolah</th>
                  <th>NIS</th>
                  <th>Tanggal Lulus</th>
                  <th>Nilai Siswa</th>
                  <th>Prestasi</th>
                </tr>
                </thead>
                <tbody>
                  
                  <?php foreach ($pendidikan as $key) {?>
                  
                <tr>
                  <td><?= $key->nama_siswa ?></td>
                  <td><?= $key->nama_sekolah ?></td>
                  <td><?= $key->NIS ?></td>
                  <td><?= $key->tanggal_lulus ?></td>
                  <td><?= $key->nilai_siswa ?></td>
                  <td><?= $key->prestasi ?></td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama Siswa</th>
                  <th>Nama Sekolah</th>
                  <th>NIS</th>
                  <th>Tanggal Lulus</th>
                  <th>Nilai Siswa</th>
                  <th>Prestasi</th>
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