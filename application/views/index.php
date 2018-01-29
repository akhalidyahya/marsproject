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
		<a class="scroll" id="nav" href="#about">tentang kami</a>
		<a class="scroll" id="nav" href="#visi-misi">visi misi</a>
		<a class="scroll" id="nav" href="#struktur-organisasi">struktur organisasi</a>
		<a class="scroll" id="nav" href="#latest-news">berita</a>
		<a class="scroll" id="nav" href="#penghargaan">penghargaan</a>
		<p>Keep in touch with us!</p>
		<span><a href="#"><img src="<?php echo base_url(); ?>assets/img/sosmed/fb.png" height="35px"></a></span>
		<span><a href="#"><img src="<?php echo base_url(); ?>assets/img/sosmed/tw.png" height="35px"></a></span>
		<span><a href="#"><img src="<?php echo base_url(); ?>assets/img/sosmed/ig.png" height="35px"></a></span>
		<span><a href="#"><img src="<?php echo base_url(); ?>assets/img/sosmed/ln.png" height="35px"></a></span>
	</div>
	<!-- Navigation END -->

	<!-- Hero slider -->
	<div class="container main-container">
		<div class="ro">
			<div class="col-xs-12">
				<div id="hero-slider" class="owl-carousel owl-theme">
					<div class="item"><img src="<?php echo base_url(); ?>assets/img/mp.jpg"></div>
					<div class="item"><img src="<?php echo base_url(); ?>assets/img/12.jpg"></div>
					<div class="item"><img src="<?php echo base_url(); ?>assets/img/9.jpg"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Hero Slider END -->

	<!-- About us -->
	<section id="about">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 text-center">
					<img src="<?php echo base_url(); ?>assets/img/tentang-kami.png" width="25%">
					<h1>Tentang Kami</h1>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
					<br>
					<a class="scroll" href="#visi-misi"><button>Kenali lebih lanjut</button></a>
				</div>
			</div>
		</div>
	</section>
	<!-- About us end -->

	<!-- visi misi section -->
	<section id="visi-misi">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 text-center">
					<img src="<?php echo base_url(); ?>assets/img/visi-misi.png" width="25%">
					<h1>Visi dan misi</h1>
					<div class="row content-container">
						<div class="col-md-6">
							<img src="<?php echo base_url(); ?>assets/img/handshake.png" width="30%">
							<h1>visi</h1>
							<div class="content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>
						<div class="col-md-6">
							<img src="<?php echo base_url(); ?>assets/img/handshake.png" width="30%">
							<h1>misi</h1>
							<div class="content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- visi misi section END -->

	<!-- Struktur organisasi -->
	<section id="struktur-organisasi">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<img src="<?php echo base_url(); ?>assets/img/struktur-organisasi.png" width="30%">
					<h1>struktur organisasi</h1>
					<div class="org-btn-container text-center">
						<button type="button" class="control" data-filter="all">All</button>
						<?php foreach ($data_divisi as $divisi) { ?>
							<button type="button" class="control" data-filter=".<?php echo $divisi->nama_divisi; ?>"><?php echo $divisi->nama_divisi; ?></button>
						<?php } ?>
					</div>
				</div>
			</div>
			<br><br>
			<div class="row anggota-container text-center">
				<?php foreach ($data_struktur as $organisasi) { ?>
					<div class="mix col-xs-6 col-sm-3 <?php echo $organisasi->nama_divisi; ?>">
						<div class="org-item">
							<img src="<?php echo base_url(); ?>assets/upload/anggota/<?php echo $organisasi->foto_anggota ?>" width="100%">
							<h1><?php echo $organisasi->nama_anggota; ?></h1>
							<p><?php echo $organisasi->jabatan; ?></p>
						</div>
					</div>
				<?php } ?>
				
			</div>
		</div>
	</section>
	<!-- Struktur organisasi END -->

	<!-- news section-->
	<section id="latest-news">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<img src="<?php echo base_url(); ?>assets/img/latest-news.png" width="30%">
					<h1>Berita terbaru</h1>
					<div class="row">
						<?php foreach ($data_berita as $blog) { ?>
							<div class="col-sm-6 col-md-4">
								<div class="news-box">
									<img src="<?php echo base_url(); ?>assets/upload/berita/<?php echo $blog->gambar; ?>" class="img-responsive">
									<div class="isi timestamps">Posted: <?php echo $blog->tanggal_buat; ?> </div>
									<h1><?php echo $blog->judul ?></h1>
									<div class="isi"><?php echo substr($blog->isi,0,200) ?></div>
									<a class="seemore" href="<?php echo base_url(); ?>index.php/news/detailnews/<?php echo $blog->id_berita; ?>">see more</a>
								</div>
							</div>
						<?php } ?>
						
					</div>
					<a href="<?php echo site_url('news'); ?>"><button>lihat berita lainnya</button></a>
				</div>
			</div>
		</div>
	</section>
	<!-- news section END -->

	<!-- Achievement section -->
	<section id="penghargaan">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<img src="<?php echo base_url(); ?>assets/img/trophy.png" width="30%">
					<h1>Penghargaan</h1>
				</div>
			</div>
			<div class="row" style="margin: 50px 0;">
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
				<a href="<?php echo site_url('penghargaan') ?>"><button>lihat penghargaan lainnya</button></a>
			</div>
		</div>
	</section>
	<!-- Achievement Secction END -->

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
<script>
    var containerEl = document.querySelector('.anggota-container');

    var mixer = mixitup(containerEl);
</script>
</html>