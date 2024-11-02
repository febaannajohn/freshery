<?php
include("config.php");
if(isset($_POST['submit']))
{
 $productname=$_POST['productname'];
 $price=$_POST['price'];
 $description=$_POST['description'];
 $image=$_FILES['image']['name'];
 $tmp = $_FILES['image']['tmp_name'];
 $cat = $_POST['cat'];
 move_uploaded_file($tmp,"img/".$image);
 $sql="INSERT INTO `tbl_addproduct` (`productname`,`price`,`description`,`fileupload`,`category`) VALUES ('$productname','$price','$description','$image','$cat')";
 if(mysqli_query($con,$sql))
 {
    header("location:viewproduct.php");
 }
 else
 {
    echo"error";
 }
}

?>