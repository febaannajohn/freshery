<?php
session_start();
include("config.php");
$user_id = $_SESSION['id'];
$pid = $_GET['pid'];

$price = mysqli_query($con,"SELECT * FROM tbl_addproduct WHERE id = $pid");
$rowprice = mysqli_fetch_array($price);

$pricet = $rowprice['price'];


$ret=mysqli_query($con,"SELECT * FROM `tbl_cart` WHERE `pid`='$pid' AND `user_id`='$user_id'");

$count = mysqli_num_rows($ret);
if ($count > 0) {
    echo "<script>alert('Already Exists');window.location='cart.php'</script>";
}  else{
   

         $sql="INSERT INTO `tbl_cart`( `pid`, `quantity`, `price`, `user_id`) VALUES ('$pid','1','$pricet','$user_id')";
        if(mysqli_query($con,$sql))
        {
        header("location:cart.php");
        }
        else
        {
            echo "error";
        }
    }
?>








