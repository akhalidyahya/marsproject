<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><img src="<?php echo base_url(); ?>assets/upload/user/<?php echo $this->session->userdata('foto'); ?>" class="img-circle" width="60"></p>
                  <h5 class="centered"><?php echo $this->session->userdata('nama'); ?></h5>
                    
                  <li class="mt">
                      <a class="<?php if($this->uri->segment(1)=="dashboard"){ echo "active"; } ?>" href="<?php echo base_url() ?>index.php/dashboard">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="<?php if($this->uri->segment(1)=="slider"){ echo "active"; } ?>" href="<?php echo site_url('slider'); ?>" >
                          <i class="fa fa-picture-o"></i>
                          <span>Slider</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="<?php if($this->uri->segment(1)=="anggota"){ echo "active"; } ?>" href="<?php echo site_url('anggota'); ?>">
                          <i class="fa fa-user"></i>
                          <span>Anggota</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="<?php if($this->uri->segment(1)=="divisi"){ echo "active"; } ?>" href="<?php echo site_url('divisi'); ?>" >
                          <i class="fa fa-columns"></i>
                          <span>Divisi</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="<?php if($this->uri->segment(1)=="blog"){ echo "active"; } ?>" href="<?php echo site_url('blog'); ?>" >
                          <i class="fa fa-book"></i>
                          <span>Blog</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="<?php if($this->uri->segment(1)=="achievements"){ echo "active"; } ?>" href="<?php echo site_url('achievements'); ?>" >
                          <i class=" fa fa-trophy"></i>
                          <span>Penghargaan</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="<?php if($this->uri->segment(1)=="users"){ echo "active"; } ?>" href="<?php echo site_url('users'); ?>" >
                          <i class="fa fa-users"></i>
                          <span>Users</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->