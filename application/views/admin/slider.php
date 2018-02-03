<section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Slider </h3>
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel" style="background-color: #e2e2e2">
                        <div class="row">
                          <div class="col-md-12">
                            <h4><i class="fa fa-angle-right"></i> List Photo</h4>
                            <a href="<?php echo base_url()?>index.php/slider/addSlider "><button class="btn btn-success" onclick=""><i class="fa fa-plus"></i> Add Photo </button></a>
                            <button class="btn btn-danger" onclick="" disabled><i class="fa fa-times"></i> Delete All </button>
                            <button class="btn btn-primary" onclick=""><i class="fa fa-refresh"></i> Reload </button>
                          </div>
                          <div class="col-md-12 text-center" style="margin: 20px 0px;">
                            <?php foreach ($data_slider as $slider) { ?>
                              <div class="col-xs-6 col-sm-4 col-md-3">
                                <img style="max-width: 200px;" src="<?php echo base_url(); ?>assets/upload/slider/<?php echo $slider->slider_image; ?>">
                                <br>
                                <div style="padding:10px 0px;">
                                  <a onclick="return confirm('Delete this data?');" href="<?php echo base_url(); ?>index.php/slider/deleteSlider/<?php echo $slider->id_slider; ?>"><button class="btn btn-danger btn-xs" <?php if($this->session->userdata('role') != 'admin') echo "disabled" ?>>hapus</button></a>
                                </div>
                               </div>
                            <?php } ?>

                          </div>
                        </div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
    </section><!--/Wrapper-->
      </section>