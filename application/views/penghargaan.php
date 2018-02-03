<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mars Project</title>
	<link rel="icon" type="text/css" href="<?php echo base_url(); ?>assets/img/favicon.png">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/owl.theme.default.css">
</head>
<body>
	<!-- Navigation -->
	<div class="menu">
		<span class="menu-circle"></span>
		<a href="#" class="menu-link">
			<span class="menu-icon">
				<span class="menu-line menu-line1"></span>
				<span class="menu-line menu-line2"></span>
				<span class="menu-line menu-line3"></span>
			</span>
		</a>
	</div>
	<div class="menu-overlay">
		<a style="margin: 0" href="<?php echo base_url(); ?>"><h1>MARS PROJECT PNJ</h1></a>
		<a href="<?php echo base_url() ?>">beranda</a>
		<a href="<?php echo base_url() ?>#about">tentang kami</a>
		<a href="<?php echo base_url() ?>#visi-misi">visi misi</a>
		<a href="<?php echo base_url() ?>#struktur-organisasi">struktur organisasi</a>
		<a href="<?php echo base_url() ?>#latest-news">berita</a>
		<a href="<?php echo base_url() ?>#penghargaan">penghargaan</a>
		<!-- <p>Keep in touch with us!</p> -->
		<span><a href="#"><img src="<?php echo base_url(); ?>assets/img/sosmed/fb.png" height="35px"></a></span>
		<span><a href="#"><img src="<?php echo base_url(); ?>assets/img/sosmed/tw.png" height="35px"></a></span>
		<span><a href="#"><img src="<?php echo base_url(); ?>assets/img/sosmed/ig.png" height="35px"></a></span>
		<span><a href="#"><img src="<?php echo base_url(); ?>assets/img/sosmed/ln.png" height="35px"></a></span>
	</div>
	<!-- Navigation END -->

	<!-- Hero Achievemetn -->
	<section id="latest-news" >
		<!-- <div style="background-color: #fecb33"></div> -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<img src="<?php echo base_url(); ?>assets/img/trophy.png" width="30%">
					<h1>Semua Penghargaan</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero Achievemetn END -->

	<!-- Main -->
	<section id="penghargaan">
		<div class="container">
			<div class="row">
				<?php foreach ($data_penghargaan as $achievement) { ?>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 text-center">
						<div class="img-container">
							<img src="<?php echo base_url(); ?>assets/upload/penghargaan/<?php echo $achievement->foto ?>" class="img-responsive">
							<h1><?php echo $achievement->nama_mhs ?></h1>
							<p><?php echo $achievement->keterangan ?></p>
						</div>
					</div>
				<?php } ?>
				
			</div>
			<div class="text-center">
				<a href="<?php echo site_url() ?>"><button>kembali ke beranda</button></a>
			</div>
		</div>
	</section>
	<!-- Main END -->

	<!-- Footer -->
	<section id="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h1>Get in touch</h1>
					<a href="#"><img src="<?php echo base_url(); ?>assets/img/sosmed/fb.png" height="55px"></a>
					<a href="#"><img src="<?php echo base_url(); ?>assets/img/sosmed/tw.png" width="50px"></a>
					<a href="#"><img src="<?php echo base_url(); ?>assets/img/sosmed/ig.png" width="50px"></a>
					<a href="#"><img src="<?php echo base_url(); ?>assets/img/sosmed/ln.png" width="50px"></a>
					<img src="<?php echo base_url(); ?>assets/img/background-laptop.png" width="100%">
				</div>
			</div>
		</div>
		<footer>&copy copyright 2018 | Mars Project</footer>
	</section>
	<!-- Footer END -->
</body>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
<script src="<?php echo base_url(); ?>assets/js/mixitup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/SmoothScroll.min.js"></script>
</html>