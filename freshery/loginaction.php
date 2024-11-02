<?php
session_start();
include('admin/config.php');
$reg_email=$_POST['email'];
$reg_password=$_POST['password'];
if($reg_email && $reg_password !=""){
    $sql1="SELECT * FROM `tbl_register` WHERE `email`='$reg_email' AND `password`='$reg_password'";
    $res1=mysqli_query($con,$sql1);
    $row = mysqli_fetch_array($res1);
  
    $count1=mysqli_num_rows($res1);

    if($count1 > 0){
        $_SESSION['id'] = $row['id'];
        $_SESSION['uname'] = $row['uname'];
        header("location:index.php");
    }else if($reg_email && $reg_password !=""){ 
        $sql="SELECT * FROM `tbl_admin` WHERE `email`='$reg_email' AND `password`='$reg_password'";
        $res=mysqli_query($con,$sql);
        $count=mysqli_num_rows($res);
        if($count > 0)
        {
            $_SESSION['Admin'] = "Admin";
            header("location:admin/viewproduct.php");
        
        }else{
            echo"<script> alert('Invalid Email or Password');window.location = 'login.php';</script>";
   
}}else{
    header("location:login.php");
}}

?>