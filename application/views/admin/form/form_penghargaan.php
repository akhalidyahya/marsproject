<?php


 ?>

 
 <section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Penghargaan </h3>
    <div class="row mt">
        <div class="col-md-12">
          <div class="content-panel">
            <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> <?php echo $title; ?> </h4>
                      <!-- <form class="form-horizontal style-form"> -->
                      <?php echo form_open_multipart('Achievements/saveData');?>
                        <div class="form-horizontal style-form">
                          <input type="hidden" name="action" value="<?php echo $action; ?>">
                          <input type="hidden" name="id_penghargaan">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input name="nama" type="text" class="form-control" required \>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">foto</label>
                              <div class="col-sm-10">
                                  <input name="foto" type="file" class="form-control" <?php if($action == 'add'){echo "required";} ?>>
                                  <label class="label label-warning">Foto max 2732 x 1536 pixel</label>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">keterangan</label>
                              <div class="col-sm-10">
                                  <input name="keterangan" type="text" class="form-control" required>
                                <span class="help-block"></span>
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