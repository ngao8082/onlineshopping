
<?php
include_once("includes/db.php");
if (!isset($_SESSION['passw'])) {
    include_once("login.php");
  }else{
    
    while (isset($_GET['edituser'])) {
      $proidentty=$_GET['edituser'];
      $selctusers="select * from admin_table where adm_id='$proidentty'";
      $runseusers=mysqli_query($conn,$selctusers);
      $fetrunselctuser=mysqli_fetch_array($runseusers);
      $adm_name=$fetrunselctuser['adm_name'];
      $adm_email=$fetrunselctuser['adm_email'];
      $adm_pass=$fetrunselctuser['adm_pass'];
      $adm_image=$fetrunselctuser['adm_image'];
      $adm_country=$fetrunselctuser['adm_country'];
      $adm_about=$fetrunselctuser['adm_about'];
      $adm_contact=$fetrunselctuser['adm_contact'];
      $adm_job=$fetrunselctuser['adm_job'];
    break;
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb" style="margin-top:5px;">
                <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Dashboard</li>
                <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Edit User</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="jumbotron jumbotron-fluid"
                style="padding-top:25px;border-radius:4px;padding-bottom:2px;padding-left:25px;padding-right:25px">
                <center>
                    <h4>Edit User</h4>
                </center>

                <hr>
                <div class="form">
                    <form action="edituse.php" method="post" enctype="multipart/form-data" style="padding:0; margin:0;">
                        <input type="hidden" name="admn_id" value="<?php echo $proidentty; ?>" class="form-control"
                            id="formProduct_title">
                        <div class="form-group">
                            <h6><label for="formProduct_title">adm name:</label></h6>
                            <input type="text" name="admn_name" value="<?php echo $adm_name; ?>" class="form-control"
                                id="formProduct_title">
                        </div>
                        <div class="form-group">
                            <h6><label for="formProduct_title">adm email:</label></h6>
                            <input type="text" name="admn_email" value="<?php echo $adm_email; ?>" class="form-control"
                                id="formProduct_title">
                        </div>
                        <div class="form-group">
                            <h6><label for="formGroupprod_img1">Admin Image:</label></h6>
                            <input type="file" name="pisa" value="<?php echo $adm_image; ?>" class="form-control"id="formGroupprod_img1" >
                            <img src="admniprofil/<?php echo $adm_image; ?>" class="card-img-top img-fluid img-thumbnail"
                                alt="" style="width:3%;height:6%;">
                        </div>
                        <div class="form-group">
                            <h6><label for="formproduct_price">Admin country:</label></h6>
                            <input type="text" name="admn_country" value="<?php echo $adm_country; ?>"
                                class="form-control" id="formproduct_price">
                        </div>
                        <div class="form-group">
                            <h6><label for="formproduct_keywords">Admin Contact:</label></h6>
                            <input type="text" name="admn_contacts" value="<?php echo $adm_contact; ?>"
                                class="form-control" id="formproduct_keywords">
                        </div>
                        <div class="form-group">
                            <h6><label for="product_desc">Admin Job:</label></h6>
                            <input type="text" name="admn_jobs" value="<?php echo $adm_job; ?>" class="form-control"
                                id="product_desc">
                        </div>
                        <div class="form-group">
                            <h6><label for="product_desc">Admin About:</label></h6>
                            <input type="text" name="admn_about" value="<?php echo $adm_about; ?>"
                                class="form-control" id="product_desc">
                        </div>
                        <center>
                            <button type="submit" name="updaUser" class="btn btn-success">update</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
  }
  
  ?>
