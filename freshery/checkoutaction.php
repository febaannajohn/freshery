<?php
session_start();
include("config.php");
$user_id = $_SESSION['id'];

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$totalprice = $_POST['totalprice'];



$sql="INSERT INTO `tbl_order`( `user_id`, `price`, `name`, `address`, `email`, `phone`, `pincode`, `order_status`, `payment_status`) 
                    VALUES ('$user_id','$totalprice','$name','$address','$email','$phone','$pincode','Pending Approval','Not Paid')";

        if(mysqli_query($con,$sql))
        {
        $order_id = mysqli_insert_id($con) ;

        $sql2 = mysqli_query($con,"SELECT * FROM tbl_cart WHERE user_id = $user_id ");
        
        while($row = mysqli_fetch_array($sql2)){
           
            $pid = $row['pid'];
            $quantity = $row['quantity'];
            $price = $row['price'];
            $sql3 = mysqli_query($con,"INSERT INTO `tbl_orderitems`( `order_id`, `p_id`, `quantity`, `price`) 
                                        VALUES ('$order_id','$pid','$quantity','$price')");

          


        }
        
        $sql6 = mysqli_query($con,"DELETE FROM tbl_cart WHERE user_id = $user_id");
        
        header("location:paymentcard.php?order_id=$order_id");
        }
        else
        {
            echo "Error";
        }
 
?>








