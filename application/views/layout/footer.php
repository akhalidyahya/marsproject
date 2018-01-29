 <footer class="site-footer" style="position: absolute; bottom: 0; right: 0; width: 100%; z-index: -1;">
          <div class="text-center">
              © copyright <?php echo date('Y'); ?> | Mars Project
              <a href="basic_table.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gritter-conf.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>

    <?php 
      if($this->session->flashdata('error_status')=='success'){ ?>

        <script type="text/javascript">
          $(document).ready(function () {
            var unique_id = $.gritter.add({
              // (string | mandatory) the heading of the notification
              title: 'Your Action was Successful!',
              // (string | mandatory) the text inside the notification
              text: ' ',
              // (string | optional) the image to display on the left
              // image: '<?php echo base_url(); ?>assets/img/alert/success.png',
              // (bool | optional) if you want it to fade out on its own or just sit there
              sticky: true,
              // (int | optional) the time you want it to be alive for before fading out
              time: '',
              // (string | optional) the class name you want to apply to that specific message
              class_name: 'my-sticky-class'
            });
          return false;
          });
        </script>

    <?php } ?>

  </body>
</html>
