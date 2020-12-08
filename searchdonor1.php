
 <?php
include "connect.php";
 session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Blood donor management system</title>
<!--mobile apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dream up Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--mobile apps-->
<!--Custom Theme files -->
<link href="css2/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css4/style.css" type="text/css" rel="stylesheet" media="all"> 
<link href="css2/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" type="text/css" href="css/component.css" />
<!-- //Custom Theme files -->   

<!--web-fonts-->
    <link href='//fonts2.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='//fonts2.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
<!--//web-fonts-->

</head>

<style>
    #back{
        padding-right: 100px;
    }
</style>
<body>
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
                             <ul class="nav navbar-nav cl-effect-14">
                                
                            </ul>
                </div>
             </div>

    <!--End-top-nav-script-->
        <!--//end-header-->
        <div class="clearfix"></div>
    </div>
    </div>
      
    
         <!-- about-type-grid -->
    <div class="about" id="about">
           <div class="container">
           
                    <div class="col-md-7 ab-right">
                                        
                    </div>
                    <div class="col-md-5 ab-left">
                             <img src="images/g5.jpg"/>

                            
                        </div>

                    
            <div class="clearfix"> </div>
        </div>
    </div>

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
                                <!--end-smooth-scrolling-->
        <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- //for bootstrap working -->

<!-- js -->
<script src="js2/modernizr.custom.js"></script>

<script src="js2/jquery-1.11.1.min.js"></script> 
<script type="text/javascript" src="js2/move-top.js"></script>
<script type="text/javascript" src="js2/easing.js"></script>
<script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                });
            });
</script>

<!-- //js -->
<script type="text/javascript">
                                         $('.main-search').hide();
                                        $('button').click(function (){
                                            $('.main-search').show();
                                            $('.main-search text').focus();
                                        }
                                        );
                                        $('.close').click(function(){
                                            $('.main-search').hide();
                                        });
                                    </script>
                                        <!-- script-for-menu -->
                <script>
                $( "span.menu" ).click(function() {
                  $( ".top-menu" ).slideToggle( "slow", function() {
                    // Animation complete.
                  });
                });
            </script>
                <script src="js2/responsiveslides.min.js"></script>
             <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 4
                  $("#slider4").responsiveSlides({
                    auto: true,
                    pager:false,
                    nav:true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                      $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                      $('.events').append("<li>after event fired.</li>");
                    }
                  });
            
                });
              </script>
               <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 4
                  $("#slider3").responsiveSlides({
                    auto: true,
                    pager:true,
                    nav:false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                      $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                      $('.events').append("<li>after event fired.</li>");
                    }
                  });
            
                });
              </script>
          <!--banner Slider starts Here-->
<script src="js2/easyResponsiveTabs.js" type="text/javascript"></script>
                <script type="text/javascript">
                                    $(document).ready(function () {
                                        $('#horizontalTab').easyResponsiveTabs({
                                            type: 'default', //Types: default, vertical, accordion           
                                            width: 'auto', //auto or any width like 600px
                                            fit: true   // 100% fit in a container
                                        });
                                    });
                                    
                </script>
                <script type="text/javascript">
                         $(window).load(function() {
                            $("#flexiselDemo3").flexisel({
                                visibleItems:2,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,            
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: { 
                                    portrait: { 
                                        changePoint:480,
                                        visibleItems:2
                                    }, 
                                    landscape: { 
                                        changePoint:640,
                                        visibleItems:2
                                    },
                                    tablet: { 
                                        changePoint:768,
                                        visibleItems:3
                                    }
                                }
                            });
                            
                        });
                       </script>
                       <script type="text/javascript" src="js2/jquery.flexisel.js"></script>
<!-- for bootstrap working -->
    <script src="js/bootstrap.js"></script>





<div id="back" align="right">
    <a href="index.php"><H3><font color="black">Back</font></H3></a>
</div>

<h1><marquee direction="left">View Donors</marquee></h1><br>
<center>

<form method="post" id="view" >
              
            
        
  <?php

  $gp="";
  if($_POST)
  {
    
    $gp=$_POST["dist"];
   
    $_SESSION['grp']=$gp;
    $s=$_SESSION['grp'];
    ?>
    <br>
    <?php
    //echo "$gp";
    
  }
    ?>

    <div style="  height:auto; width:800px; padding-top:20px; padding-bottom:20px;">
               <table width="50%" border="" cellspacing="2" cellpadding="2" align="center">
 <tr>

           
            <th>&nbsp;&nbsp;Name&nbsp;&nbsp;</th>
            
            <th>&nbsp;&nbsp;Date&nbsp;Of&nbsp;Birth&nbsp;&nbsp;</th>
            
            <th>&nbsp;&nbsp;District&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;Email&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;Phone&nbsp;Number&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;Blood&nbsp;Group&nbsp;&nbsp;</th>
            
              <th>&nbsp;&nbsp;Gender&nbsp;&nbsp;</th>
</tr>
    <?php
  //$s="";

$resul=mysqli_query($con,"select * from donor where district='$gp'");
while($dat=mysqli_fetch_array($resul))
{
    $n=$dat["name"];
    $d=$dat["dob"];
    $ds=$dat["district"];
    $e=$dat["email"];
    $p=$dat["phoneno"];
    $bp=$dat["bgroup"];
    $g=$dat["gender"];
    ?>
<tr align="center">
    <td><?php  echo $n;?></td>
    <td><?php  echo $d;?></td>
  <td><?php  echo $ds;?></td>
      <td><?php  echo $e;?></td>
    <td><?php  echo $p;?></td>
  <td><?php  echo $bp;?></td>
      <td><?php  echo $g;?></td>

   
</tr>
<?php
}
?>

    </table>
</form>
</center>
</body>
</html>
