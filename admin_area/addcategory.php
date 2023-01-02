<?php
include_once("includes/db.php");
if (!isset($_SESSION['passw'])) {
    include_once("login.php");
  }else{
 while(isset($_POST['categorysubmission'])) {
     $categorytitle=$_POST['categorytitle'];
     $categorydescription=$_POST['categorydescription'];
     $insertcategory="insert into categories (cat_title,cat_desc) values ('$categorytitle','$categorydescription')";
     $runinsertcategory=mysqli_query($conn,$insertcategory);
     if ($runinsertcategory) {
         echo"<script>alert($runinsertcategory)</script>";
         echo"<script>alert('category added successfully')</script>";
         echo"<script>window.open('index.php?viewcategory','_self')</script>";
     }else {
        echo"<script>alert('category has not been added')</script>";
       //echo"<script>window.open('index.php?viewcategory','_self')</script>";
     }
    break;
 }

?>



<div class="row">
    <div class="col-md-12 col-sm-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <i class="fa fa-gamepad" aria-hidden="true"></i>Dashboard</li>
            <li class="breadcrumb-item active">Add category</li>
        </ol>
    </div>
</div>

<center>
    <div class="col-md-8 col-sm-8">
        <div class="jumbotron bg-secondary" style="padding-top:1%;">
            <h3 style="padding-top:4%;"><i class="fa fa-tag" aria-hidden="true"></i>Add category</h3>
            <hr class="my-2">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <h6><label for="formGroupExampleInput">Category Title</label></h6>
                    <input type="text" class="form-control" name="categorytitle" id="formGroupExampleInput"
                        placeholder="Category Title">
                </div>
                <div class="form-group">
                    <h6><label for="formGroupExampleInput2">Category description</label></h6>
                    <textarea type="text" class="form-control" name="categorydescription" id="formGroupExampleInput2"
                        rows="4"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6"><a href="index.php?viewcategory" class="btn btn-danger btn-sm text-light"><h6>Cancel</h6></a></div>
                    <div class="col-md-6 col-sm-6"><button type="submit" name="categorysubmission" class="btn btn-success btn-sm text-light"><h6>Add category</h6></button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</center>
<?php
  }

?>