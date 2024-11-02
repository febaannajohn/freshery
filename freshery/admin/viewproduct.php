<?php include("header.php")
?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>View Products</h1>
      <!-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav> -->
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Products</h5>

              <!-- Table with stripped rows -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    include("config.php");
                    $res=mysqli_query($con,"SELECT * FROM `tbl_addproduct`");
                    while($row=mysqli_fetch_array($res))
                    {
                        ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['productname'];?></td>
                            <td><img src="img/<?php echo $row['fileupload'];?>" alt="Image" width="150px" height="auto"></td>
                            <td><?php echo $row['category'];?></td>
                            <td><?php echo $row['price'];?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><a href="editproduct.php?id=<?php echo $row['id']?>" class="btn btn-warning">Update</a></td>
                            <td><a href="deleteproduct.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                            <?php

                    }?>
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <?php include("footer.php")
  ?>