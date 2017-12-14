<?php $this->load->view($header); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Orangtua Pendaftar Bidikmisi
        
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Orangtua Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Siswa</th>
                  <th>Nama Ayah</th>
                  <th>Nama Ibu</th>
                  <th>Pekerjaan Ayah</th>
                  <th>Pekerjaan Ibu</th>
                  <th>Penghasilan Ayah</th>
                  <th>Penghasilan Ibu</th>
                  <th>No Hp</th>
                  
                </tr>
                </thead>
                <tbody>
                  
                  <?php foreach ($orangtua as $key) {?>
                  
                <tr>
                  <td><?= $key->nama_siswa ?></td>
                  <td><?= $key->nama_ayah ?></td>
                  <td><?= $key->nama_ibu ?></td>
                  <td><?= $key->pekerjaan_ayah ?></td>
                  <td><?= $key->pekerjaan_ibu ?></td>
                  <td><?= $key->penghasilan_ayah ?></td>
                  <td><?= $key->penghasilan_ibu ?></td>
                  <td><?= $key->no_hp ?></td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama Siswa</th>
                  <th>Nama Ayah</th>
                  <th>Nama Ibu</th>
                  <th>Pekerjaan Ayah</th>
                  <th>Pekerjaan Ibu</th>
                  <th>Penghasilan Ayah</th>
                  <th>Penghasilan Ibu</th>
                  <th>No Hp</th>
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