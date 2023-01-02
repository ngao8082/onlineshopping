<?php
include("includes/db.php");

if (!isset($_SESSION['passw'])) {
  include_once("login.php");
}else{
  while (isset($_GET['deletecategory'])) {
    $categoryidentity=$_GET['deletecategory'];
    while(isset($_POST['detecategory'])) {
       $delcategory="delete from categories where cat_id='$categoryidentity'";
       $rundelproductcategory=mysqli_query($conn,$delcategory);
       echo"<script>alert('delete successfully is it because the category is empty')</script>"; 
       echo"<script>window.open('index.php?viewcategory','_self')</script>";  
    break;    
    }
  break;
  }
    ?>
    
    <center>
<div class="col-md-6">
    <div class="jumbotron jumbotron-fluid"style="padding-top:5px;border-radius:2px;padding-bottom:35px;padding-right:3px;margin-top:2%;"><!--jumbotron jumbotron-fluid-->
      <div class="container-fluid">
      <h4>Deleting category</h4>
           <hr>
      <div class="form">
      <h6>Are you sure you want to delete category</h6>
            <form action="" method="post" enctype="multipart/form-data" style="padding:0; margin:0;">
              <div class="form-group">
                <input type="hidden" name="cat_title" value="<?php echo $categoryidentity ?>"  class="form-control" id="formProduct_title"
                  >
              </div>
              <div class="row">
              <div class="col-md-6">
                   <button type="submit" name="detecategory" class="btn btn-success">Delete</button>,</div>
                   <div class="col-md-6">
                   <a href="index.php?viewcategory" class="btn btn-danger">Cancel</a>
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