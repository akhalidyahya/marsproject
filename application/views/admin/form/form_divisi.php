<?php 
  $id = "";
  $nama = "";
  if($action == 'edit'){
    foreach ($data as $data_divisi) {
      $id = $data_divisi->id_divisi;
      $nama = $data_divisi->nama_divisi;
      // $password = $data_admin->password;
    }

  }
 ?>
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Divisi </h3>
    <div class="row mt">
        <div class="col-md-12">
          <div class="content-panel">
            <a onclick="return confirm('Kembali?');" href="<?php echo base_url(); ?>index.php/divisi"><button class="btn btn-success"><i class="fa fa-arrow-left "></i>Kembali</button></a>
            <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> <?php echo $title; ?> </h4>
                      <!-- <form class="form-horizontal style-form"> -->
                      <?php echo form_open_multipart('divisi/saveData');?>
                        <div class="form-horizontal style-form">
                          <input type="hidden" name="action" value="<?php echo $action; ?>">
                          <input type="hidden" name="id_divisi" value="<?php echo $id; ?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input name="nama" type="text" class="form-control" required value="<?php echo $nama; ?>">
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