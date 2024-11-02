<?php 
include("header.php");
include("admin/config.php");
if(!isset($_GET['cat'])){
    echo '<script> window.location = "index.php"</script>';
}
$cat = $_GET['cat'];
$sql = "SELECT * FROM `tbl_addproduct` WHERE `category`='$cat'";
$res = mysqli_query($con, $sql);
?>
    <div id="page-content" class="page-content">
    <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Shopping Page
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                </div>
            </div>
        </div>

       <?php include("catheader.php")?>

       

       <section id="fruits" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title"><?php echo strtoupper($cat)?></h2>
                <div class="row">
                    <?php while($row = mysqli_fetch_array($res)){ ?>
                        <div class="col-md-4">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <!-- Add badge content if needed -->
                                    </div>
                                    <img src="admin/img/<?php echo $row['fileupload']?>" alt="Card image" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="detail-product.php?id=<?php echo $row['id']?>"><?php echo $row['productname']?></a>
                                    </h4>
                                    <div class="card-price">
                                        <span class="reguler">Rp. <?php echo $row['price']?></span>
                                    </div>
                                    <?php
                                    if (isset($_SESSION['id'])) { ?>
                                    <a href="cartaction.php?pid=<?php echo $row['id'] ?>" class="btn btn-block btn-primary">
                                        Add to Cart
                                    </a>
                                    <?php } else {echo "Login to Buy" ;} ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

    </div>
   
<?php
include("footer.php");
?>

