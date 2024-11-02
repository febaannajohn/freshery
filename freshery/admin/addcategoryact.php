<?php
include("config.php");
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $price=$_POST['price'];
 $description=$_POST['description'];
 $fileupload=$_FILES['image']['name'];
 $tmp = $_FILES['image']['tmp_name'];
 move_uploaded_file($tmp,"img/".$fileupload);
 $sql="INSERT INTO `tbl_category` (`name`,`price`,`description`,`file`) VALUES ('$name','$price','$description','$fileupload')";
 if(mysqli_query($con,$sql))
 {
    header("location:viewcategory.php");
 }
 else
 {
    echo"error";
 }
}

?>