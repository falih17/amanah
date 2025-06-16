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
						// var_dump($category);
						foreach($category->result() as $r):
							//var_dump($r);
					?>
						<div class="col-md-4  col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img text-center">
																image		
								</div>
								<div class="single-explore-txt bg-theme-2">
									<h2 class="text-center"><a href="#"><?php echo $r->name;?></a></h2>
									<p class="explore-rating-price">
										<!-- <span class="explore-rating"></span> -->
										<!-- <a href="#"> Tanggal : </a>  -->
									</p>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-12">
												<p class="text-justify">
												text
												</p>
											</div>
										</div>
									</div>
									<div class="explore-open-close-part">
										<div class="row">
											<div class="col-sm-5">
												<button class="close-btn" onclick="window.location.href='#'">Selengkapnya</button>
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
						endforeach;
					?>
					
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