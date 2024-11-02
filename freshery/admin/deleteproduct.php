<?php
include("config.php");
$id = $_GET['id'];

$sql = "DELETE FROM `tbl_addproduct` WHERE `id`='$id'";
if(mysqli_query($con,$sql))
 {
    header("location:viewproduct.php");
 }
 else
 {
    echo"error";
 }

?>