
<?php 
include("header.php");

$order_id = $_GET['oid'];

$sql = mysqli_query($con, "SELECT * FROM tbl_order WHERE id = $order_id ");
$row = mysqli_fetch_array($sql);

?>
<style>


    h1 {
        color: black;
    }

    .a1 {
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


<main id="main" class="main">
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
                            <img src="img/<?php echo $pro['fileupload']; ?>" alt="Image">
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
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>Admin</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>