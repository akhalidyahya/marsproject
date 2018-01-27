<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Anggota </h3>
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> List Anggota</h4>
                            <!-- <hr> -->
                              <thead>
                                <div class="row">
                                  <div class="col-md-12">
                                    <a href="<?php echo base_url(); ?>index.php/anggota/addAnggota"><button class="btn btn-success" onclick=" "><i class="fa fa-plus"></i> Add Anggota </button></a>
                                    <a href="<?php echo base_url(); ?>index.php/anggota/deleteAllAnggota" onclick="return confirm('Delete all data?');"><button class="btn btn-danger" onclick=" "><i class="fa fa-times"></i> Delete All </button></a>
                                    <button class="btn btn-primary" onclick=""><i class="fa fa-refresh"></i> Reload </button>
                                  </div>
                                </div>
                              <tr>
                                  <th> Nama </th>
                                  <th> Photo </th>
                                  <th> Divisi </th>
                                  <th> Jabatan </th>
                                  <th> Action </th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach ($data_anggota as $anggota) { ?>
                              <tr>
                                  <td><?php echo $anggota->nama_anggota; ?></td>
                                  <td style="text-align: center;"> <img style="max-width: 200px;" src="<?php echo base_url(); ?>assets/upload/anggota/<?php echo $anggota->foto_anggota; ?>"> </td>
                                  <td><?php echo $anggota->nama_divisi; ?></td>
                                  <td><?php echo $anggota->jabatan; ?></td>
                                  <td>
                                      <a href="<?php echo base_url(); ?>index.php/anggota/editAnggota/<?php echo $anggota->id_anggota; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                      <a onclick="return confirm('Delete this data?');" href="<?php echo base_url(); ?>index.php/anggota/deleteAnggota/<?php echo $anggota->id_anggota; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
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