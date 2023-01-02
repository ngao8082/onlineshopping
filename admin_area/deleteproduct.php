<?php
include("includes/db.php");

if (!isset($_SESSION['passw'])) {
  include_once("login.php");
}else{
  while (isset($_GET['deletepro'])) {
    $proidentity=$_GET['deletepro'];
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
      <h6>Are you sure you want to delete product</h6>
            <form action="dle.php" method="post" enctype="multipart/form-data" style="padding:0; margin:0;">
              <div class="form-group">
                <input type="hidden" name="product_title" value="<?php echo $proidentity ?>"  class="form-control" id="formProduct_title"
                  >
              </div>
              <div class="row">
              <div class="col-md-6">
                   <button type="submit" name="detepro" class="btn btn-success">Delete</button>,</div>
                   <div class="col-md-6">
                   <a href="index.php?viewproduct" class="btn btn-danger">Cancel</a>
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