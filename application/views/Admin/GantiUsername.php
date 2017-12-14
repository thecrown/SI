<?php $this->load->view($header); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ubah Username Admin        
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Username</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('Username'); ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username Lama</label>
                  <input type="text" name="oldusername" class="form-control" id="exampleInputEmail1" placeholder="Enter old Username" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Username Baru</label>
                  <input type="text"  name="newusername" class="form-control" id="exampleInputPassword1" placeholder="Enter new Username" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Verifikasi Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Password" required>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        <?php 
        if (!empty($this->session->flashdata('err_msg'))) {
         echo '<div class="alert alert-danger alert-dismissable" style="width:100%;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
         } 
       ?>
        </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <?php $this->load->view($footer);?>