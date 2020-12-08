<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
        require("connect.php");
        session_start();
         $user=$_SESSION['id'];
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
            <h1><img src="blood.png" width="130" style="margin-top: 20px;"></h1>
  
        <div class="header-top w3l">
          <div class="container">
            
            
            <div class="main-nav">
              <span class="menu"></span>
                <div class="top-menu"><br><br>  
                             <ul class="nav navbar-nav">
                                <li class="active"><a href="donor.html">Home</a></li>
                                <!--<li><a href="farmer.html" >Add Farmer</a></li>
                                <li><a href="contractor.html" class="scroll">Add Contractor</a></li>
                                <li><a href="labour.html" class="scroll">Add Labour</a></li>
                                <li><a href="labour.html" class="scroll">Add notification</a></li>
                                <li><a href="labour.html" class="scroll">Weather Forecasting</a></li>
                                <li><a href="labour.html" class="scroll">View Airline Details</a></li>-->
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
           <div class="">
                       <div class="">
                <div class="">
                <!--<div class="">
                    <ul class="rslides" id="slider4">
                        <li>
                           <div class="banner-info">
                                  <h3>Welcome</h3>
                                  <p>SKETCHING & BUILDING </p>
                                 <span>Smart Choice !</span>
                              </div>
                        </li>
                        <li>
                           <div class="banner-info">
                                 <h3>Your Desire</h3>
                                 <p>WE BUILD YOUR DREAMS </p>
                                 <span>Smart Choice !</span>
                              </div>
                        </li>
                        <li>
                           <div class="banner-info">
                                  <h3>We Plan</h3>
                                  <p>WE OFFER DESIGN FOR YOU  </p>
                                   <span>Smart Choice !</span>
                           </div>
                      </li>
                    </ul><!--banner Slider starts Here-->


              <!--</div>-->
                </div>
           </div>
        </div>
    </div>
      <!--//end-banner-->   
     <!-- app-->
            <div class="modal ab fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog about" role="document">
                    <div class="modal-content about">
                        <div class="modal-header">
                            <button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                     
                        </div>
                        <div class="modal-body about">
                                <div class="about">
                                     <form class="retire">
                                    <div class="styled-input">
                                      <input type="text" required="">
                                      <label>Your Name</label>
                                      <span></span> </div>
                                    <div class="styled-input">
                                      <input type="email" required="">
                                      <label>Your Email</label>
                                      <span></span> </div>
                                    <div class="styled-input">
                                      <textarea required=""></textarea>
                                      <label>Your Message</label>
                                      <span></span> </div>
                                        <div class="send">
                                            <input type="submit" value="SUBMIT">
                                        </div>
                             </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
         <!-- about-type-grid -->
    <div class="about" id="about">
           <div class="container">
           
                    <div class="col-md-7 ab-right">
                                        <!--<h2 class="tittle">Welcome to our <span>Dream </span>up</h2>-->
                                        <!--<h4>Constructions</h4>
                                        <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem  </p>-->
                                        <!--<a href="#" data-toggle="modal" data-target="#myModal1" class="hvr-shutter-in-horizontal">Get A Quote</a>-->

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
<div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Image-Title</h3>
                        <img src="images/pic4.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Image-Title</h3>
                        <img src="images/pic9.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Image-Title</h3>
                        <img src="images/pic5.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Image-Title</h3>
                        <img src="images/pic6.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Image-Title</h3>
                        <img src="images/pic10.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Image-Title</h3>
                        <img src="images/pic11.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Image-Title</h3>
                        <img src="images/pic13.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Image-Title</h3>
                        <img src="images/pic14.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <img src="images/pic1.jpg" class="img-responsive img-centered" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>























<div id="back" align="right">
    <a href="donor.html"><H3><font color="black">Back</font></H3></a>
</div>

<h1><marquee direction="left">View Profile</marquee></h1><br>
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
            <th>&nbsp;&nbsp;Edit&nbsp;&nbsp;</th>
           
        </tr>
        <?php
        require("connect.php");
        $result=mysqli_query($con,"select *  from donor  where username='$user'");
			
        if(mysqli_num_rows($result) >0)
        {

            while($row1=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row1["bid"];?></td>
                    <td><?php echo $row1["name"];?></td>
                    <td><?php echo $row1["dob"];?></td>
                    <td><?php echo $row1["district"];?></td>
                    <td><?php echo $row1["email"];?></td>
                    <td><?php echo $row1["phoneno"];?></td>
                    <td><?php echo $row1["bgroup"];?></td>
                    <td><?php echo $row1["username"];?></td>
                    <td><?php echo $row1["password"];?></td>
                     <td><?php echo $row1["gender"];?></td>
                     <td><font color="yellow"><a href="updateprofile.php?id=<?php echo $row1["bid"]?>&mode=edit">edit</font></td> 
                </tr>
                <?php
			}
				
		}
		
        ?>
    </table>


    </br>

    </br></br></br></br></br></br></br></br></br></br></br>

</form>

</body>
</html>
