<?php
$id ="";
$nama = "";
$keterangan = "";

if ($action == 'edit') {
  foreach ($data as $data_penghargaan) {
    $id = $data_penghargaan->id_penghargaan;
    $nama = $data_penghargaan->nama_mhs;
    $keterangan = $data_penghargaan->keterangan;
  }
}

 ?>

 
 <section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Penghargaan </h3>
    <div class="row mt">
        <div class="col-md-12">
          <div class="content-panel">
            <a onclick="return confirm('Kembali?');" href="<?php echo base_url(); ?>index.php/achievements"><button class="btn btn-success"><i class="fa fa-arrow-left "></i>Kembali</button></a>
            <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> <?php echo $title; ?> </h4>
                      <!-- <form class="form-horizontal style-form"> -->
                      <?php echo form_open_multipart('achievements/saveData');?>
                        <div class="form-horizontal style-form">
                          <input type="hidden" name="action" value="<?php echo $action; ?>">
                          <input type="hidden" name="id_penghargaan" value="<?php echo $id; ?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input name="nama" type="text" class="form-control" required value="<?php echo $nama; ?>" \>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">foto</label>
                              <div class="col-sm-10">
                                  <input name="foto" type="file" class="form-control" <?php if($action == 'add'){echo "required";} ?>>
                                  <label class="label label-danger">Foto max 2732 x 1536 pixel</label>
                                  <label class="label label-danger">Dimensi foto harus 1x1</label>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">keterangan</label>
                              <div class="col-sm-10">
                                  <input name="keterangan" type="text" class="form-control" required value="<?php echo $keterangan; ?>">
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