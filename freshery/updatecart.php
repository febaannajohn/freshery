<?php
include("config.php");


$cid=$_GET['cid'];
$quantity=$_POST['quantity'];
$price = $_POST['price'];
$totalprice= $quantity * $price ;
$sql = "UPDATE `tbl_cart` SET `quantity`='$quantity',`price`='$totalprice' WHERE `id`='$cid' ";

if(mysqli_query($con,$sql)){
    header("location:cart.php");
}else{
    echo "Error";
}

?>