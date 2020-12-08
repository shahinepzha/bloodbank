<?php
require("connect.php");
$del = $_GET['id'];
$qq=mysqli_query($con,"select * from request where bid='$del'");
if(mysqli_num_rows($qq) >0)
        {

            while($row1=mysqli_fetch_array($qq))
            	{
            		$a=$row1[8];
            
if($qq)
{
$query1 = mysqli_query($con,"delete from request where bid='$del'");

}
	}
            }
header("location:viewrequest.php");
?>
