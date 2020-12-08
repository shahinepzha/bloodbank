
<?php
//session_start();
include("connect.php");
if($_POST)
{
 
    $bn=$_POST['cname'];
     $un=$_POST['uname'];
      $ps=$_POST['pass'];
       $dob=$_POST['dob'];
        $gn=$_POST['gender'];
         $bg=$_POST['bgroup'];
          $nb=$_POST['num'];
           $email=$_POST['email'];
            $ds=$_POST['district'];
    $sql="insert into donor(name,dob,district,email,phoneno,bgroup,username,password,gender)values('$bn','$dob','$ds','$email','$nb','$bg','$un','$ps','$gn')";
    $ss= mysqli_query($con,$sql);
    
   if($ss)
   {
   	$type="donor";
    $sq="insert into login(username,password,usertype)values('$un','$ps','$type')";
    $s= mysqli_query($con,$sq);
   
}
   header('location:index.php');
}
?>