 <?php 
  $id = "";
  $judul= "";
  $isi = "";
  if($action == 'edit'){
    foreach ($data as $data_blog) {
      $id = $data_blog->id_berita;
      $judul = $data_blog->judul;
      $isi = $data_blog->isi;
    }
  }
 ?>
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Anggota </h3>
    <div class="row mt">
        <div class="col-md-12">
          <div class="content-panel">
            <a onclick="return confirm('Kembali?');" href="<?php echo base_url(); ?>index.php/blog"><button class="btn btn-success"><i class="fa fa-arrow-left "></i>Kembali</button></a>
            <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> <?php echo $title; ?> </h4>
                      <!-- <form class="form-horizontal style-form"> -->
                      <?php echo form_open_multipart('blog/saveData');?>
                        <div class="form-horizontal style-form">
                          <input type="hidden" name="action" value="<?php echo $action; ?>">
                          <input type="hidden" name="id_anggota" value="<?php echo $id; ?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Judul</label>
                              <div class="col-sm-10">
                                  <input name="judul" type="text" class="form-control" required value="<?php echo $judul; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Image</label>
                              <div class="col-sm-10">
                                  <input name="foto" type="file" class="form-control" <?php if($action == 'add'){echo "required";} ?>>
                                  <label class="label label-warning">Foto max 2732 x 1536 pixel</label>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Isi</label>
                              <div class="col-sm-10">
                                  <textarea name="isi" class="ckeditor"><?php echo $isi; ?></textarea>
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