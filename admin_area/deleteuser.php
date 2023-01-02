<?php
include("includes/db.php");

if (!isset($_SESSION['passw'])) {
  include_once("login.php");
}else{
  while (isset($_GET['deleteuser'])){
    $proidenty=$_GET['deleteuser'];
  break;
  }
  
    ?>
    
    <center>
<div class="col-md-6">
    <div class="jumbotron jumbotron-fluid"style="padding-top:5px;border-radius:2px;padding-bottom:35px;padding-right:3px;margin-top:2%;"><!--jumbotron jumbotron-fluid-->
      <div class="container-fluid">
      <h4>You are About to delete user</h4>
           <hr>
      <div class="form">
      <h6>Are you sure you want to delete this user</h6>
            <form action="" method="post" enctype="multipart/form-data" style="padding:0; margin:0;">
              <div class="form-group">
                <input type="hidden" name="deleuser" value="<?php echo $proidenty ?>"  class="form-control" id="formProduct_title"
                  >
              </div>
              <div class="row">
              <div class="col-md-6">
                   <button type="submit" name="deteuser" class="btn btn-success">Delete</button>,</div>
                   <div class="col-md-6">
                   <a href="index.php?viewmyorder" class="btn btn-danger">Cancel</a>
            </div>
              </div>
          </form>
      </div>
      </div>
      </div>
      </div>
      </center>
<?php
if (isset($_POST['deteuser'])) {
    $dleteorder=$_POST['deleuser'];
    $dlequery="delete from admin_table where adm_id='$dleteorder'";
    $rundelequery=mysqli_query($conn,$dlequery);
    if ($rundelequery) {
        echo"<script>alert('deleted successfully')</script>";
        echo"<script>window.open('index.php?viewuser','_self')</script>";
    }else {
        echo"<script>alert('Not deleted though')</script>";
        echo"<script>window.open('index.php?viewuser','_self')</script>";
    }

}
}

?>
