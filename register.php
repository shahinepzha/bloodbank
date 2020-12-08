<?php
include 'connect.php';
session_start();
 if($_POST)
    {
 $name1=$_POST["name"];
$email1 = $_POST["email"];
 $adhar1=$_POST["adhar"];
$blood1 = $_POST["blood"];
$add = $_POST["add"];
$pass = $_POST["password"];
$cpass = $_POST["cpassword"];

$sq="insert into register(uname,email,adhar,blood,address,password,cpassword) values('$name1','$email1','$adhar1','$blood1','$add','$pass','$cpass')";
$e=mysqli_query($con,$sq);
}
if($sq)
{
    $type='user';
    $uname = $_POST["name"];
    $password=$_POST["password"];
    $q="insert into login(usertype,username,password)values('$type','$uname','$password')";
    mysqli_query($con,$q);

        }

    ?>
<script>
    alert("Successfully Registered");
    window.location="login.html";
</script>
