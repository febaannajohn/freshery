<?php
include("config.php");
if(isset($_POST['submit']))
{
 $id = $_GET['id'];
 $name=$_POST['name'];
 $phonenumber=$_POST['phonenumber'];
 $email=$_POST['email'];
 
 $sql="UPDATE `add employee` SET `name`='$name',`phonenumber`='$phonenumber',
 `email`='$email' WHERE `id`='$id'";
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