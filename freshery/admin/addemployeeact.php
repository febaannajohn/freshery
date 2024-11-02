<?php
include("config.php");
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $phonenumber=$_POST['phonenumber'];
 $email=$_POST['email'];
 
 $sql="INSERT INTO `add employee` (`name`,`phonenumber`,`email`) VALUES ('$name','$phonenumber','$email')";
 if(mysqli_query($con,$sql))
 {
    header("location:viewaddemployee.php");
 }
 else
 {
    echo"error";
 }
}

?>