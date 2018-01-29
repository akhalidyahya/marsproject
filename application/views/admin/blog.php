<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Blog </h3>
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> List Berita</h4>
                            <!-- <hr> -->
                              <thead>
                                <div class="row">
                                  <div class="col-md-12">
                                    <a href="<?php echo base_url();?>index.php/blog/addPenghargaan"><button class="btn btn-success" onclick=""><i class="fa fa-plus"></i> Add Berita </button></a>
                                    <!-- <button class="btn btn-danger" onclick=""><i class="fa fa-times"></i> Delete All </button> -->
                                    <a href="<?php echo base_url(); ?>index.php/blog"><button class="btn btn-primary" onclick=" "><i class="fa fa-refresh"></i> Reload </button></a>
                                  </div>
                                </div>
                              <tr>
                                  <th>#</th>
                                  <th> Judul </th>
                                  <th> Isi </th>
                                  <th> Featured Photo </th>
                                  <th> Tanggal </th>
                                  <th> Penulis </th>
                                  <th>jumlah pembaca</th>
                                  <th> Action </th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach ($data as $data_blog) { ?>
                                <tr>
                                    <td>#</td>
                                    <td> <?php echo $data_blog->judul; ?> </td>
                                    <td> <?php echo substr($data_blog->isi,0,200).". . ."; ?> </td>
                                    <td> <img style="max-width: 200px;" src="<?php echo base_url(); ?>assets/upload/berita/<?php echo $data_blog->gambar; ?>"> </td>
                                    <td> <?php echo $data_blog->tanggal_buat; ?> </td>
                                    <td> <?php echo $data_blog->nama_admin; ?> </td>
                                    <td> <?php echo $data_blog->index_pembaca; ?> </td>
                                    <td>
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
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