<?php include("header.php");
?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>View Employee</h1>
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
              <h5 class="card-title">Employee</h5>

              <!-- Table with stripped rows -->
              <table class="table ">
                <thead>
                  <tr>
                  <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    include("config.php");
                    $res=mysqli_query($con,"SELECT * FROM `add employee`");
                    while($row=mysqli_fetch_array($res))
                    {
                        ?>
                        <tr>

                        <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['phonenumber'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><a class="btn btn-warning " href="editemployee.php?id=<?php echo $row['id']?>">UPDATE</a></td>

                            <td><a class="btn btn-danger " href="delemployee.php?id=<?php echo $row['id']?>">DELETE</a></td>
                    </tr>
                            <?php

                     } ?>

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