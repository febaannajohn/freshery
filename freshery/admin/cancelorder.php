<?php
include("config.php");
$oid = $_GET['oid'];

$query = mysqli_query($con,"SELECT * FROM `tbl_order` WHERE `id` = '$oid'");
$row = mysqli_fetch_array($query);

if($row['payment_status']=="Paid"){
    $query2 = "UPDATE `tbl_order` SET `order_status` = 'Cancelled' , `payment_status` = 'Refunded' WHERE `id` = '$oid'";

    }else{
        $query2 = "UPDATE `tbl_order` SET `order_status` = 'Cancelled' WHERE `id` = '$oid'";
    }


if(mysqli_query($con,$query2))
{


    header("location:vieworders.php");
}
else{
    echo "Error";
}



?>