<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
       
        <div class="col-md-6">
          <!-- general form elements -->
          <form action="<?php echo base_url('Daftar'); ?>" method="POST" accept-charset="utf-8">
          
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Diri</h3>
            </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input type="text" required name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama ">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                <div class="radio">
                    <label><input type="radio" required name="Jeniskelamin" id="optionsRadios1" value="Laki-Laki">Laki-Laki</label>
                  </div>
                <div class="radio">
                    <label><input type="radio" required name="Jeniskelamin" id="optionsRadios1" value="Perempuan">Perempuan</label>
                  </div>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Agama</label>
                <div class="radio">
                    <label><input type="radio" required name="Agama" id="optionsRadios1" value="Islam">Islam</label>
                    <label><input type="radio" required name="Agama" id="optionsRadios1" value="Protestan">Protestan</label>
                    <label><input type="radio" required name="Agama" id="optionsRadios1" value="Katholik">Katholik</label>
                  </div>
                <div class="radio">
                    <label><input type="radio" required name="Agama" id="optionsRadios1" value="Hindu">Hindu</label>
                    <label><input type="radio" required name="Agama" id="optionsRadios1" value="Buddha">Buddha</label>
                    <label><input type="radio" required name="Agama" id="optionsRadios1" value="Konghucu">Konghucu</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota Lahir</label>
                  <input type="text" required name="kotalahir" class="form-control" id="exampleInputEmail1" placeholder="Masukan Kota Lahir">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" required name="tanggallahir" class="form-control" id="exampleInputEmail1">
                </div>
                
                <div class="form-group">
                  <label>Alamat </label>
                  <textarea class="form-control" required rows="4" name="alamat" placeholder="Masukan Alamat">
                  </textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pos</label>
                  <input type="number" name="kodepos" required class="form-control" placeholder="Masukan Kode Pos" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Hp</label>
                  <input type="number" name="hp" required class="form-control" placeholder="Masukan No Hp" id="exampleInputEmail1">
                </div>
              </div>
          </div>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Keluarga</h3>
            </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ayah</label>
                  <input type="text" name="namaayah" required class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Ayah">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pekerjaan Ayah</label>
                  <input type="text" required name="pekerjaanayah" class="form-control" id="exampleInputEmail1" placeholder="Masukan Pekerjaan Ayah ">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ibu</label>
                  <input type="text" required name="namaibu" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Ibu">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pekerjaan Ibu</label>
                  <input type="text" required name="pekerjaanibu" class="form-control" id="exampleInputEmail1" placeholder="Masukan Pekerjaan Ibu ">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Hp</label>
                  <input type="number" required name="hportu" class="form-control" placeholder="Masukan No Hp" id="exampleInputEmail1">
                </div>
              </div>
          </div>
        </div>
       
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ekonomi Keluarga</h3>
            </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Penghasilan Ayah</label>
                  <input type="number" required name="penghasilanayah" class="form-control" placeholder="Masukan Penghasilan" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Penghasilan Ibu</label>
                  <input type="number" required name="penghasilanibu" class="form-control" placeholder="Masukan Penghasilan" id="exampleInputEmail1">
                </div>
              </div>
          </div>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pendidikan</h3>
            </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Sekolah</label>
                  <input type="text" required name="namasekolah" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Sekolah">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Induk</label>
                  <input type="number" required name="nomerinduk" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nomer Induk">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun Lulus</label>
                  <input type="Date" required name="tahunlulus" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Prestasi yang pernah diraih</label>
                  <textarea  class="form-control" rows="4" name="prestasi"  id="exampleInputEmail1" placeholder="Masukan prestasi"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nilai</label>
                  <input type="number" required name="Nilai" class="form-control" placeholder="Masukan Nilai Rata-Rata" id="exampleInputEmail1">
                </div>
              </div>
          </div>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Catatan Khusus</h3>
            </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kondisi kesehatan</label>
                  <textarea type="text" name="kondisikesehatan" class="form-control" id="exampleInputEmail1" placeholder="Masukan Pekerjaan Ibu "></textarea>
                </div>
              </div>
          </div>
           <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <?php 
        if (!empty($this->session->flashdata('err_msg'))) {
         echo '<div class="alert alert-danger alert-dismissable" style="width:100%;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
         } 
       ?>
        </div>
      </div>
    </section>
</div>