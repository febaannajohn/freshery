<?php 
include("header.php");
$user_id = $_SESSION['id'];
?>
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Your Cart
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                </div>
            </div>
        </div>


        

        <section id="cart">
        <?php  $sql = mysqli_query($con,"SELECT * FROM tbl_cart WHERE user_id = $user_id ");
    $totalpriceall = 0;
    $count=mysqli_num_rows($sql);
    if ($count==0){ ?>
    <div class="container">
        <h2 style="text-align:center;color:black">Your Cart is Empty</h2>
        </div>
        <?php } else  { ?>
           
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="10%"></th>
                                        <th>Products</th>
                                        <th>Price</th>
                                        <th width="15%">Quantity (Kg)</th>
                                        <th>Subtotal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                while($row=mysqli_fetch_array($sql)){
                                $sql2 = mysqli_query($con,"SELECT * FROM tbl_addproduct WHERE id = {$row['pid']}"); 
                                $row2 = mysqli_fetch_array($sql2);
                                $totalprice = $row['price'];
                                $totalpriceall += $totalprice;    ?>
                                    <tr>
                                        <td>
                                            <img src="admin/img/<?php echo $row2['fileupload'] ?>" width="60">
                                        </td>
                                        <td>
                                        <?php echo $row2['productname'] ?><br>
                                        </td>
                                        <td>
                                            Rp <?php echo $row2['price'] ?>
                                        </td>
                                        <td>
                                        <form method="post" action="updatecart.php?cid=<?php echo $row['id'] ?>">
                                        <input type="number" name="quantity" value="<?php  echo $row['quantity'];?>" min="0.5" max="50" step="0.5">
                                        <input type="hidden" name="price" value="<?php echo $row2['price']  ?>">
                                        <input type="submit" value="Update" class="btn btn-danger btn-sm">
                                    </form>
                                        </td>
                                        <td>
                                            Rp <?php  echo $row['price'] ?>
                                        </td>
                                        <td>
                                            <a href="removecart.php?cid=<?php echo $row['id'] ?>" class="text-danger"><i class="fa fa-times"></i></a>
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
                    <div class="col text-right">
                       
                        <div class="clearfix"></div>
                        <h6 class="mt-3">Total: ₹ <?php  echo $totalpriceall ?></h6>
                        <a href="checkout.php" class="btn btn-lg btn-primary">Checkout <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <?php }  ?>
        </section>
    </div>
   
<?php
include("footer.php");
?>
