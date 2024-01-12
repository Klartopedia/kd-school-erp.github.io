<?php


include("mysqlconnect.php");

session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
		
		<title>Adrian Loyal School | Choose Option</title>
		
		<link rel="shortcut icon" href="ico/favicon.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="ico/favicon.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="ico/favicon.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="ico/favicon.png" />

		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<!--[if lt IE 9]>
			<script src="js/vendors/html5shiv.min.js"></script>
		<![endif]-->
		<style>
		
		.preloader {
		background :  #07323e;
		}
		.bg-img-awesome-site {
		    background-color: #07323e;
		}
		
		.fullscreen-menu .logo img {
		    height: 98px;
    width: 534px;
    margin-top: -30px;
		}
	
		.fa-close{
		    margin-left : 50px;
		}
		.default-menu.menu-icons > ul > li {
		    margin-right : 75px;
		}
		
		.section-header img {
    display: inline-block;
    width: 668px;
    max-height: 100px;
    
}
.rig {
    background-color: #07323e;
}
.nav-list{
    margin-top:35px;
}
.nav-list a {
	color : #fff;
	}
.soc ul li {
background :  #07323e;
color : #fff;

}
.soc ul li a{

width : 40px;
color : #fff;
}
.btn-simple-to-border.btn-white {
    padding : 12px;
}
.soc ul li:hover {
background :  #ff7f00;
color : #fff;
}
		
		.header .logo img {
      /*width: 740px;*/
	  max-height: 112px;
	  margin-top : -5px;
    
   
}
.header-panel {
    padding : 35px 40px 15px;
}
		.btn-border-to-simple.btn-secondary:hover {
		
		background-color : #07323e;
		
		}
		
		.menu-button {
		color : #fff;
		}
		.menu-button:hover {
		 color : #fff;
		 }
		 .header.dark .menu-icons .option-icon {
		 color :#fff;
		 }
		 .scrolled .header.dark {
		 background-color : #07323e;
		 }
		 .featured-content .text .highlighted {
		 font-size : 18px;
		 }
		 
	.fullscreen-menu {
	background-color : #07323e;
	}
	
	.fa-close{
	color : #fff;
	}
	
	.fa-close:hover{
	color : #fff;
	}
	.bg-img-our-client {
	background-color : #07323e;
	  
	}
	.bg-img-our-client2 {
	    background-color : #ccc;
	}
	.lm-circle  {
	width: 295px;
    height: 276px;
    border-radius: 295px;
    position: absolute;
    right: 1px;
    bottom: 1px;
    background: #29235c;
    z-index: 1;
	}
	.btn-border-to-simple.btn-secondary {
	padding : 10px;
	}
	.media-box.dark .box-options {
	background-color : #07323e;
	}
	.footer {
	background-color : #fff;
	font-size: 16px;
    line-height: 25px;
    font-weight: 400;
	
	}
	
	.footer p {
	color : #000;
	}
	.footer .top li > a{
	color : #000;
	}
	.btn-social {
    text-transform : capitalize; 
    font-size: 16px;
     padding-left: 0; 
	 text-align : center;
    color: #fff;
	background-color : #07323e;
	}
	
	.btn-social:hover {
	background-color : #313131;
	}
	
	.btn {
	padding: 9px 0px;
	}
	.footer .title {
	color : #07323e;
	margin-bottom : 0;
	}
	.footer .title:after {
	display : none;
	}
	.footer .bottom {
	background-color : #07323e;
	}
	.footer .bottom .social {
	font-size : 20px;
	}
	.footer .bottom .social a{
	color : #fff;
	}
	
	.scrolled .header.dark {
	    height : 140px;
	}
	
	@media screen and (max-width: 700px) { 
	
	.fa-close{
		    margin-left : -50px;
		}
	.header-panel{
	visibility : visible;
	}
	.header .logo img {
    width: 225px;
	 max-height: 112px;
	 margin-top : 5px;
    }
    .header .menu-icons > ul > li {
       margin-top : 10px;
    }
    .default-menu.menu-icons > ul > li {
        margin-right : 0;
        
    }
    .highlighted {
  	   display : none;
    }
    .fa-envelope-o {
	   display : none;
    }
    .default-menu.menu-icons .option-icon i {
        margin-top :7px;
    }
    .scrolled .header.dark {
	    height : 70px;
	}
	.footer .top li > a:hover {
	    color : #000;
	}
	.cl {
	    display : none;
	}
}
	
	
		</style>
	</head>
	
	<body>
		
		
		
		<!-- .header-section -->
		<section class="header-section middle-wrapper" style="background-color :#07323e;height: 120px;" >
			<div class="middle-content">
				<div class="container">
					<h2 style="color : #fff;"> Welcome to Admin Panel |  <a href="/admin">Logout</a></h2>

				</div>
			</div>
		</section>
		<!-- /.header-section -->
		
	
		
		<!-- .section -->
