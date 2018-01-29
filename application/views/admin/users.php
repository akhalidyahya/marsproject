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
                                    <a href="<?php echo base_url(); ?>index.php/users/addUser"><button class="btn btn-success" onclick=" " <?php if($this->session->userdata('role') != 'admin') echo "disabled" ?>><i class="fa fa-plus"></i> Add User </button></a>
                                    <!-- <a href="<?php echo base_url(); ?>index.php/users/deleteAllUser" onclick="return confirm('Delete all data?');"><button disabled class="btn btn-danger" onclick=" "><i class="fa fa-times"></i> Delete All </button></a> -->
                                    <a href="<?php echo base_url(); ?>index.php/users"><button class="btn btn-primary" onclick=" "><i class="fa fa-refresh"></i> Reload Table </button></a>
                                  </div>
                                </div>
                              <tr>
                                <th>#</th>
                                <th> Nama </th>
                                <th>Username</th>
                                <th>Role</th>
                                <th> Photo </th>
                                <th> Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach ($data_admin as $admin) { ?>
                                <tr>
                                  <td>#</td>
                                  <td><?php echo $admin->nama_admin; ?></td>
                                  <td><?php echo $admin->username; ?></td>
                                  <td><?php echo $admin->role; ?></td>
                                  <td style="text-align: center;"> <img style="max-width: 200px;" src="<?php echo base_url(); ?>assets/upload/user/<?php echo $admin->foto_admin; ?>"> </td>
                                  <td>
                                  <a href="<?php echo base_url(); ?>index.php/users/editUser/<?php echo $admin->id_admin; ?>"><button <?php if($this->session->userdata('role') != 'admin') echo "disabled" ?> class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                  <a onclick="return confirm('Delete this data?');" href="<?php echo base_url(); ?>index.php/users/deleteUser/<?php echo $admin->id_admin; ?>"><button <?php if($this->session->userdata('role') != 'admin') echo "disabled" ?> class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                                </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

        </section>