<?php 
  $id = "";
  $nama = "";
  $username = "";
  $password = "";
  if($action == 'edit'){
    foreach ($data as $data_admin) {
      $id = $data_admin->id_admin;
      $nama = $data_admin->nama_admin;
      $username = $data_admin->username;
      // $password = $data_admin->password;
    }

  }
 ?>
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> User</h3>
    <div class="row mt">
        <div class="col-md-12">
          <div class="content-panel">
            <a onclick="return confirm('Kembali?');" href="<?php echo base_url(); ?>index.php/users"><button class="btn btn-success"><i class="fa fa-arrow-left "></i>Kembali</button></a>
            <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> <?php echo $title; ?> </h4>
                      <!-- <form class="form-horizontal style-form"> -->
                      <?php echo form_open_multipart('users/saveData');?>
                        <div class="form-horizontal style-form">
                          <input type="hidden" name="action" value="<?php echo $action; ?>">
                          <input type="hidden" name="id_admin" value="<?php echo $id; ?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input name="nama" type="text" class="form-control" required value="<?php echo $nama; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-10">
                                  <input name="username" type="text" class="form-control" required value="<?php echo $username; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input name="password" type="password" class="form-control" required value="<?php echo $password ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">foto</label>
                              <div class="col-sm-10">
                                  <input name="foto" type="file" class="form-control" <?php if($action == 'add'){echo "required";} ?>>
                                  <label class="label label-warning">Foto max 2732 x 1536 pixel</label>
                              </div>
                          </div>
                          <button class="btn btn-theme " type="submit">Save data</button>
                        </div>
                      </form>
                  </div>
          </div><!-- /content-panel -->
        </div><!-- /col-md-12 -->
    </div><!-- /row -->
  </section>