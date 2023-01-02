<?php
include("includes/db.php");

if (!isset($_SESSION['passw'])) {
  include_once("login.php");
}else{
    while (isset($_GET['editslider'])) {
        $slider=$_GET['editslider'];
    break;
    }
    $slectslider="select * from sliders where slider_id='$slider'";
    $runslectslider=mysqli_query($conn,$slectslider);
    $fetchrunselctslider=mysqli_fetch_array($runslectslider);

?>

<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Edit slider</li>
        </ol>

    </div>
</div>
<div class="row">
    <div class="col-md-7 justify-content-center" style="margin-top: 6%; margin-left: 25%;">
        <div class="jumbotron jumbotron-fluid"
            style="padding-top:25px;border-radius:4px;padding-bottom:2px;padding-left:25px;padding-right:25px">
            <div class="row">
            <div class="col-md-1 col-sm-1"><i class="fa fa-pencil" aria-hidden="true"></i></div>
            <div class="col-md-11 col-sm-11"><h6>Edit slider</h6></div>
            </div>
            <hr>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="editsliderhidden" value="<?php echo $fetchrunselctslider['slider_id'] ?>" class="form-control" id="formproduct_price">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <h6><label for="formproduct_price">Slider name:</label></h6>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <input type="text" name="editslidername" value="<?php echo $fetchrunselctslider['slider_name'] ?>" class="form-control" id="formproduct_price"
                                placeholder="Enter slider Title" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <h6><label for="formproduct_price">Slider Url:</label></h6>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <input type="text" name="editsliderurl" value="<?php echo $fetchrunselctslider['slider_url'] ?>" class="form-control" id="formproduct_price"
                                placeholder="are you sure you want to update url" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <h6><label for="formGroupprod_img1">Slider image:</label></h6>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <input type="file" name="editsliderimages" class="form-control" id="formGroupprod_img1" required>
                            <img src="sliderpic/<?php echo $fetchrunselctslider['slider_image']; ?>" class="img-fluid"
                                alt="" style="width:23%;">
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
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <h6><label for="formGroupprod_img1">Cancel:</label></h6>
                        </div>
                        <div class="col-md-9 col-sm-9">
                        <a href="index.php?viewsliders" class="btn btn-danger btn-sm btn-block">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<?php



while(isset($_POST['slidersubmission'])) {
    $editsliderhidden=$_POST['editsliderhidden'];
    $editslidername=$_POST['editslidername'];
    $slideurl=$_POST['editsliderurl'];
    $editslider=$_FILES['editsliderimages']['name'];
    $flieditsliser=$_FILES['editsliderimages']['tmp_name'];
move_uploaded_file($flieditsliser,"sliderpic/$editslider");
    $upadteslider="update sliders set slider_name='$editslidername',slider_image='$editslider',slider_url='$slideurl' where slider_id='$editsliderhidden'";
        $runupadetslider=mysqli_query($conn,$upadteslider);

    if ($upadteslider) {
        echo"<script>alert('slider editted and updated succesfully')</script>";
    echo"<script>window.open('index.php?viewsliders','_self')</script>";
    }else {
    echo"<script>alert('Error occured during submission of the editted  slider')</script>";
    echo"<script>window.open('index.php?viewsliders','_self')</script>";
}
break;
}
}
?>