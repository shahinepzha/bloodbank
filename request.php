
<?php
session_start();
include("connect.php");
if($_POST["register"])
{
 
    $bn=$_POST['cname'];
     $un=$_POST['gender'];
      $ps=$_POST['mob'];
       $dob=$_POST['email'];
        $gn=$_POST['gender'];
         $bg=$_POST['bgroup'];
          $nb=$_POST['rdate'];
           $email=$_POST['email'];
       
    $sql="insert into request(name,rdate,email,phoneno,bgroup,gender)values('$bn','$nb','$email','$ps','$bg','$gn')";
   $ss= mysqli_query($con,$sql);
   header('location: index.php');
}
?>