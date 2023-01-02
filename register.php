<?php
include("includes/head.php");

?>
<div class="container">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Home</li>
        <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Register</li>
    </ul>
    <div class="row">
        <div class="col-md-3 col-sm-3">
            <?php
include("includes/sidebar.php")
?>
        </div>
        <div class="col-md-9 col-sm-9">
            <div class="jumbotron jumbotron-fluid"
                style="padding-top:50px;border-radius:4px;padding-bottom:7px;padding-right:0px;">
                <center>
                    <h4>Register Here:</h4>
                </center>
                <form action="reg.php" method="post" style="padding:15px 15px;" enctype="multipart/form-data">

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-4">
                                <h6><label for="formGroupExampleLastName">Your Name:</label></h6>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="cusname" class="form-control" id="formGroupExampleLastName"
                                    placeholder="Enter name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-4">
                                <h6><label for="passwordLastName">Your Password:</label></h6>
                            </div>
                            <div class="col-md-8">
                                <input type="password" name="pass" class="form-control" id="passwordLastName"
                                    placeholder="Enter Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-4">
                                <h6><label for="confirmpassLastName">Confirm your Password:</label></h6>
                            </div>
                            <div class="col-md-8">
                                <input type="password" name="confirmpass" class="form-control" id="confirmpassLastName"
                                    placeholder="Enter Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-4">
                                <h6><label for="formGroupmyemail">Your Email:</label></h6>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="myemail" class="form-control" id="formGroupmyemail"
                                    placeholder="Enter Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-4">
                                <h6><label for="cityExampleInput2">Your City:</label></h6>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="city" class="form-control" id="cityExampleInput2"
                                    placeholder="In short form show your subject">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-4">
                                <h6><label for="formGroupExamplecontact">Your contact:</label></h6>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="contact" class="form-control" id="formGroupExamplecontact"
                                    placeholder="Enter telephone">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-4">
                                <h6><label for="formGroupaddress">Your Address:</label></h6>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="address" class="form-control" id="formGroupaddress"
                                    placeholder="Enter Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <h6><label for="countryExampleInput2">Your Country:</label></h6>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="country" class="form-control" id="countryExampleInput2"
                                        placeholder="Enter your Country">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                        <div class="form-row">
                            <div class="col-md-8">
                                <h6><label for="mga">Profile Picture:</label></h6>
                            </div>
                            <div class="col-md-4">
                                <input type="file" name="profilepic" id="imga">
                            </div>
                            </div>
                        </div>
                        <center>
                            <div class="form col justify-content-center">
                                <button type="submit" name="submt" class="btn btn-success btn-sm">Register</button>
                            </div>
                        </center>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
<?php
        include("footer.php")
        ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>