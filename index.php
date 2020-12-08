
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>BLOODPLUS|Blood Bank Management System</title>
<!-- for-meta-tags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-meta-tags-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" Department="" />
<link href="css/services.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/ziehharmonika.css" rel="stylesheet" type="text/css">
<link href="css/JiSlider.css" rel="stylesheet"> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
</head>
	
<body>
<div class="main" id="home">
<!-- banner -->
		
						
						
						<div class="clearfix"> </div>
				

		<div class="header-bottom">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<h1><img src="blood.png" width="128" height="78"></h1>
					</div>
				</div>


				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--sebastian">
					<ul id="m_nav_list" class="m_nav menu__list">
						<li class="m_nav_item menu__item menu__item--current" id="m_nav_item_1"> <a href="index.php" class="menu__link"> Home</a></li>
						<!--<li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="about.html" class="menu__link"> About Us </a> </li>	-->	


						<li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="request.html" class="menu__link"> Request For Blood </a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="donorreg.html" class="menu__link"> Donor Registration </a></li>
						
						


						

						<!--<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="contact.html" class="menu__link"> Contact </a> </li>-->
						<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="login.html" class="menu__link">Login</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</ul>

								
<form name ="form" action="searchdonor.php" id="form"  method="POST" enctype="multipart/form-data" >

	BLOOD GROUP:<select name="bloodgrp">
	<option value="">--select--</option>
	<option value="A+">A+</option>
	<option value="B+">B+</option>
	<option value="O-">O-</option>
	<option value="O+">O+</option>
	<option value="AB+">AB+</option>
	<option value="AB-">AB-</option>
    <option value="B-">B-</option>
    
	</select>
	<input type="submit" name="view" value="SEARCH"/>


		
</table>
</div>
</form>
		
 <br>
		
 <form name ="form" action="searchdonor1.php" id="form"  method="POST" enctype="multipart/form-data" >

DISTRICT: <select  name="dist">
  <option value="">--select--</option>
  <option value="Calicut">Calicut </option>
  <option value="Malappuram">Malappuram </option>
  <option value="Palakkad">Palakkad </option>
  <option value="Thrissur">Thrissur</option>
  <option value="Wayanadu">Wayanadu </option>
  <option value="Trivandrum">Trivandrum </option>
  <option value="Ernakulam">Ernakulam</option>
  <option value="Kollam">Kollam </option>
  <option value="Pathanamthita">Pathanamthita</option>
  <option value="Kasargod">Kasargod</option>
  <option value="Alappuzha">Alappuzha </option>
  <option value="Kannur">Kannur</option>
  <option value="Kottayam">Kottayam</option>
  <option value="Idukki">Idukki</option>
  </select>



  <input type="submit" name="view" value="SEARCH"/>






















&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--<select name="fg">
							<?php
							//include "connect.php";
                                    //$sel = mysqli_query($con,"SELECT * FROM bgroup");

                                //    while($r = mysqli_fetch_array($sel))
                                    {
                                      //  $c_id = $r['bgroup'];
                                    ?>
                                    <option>
                                        <a href="searchdonor.php?c_id=<?php// echo $c_id;?>"><?php //echo $r['bgroup']; ?></a></option>
                                   

                                    
                                    <?php
                                     } 
                                     ?>

    
                                 </select>

<b> 
                                    <a href="searchdonor.php?prod_id=<?php// echo $c_id;?>"><button type="button" class="btn btn-success">search</button></a></b>

                                 </form>
                                 
                               
								
												







				</nav>

				</div>
				<!-- /.navbar-collapse -->
			</nav>
	 </div>
</div>
<!-- banner -->
	 <div class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="w3layouts-banner-top">

							<div class="container">
									<div class="agileits-banner-info">
									<span>BLOOD +</span>
									<h3>EVERY DONOR IS A LIFE SAVER </h3>
									<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.</p>-->
									
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="container">
								<div class="agileits-banner-info"> <span>BLOOD +</span>
									<h3>GIVE BLOOD
                                    		SAVE LIFE </h3>
								 
									
									<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.</p>-->
									
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								     											<span>BLOOD +</span>
									<h3>BLOOD MANAGEMENT SYSTEM </h3>
									<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.</p>-->
									
								</div>
								
							</div>
						</div>
					</li>
				
			</ul>
		</div>
      </div>

<!-- //banner -->

