<?php
$connect = mysql_connect("localhost","ksweberi_adrian1","Designer@24") or die("Could not be
Established the Connection".mysql_error());
$database = mysql_selectdb("ksweberi_adrian1") or die("Cannot be Open the
Database".mysql_error());
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
		
		<title>Adrian Loyal School | Gallery</title>
		
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
					<h2 style="color : #fff;"> Welcome to Admin Panel |  <a href="chooseoption.php">Back</a></h2> 
					   

				</div>
			</div>
		</section>
		<!-- /.header-section -->
		
	
		
		<!-- .section -->
		<section class="section">
		
        <div class="container">
                <div class="row">
	                <div class="col-md-12">
    		            <h2> Gallery Upload | <a href="gallery.php" target="_blank">Click to view</a></h2> 
    	            	<form action="galleryupload.php" enctype="multipart/form-data" method="post">
    		
    		            <table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
    	            	<tbody>
    	            	<tr>
    		            <td>
    		            <input name="uploadedimage" type="file">
    		            </td>
    		
    		            </tr>
    		
    		            <tr>
    		                <td>
    		                    <input name="Upload Now" type="submit" value="Upload Image">
    		                </td>
    	    	        </tr>
    		
    		
    		            </tbody></table>
    		
    		            </form> <br>
    		            
    		            
    		            <h2> Gallery Photos Details</h2>
    		            <?php
		
                    		$query = "select * from images_tbl";
                    		
                    		$query_result = mysql_query($query) or die("Could not be Execute the Query".mysql_error());
                    		echo "<table border = 1 style='width : 100%;'>";
                    		
                    
                    		
                    		echo "<tr>";
                    		
                    		echo "<th>Image ID</th>";
                    		echo "<th>Image Name</th>";
                    		echo "<th>Date</th>";
                    		echo "<th>Delete</th>";
                    		echo "</tr>";
                    		
                    		while($row = mysql_fetch_array($query_result))
                    		{
                    		echo "<tr>";
                    		echo "<td>$row[images_id]</td>";
                    		echo "<td><img src='$row[images_path]' width='80' height='50'></td>";
                    		echo "<td>$row[submission_date]</td>";
                    		echo "<td><a href=delete1.php?id=$row[images_id]>Delete</a></td>";
                    		          
                    		echo "</tr>";
                    		}
                    		
                    	?>
	
	
	
	
	                </div>
	                
	                
	                
	                
	            </div>
        </div>
</section>

   
		
	
		
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

