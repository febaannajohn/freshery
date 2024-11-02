<?php 
include("header.php")
?>
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Login Page
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>

                    <div class="card card-login mb-5">
                        <div class="card-body">
                            <form action="loginaction.php" method="POST" class="form-horizontal" >
                                
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input name="email" class="form-control" type="email" required="" placeholder="Email">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input name="password" class="form-control" type="password" required="" placeholder="Password">
                                    </div>
                                </div>
                               
                                <div class="form-group row text-center mt-4">
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" class="btn btn-primary btn-block text-uppercase">login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include("footer.php");
?>
