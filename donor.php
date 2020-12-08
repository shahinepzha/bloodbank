
<?php
include "connect.php";
session_start();
if(!isset($_SESSION['id']))
{
	header("location: login.html");
}
$user=$_SESSION['id'];
                 
 $group= $_SESSION['group'];
  ?>
<!DOCTYPE html>
<html>
<head>
<title>Online Blood Donor Management system</title>
<!--mobile apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dream up Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--mobile apps-->
<!--Custom Theme files -->
<link href="css2/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css2/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" type="text/css" href="css2/component.css" />
<!-- //Custom Theme files -->	

<!--web-fonts-->
	<link href='//fonts2.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='//fonts2.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
<!--//web-fonts-->

</head>
<body onload="noBack();">
	<!-- main content start-->
     <!--start-home-->
	<div id="home" class="header">
			
			  </div>
			
			<h1><img src="blood.png" width="130" style="margin-top: 20px;"></h1>
	
		<div class="header-top w3l">
		  <div class="container">
		     
			
            <div class="main-nav">
			  <span class="menu"></span>
				<div class="top-menu"><br><br>  
							 <ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home</a></li>
								
								<li><a href="viewprofile.php">View Profile</a></li>
								<!--<li><a href="#">Update Profile</a></li>-->
								<li><a href="donorviewrequest.php">View BloodRequest</a></li>

								
								<li><a href="logout.php">Logout</a></li>
							</ul>
				</div>
             </div>

	<!--End-top-nav-script-->
		<!--//end-header-->
		<div class="clearfix"></div>
    </div>
	</div>
      
	  
     
	<div class="about" id="about">
	       <div class="container">
		   
					<div class="col-md-7 ab-right">
					<h2 class="tittle">Welcome to our <span>BLOOD</span> PLUS</h2>
										

					</div>
					<div class="col-md-5 ab-left">
							 <img src="images/g3.jpg"/>

							
						</div>

					
			<div class="clearfix"> </div>
		</div>
	</div>

	

</body>
</html>
<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>