<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "connect.php";
 session_start();
       $user=$_SESSION['id'];
       
        
 ?>
<?php
require("connect.php");

    $id = $_GET['id'];
    $x="update request set request='accepted' where request='pending' and bid='$id'";
    mysqli_query($con,$x);
    if($x){
      header('location:donoraccepted.php');
    }
   // $re=mysqli_query($con,"select username,password from farmer where fid='$id'");
    //$row2=mysqli_fetch_array($re);
    ?>
