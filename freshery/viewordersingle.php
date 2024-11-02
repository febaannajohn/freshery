<?php
include("header.php");
include("config.php");
$user_id = $_SESSION['id'];
$order_id = $_GET['oid'];

$sql = mysqli_query($con, "SELECT * FROM tbl_order WHERE id = $order_id ");
$row = mysqli_fetch_array($sql);

?>
<style>




    .a1 {
        margin-top: 100px;
        margin-left: 100px;
        margin-right: 100px;
        color: black;
    }



    .product {
        display: flex;
        margin-bottom: 20px;
    }

    .product div {
        margin-top: 10px;
    }

    .product img {
        width: 150px;
        margin-right: 10px;
        height: auto;
        border: 1px solid grey;

    }

    .other {
        border: 1px solid grey;
        border-radius: 10px;
        padding: 20px;
    }

    .other div {
        margin-top: 10px;

    }

    .a5 {
        display: flex;
        flex-wrap: wrap;
        gap: 50px;
    }
</style>


<div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Your Orders
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                </div>
            </div>
        </div>

<section class="a1">
    <h1>Order ID: <?php echo $row['id'] ?></h1><br><br>


    <div class="container">
        <div class="details">
            <div class="a5">
                <?php $sql2 = mysqli_query($con, "SELECT * FROM tbl_orderitems WHERE order_id = $order_id ");
                while ($rows = mysqli_fetch_array($sql2)) {
                    $sql3 = mysqli_query($con, "SELECT * FROM tbl_addproduct WHERE id = {$rows['p_id']}");
                    $pro = mysqli_fetch_array($sql3); ?>
                    <div class="product">
                        <div class="flex">
                            <img src="admin/img/<?php echo $pro['fileupload']; ?>" alt="Image">
                        </div>
                        <div class="flex2">
                            <div>Product Name: <?php echo $pro['productname']; ?> </div>
                            <div>Quantity: <?php echo $rows['quantity']; ?>Kg</div>
                            <div>Price: ₹ <?php echo $rows['price']; ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="other">
                <div>Name: &nbsp; <?php echo $row['name']; ?> </div>
                <div>Email:&nbsp; <?php echo $row['email']; ?> </div>
                <div>Phone: &nbsp; <?php echo $row['phone']; ?> </div>
                <div>Address:&nbsp; <?php echo $row['address']; ?> </div>
                <div>Pincode: &nbsp; <?php echo $row['pincode']; ?> </div>
                <br>
                <div>Order Status:&nbsp; <?php echo $row['order_status']; ?> </div>
                <div>Payment Status: &nbsp; <?php echo $row['payment_status']; ?> </div>
                <br>
                <div>Total Price:  &nbsp; ₹ <?php echo $row['price']; ?> </div>

            </div>
        </div>
    </div>







</section>

<br><br>

<?php
include("footer.php")
?>