<section class="section">
		
        <div class="container">
                <div class="row">
	                <div class="col-lg-12">
    		          
	                    <p style="text-align : center;"><a href="uploadimage.php" style="font-size : 22px;" class="btn btn-sm btn-angular btn-border-to-simple btn-secondary">Gallery Image Upload</a></p>
	                    
	                     <p style="text-align : center;"><a href="uploadnotice.php" style="font-size : 22px;" class="btn btn-sm btn-angular btn-border-to-simple btn-secondary">News & Notice Upload</a></p>
	           </div>
	           
        </div>
</section>

   
		
	
	<!-- .footer -->
		<footer class="footer">
			
			<!-- .top -->
			<div class="top">
				<div class="container">
					<div class="row">
						
						<!-- .col-md-4 -->
						<article class="col-md-3 col-sm-5" >
							<div class="form-group">
											<a href="map.html" class="btn btn-radius btn-social btn-block btn-facebook">
												
												Visit Us
											</a>
							</div>
							
							<div class="form-group">
											<a href="enquiryform.html" class="btn btn-radius btn-social btn-block btn-facebook">
												
												Enquire
											</a>
							</div>
							
							
						</article>
						<!-- /.col-md-4 -->

						<!-- .col-md-4 -->
						<article class="col-md-6 col-sm-4" >
							<h4 class="title" style="text-align: center; font-size : 20px;">The Adrian School | The Adrian Loyal School</h4>

							<div class="twitter-feed" style="text-align: center;">
								<p><b> A :</b> LGB Nagar, Karur, Tamil Nadu 639001 <br> 106/1, Kakavadi Village, Kakkavadi, Karur - 639003 <br>
								<b>M :</b> +91 96004 22277 |
								<b>E :</b> contact@adrianschools.org <br>
								<b>W : www.adrianschools.org</b>
								</p>

								
							</div>

							
						</article>
						<!-- /.col-md-3 -->

						

						<!-- .col-md-3 -->
						<article class="col-md-2 col-sm-12" >
							<h4 class="title" style="text-align: center;">Usefull links</h4>

							<ul class="list-unstyled text-uppercase" style="text-align: center;">
								<li><a href="admissions.html">Admissions @ Adrian </a></li>
						<li><a href="careers.html">Careers @ Adrian </a></li>
						
					
						<li><a href="contact.html">Contact Us</a></li>
							</ul>
							
						</article>
						<!-- /.col-md-3 -->
						
					</div><br>
					
					
					
					</div>
				</div>
			</div>
			<!-- /.top -->
			
			<div class="container-fluid soc" style="padding-top : 25px;background : #eeeeee; 
  display: flex;
  justify-content: center;
