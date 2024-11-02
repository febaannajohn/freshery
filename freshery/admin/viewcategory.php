<?php include("header.php")
?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                  <th scope="col">image</th>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">action</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    include("config.php");
                    $res=mysqli_query($con,"SELECT * FROM `tbl_category`");
                    while($row=mysqli_fetch_array($res))
                    {
                        ?>
                        <tr>
                            <td><img src="img/<?php echo $row['file'];?>" width="100px"></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><a class="btn btn-primary btn-sm">UPDATE</a></td>
                            <td><a class="btn btn-danger btn-sm" href="delcat.php?id=<?php echo $row['id']?>">DELETE</a></td>
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