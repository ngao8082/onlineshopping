<?php
include_once("includes/db.php");
if (!isset($_SESSION['passw'])) {
    include_once("login.php");
  }else{
      while (isset($_GET['editproductcategory'])) {
          $procatid=$_GET['editproductcategory'];
      break;
      }
    $selfrom="select * from product_categories where p_cat_id= '$procatid'";
    $runselfrom=mysqli_query($conn,$selfrom);
 while($fetchrunselfrom=mysqli_fetch_array($runselfrom)){
     
 break;
 }
 
?>



<div class="row">
    <div class="col-md-12 col-sm-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <i class="fa fa-gamepad" aria-hidden="true"></i>Dashboard</li>
            <li class="breadcrumb-item active">Edit product category</li>
        </ol>
    </div>
</div>

<center>
    <div class="col-md-8 col-sm-8">
        <div class="jumbotron bg-secondary" style="padding-top:1%;">
            <h3 style="padding-top:4%;"><i class="fa fa-tag" aria-hidden="true"></i>Edit product category</h3>
            <hr class="my-2">
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="produhidden" value="<?php echo $procatid?>" id="formGroupExampleInput">
                <div class="form-group">
                    <h6><label for="formGroupExampleInput">product category Title</label></h6>
                    <input type="text" class="form-control" name="producttitle" value="<?php echo $fetchrunselfrom['p_cat_title']?>" id="formGroupExampleInput"
                        placeholder="product category Title">
                </div>
                <div class="form-group ">
                    <h6><label for="formGroupExampleInput2">Product description</label></h6>
                    <input type="textarea" class="form-control row-md-4" name="productdescription" value="<?php echo $fetchrunselfrom['p_cat_desc']?>" id="formGroupExampleInput2"
                        rows="4">
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6"><a href="" class="btn btn-danger btn-sm text-light"><h6>Cancel</h6></a></div>
                    <div class="col-md-6 col-sm-6"><button type="submit" name="editsubmission" class="btn btn-success btn-sm text-light"><h6>Update</h6></button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</center>
<?php



while(isset($_POST['editsubmission'])) {
    $produtctile=$_POST['producttitle'];
    $productdes=$_POST['productdescription'];
    $hiddenidentity=$_POST['produhidden'];
    $updatequery="update product_categories set p_cat_title='$produtctile',p_cat_desc='$productdes' where p_cat_id='$hiddenidentity'";
    $runupdatequery=mysqli_query($conn,$updatequery);
    if ($runupdatequery) {
       echo"<script>alert('updated successfully')</script>";
       echo"<script>window.open('index.php?viewproductcategory','_self')</script>";
    }else {
       echo"<script>alert(' not updated')</script>";
       echo"<script>window.open('index.php?viewproductcategory','_self')</script>";
    }
break;
}
  }

?>