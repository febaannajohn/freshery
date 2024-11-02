<?php
include("header.php");
?> 
<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Elements</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Elements</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-10">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">CATEGORY</h5>

          <!-- General Form Elements -->

          <form action="updatecategory.php?id=<?php echo $_REQUEST['id']?>" method="POST" enctype="multipart/form-data">
          <?php
                    include("config.php");
                    $id = $_GET['id'];
                    $res=mysqli_query($con,"SELECT * FROM `tbl_category`");
                    while($row=mysqli_fetch_array($res))
                    {
                        ?>
          <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">NAME</label>
              <div class="col-sm-10">
                <input name="name"value="<?php echo $row['name'];?>" type="text" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">DESCRIPTION</label>
              <div class="col-sm-10">
                <textarea name="description" type="password" class="form-control"></textarea>
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
              <div class="col-sm-10">
                <input name="image" class="form-control" type="file" id="formFile">
              </div>

             <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Submit Button</label>
              <div class="col-sm-10">
                <button name="submit" type="submit" class="btn btn-primary">Submit Form</button>
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

