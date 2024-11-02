<?php
session_start();
include('config.php');


?>
<!DOCTYPE html>
<html>

<head>
    <title>Freshery | Groceries Organic Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="assets/fonts/sb-bistro/sb-bistro.css" rel="stylesheet" type="text/css">
    <link href="assets/fonts/font-awesome/font-awesome.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/o2system-ui/o2system-ui.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/owl-carousel/owl-carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/cloudzoom/cloudzoom.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/thumbelina/thumbelina.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/bootstrap-touchspin/bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/theme.css">

</head>

<body>
    <div class="page-header">
        <!--=============== Navbar ===============-->
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-transparent" id="page-navigation">
            <div class="container">
                <!-- Navbar Brand -->
                <a href="index.php" class="navbar-brand">
                    <img src="assets/img/logo/logo.png" alt="">
                </a>

                <!-- Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarcollapse">
                    <!-- Navbar Menu -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="shop.php" class="nav-link">Shop</a>
                        </li>
                        <?php if (isset($_SESSION['id'])) { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="avatar-header"><img src="assets/img/logo/avatar.jpg"></div>

                                <?php echo $_SESSION['uname'];  
                            } ?>
                                </a>
                            </li>

                            <?php if (isset($_SESSION['id'])) { 
                                $user_id = $_SESSION['id'];

                                   $sql = mysqli_query($con,"SELECT * FROM tbl_cart WHERE user_id = $user_id ");
                                  $count=mysqli_num_rows($sql);?>
                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-shopping-basket"></i> <span class="badge badge-primary"><?php echo $count ?></span>
                                    </a>

                                    <div class="dropdown-menu shopping-cart">
                                        <ul>
                                            <li>
                                                <div class="drop-title">Your Cart</div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-list">
                                                <?php
                                                while($row=mysqli_fetch_array($sql)){
                                                $sql2 = mysqli_query($con,"SELECT * FROM tbl_addproduct WHERE id = {$row['pid']}"); 
                                                $row2 = mysqli_fetch_array($sql2); ?>
                                                    <div class="media">
                                                        <img class="d-flex mr-3" src="admin/img/<?php echo $row2['fileupload'] ?>" width="60">
                                                        <div class="media-body">
                                                            <h5><a href="javascript:void(0)"><?php echo $row2['productname'] ?></a></h5>
                                                            <p class="price">
                                                                <span>Rp. <?php echo $row2['price'] ?></span>
                                                            </p>
                                                            <p class="text-muted">Qty: <?php echo $row['quantity'] ?>Kg</p>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    
                                                </div>
                                            </li>
                                            <li>
                                                <div class="drop-title d-flex justify-content-between">
                                                    <?php $pricet = mysqli_query($con,"SELECT SUM(price) as totalprice FROM tbl_cart WHERE user_id = $user_id ") ;
                                                    $rowprice = mysqli_fetch_array($pricet); ?>
                                                     <?php if($count > 0){ ?>
                                                    <span>Total:</span>
                                                    <span class="text-primary"><strong>Rp. <?php echo $rowprice['totalprice'] ?></strong></span>
                                                    <?php } ?>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-between pl-3 pr-3 pt-3">
                                                <a href="cart.php" class="btn btn-secondary">View Cart</a>
                                                <?php if($count > 0){ ?>
                                                <a href="checkout.php" class="btn btn-primary">Checkout</a>
                                               <?php } ?>
                                            </li>
                                        </ul>
                                    </div>

                                </li>
                            <?php } ?>
                            <?php
                            if (isset($_SESSION['id'])) { ?>
                                <li class="nav-item">
                                <a href="vieworders.php" class="nav-link">Your Orders</a>
                            </li>
                                <li class="nav-item">
                                    <a href="logout.php" class="nav-link">Log Out</a>
                                </li>

                            <?php
                            } else {
                            ?>


                                <li class="nav-item">
                                    <a href="userregister.php" class="nav-link">Register</a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.php" class="nav-link">Login</a>
                                </li>

                            <?php } ?>
                    </ul>
                </div>

            </div>
        </nav>
    </div>