<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<h2 class="w3_heade_tittle_agile">Welcome to Blood Plus</h2>
			<p class="sub_t_agileits">GIVE BLOOD SAVE LIFE</p>
			
			<!--<p class="ab">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>-->

			 <div class="about-w3lsrow"> 
				
				<div class="col-md-6 w3about-img"> 
				    <img src="images/about.jpg" alt=" " class="img-responsive">
				</div> 
				<div class="col-md-6 col-sm-7 w3about-img two"> 
					<div class="w3about-text"> 
						<h5 class="w3l-subtitle">The blood bank management system is designed for the blood bank to gather blood from various sources 
Distribute it to the needy people who have high requirements for it.
 The software is designed to handle the daily transactions of the blood bank and search the details when required.
It also helps to register the details of donors, blood collection details as well as blood issued reports.
The software application is designed in such a manner that it can suit the needs of all the blood bank requirements in the course of future.
</h5>
						<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>-->
						 
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
</div>
<!-- /about-bottom -->
<!-- /girds_agileits -->
	<!--<div class="Department_girds_agileits">
		<div class="agile_team_grid">	
	
					<div class="col-md-3 w3ls_banner_bottom_grid">
						<img src="images/g1.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
							<h4>Department 1</h4>
							<ul class="social_agileinfo">
								<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 w3ls_banner_bottom_grid">
						<img src="images/g2.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
							<h4>Department 2</h4>
							<ul class="social_agileinfo">
								<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>


					<div class="col-md-3 w3ls_banner_bottom_grid hvr-shutter-in-horizontal">
						<img src="images/g3.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
							<h4>Department 3</h4>
							<ul class="social_agileinfo">
								<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>


					<div class="col-md-3 w3ls_banner_bottom_grid">
						<img src="images/g4.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
							<h4>Department 4</h4>
							<ul class="social_agileinfo">
								<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>

		</div>
		<div class="clearfix"></div>
	</div>
<!-- //girds_agileits 
	<div class="agile_menu" id="menu">
		<div class="container">
		<h3 class="w3_heade_tittle_agile">Our Departments</h3>
		<p class="sub_t_agileits">Add Short Description</p>
		<div class="menu_w3ls_agile_top_section">
			<div class="ziehharmonika">
			<h3>Neurology</h3>
			<div>
				  <div class="w3_agile_recipe-grid">
                                  
								<div class="col-md-6 col-sm-6 tab-image">
									<img src="images/g5.jpg" alt="Medicinal">
								</div>
								<div class="col-md-6 col-sm-6 tab-info">
								<h4>We are having department to us</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting... </p>
									<div class="read"><a href="#" class="hvr-rectangle-in">Read More</a></div>
								</div>
								<div class="clearfix"></div>
					    </div>

			</div>
			<h3>Dental</h3>
			<div>
				  <div class="w3_agile_recipe-grid">
                                  
								
									<div class="col-md-6 col-sm-6 tab-info two">
								<h4>We are having department to us</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting... </p>
									<div class="read"><a href="#" class="hvr-rectangle-in">Read More</a></div>
								</div>
								<div class="col-md-6 col-sm-6 tab-image two">
									<img src="images/g6.jpg" alt="Medicinal">
								</div>
								<div class="clearfix"></div>
					    </div>

			</div>
			<h3>Eye Care</h3>
			<div>
			 <div class="w3_agile_recipe-grid">
                                  
								<div class="col-md-6 col-sm-6 tab-image">
									<img src="images/g7.jpg" alt="Medicinal">
								</div>
									<div class="col-md-6 col-sm-6 tab-info">
								<h4>We are having department to us</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting... </p>
									<div class="read"><a href="#" class="hvr-rectangle-in">Read More</a></div>
								</div>
								<div class="clearfix"></div>
					    </div>


			</div>
			<h3>Baby Care</h3>
			<div>
				  <div class="w3_agile_recipe-grid">
                                  
								
								<div class="col-md-6 col-sm-6 tab-info two">
								<h4>We are having department to us</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting... </p>
									<div class="read"><a href="#" class="hvr-rectangle-in">Read More</a></div>
								</div>
								<div class="col-md-6 col-sm-6 tab-image two">
									<img src="images/g2.jpg" alt="Medicinal">
								</div>
								<div class="clearfix"></div>
					    </div>
			</div>
		</div>
		</div>
	</div>
