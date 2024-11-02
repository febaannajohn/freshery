<?php
include("header.php")
?>


<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
            <div class="container">
                <h1 class="pt-5">
                    Shop
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
            </div>
        </div>
    </div>


    <?php include("catheader.php") ?>



    <section id="vegetables" class="gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Vegetables</h2>
                    <div class="product-carousel owl-carousel">

                        <?php $sqlveg = mysqli_query($con, "SELECT * FROM `tbl_addproduct` WHERE `category` = 'Vegetable'");
                        while($veg=mysqli_fetch_array($sqlveg)){
                        ?>

                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">

                                        
                                    </div>
                                    <img src="admin/img/<?php echo $veg['fileupload'] ?>" alt="Card image" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="detail-product.php?id=<?php echo $veg['id'] ?>"><?php echo $veg['productname'] ?></a>
                                    </h4>
                                   
                                    <div class="card-price">
                                        <span class="reguler">Rp. <?php echo $veg['price'] ?></span>
                                        
                                    </div>
                                    <?php
                                    if (isset($_SESSION['id'])) { ?>
                                    <a href="cartaction.php?pid=<?php echo $veg['id'] ?>" class="btn btn-block btn-primary">
                                        Add to Cart
                                    </a>
                                    <?php } else {echo "Login to Buy" ;} ?>

                                </div>
                            </div>
                        </div>

                        <?php } ?>


                       
                       
                        
                        <!-- <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">

                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="assets/img/fruits.jpg" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="detail-product.html">Product Title</a>
                                    </h4>
                                    <div class="card-price">
                                        <span class="reguler">Rp. 300.000</span>
                                        <span class="reguler">Rp. 200.000</span>
                                    </div>
                                    <a href="detail-product.html" class="btn btn-block btn-primary">
                                        Add to Cart
                                    </a>

                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="meats">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Meats</h2>
                    <div class="product-carousel owl-carousel">

                        <?php $sqlmeat = mysqli_query($con, "SELECT * FROM `tbl_addproduct` WHERE `category` = 'Meat'");
                        while($meat=mysqli_fetch_array($sqlmeat)){
                        ?>

                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">

                                        
                                    </div>
                                    <img src="admin/img/<?php echo $meat['fileupload'] ?>" alt="Card image" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="detail-product.php?id=<?php echo $meat['id'] ?>"><?php echo $meat['productname'] ?></a>
                                    </h4>
                                   
                                    <div class="card-price">
                                        <span class="reguler">Rp. <?php echo $meat['price'] ?></span>
                                        
                                    </div>
                                    <?php
                                    if (isset($_SESSION['id'])) { ?>
                                    <a href="cartaction.php?pid=<?php echo $meat['id'] ?>" class="btn btn-block btn-primary">
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
        </div>
    </section>

    <section id="fishes" class="gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Fishes</h2>
                    <div class="product-carousel owl-carousel">

                        <?php $sqlfish = mysqli_query($con, "SELECT * FROM `tbl_addproduct` WHERE `category` = 'Fish'");
                        while($fish=mysqli_fetch_array($sqlfish)){
                        ?>

                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">

                                        
                                    </div>
                                    <img src="admin/img/<?php echo $fish['fileupload'] ?>" alt="Card image" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="detail-product.php?id=<?php echo $fish['id'] ?>"><?php echo $fish['productname'] ?></a>
                                    </h4>
                                   
                                    <div class="card-price">
                                        <span class="reguler">Rp. <?php echo $fish['price'] ?></span>
                                        
                                    </div>
                                    <?php
                                    if (isset($_SESSION['id'])) { ?>
                                    <a href="cartaction.php?pid=<?php echo $fish['id'] ?>" class="btn btn-block btn-primary">
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

    <section id="fruits">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Fruits</h2>
                    <div class="product-carousel owl-carousel">

                        <?php $sqlfruit = mysqli_query($con, "SELECT * FROM `tbl_addproduct` WHERE `category` = 'Fruit'");
                        while($fruit=mysqli_fetch_array($sqlfruit)){
                        ?>

                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">

                                        
                                    </div>
                                    <img src="admin/img/<?php echo $fruit['fileupload'] ?>" alt="Card image" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="detail-product.php?id=<?php echo $fruit['id'] ?>"><?php echo $fruit['productname'] ?></a>
                                    </h4>
                                   
                                    <div class="card-price">
                                        <span class="reguler">Rp. <?php echo $fruit['price'] ?></span>
                                        
                                    </div>
                                    <?php
                                    if (isset($_SESSION['id'])) { ?>
                                    <a href="cartaction.php?pid=<?php echo $fruit['id'] ?>" class="btn btn-block btn-primary">
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