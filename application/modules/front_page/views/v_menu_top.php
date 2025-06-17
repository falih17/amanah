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
							<a href="<?php echo site_url(); ?>">
								<img src="<?php echo base_url('assets'); ?>/amanah.png" width="100px"/>
							</a>
			                

			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->
						
			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			
								<!-- <li id="tm-publikasi" class="nav-item dropdown">
									<a href="#"  class="nav-link dropdown-toggle" data-toggle="dropdown" >
										Publikasi
										<i class="fa fa-caret-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li class="dropdown-item"><a href="plugins/flipbook/examples/pareng_oneng.php">A'pareng Oneng</a></li>
										<li class="dropdown-item"><a href="plugins/flipbook/examples/basic.php" target="_blank">SPIP</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#ppid">
										PPID
										<i class="fa fa-caret-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li class="dropdown-item"><a class="nav-link" href="pengaduan.php">Pengaduan</a></li>
									</ul>
								</li> -->
								<li class="nav-item">
									<a href="<?php echo site_url('auth/auth/login'); ?>">LOGIN</a></li>
									
								</ul><!--/.nav -->
							</li>
							
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    <div class="clearfix"></div>

		</section><!-- /.top-area-->
		<!-- top-area End -->
<style>
	.dropdown-item:hover{
		background-color : #ccc;
		cursor: pointer;
	}
</style>