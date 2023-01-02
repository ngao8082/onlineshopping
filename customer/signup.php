<?php

//session_start();

include_once("cdb.php");



?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-6 col-sm-12">
                <center>

                    <div class="jumbotron jumbotron-fluid">
                        <div class="container" style="padding-top:0%;margin-top:0%;">
                            <h3>Login to online shopping</h3>
                            <hr>
                            <p><h5>Welcome to osman online shop where everything is possible</h5></p>
                            <hr>

                            <form action="kuvalida.php" method="post" style="margin-top:5%;" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="usernameEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="username" class="form-control" id="usernameEmail3"
                                            placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="passwo" class="form-control" id="inputPassword3"
                                            placeholder="Enter your password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-md-2"></div>
                                    <div class="col-sm-4 col-md-4"><a href="index.php" class="btn btn-danger">Cancel</a>
                                    </div>
                                    <div class="col-sm-4 col-md-4"><button type="submit" name="subpass" class="btn btn-success"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</button></div>
                                </div>
                        </div>
                        </form>
                        <div class="row" style="margin-top:10%;">
                            <div class="col-sm-12 col-md-12">
                                <p>Forgotten password<a href="myaccount.php?change_password" class=""> click here </a></p>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10%;">
                            <div class="col-sm-12 col-md-12">
                                <p>You have no acccount <a href="../register.php" class="btn btn-info">click here</a></p>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>