<section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Users</h3>
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                              <h4><i class="fa fa-angle-right"></i> List Users </h4>
                              <!-- <hr> -->
                              <thead>
                                <div class="row">
                                  <div class="col-md-12">
                                    <a href="<?php echo base_url(); ?>index.php/users/addUser"><button class="btn btn-success" onclick=" "><i class="fa fa-plus"></i> Add User </button></a>
                                    <a href="<?php echo base_url(); ?>index.php/users/deleteAllUser" onclick="return confirm('Delete all data?');"><button class="btn btn-danger" onclick=" "><i class="fa fa-times"></i> Delete All </button></a>
                                    <button class="btn btn-primary" onclick=" "><i class="fa fa-refresh"></i> Reload Table </button>
                                  </div>
                                </div>
                              <tr>
                                <th>#</th>
                                <th> Nama </th>
                                <th> Photo </th>
                                <th> Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <?php foreach ($data_admin as $admin) { ?>
                                    <td>#</td>
                                    <td><?php echo $admin->nama_admin; ?></td>
                                    <td style="text-align: center;"> <img src="<?php echo base_url(); ?>assets/upload/user/<?php echo $admin->foto_admin; ?>"> </td>
                                    <td>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <a onclick="return confirm('Delete this data?');" href="<?php echo base_url(); ?>index.php/users/deleteUser/<?php echo $admin->id_admin; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                    </td>
                                  <?php } ?>
                                  
                              </tr>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

        </section>