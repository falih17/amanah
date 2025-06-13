<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>Amanah (Ajer Manasik Haji & Umrah)</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="<?php echo base_url('assets_front'); ?>assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="<?php echo base_url('assets_front'); ?>/assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="<?php echo base_url('assets_front'); ?>/assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="<?php echo base_url('assets_front'); ?>/assets/css/animate.css">

		<!--flaticon.css-->
        <link rel="stylesheet" href="<?php echo base_url('assets_front'); ?>/assets/css/flaticon.css">

		<!--slick.css-->
        <link rel="stylesheet" href="<?php echo base_url('assets_front'); ?>/assets/css/slick.css">
		<link rel="stylesheet" href="<?php echo base_url('assets_front'); ?>/assets/css/slick-theme.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="<?php echo base_url('assets_front'); ?>/assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="<?php echo base_url('assets_front'); ?>/assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="<?php echo base_url('assets_front'); ?>/assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="<?php echo base_url('assets_front'); ?>/assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<?php
			$this->load->view("v_menu_header.php");
			$this->load->view("v_menu_top.php");
		?>	

		<!--welcome-hero start -->
		<section id="home" class="welcome-hero">
			<div class="container">
				<div class="welcome-hero-txt">
					<h2>Selamat Datang di <br> AMANAH</h2>
				</div>
				<div class="welcome-hero-serch-box">
					<div class="welcome-hero-form">
						<div class="single-welcome-hero-form">
							<h3>Berita ?</h3>
							<form action="index.html">
								<input type="text" placeholder="Topik maupun informasi yang diinginkan" />
							</form>
							<div class="welcome-hero-form-icon">
								<i class="flaticon-list-with-dots"></i>
							</div>
						</div>
					</div>
					<div class="welcome-hero-serch">
						<button class="welcome-hero-btn" onclick="window.location.href='#'">
							 Cari <i data-feather="search"></i> 
						</button>
					</div>
				</div>
			</div>
		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--works start -->
		<section id="works" class="works">
			<div class="container">
				<div class="section-header">
					<h2>LAYANAN KAMI</h2>
					<p>Untuk memberikan akses kemudahan pada masyarakat dalam akses layanan secara online</p>
				</div><!--/.section-header-->
				<div class="works-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<img src="assets/logo/amanah.png" >
								</div>
								<h2><a href="#">AMANAH<br/>(Ajer Manasik Haji & Umrah)</a></h2>
								<p>
									Platform bagi publik untuk belajar materi Manasik Haji dan Umrah yang dibuat dengan dwi bahasa (Bahasa Indonesia dan Bahasa daerah Madura). Semoga bermanfaat
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="to_amanah();">
								Kunjungi
								</button>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-networking"></i>
								</div>
								<h2><a href="#">Konsultasi Wanita dan Keluarga Sakinah</a></h2>
								<p>
									Kami memberikan pembinaan pernikahan dan keluarga sakinah.
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='https://wa.link/vypm4t'">
								Hubungi kami
								</button>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-location-on-road"></i>
								</div>
								<h2><a href="#">Konsultasi Zakat, Infaq dan Shodaqoh (ZIS)</h2>
								<p>
								Konsultasi dan salurkan ZIS Anda ke lembaga yang terdaftar legal. 									
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='https://wa.link/vypm4t'">
								Hubungi kami
								</button>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.works-->
		<!--works end -->

		<!--explore start -->
		<section id="explore" class="explore">
			<div class="container">
				<div class="section-header text-center">
					<h2>KATEGORI TOPIK</h2>
					<p class="">
						Silahkan pilih kategori topik yang diinginkan
						<br/>
					</p>					
				</div><!--/.section-header-->
				<div class="explore-content">
					<div class="row">
					<?php
						include 'config/koneksi_li.php';	
						
						$q = "SELECT * FROM materi 
								WHERE IDKATEGORI = '10' AND STATUS_PUBLISHED = 'y' 
								ORDER BY MATERI_DATE_PUBLISHED DESC 
								LIMIT 0,3";
						//echo $q;
						$sql = mysqli_query($conn_db,$q);
						while($r = mysqli_fetch_array($sql)):	
							$kalimat = strip_tags($r['ISIMATERI']);
							$kalimat = str_replace("&nbsp;","",$kalimat);
							$n_tok = 30;
							$kata = explode(" ",$kalimat,$n_tok);
							$out = "";
							for($i=0;$i<$n_tok-1;$i++):
								$out .= $kata[$i]." ";
							endfor;
							$out .= " ...";
							$img_thumb = $r['MATERI_THUMBNAIL'];
							$materi_foto = $r['MATERI_FOTO'];
							$materi_date_created = $r['MATERI_DATE_CREATED'];
					?>
						<div class="col-md-4  col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img text-center">
									<?php 
										$parent_folder = "../web-v1/";
										if(!empty($materi_foto)):
											echo "<img src='".$parent_folder."admin/uploads/berita/".$materi_foto."' alt=\"explore image\"/>";
										elseif(!empty($img_thumb)):
											$path_file = $parent_folder.'/userfiles/image/".$img_thumb."';
											if(file_exists($path_file)){
												echo "<img src='".$parent_folder."/userfiles/image/".$img_thumb."' alt=\"explore image\"/>";
											}else{
												echo "<img src='".$parent_folder."/userfiles/".$img_thumb."' alt=\"explore image\"/>";
											}
										endif;
									?>									
								</div>
								<div class="single-explore-txt bg-theme-2">
									<h2 class="text-center"><a href="#"><?php echo $r['JUDUL'];?></a></h2>
									<p class="explore-rating-price">
										<!-- <span class="explore-rating"><?php echo $r['USER_NAME']; ?></span> -->
										<a href="#"> Tanggal : <?php echo tanggal_indo($materi_date_created); ?></a> 
									</p>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-12">
												<p class="text-justify">
												<?php echo $out; ?>
												</p>
											</div>
										</div>
									</div>
									<div class="explore-open-close-part">
										<div class="row">
											<div class="col-sm-5">
												<button class="close-btn" onclick="window.location.href='berita_detail.php?id=<?php echo $r['IDMATERI']; ?>'">Selengkapnya</button>
											</div>
											<div class="col-sm-7">
												<div class="explore-map-icon">
													<a href="#"><i data-feather="map-pin"></i></a>
													<a href="#"><i data-feather="upload"></i></a>
													<a href="#"><i data-feather="heart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
						endwhile;
					?>
						<!-- <div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets/images/explore/e2.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">featured</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-2">
									<h2><a href="#">swim and dine resort</a></h2>
									<p class="explore-rating-price">
										<span class="explore-rating">4.5</span>
										<a href="#"> 8 ratings</a> 
										<span class="explore-price-box">
											form
											<span class="explore-price">50$-500$</span>
										</span>
										 <a href="#">hotel</a>
									</p>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-2">
												<div class="explore-person-img">
													<a href="#">
														<img src="assets/images/explore/person.png" alt="explore person">
													</a>
												</div>
											</div>
											<div class="col-sm-10">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid ut labore et dolore magna aliqua.... 
												</p>
											</div>
										</div>
									</div>
									<div class="explore-open-close-part">
										<div class="row">
											<div class="col-sm-5">
												<button class="close-btn open-btn" onclick="window.location.href='#'">open now</button>
											</div>
											<div class="col-sm-7">
												<div class="explore-map-icon">
													<a href="#"><i data-feather="map-pin"></i></a>
													<a href="#"><i data-feather="upload"></i></a>
													<a href="#"><i data-feather="heart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					 -->
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.explore-->
		<!--explore end -->
		
		
		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="footer-menu">
		           	<div class="row">
			           	<div class="col-sm-3">
			           		 <div class="navbar-header">
				                <a class="navbar-brand" href="index.html"><span>AMANAH</span></a>
				            </div><!--/.navbar-header-->
			           	</div>
			           	<div class="col-sm-9">
			           		<ul class="footer-menu-item">
			                    <li class="scroll"><a href="#works">Blogs</a></li>
			                    <li class="scroll"><a href="#explore">Regulasi</a></li>
								<li class="scroll"><a href="#contact">Login</a></li>
			                </ul><!--/.nav -->
			           	</div>
		           </div>
				</div>
				<div class="hm-footer-copyright">
					<div class="row">
						<div class="col-sm-5">
							<p>
								2024 &copy; copyright. designed and developed by <a mailto="humasbangkalan@gmail.com">Tim Prakom dan Humas</a><br/>
							</p><!--/p-->
						</div>
						<div class="col-sm-7">
							<div class="footer-social">
								<span><i class="fa fa-phone"> (031) 309-6337</i></span>
								<a href="#"><i class="fa fa-instagram"></i></a>	
								<a href="#"><i class="fa fa-facebook"></i></a>
								<!-- <a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a> -->
							</div>
						</div>
					</div>
					
				</div><!--/.hm-footer-copyright-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

        <!--feather.min.js-->
        <script  src="assets/js/feather.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

        <!--slick.min.js-->
        <script src="assets/js/slick.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		     
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        <script>
            function to_amanah(){
                window.open("https://amanah.kopicode.com/", "_blank");
            }
            
            $(document).ready(function() {
              $('#tm-home').addClass('active');
            });
        </script>
    </body>
	
</html>