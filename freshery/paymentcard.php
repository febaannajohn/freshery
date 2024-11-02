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
                    
                </div>

            </div>
        </nav>
    </div>






<?php
$user_id = $_SESSION['id'];
$order_id = $_GET['order_id'];


  $sql = mysqli_query($con,"SELECT * FROM tbl_order  WHERE id = $order_id ");  
  $rowprice = mysqli_fetch_array($sql);

?>
    <style>

    
       
        .a1{
            margin-left: 100px;
            margin-right: 100px;
        }

       

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: maroon;
        }

        .payment-form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            background-color: #f4f4f4;
        }

        .payment-field {
            width: 48%;
            margin-bottom: 20px;
        }

        .payment-field label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .payment-field input[type="text"],
        .payment-field input[type="number"],
        .payment-field input[type="password"],
        .payment-field select {
            width: 100%;
            padding: 10px;
            border: 1px solid #555;
            border-radius: 5px;
        }

        form{
            border:2px solid maroon;
            border-radius: 10px;
            padding: 20px;
        }

       
    </style>
</head>
<section class="a1">
    <div class="container">
        <h1>Debit Card Payment</h1><br><br>
       
        <form class="payment-form" action="payment-action.php?oid=<?php echo $order_id ?>" method="post">
            <div class="payment-field">
                <label for="card-number">Card Number</label>
                <input type="text" id="card-number" name="card-number" required placeholder="Card Number" pattern="[0-9]{16}" maxlength="16">
            </div>
            <div class="payment-field">
                <label for="card-holder">Card Holder</label>
                <input type="text" id="card-holder" name="card-holder" required placeholder="Cardholder Name" pattern="[A-Za-z\s]{1,50}">
            </div>
            <div class="payment-field">
                <label for="expiry-date">Expiry Date</label>
                <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required maxlength="5" pattern="(0[1-9]|1[0-2])\/[0-9]{2}">
            </div>
            <div class="payment-field">
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv" required placeholder="XXX" pattern="[0-9]{3}" maxlength="3">
            </div>
            
            <div class="payment-field">
                <button class="btn btn-primary" type="submit">Proceed to Pay</button>
            </div>
            
        </form><br>
        <h4>Total Amount: <?php echo $rowprice['price'] ?> </h4><br>
    </div>
</section>


<?php

include('footer.php');
?>