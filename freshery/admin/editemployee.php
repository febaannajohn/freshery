<?php
include("header.php");
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit Employee</h1>
  <!-- <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Elements</li>
    </ol>
  </nav> -->
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-10">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">EMPLOYEE</h5>

          <!-- General Form Elements -->
          <form action="updateemployee.php?id=<?php echo $_REQUEST['id']?>" method="POST" enctype="multipart/form-data">
          <?php
                    include("config.php");
                    $id = $_GET['id'];
                    $res=mysqli_query($con,"SELECT * FROM `add employee` WHERE `id`='$id'");
                    while($row=mysqli_fetch_array($res))
                    {
                        ?>
          <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">NAME</label>
              <div class="col-sm-10">
                <input name="name" value="<?php echo $row['name'];?>" type="text" class="form-control" required>
              </div>
            </div>


            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">PHONE NUMBER</label>
              <div class="col-sm-10">
                <input name="phonenumber" value="<?php echo $row['phonenumber'];?>" type="text" class="form-control" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">EMAIL</label>
              <div class="col-sm-10">
                <input name="email" value="<?php echo $row['email'];?>" type="email" class="form-control" required>
              </div>
            </div>

             <div class="row mb-3">

              <div class="col-sm-10">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
<?php
                    }
                    ?>
          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>
<?php
include("footer.php");
?>

