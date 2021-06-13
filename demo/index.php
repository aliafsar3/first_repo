<?php
require("includes/common.php");
?>

<!DOCTYPE html>

<!---- The page has a title Lifestyle Store-->

<!---- External css file index.css placed in the folder css is linked-->

</head>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trip planner | TP</title>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="index.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</head>
<body style="padding-top: 50px;">

	      <!-- Header -->
		  <?php
		  include 'includes/header.php';
		  ?>
		  <!--Header end---->
          <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>TRIP PLANNER.</h1>
                            <p>Flat 40% OFF on Winter Vacation </p>
                            <br/>
                            <a  href="package-list.php" class="btn btn-danger btn-lg active">Book Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

<!--- rooms ---->
<div class="rooms">
	<div class="container">
		
		<div class="room-bottom">
			<h3>Package List</h3>


			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: </h4>
					<h6>Package Type : </h6>
					<p><b>Package Location : </p>
					<p><b>Features</b> </p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated">
					<h5>Rs</h5>
					<a href="package-details.php" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
</div>
		</div>
	</div>
</div>
<!--- /rooms ---->
<!--- rooms ---->
<div class="rooms">
	<div class="container">
		
		<div class="room-bottom">
			<h3></h3>


			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/hill.jpg" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: </h4>
					<h6>Package Type : </h6>
					<p><b>Package Location : </p>
					<p><b>Features</b> </p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated">
					<h5>Rs</h5>
					<a href="package-details.php" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
</div>
		</div>
	</div>
</div>
<!--- /rooms ---->



	 <!--Footer-->
	 <?php
	 include 'includes/footer.php';
	 ?>
	 <!--Footer end-->
	
</body>
</html>	