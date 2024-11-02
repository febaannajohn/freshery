<?php
include("admin/config.php");
if(isset($_POST['submit']))
{
 $fname=$_POST['fname'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $uname=$_POST['uname'];
 $password=$_POST['password'];

 $sql="INSERT INTO `tbl_register`(`fname`,`email`,`phone`,`uname`,`password`) 
 VALUES ('$fname','$email','$phone','$uname','$password')";
 if(mysqli_query($con,$sql))
 {
    header("location:index.php");
 }
 else
 {
    echo"error";
 }
}

?>