">
					<div class="row">
					    
					    
					    	<div class="col-sm-12  text-center-xs">
							
							<ul class="list-inline">
								<li style="border-radius : 100%; text-align : center;  width : 50px; height : 50px;   padding : 10px;" ><a class="facebook" href="https://www.facebook.com/The-Adrian-Loyal-SchoolKarur-1839699206323495/?ref=br_rs"><i class="fa fa-facebook"></i></a></li>
								<li style="border-radius : 100%; text-align : center;  width : 50px; height : 50px;   padding : 10px;"><a class="twitter" href="#"><i class="fa fa-linkedin"></i></a></li>
								<li style="border-radius : 100%; text-align : center;  width : 50px; height : 50px;   padding : 10px;"><a class="behance" href="https://www.youtube.com/channel/UCxjxc4Quz0bKfgAIBM1mCGg"><i class="fa fa-youtube"></i></a></li>
								<li style="border-radius : 100%; text-align : center;  width : 50px; height : 50px;   padding : 10px;"><a class="dribbble" href="https://www.instagram.com/the_adrian_schools/"><i class="fa fa-instagram"></i></a></li>
							 </ul>
						</div>
					</div>
				</div>
			
			<!-- .bottom -->
			<div class="bottom">
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-6 copyright text-center-xs">
					<div class="col-sm-6 copyright text-center-xs">
							<p style="font-size : 18px;"><span>The Adrian Loyal School @ 2021 - 2022  - Copyrights </span></p>
						</div>
						
						<div class="col-sm-6 text-right text-center-xs">
						<p><span style="color : #fff;">Designed by </span> <a href="https://www.ksweber.in/" target="_blank">
						    KS Weber</a> </p>
						</div> 
					</div>
				</div>
			</div>
			<!-- /.bottom -->
			
			<a href="#" class="go-to-top"><span class="fa fa-angle-up"></span><span class="sr-only">Go to top</span></a>
		</footer>
		<!-- /.footer -->
		
	
	
	
		
		<!-- JS library -->
		<script src="js/vendors/jquery.min.js"></script>
		<!-- HTML/CSS/JS framework -->
		<script src="js/vendors/bootstrap.min.js"></script>
		<!-- Google Map API -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxYi_Sk25cIlLkMEQlM7I-jAqWYTDQj64"></script>
		<!-- Form validation -->
		<script src="js/vendors/jquery.form-validator.min.js"></script>
		<!-- Viewport checker -->
		<script src="js/vendors/jquery.viewportchecker.min.js"></script>
		<!-- Filter and sort layouts -->
		<script src="js/vendors/isotope.pkgd.min.js"></script>
		<!-- Modal -->
		<script src="js/vendors/remodal.min.js"></script>
		<!-- Images loaded -->
		<script src="js/vendors/imagesloaded.pkgd.min.js"></script>
		<!-- Image zoom -->
		<script src="js/vendors/jquery.elevateZoom-3.0.8.min.js"></script>
		<!-- Lightbox -->
		<script src="js/vendors/lightbox.min.js"></script>
		<!-- Scroll navigation -->
		<script src="js/vendors/sly.min.js"></script>
		<!-- Carousel -->
		<script src="js/vendors/slick.min.js"></script>
		<!-- Responsive equal heights -->
		<script src="js/vendors/jquery.matchHeight-min.js"></script>
		<!-- Countdown-->
		<script src="js/vendors/jquery.countdown.min.js"></script>
		<!-- Masonry -->
		<script src="js/vendors/masonry.pkgd.min.js"></script>
		<!-- Custom select -->
		<script src="js/vendors/jquery.selectric.min.js"></script>
		<!-- Bar rating -->
		<script src="js/vendors/jquery.barrating.min.js"></script>
		<!-- Range slider -->
		<script src="js/vendors/nouislider.min.js"></script>
		<!-- Number formatting -->
		<script src="js/vendors/wNumb.js"></script>
		<!-- Counter up -->
		<script src="js/vendors/jquery.counterup.min.js"></script>
		
		<!-- Custom JS -->
		<script src="js/script.min.js"></script>
	</body>
</html>

