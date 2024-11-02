<?php
include("config.php");
$oid = $_GET['oid'];



$query = "UPDATE `tbl_order` SET `payment_status` = 'Paid' WHERE `id` = '$oid';";

if(mysqli_query($con,$query))
{
    header("location:paymentsuccess.php");
}
else{
    echo "Error";
}



?>