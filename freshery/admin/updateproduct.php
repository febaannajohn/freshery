<?php
include("config.php");
if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $cat = $_POST['cat'];


    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp, "img/" . $image);

    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp, "img/" . $image);


        $sql = "UPDATE `tbl_addproduct` SET `productname`='$productname',`price`='$price',`description`='$description',
        `fileupload`='$image',`category`='$cat' WHERE `id` = '$id' ";
    } else {
        $sql = "UPDATE `tbl_addproduct` SET `productname`='$productname',`price`='$price',`description`='$description',
        `category`='$cat' WHERE `id` = '$id' ";
    }


    if (mysqli_query($con, $sql)) {
        header("location:viewproduct.php");
    } else {
        echo "error";
    }
}
