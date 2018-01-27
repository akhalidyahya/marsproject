<section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Divisi </h3>
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> List Divisi</h4>
                            <!-- <hr> -->
                              <thead>
                                <div class="row">
                                  <div class="col-md-12">
                                    <a href="<?php echo base_url(); ?>index.php/divisi/addDivisi"><button class="btn btn-success" onclick=""><i class="fa fa-plus"></i> Add Divisi </button></a>
                                    <!-- <a href="<?php echo base_url(); ?>index.php/divisi/deleteAllDivisi"><button class="btn btn-danger" onclick="return confirm('delete all data ?')"><i class="fa fa-times"></i> Delete All </button></a> -->
                                    <a href="<?php echo base_url(); ?>index.php/divisi"><button class="btn btn-primary" onclick=""><i class="fa fa-refresh"></i> Reload </button></a>
                                  </div>
                                </div>
                              <tr>
                                  <th> Nama Divisi </th>
                                  <th> Action </th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach ($data_divisi as $divisi ) { ?>
                              <tr>
                                  <td> <?php echo $divisi->nama_divisi; ?> </td>
                                  <td>
                                      <!-- <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button> -->
                                      
                                      <a onclick="return confirm('delete this data ?');" href="<?php echo base_url();?>index.php/divisi/deleteDivisi/<?php echo $divisi->id_divisi; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                              <?php } ;?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><! --/wrapper -->
      </section>