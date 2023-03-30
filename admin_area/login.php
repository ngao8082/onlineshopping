

<head>
    <title>Admni panel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link  rel="stylesheet" href="fontawesome/fontawesome.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body class="bg-info">
<center>
    <form class="col-md-4" id="fo" method="post" action="loginvalidate.php" enctype="multipart/form-data">
    <div class="form-group row justify-content-center">
        
        <h3 id="adm"><i class="fa fa-user text-danger" aria-hidden="true" id="adm"></i>Admni log in</h3>
    </div>
    <hr>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" name="adm_name" class="form-control" id="inputEmail3" placeholder="Name">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="password" name="passw" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        
        
        <div class="form-group row">
        
            <div class="col-sm-12">
            <center>
                <button type="submit" name="login" class="btn btn-success"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</button>
            </center>
            </div>
            
        </div>
    </form>
    
    </center>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>