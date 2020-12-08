
<?php
include 'connect.php';
session_start();
$user=$_SESSION['id'];
       
        

if(isset($_POST))
{
        $id=$_POST["id"];

  $name = $_POST["name"];
$dob=$_POST["dob"];
$district = $_POST["district"];
$email = $_POST["email"];
$phno = $_POST["phonenum"];
$bgroup = $_POST["bloodgroup"];
$pass = $_POST["password"];
$uname = $_POST["username"];
$gen = $_POST["gender"];

  

$ins="UPDATE donor SET name='$name',dob='$dob',district='$district',email='$email',phoneno='$phno',bgroup='$bgroup',username='$uname',password='$pass',gender='$gen' WHERE bid='$id'";

           
                       $result=mysqli_query($con,$ins);
                       if($ins)
                       {
                       	$ee="select id from login where username='$user'";
                       	$eee=mysqli_query($con,$ee);

if(mysqli_num_rows($eee) >0)
        {

            while($row1=mysqli_fetch_array($eee)){
            	$ii=$row1['id'];
                


                       $ss="UPDATE login SET username='$uname',password='$pass' WHERE usertype='donor' and id='$ii'";
                       $result1=mysqli_query($con,$ss);
                       
                       }
                   }
               }

    ?>
 <script type="text/javascript">
            alert("Update Successfully");
            window.location="viewprofile.php";
        </script>
       
<?php
}
?>
