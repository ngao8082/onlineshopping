<?php

include_once("includes/db.php");
if (!isset($_SESSION['passw'])) {
    include_once("login.php");
  }else{

?>

<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Add slider</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-7 justify-content-center" style="margin-top: 6%; margin-left: 25%;">
        <div class="jumbotron jumbotron-fluid"
            style="padding-top:25px;border-radius:4px;padding-bottom:2px;padding-left:25px;padding-right:25px">
            <div class="row">
            <div class="col-md-1 col-sm-1"><i class="fab fa-image    "></i></div>
            <div class="col-md-11 col-sm-11"><h6> Add slider</h6></div>
            </div>
            <hr>
            <form action="slideraddition.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <h6><label for="formproduct_price">Slider name:</label></h6>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <input type="text" name="slidername" class="form-control" id="formproduct_price"
                                placeholder="Enter slider Title" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <h6><label for="formproduct_price">Slider name:</label></h6>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <input type="text" name="sliderurl" class="form-control" id="formproduct_price"
                                placeholder="Enter slider url" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <h6><label for="formGroupprod_img1">Slider image:</label></h6>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <input type="file" name="sliderimages" class="form-control" id="formGroupprod_img1" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <h6><label for="formGroupprod_img1">Submit:</label></h6>
                        </div>
                        <div class="col-md-9 col-sm-9">
                        <button type="submit" name="slidersubmission" class="btn btn-primary btn-sm btn-block">submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<?php
  }
?>