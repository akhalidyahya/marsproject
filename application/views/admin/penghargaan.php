<section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Penghargaan </h3>
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> List Penghargaan</h4>
                            <!-- <hr> -->
                              <thead>
                                <div class="row">
                                  <div class="col-md-12">
                                    <a href="<?php echo base_url();?>index.php/achievements/addPenghargaan"><button class="btn btn-success" onclick=""><i class="fa fa-plus"></i> Add Penghargaan </button></a>
                                    <!-- <button class="btn btn-danger" onclick=""><i class="fa fa-times"></i> Delete All </button> -->
                                    <a href="<?php echo base_url(); ?>index.php/penghargaan"><button class="btn btn-primary" onclick=" "><i class="fa fa-refresh"></i> Reload </button></a>
                                  </div>
                                </div>
                              <tr>
                                  <th>#</th>
                                  <th> Nama </th>
                                  <th> Photo </th>
                                  <th> Keterangan </th>
                                  <th> Action </th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($data_penghargaan as $penghargaan){ ?>
                              <tr>
                                  <td>#</td>
                                  <td> <?php echo $penghargaan->nama_mhs ?></td>
                                  <td style="text-align: center;"> <img  style="max-width: 200px; " src="<?php echo base_url(); ?>assets/upload/penghargaan/<?php echo $penghargaan->foto; ?>"> </td>
                                  <td> <?php echo $penghargaan->keterangan ?></td>
                                  <td>
                                      <a href="<?php echo base_url(); ?>index.php/achievements/editPenghargaan/<?php echo $penghargaan->id_penghargaan; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                      <a onclick="return confirm('Delete this data?');" href="<?php echo base_url(); ?>index.php/achievements/deletePenghargaan/<?php echo $penghargaan->id_penghargaan; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->