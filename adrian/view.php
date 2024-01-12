<?php
$connect = mysql_connect("localhost","ksweberi_adrian1","Designer@24") or die("Could not be
Established the Connection".mysql_error());


$database = mysql_selectdb("ksweberi_adrian1") or die("Cannot be Open the
Database".mysql_error());

 ?>
 
   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Conceptly, Responsive, Business Template, Bootstrap 4,">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
    <title>RSN XPORTS : TOWEL NAPKINS</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="stylesheet" href="assets/css/all.css">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    <style>
    .padd {
    
    	padding : 25px;
    
    }
   td{
      padding :10px;
}
    
    </style>

</head>

<body>


    <!-- Start: Header Top
    ============================= -->
    <section id="header-top">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-9 col-md-12 text-lg-left mb-2 mb-lg-0">
                    <ul class="header-info d-inline-block">
                        <li><a href="upload.html">Back</a></li>
                        
                        
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 text-center text-lg-right mb-lg-0 mb-1">
                    <ul class="header-social d-inline-block">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>                    
                </div>
            </div>
        </div>
    </section>
    <!-- End: Header Top
    ============================= --> 
   
   

  <div class="container padd">
   <div class="row">
		<div class="col-md-12">
		   
		   
		<?php
		
		$query = "select * from images_tbl";
		
		$query_result = mysql_query($query) or die("Could not be Execute the Query".mysql_error());
		echo "<table border = 1 >";
		
		echo "<tr><th>Bed Spread</th></tr>";
		
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
		echo "<td>$row[images_path]</td>";
		echo "<td>$row[submission_date]</td>";
		echo "<td><a href=delete.php?id=$row[images_id]>Delete</a></td>";
		          
		echo "</tr>";
		}
		
		?>
		</div>


</div>
</div>


<!---------------------------------------------------------------------------------------------------------------------------->


</div>
</div>
</div>
<br>
<br>


 <a href="#" class="scrollup boxed-btn"><i class="fas fa-arrow-up"></i></a>



<!-- Scripts -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    
    <script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/plugins/ScrollToPlugin.min.js"></script>

    <!-- Smooth Scroll -->
    <!--<script src="../../../../cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>

    <!-- Map Script -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqoWGSQYygV-G1P5tVrj-dM2rVHR5wOGY"></script>
    <script src="assets/js/map-script.js"></script> -->

    <!-- Custom Script -->
    <script src="assets/js/custom.js"></script>
    
    
</body>



</html>














