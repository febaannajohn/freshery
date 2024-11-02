<?php 
include("header.php");
$id  =$_GET['id'];
$sql = mysqli_query($con,"SELECT * FROM tbl_addproduct WHERE id = $id");
$row = mysqli_fetch_array($sql);
?>
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                </div>
            </div>
        </div>
        <div class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="slider-zoom">
                            <a href="admin/img/<?php echo $row['fileupload'] ?>" class="cloud-zoom" rel="transparentImage: 'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==', useWrapper: false, showTitle: false, zoomWidth:'500', zoomHeight:'500', adjustY:0, adjustX:10" id="cloudZoom">
                                <img alt="Detail Zoom thumbs image" src="admin/img/<?php echo $row['fileupload'] ?>" style="width: 80%;">
                            </a>
                        </div>

                        

                    </div>
                    <div class="col-sm-6">
                        <p>
                            <strong style="font-size: large;"><?php echo $row['productname'] ?></strong><br>
                            
                        </p>
                        <p>
                            <strong>Overview</strong><br>
                            
                            <?php echo $row['description'] ?>
                        </p>
                        <p>
                            <strong>Category</strong><br>
                            
                            <?php echo $row['category'] ?>
                        </p>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <p>
                                    <strong>Price</strong><br>
                                   
                                    <span class="price">Rp <?php echo $row['price'] ?></span>
                                </p>
                            </div>
                            
                        </div>
                       
                        


                                    <?php
                                    if (isset($_SESSION['id'])) { ?>
                        <a href="cartaction.php?pid=<?php echo $row['id'] ?>"><button class="mt-3 btn btn-primary btn-lg">
                            <i class="fa fa-shopping-basket"></i> Add to Cart
                        </button></a>
                        <?php } else {echo "Login to Buy" ;} ?>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    
<?php
include("footer.php");
?>
