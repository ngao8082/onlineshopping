<?php
include("includes/db.php");

if (!isset($_SESSION['passw'])) {
  include_once("login.php");
}else{
  while (isset($_GET['deletepayments'])){
    $proidenty=$_GET['deletepayments'];
  break;
  }
  
    ?>
    
    <center>
<div class="col-md-6">
    <div class="jumbotron jumbotron-fluid"style="padding-top:5px;border-radius:2px;padding-bottom:35px;padding-right:3px;margin-top:2%;"><!--jumbotron jumbotron-fluid-->
      <div class="container-fluid">
      <h4>Deleting product</h4>
           <hr>
      <div class="form">
      <h6>Are you sure you want to delete this order</h6>
            <form action="" method="post" enctype="multipart/form-data" style="padding:0; margin:0;">
              <div class="form-group">
                <input type="hidden" name="deletepa" value="<?php echo $proidenty ?>"  class="form-control" id="formProduct_title"
                  >
              </div>
              <div class="row">
              <div class="col-md-6">
                   <button type="submit" name="detepayments" class="btn btn-success">Delete</button>,</div>
                   <div class="col-md-6">
                   <a href="index.php?viewpayments" class="btn btn-danger">Cancel</a>
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
if (isset($_POST['detepayments'])) {
    $deletepayments=$_POST['deletepa'];
    $delquery="delete from my_order where id='$deletepayments'";
    $rundelquery=mysqli_query($conn,$delquery);
    if ($rundelquery) {
        echo"<script>alert('delete successfully')</script>";
        echo"<script>window.open('index.php?viewpayments','_self')</script>";
    }else {
        echo"<script>alert('not delete')</script>";
        echo"<script>window.open('index.php?viewpayments','_self')</script>";
    }
 }
?>