<?php
include "connect.php";
 session_start();
       //$user=$_SESSION['id'];
       
        
 ?>
<?php
require("connect.php");

    $id = $_GET['id'];
    $x="update donor set request='confirmed' where request='pending' and bid='$id'";
    mysqli_query($con,$x);
   // $re=mysqli_query($con,"select username,password from farmer where fid='$id'");
    //$row2=mysqli_fetch_array($re);
    ?>


    <!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<script type="text/javascript">
    function valid()
    {
        if(document.getElementById("name").value=="")
        {
            alert("please enter Staff name");
            document.getElementById("name").focus();
            return false;
        }

        if(document.getElementById("place").value=="")
        {
            alert("please enter  place");
            document.getElementById("place").focus();
            return false;
        }

        if(document.getElementById("princi").value=="")
        {
            alert("please enter  Address ");
            document.getElementById("princi").focus();
            return false;
        }

        if(document.getElementById("mail").value=="")
        {
            alert("please enter  Email Id");
            document.getElementById("mail").focus();
            return false;
        }

        var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

        var emailid=document.getElementById("mail").value;

        var matchArray = emailid.match(emailPat);

        if (matchArray == null)

        {

            alert("Your Email ID seems incorrect. Enter Correct Email ID.");

            document.getElementById("mail").focus();

            return false;

        }

        if(document.getElementById("number").value=="")

        {

            alert("Enter Mobile No.!");

            document.getElementById("number").focus();

            return false;

        }

        if(document.getElementById("number").value.length<10)

        {

            alert("Your Mobile No. seems incorrect!");

            document.getElementById("number").focus();

            return false;

        }

        var digits="0123456789";

        var temp;

        for (var i=0;i<document.getElementById("number").value.length;i++)

        {

            temp=document.getElementById("number").value.substring(i,i+1);

            if (digits.indexOf(temp)==-1)

            {

                alert(" Enter correct Mobile Number!");

                document.getElementById("number").focus();
                return false;

            }

        }

        if(document.getElementById("university").value=="")
        {
            alert("please enter  Pincode");
            document.getElementById("university").focus();
            return false;
        }

        if(document.getElementById("user").value=="")
        {
            alert("please enter  UserName");
            document.getElementById("user").focus();
            return false;
        }

        if(document.getElementById("pass").value=="")
        {
            alert("please enter  Password");
            document.getElementById("pass").focus();
            return false;
        }

    }
</script>
<style>
    #back{
        padding-right: 100px;
    }
</style>
<body>
    <!-- main content start-->
     <!--start-home-->
    <div id="home" class="header">
            <!--start-header-->
           <!-- <div class="header-strip w3l">
               <div class="container">
               <p class="phonenum"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> &nbsp; CALL - US - FREE: &nbsp;888 - 585 - 9858</p>
                <p class="phonenum two"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> &nbsp;  123 Lorem Street
London, VL 12346</p>
<p class="phonenum two one"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> &nbsp;  Open hours: Mon - Sat 9.30am - 10.00pm
</p>
                     <div class="main-search">
                                            <form>
                                               <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
                                                <input type="submit" value="">
                                            </form>
                                    <div class="close"><img src="images/cross.png" /></div>
                                </div>
                                    <div class="srch"><button></button></div>
                    

                <div class="clearfix"></div>-->
              </div>
            </div>
        <div class="header-top w3l">
          <div class="container">
            
            
            <div class="main-nav">
              <span class="menu"></span>
                <div class="top-menu"><br><br>  
                             <ul class="nav navbar-nav">
                                <li class="active"><a href="adminhome.html">Home</a></li>
                                
                                <li><a href="index.php">Logout</a></li>
                            </ul>
                </div>
             </div>

    <!--End-top-nav-script-->
        <!--//end-header-->
        <div class="clearfix"></div>
    </div>
    </div>
      <!--start-banner-->
           
      <!--//end-banner-->   
     
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
    <a href="adminhome.html"><H3><font color="black">Back</font></H3></a>
</div>

<h1><marquee direction="left">View Donors</marquee></h1><br>
<form method="post" id="view" >
    <table  border="2" align="center">
        <tr>
            <th>&nbsp;&nbsp;Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
           
            <th>&nbsp;&nbsp;Name&nbsp;&nbsp;</th>
            
            <th>&nbsp;&nbsp;Date Of Birth&nbsp;&nbsp;</th>
            
            <th>&nbsp;&nbsp;District&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;Email&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;Phone Number&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;Blood Group&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;User Name&nbsp;&nbsp;</th>
             <th>&nbsp;&nbsp;Password&nbsp;&nbsp;</th>
              <th>&nbsp;&nbsp;Gender&nbsp;&nbsp;</th>
             <th>&nbsp;&nbsp;Confirmation&nbsp;&nbsp;</th>
          </tr>
          <?php
        
        $result=mysqli_query($con,"select *  from donor where request='confirmed'");
            
        if(mysqli_num_rows($result) >0)
        {

            while($row1=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row1[0];?></td>
                    <td><?php echo $row1[1];?></td>
                    <td><?php echo $row1[2];?></td>
                    <td><?php echo $row1[3];?></td>
                    <td><?php echo $row1[4];?></td>
                    <td><?php echo $row1[5];?></td>
                    <td><?php echo $row1[6];?></td>
                    <td><?php echo $row1[7];?></td>
                     <td><?php echo $row1[8];?></td>
                      <td><?php echo $row1[9];?></td>
                    <td>confirmed</td>
                </tr>
                <?php
            }
                
        }
        ?>
        
        
      
    </table>
</form>
</body>
</html>
  