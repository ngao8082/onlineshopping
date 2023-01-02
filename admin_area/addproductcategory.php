<?php
include_once("includes/db.php");
if (!isset($_SESSION['passw'])) {
    include_once("login.php");
  }else{
 while(isset($_POST['productsubmission'])) {
     $producttitle=$_POST['producttitle'];
     $productdescription=$_POST['productdescription'];
     $insertproductcategory="insert into product_categories (p_cat_title,p_cat_desc) values ('$producttitle','$productdescription')";
     $runinsertproductcategory=mysqli_query($conn,$insertproductcategory);
     if ($runinsertproductcategory) {
         echo"<script>alert($runinsertproductcategory)</script>";
         echo"<script>alert('product category added successfully')</script>";
         echo"<script>window.open('index.php?viewproductcategory','_self')</script>";
     }else {
        echo"<script>alert('product category has not been added')</script>";
        echo"<script>window.open('index.php?viewproductcategory','_self')</script>";
     }
    break;
 }

?>



<div class="row">
    <div class="col-md-12 col-sm-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <i class="fa fa-gamepad" aria-hidden="true"></i>Dashboard</li>
            <li class="breadcrumb-item active">Add product category</li>
        </ol>
    </div>
</div>

<center>
    <div class="col-md-8 col-sm-8">
        <div class="jumbotron bg-secondary" style="padding-top:1%;">
            <h3 style="padding-top:4%;"><i class="fa fa-tag" aria-hidden="true"></i>Add product category</h3>
            <hr class="my-2">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <h6><label for="formGroupExampleInput">product category Title</label></h6>
                    <input type="text" class="form-control" name="producttitle" id="formGroupExampleInput"
                        placeholder="product category Title">
                </div>
                <div class="form-group">
                    <h6><label for="formGroupExampleInput2">Product description</label></h6>
                    <textarea type="text" class="form-control" name="productdescription" id="formGroupExampleInput2"
                        rows="4"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6"><a href="" class="btn btn-danger btn-sm text-light"><h6>Cancel</h6></a></div>
                    <div class="col-md-6 col-sm-6"><button type="submit" name="productsubmission" class="btn btn-success btn-sm text-light"><h6>Add product category</h6></button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</center>
<?php
  }

?>
