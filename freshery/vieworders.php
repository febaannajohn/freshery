<?php 
include("header.php");
$user_id = $_SESSION['id'];
?>
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


        

        <section id="cart">
        <?php  $sql = mysqli_query($con,"SELECT * FROM tbl_order WHERE user_id = $user_id ");
    $count=mysqli_num_rows($sql);
    if ($count==0){ ?>
    <div class="container">
        <h2 style="text-align:center;color:black">No Orders</h2>
        </div>
        <?php } else  { ?>
           
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Order ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Price</th>
                                    <th>Order Status</th>
                                    <th>Payment Status</th>
                                    <th>View</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($row = mysqli_fetch_array($sql)) { ?>
                    <tr>
                        <td id="product-name-1"><?php echo $row['id'] ?></td>
                        <td id="price-1"><?php echo $row['name']  ?></td>

                        <td id="total-price-1"><?php echo $row['address'] ?></td>
                        <td id="total-price-1">₹ <?php echo $row['price'] ?></td>
                        <td id="total-price-1"><?php echo $row['order_status'] ?></td>
                        <td id="total-price-1"><?php echo $row['payment_status'] ?></td>
                        <td  class="cen">
                            <a href="viewordersingle.php?oid=<?php echo $row['id'] ?>"><button class="btn btn-success">View</button></a>
                        </td>
                        <td  class="cen">
                            <?php if($row['order_status']=="Cancelled"){ ?>
                            <a><button class="btn btn-danger">Cancelled</button></a>
<?php } else {  ?>
                            <a href="cancelorder.php?oid=<?php echo $row['id'] ?>"><button class="btn btn-danger">Cancel</button></a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col">
                        <a href="shop.php" class="btn btn-default">Continue Shopping</a>
                    </div>
                    
                </div>
            </div>
            <?php }  ?>
        </section>
    </div>
   
<?php
include("footer.php");
?>
