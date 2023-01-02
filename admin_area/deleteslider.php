<?php
include("includes/db.php");

if (!isset($_SESSION['passw'])) {
  include_once("login.php");
}else{
  while (isset($_GET['deleteslider'])) {
    $deleteslideridentity=$_GET['deleteslider'];
    while(isset($_POST['deleteslider'])) {
       $deldeleteslider="delete from sliders where slider_id='$deleteslideridentity'";
       $rundeleteslider=mysqli_query($conn,$deldeleteslider);
       if ($rundeleteslider) {
        echo"<script>alert('delete successfully is it because the category is empty')</script>"; 
        echo"<script>window.open('index.php?viewsliders','_self')</script>";
       }else {
        echo"<script>alert('Not deleted successfully error occurred')</script>"; 
        echo"<script>window.open('index.php?viewsliders','_self')</script>";
       }  
    break;    
    }
  break;
  }
    ?>
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Delete slider</li>
        </ol>

    </div>
</div>
<center>
    <div class="col-md-6">
        <div class="jumbotron jumbotron-fluid"
            style="padding-top:5px;border-radius:2px;padding-bottom:35px;padding-right:3px;margin-top:2%;">
            <!--jumbotron jumbotron-fluid-->
            <div class="container-fluid">
                <h4>Deleting category</h4>
                <hr>
                <div class="form">
                    <h6>Are you sure you want to delete this slider</h6>
                    <form action="" method="post" enctype="multipart/form-data" style="padding:0; margin:0;">
                        <div class="form-group">
                            <input type="hidden" name="cat_title" value="<?php echo $deleteslideridentity ?>"
                                class="form-control" id="formProduct_title">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" name="deleteslider"
                                    class="btn btn-success btn-sm">Delete</button>,</div>
                            <div class="col-md-6">
                                <a href="index.php?viewsliders" class="btn btn-danger btn-sm">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</center>
<?php
}
?>