</div>
<!-- services section
<div class="service-w3l jarallax" id="service">
	<div class="container">
	<h3 class="w3_heade_tittle_agile two">What We Do Best</h3>
		<p class="sub_t_agileits">Add Short Description</p>
		<div class="col-lg-4 col-md-4 col-sm-12 serv-agileinfo1">
			<div class="col-lg-12 col-md-12 col-sm-6 serv-wthree1" data-aos="zoom-in">
				<ul class="ch-grid">
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
								<div class="ch-info-back">
									<h5>Health Plus</h5>
									<p>Best In Services</p>
								</div>	
							</div>
						</div>
					</li>
				</ul>
				<h4 class="text-center">Easy Booking</h4>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat risus eu pretium commodo.</p>	
			</div>
			<div class="col-lg-12 col-md-12 col-sm-6 serv-wthree2" data-aos="zoom-in">
				<ul class="ch-grid">
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-2"><i class="fa fa-user-md" aria-hidden="true"></i></div>
								<div class="ch-info-back">
									<h5>Health Plus</h5>
									<p>Best In Services</p>
								</div>	
							</div>
						</div>
					</li>
				</ul>
				<h4 class="text-center">Experience</h4>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat risus eu pretium commodo.</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 serv-agileinfo2">
			<div class="col-lg-12 col-md-12 col-sm-6 serv-wthree4" data-aos="zoom-in">
				<ul class="ch-grid">
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-3"><i class="fa fa-ambulance" aria-hidden="true"></i></div>
								<div class="ch-info-back">
									<h5>Health Plus</h5>
									<p>Best In Services</p>
								</div>	
							</div>
						</div>
					</li>
				</ul>
				<h4 class="text-center">Emergency Care</h4>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat risus eu pretium commodo.</p>
			</div>
			<div class="clearfix"></div>
		</div>	
		<div class="col-lg-4 col-md-4 col-sm-6 serv-agileinfo3">
			<div class="col-lg-12 col-md-12 col-sm-6 serv-wthree6" data-aos="zoom-in">
				<ul class="ch-grid">
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-4"><i class="fa fa-tint" aria-hidden="true"></i></div>
								<div class="ch-info-back">
									<h5>Health Plus</h5>
									<p>Best In Services</p>
								</div>	
							</div>
						</div>
					</li>
				</ul>
				<h4 class="text-center">DNA Testing</h4>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat risus eu pretium commodo.</p>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-6 serv-wthree5" data-aos="zoom-in">
				<ul class="ch-grid">
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-5"><i class="fa fa-wheelchair" aria-hidden="true"></i></div>
								<div class="ch-info-back">
									<h5>Health Plus</h5>
									<p>Best In Services</p>
								</div>	
							</div>
						</div>
					</li>
				</ul>
				<h4 class="text-center">General Treatment</h4>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat risus eu pretium commodo.</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- /services section 

<!-- stats  id="stats">
	    <div class="container"> 
			<div class="inner_w3l_agile_grids">
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
		   	<i class="fa fa-building-o" aria-hidden="true"></i>
			<p class="counter">120</p>
			<h3>Hospital Rooms</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
		   <i class="fa fa-wheelchair" aria-hidden="true"></i>
			<p class="counter">165</p>
			<h3>Wheelchair</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
		<i class="fa fa-ambulance" aria-hidden="true"></i>
			<p class="counter">563</p>
			<h3>Ambulance Car</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
	<i class="fa fa-heart-o" aria-hidden="true"></i>
			<p class="counter">245</p>
			<h3>Saved Hearts</h3>
		</div>
		<div class="clearfix"> </div>
	</div>
   </div>	
</div>
<!-- //stats -->

<!-- services-bottom -->
	
<!-- //footer -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
 <!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/JiSlider.js"></script>
		<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
			})
		</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script src="js/ziehharmonika.js"></script>
<script>
$(document).ready(function() {
		$('.ziehharmonika').ziehharmonika({
			collapsible: true,
			prefix: ''
		});
	});
</script>
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<script type="text/javascript">
$(function(){
  $("#bars li .bar").each(function(key, bar){
    var percentage = $(this).data('percentage');

    $(this).animate({
      'height':percentage+'%'
    }, 1000);
  })
})
</script>

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Health Plus
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/g9.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->

<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
  </script>
<!-- //flexSlider -->


<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
			<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>