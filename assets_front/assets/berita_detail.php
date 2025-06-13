<!doctype html>
<html >
    <?php
        session_start();
        include "config/koneksi_li.php";
        include "config/hits.php";
        include "config/all_function.php";
            
        $id = ($_GET['id']);
                            
        $q = "SELECT * FROM materi WHERE IDMATERI =".$id."";
        $sql = mysqli_query($conn_db,$q);
        //echo $q;
        $r = mysqli_fetch_array($sql)or die(mysqli_error($conn_db));
        $judul = $r['JUDUL'];
        $isimateri = $r['ISIMATERI'];
        
        $kategori_id = $r['IDKATEGORI'];
        $created_by = $r['MATERI_CREATED_BY'];
        $date_created = $r['MATERI_DATE_CREATED'];
        $materi_foto =  $r['MATERI_FOTO'];
        $sql = mysqli_query($conn_db,"SELECT * FROM kategori WHERE IDKATEGORI=".$kategori_id);
        
        $r = mysqli_fetch_array($sql)or die(mysqli_error($conn_db));
        $kategori_name = $r['NAMAKATEGORI'];
        
        $sql = mysqli_query($conn_db,"SELECT * FROM s_user WHERE USER_ID='".$created_by."'");
        $r = mysqli_fetch_array($sql)or die(mysqli_error($conn_db)); 
        $created_by_name = $r['USER_FULLNAME'];                
    ?>
    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title><?php echo @$judul; ?></title>
        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">
		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">
		<!--flaticon.css-->
        <link rel="stylesheet" href="assets/css/flaticon.css">
		<!--slick.css-->
        <link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/slick-theme.css">		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
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
		
		<!--header-top start -->
		<header id="header-top" class="header-top">
			<ul>
				<li>
					<div class="header-top-left">
						<ul>
							<li class="select-opt">
								<select name="language" id="language">
									<option value="default">ID</option>
									<option value="English">EN</option>
								</select>
							</li>
							<!-- <li class="select-opt">
								<select name="currency" id="currency">
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="bdt">BDT</option>
								</select>
							</li> -->
							<li class="select-opt">
								<a href="#"><span class="lnr lnr-magnifier"></span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="head-responsive-right pull-right">
					<div class="header-top-right">
						<ul>
							<li class="header-top-contact">
							<span class="lnr lnr-bubble"></span> 
							Hotline WA : 0851-6263-1460
								
							</li>
							<li class="header-top-contact">
								<a href="#">sign in</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
					
		</header><!--/.header-top-->
		<!--header-top end -->

		<!-- top-area Start -->
		<section class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
							<a class="navbar-brand" href="#"><img src="assets/img/logo_kemenag.png" width="50px"/></a>
			                <a class="navbar-brand" href="index.php">Kemenag<span>Bangkalan</span></a>

			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li class=" scroll active"><a href="#home">Beranda</a></li>
			                    <li class="scroll"><a href="index.php#works">Layanan</a></li>
			                    <li class="scroll"><a href="index.php#explore">Berita</a></li>
			                    <li class="scroll"><a href="index.php#reviews">Unit Kerja</a></li>
			                    <li class="scroll"><a href="index.php#blog">Zona Integritas</a></li>
			                    <li class="scroll"><a href="index.php#contact">Hubungi Kami</a></li>
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    <div class="clearfix"></div>

		</section><!-- /.top-area-->
		<!-- top-area End -->

		
		<!--explore start -->
		<section id="explore" class="explore">
			<div class="container">
				<div class="section-header text-center">
					<h2>BERITA / KEGIATAN</h2>
					<p class="">
						Kumpulan Informasi Kegiatan dan Berita dari Kantor Kementerian Agama Kabupaten Bangkalan 
						<br/>bersama Stakeholder terkait dan satker/ unit kerja dibawahnya.
						<br/>
					</p>					
				</div><!--/.section-header-->
				<div class="explore-content">
                
                    
                    <div id="materi_header" class="round">
                        <div style="width:90%;float:left"><b><?php echo $judul; ?></b></div>
                        <a href="config/htmltopdf.php?id=<?php echo $id;?>" title="Download PDF" target="_blank"><img src="images/document_pdf.png" border="0" style="float:right"/></a>
                        <div style="clear:both"></div>
                    </div>
                    <div style="margin-top:10px;">
                        
                    </div>
                    
                    <div id="isi_pembelajaran" style="margin-bottom:10px;margin-top:10px">
                        
                        <?php 
                            if(!empty($materi_foto)):
                                echo "<div style='float:right;margin:5px;'>";
                                echo "<img src='admin/uploads/berita/".$materi_foto."' width='250px'/>";
                                echo "</div>";
                            endif;
                            echo (@$isimateri); 
                        ?>
                    </div>
                    <div style="clear:both"></div>
                    <div class="round" style="background-color:#FFFFFF;padding:5px;" align="right">
                        <img src="images/menu/not-use/kategori.png" />
                        Kategori : <b style="padding-right:10px"><?php echo @$kategori_name;?></b>  |  
                        Oleh : <?php echo @$created_by_name;?> | 
                        Tanggal Publikasi : <?php echo tanggal_indo($date_created);?>
                    </div>

                    
				</div>
			</div><!--/.container-->

		</section><!--/.explore-->
		<!--explore end -->

		<!--subscription strat -->
		<section id="contact"  class="subscription">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						Apakah anda tertarik update informasi tentang Kemenag Bangkalan ?
					</h2>
					<!-- <p>
						Dengan mengisi form dibawah ini, berarti 
					</p> -->
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="subscription-input-group">
							<form action="#">
								<input type="email" class="subscription-input-form" placeholder="Tuliskan email Anda di sini.">
								<button class="appsLand-btn subscribe-btn" onclick="window.location.href='#'">
									Subscribe
								</button>
							</form>
						</div>
					</div>	
				</div>
			</div>

		</section><!--/subscription-->	
		<!--subscription end -->

		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="footer-menu">
		           	<div class="row">
			           	<div class="col-sm-3">
			           		 <div class="navbar-header">
				                <a class="navbar-brand" href="index.html">Kemenag<span>Bangkalan</span></a>
				            </div><!--/.navbar-header-->
			           	</div>
			           	<div class="col-sm-9">
			           		<ul class="footer-menu-item">
			                    <li class="scroll"><a href="#works">Layanan</a></li>
			                    <li class="scroll"><a href="#explore">Berita</a></li>
			                    <li class="scroll"><a href="#reviews">Unit Kerja</a></li>
			                    <li class="scroll"><a href="#blog">Zona Integritas</a></li>
			                    <li class="scroll"><a href="#contact">Hubungi Kami</a></li>
								<li class="scroll"><a href="#contact">Pengaduan</a></li>
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
        
    </body>
	
</html>