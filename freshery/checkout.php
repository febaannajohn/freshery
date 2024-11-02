<?php
include("header.php")
?>
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
            <div class="container">
                <h1 class="pt-5">
                    Checkout
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
            </div>
        </div>
    </div>

    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <h5 class="mb-3">BILLING DETAILS</h5>
                    <!-- Bill Detail of the Page -->
                    <form action="checkoutaction.php" class="bill-detail" method="post">
                        <fieldset>
                            <div class="form-group row">
                                <div class="col">
                                    <input class="form-control" placeholder="Name" type="text" required name="name"  pattern="[a-zA-Z\s]*">
                                </div>

                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" type="email" required name="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Phone Number" type="tel" required name="phone" pattern="[6789]{1}[0-9]{9}" title="Enter Valid Phone Number">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Address" rows="5" required name="address"></textarea>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Postcode / Zip" type="text" required name="pincode" maxlength="6" pattern="[1-9][0-9]{5}">
                            </div>

                        </fieldset>

                        <!-- Bill Detail of the Page end -->
                </div>

                <div class="col-xs-12 col-sm-5">
                    <div class="holder">
                        <h5 class="mb-3">YOUR ORDER</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Products</th>
                                        <th class="text-right">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sql = mysqli_query($con, "SELECT * FROM tbl_cart WHERE user_id = $user_id ");
                                    while ($row = mysqli_fetch_array($sql)) {
                                        $sql2 = mysqli_query($con, "SELECT * FROM tbl_addproduct WHERE id = {$row['pid']}");
                                        $row2 = mysqli_fetch_array($sql2);  ?>
                                        <tr>
                                            <td>
                                                <?php echo $row2['productname'] ?>
                                            </td>
                                            <td class="text-right">
                                                Rp <?php echo $row['price'] ?>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                                <tfooter>

                                    <?php $pricet = mysqli_query($con, "SELECT SUM(price) as totalprice FROM tbl_cart WHERE user_id = $user_id ");
                                    $rowprice = mysqli_fetch_array($pricet); ?>

                                    <tr>
                                        <td>
                                            <strong>ORDER TOTAL</strong>
                                        </td>
                                        <td class="text-right">
                                            <strong>Rp <?php echo $rowprice['totalprice'] ?></strong>
                                            <input type="hidden" value="<?php echo $rowprice['totalprice'] ?>" name="totalprice">
                                        </td>
                                    </tr>
                                </tfooter>
                            </table>
                        </div>



                    </div>

                   <button class="btn btn-primary float-right">PROCEED TO CHECKOUT <i class="fa fa-check"></i></button> 
                    <div class="clearfix">
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>

<?php
include("footer.php");
?>