<?php
include("config.php");
$id = $_GET['id'];

$sql = "DELETE FROM `add employee` WHERE `id`='$id'";
if(mysqli_query($con,$sql))
 {
    header("location:viewaddemployee.php");
 }
 else
 {
    echo"error";
 }

?>