<?php
include("config.php");

$cid = $_GET['cid'];

$sql="DELETE FROM `tbl_cart` WHERE `id`= '$cid' ";


        if(mysqli_query($con,$sql))
        {
        header("location:cart.php");
        }
        else
        {
            echo "error";
        }
   
?>








