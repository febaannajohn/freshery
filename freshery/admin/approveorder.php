<?php
include("config.php");
$oid = $_GET['oid'];



$query = "UPDATE `tbl_order` SET `order_status` = 'Approved' WHERE `id` = '$oid';";

if(mysqli_query($con,$query))
{
    header("location:vieworders.php");
}
else{
    echo "Error";
}



?>