<?php
include("config.php");
$id = $_GET['id'];

$sql = "DELETE FROM `tbl_category` WHERE `id`='$id'";
if(mysqli_query($con,$sql))
 {
    header("location:viewcategory.php");
 }
 else
 {
    echo"error";
 }

?>