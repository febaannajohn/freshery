<?php 
include("header.php")
?>
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Register Page
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>

                    <div class="card card-login mb-5">
                        <div class="card-body">
                            <form action="useraction.php" method="POST" class="form-horizontal"  onsubmit="return validateForm();">
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input name="fname" class="form-control" type="text" required="" placeholder="Full Name"  pattern="[a-zA-Z\s]*">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input name="email" class="form-control" type="email" required="" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input name="phone" class="form-control" type="phone" required="" placeholder="Phone" pattern="[6789]{1}[0-9]{9}" title="Enter Valid Phone Number" maxlength="10">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input name="uname" class="form-control" type="text" required="" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input name="password" class="form-control" type="password" required="" placeholder="Password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input  name="cpassword" class="form-control" type="password" required="" placeholder="Confirm Password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="confirm-password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <input id="checkbox0" type="checkbox" name="terms" required>
                                            <label for="checkbox0" class="mb-0">I Agree with <a href="terms.php" class="text-light">Terms & Conditions</a> </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row text-center mt-4">
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" class="btn btn-primary btn-block text-uppercase">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script>
  function validateForm() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm-password").value;

    if (password !== confirmPassword) {
      alert("Passwords do not match.");
      return false; // Prevent form submission
    }

    return true; // Allow form submission
  }
</script>
<?php
include("footer.php");
?>
