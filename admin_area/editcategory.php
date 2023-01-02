<?php
include_once("includes/db.php");
if (!isset($_SESSION['passw'])) {
    include_once("login.php");
  }else{
      while (isset($_GET['editcategory'])) {
          $procatid=$_GET['editcategory'];
      break;
      }
    $selfrom="select * from categories where cat_id= '$procatid'";
    $runselfrom=mysqli_query($conn,$selfrom);
 while($fetchrunselfrom=mysqli_fetch_array($runselfrom)){
     
 break;
 }
 
?>

890(*)

<div class="row">
    <div class="col-md-12 col-sm-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <i class="fa fa-gamepad" aria-hidden="true"></i>Dashboard</li>
            <li class="breadcrumb-item active">Edit category</li>
        </ol>
    </div>
</div>

<center>
    <div class="col-md-8 col-sm-8">
        <div class="jumbotron bg-secondary" style="padding-top:1%;">
            <h3 style="padding-top:4%;"><i class="fa fa-tag" aria-hidden="true"></i>Edit category</h3>
            <hr class="my-2">
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="cathidden" value="<?php echo $procatid?>" id="formGroupExampleInput">
                <div class="form-group">
                    <h6><label for="formGroupExampleInput">product category Title</label></h6>
                    <input type="text" class="form-control" name="cattitle" value="<?php echo $fetchrunselfrom['cat_title']?>" id="formGroupExampleInput"
                        placeholder="product category Title">
                </div>
                <div class="form-group ">
                    <h6><label for="formGroupExampleInput2">Product description</label></h6>
                    <input type="textarea" class="form-control row-md-4" name="catdescription" value="<?php echo $fetchrunselfrom['cat_desc']?>" id="formGroupExampleInput2"
                        rows="4">
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6"><a href="index.php?viewcategory" class="btn btn-danger btn-sm text-light"><h6>Cancel</h6></a></div>
                    <div class="col-md-6 col-sm-6"><button type="submit" name="cateditsubmission" class="btn btn-success btn-sm text-light"><h6>Add category</h6></button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</center>
<?php


$cattitle=$_POST['cattitle'];
    $catdescription=$_POST['catdescription'];
    $cathiddenidentity=$_POST['cathidden'];
while(isset($_POST['cateditsubmission'])) {
    $updatequery="update categories set cat_title='$cattitle',cat_desc='$catdescription' where cat_id='$cathiddenidentity'";
    $runupdatequery=mysqli_query($conn,$updatequery);
    if ($runupdatequery) {
       echo"<script>alert('category updated successfully')</script>";
       echo"<script>window.open('index.php?viewcategory','_self')</script>";
    }else {
       echo"<script>alert(' not updated')</script>";
       echo"<script>window.open('index.php?viewcategory','_self')</script>";
    }
break;
}
  }

?>