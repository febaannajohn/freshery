<?php
include("header.php");
$id = $_GET['id'];
$query = mysqli_query($con,"SELECT * FROM tbl_addproduct WHERE id = $id");
$row = mysqli_fetch_array($query);
?> 
<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit Product</h1>
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
          <h5 class="card-title">PRODUCTS</h5>

          <!-- General Form Elements -->
          <form action="updateproduct.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">PRODUCT NAME</label>
              <div class="col-sm-10">
                <input name="productname" type="text" class="form-control" required value="<?php echo $row['productname'] ?>">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">CATEGORY</label>
              <div class="col-sm-10">
              <select class="form-select" name="cat" required>
                <option value="Fish" <?php if($row['category']=="Fish") echo "selected" ?>>Fish</option>
                <option value="Fruit" <?php if($row['category']=="Fruit") echo "selected" ?>>Fruit</option>
                <option value="Vegetable" <?php if($row['category']=="Vegetable") echo "selected" ?>>Vegetable</option>
                <option value="Meat" <?php if($row['category']=="Meat") echo "selected" ?>>Meat</option>
              </select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">PRICE</label>
              <div class="col-sm-10">
                <input name="price"type="number" class="form-control" required value="<?php echo $row['price'] ?>">
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">DESCRIPTION</label>
              <div class="col-sm-10">
                <textarea name="description" type="password" class="form-control" required ><?php echo $row['description'] ?></textarea>
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
              <div class="col-sm-10">
                <input name="image" class="form-control" type="file" id="formFile" accept="image/*">
              </div>
<br><br>
             <div class="row mb-3">
              <div class="col-sm-10">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>
<?php
include("footer.php");
?>

