<?php include("header.php")
?>

<style>
  .btn {
    margin: 2px;
  }
</style>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>View Orders</h1>

  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">View Orders</h5>
            <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Order ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Price</th>
                  <th scope="col">Order Status</th>
                  <th scope="col">Payment Status</th>
                  <th scope="col">View</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT * FROM `tbl_order`";
                $res = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($res)) {
                ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['order_status'] ?></td>
                    <td><?php echo $row['payment_status'] ?></td>
                    <td><a href="viewordersingle.php?oid=<?php echo $row['id'] ?>" class="btn btn-warning">View</a></td>
                    <?php if ($row['order_status'] == "Approved") { ?>
                      <td><a class="btn btn-success">Approved</a>
                        <a href="cancelorder.php?oid=<?php echo $row['id'] ?>" class="btn btn-danger">Cancel</a>
                      </td>
                    <?php } else if ($row['order_status'] == "Cancelled") { ?>
                      <td><a class="btn btn-danger">Cancelled</a></td>
                    <?php } else { ?>

                      <td><a href="approveorder.php?oid=<?php echo $row['id'] ?>" class="btn btn-success">Approve</a>
                        <a href="cancelorder.php?oid=<?php echo $row['id'] ?>" class="btn btn-danger">Cancel</a>
                      </td>

                    <?php
                    }
                    ?>

                  </tr>
                <?php
                }

                ?>


              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
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