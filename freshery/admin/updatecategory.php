<?php
include("config.php");
if(isset($_POST['submit']))
{
 $id = $_GET['id']; 
 $name=$_POST['name'];
 $price=$_POST['price'];
 $description=$_POST['description'];
 $fileupload=$_FILES['image']['name'];
 $tmp = $_FILES['image']['tmp_name'];
 move_uploaded_file($tmp,"img/".$fileupload);
 $sql="UPDATE `tbl_category` SET `name`='$name',`price`='$price',`description`='$description',`file`='$fileupload' WHERE`id`='$id'";
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