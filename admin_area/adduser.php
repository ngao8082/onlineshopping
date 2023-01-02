<?php
include("includes/db.php");
if (!isset($_SESSION['passw'])) {
  include_once("login.php");
}else {

?>


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="breadcrumb" style="margin-top:5px;">
          <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Dashboard</li>
          <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Add user to the system</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="jumbotron jumbotron-fluid"
          style="padding-top:25px;border-radius:4px;padding-bottom:2px;padding-left:25px;padding-right:25px">
          <center>
          <h4><i class="fab fa-registered    "></i>Register admnistrator on this point</h4>
          </center>
          
          <hr>
          <div class="form">
            <form action="adduservalidate.php" method="post" enctype="multipart/form-data" style="padding:0; margin:0;">
              <div class="form-group">
                <h6><label for="formProduct_title">Enter admni name:</label></h6>
                <input type="text" name="admni_name"  class="form-control" id="formProduct_title"
                  placeholder="Enter admni name" required>
              </div>
              <div class="form-group">
                <h6><label for="formProduct_title">Enter admni Email:</label></h6>
                <input type="text" name="admni_email"  class="form-control" id="formProduct_title"
                  placeholder="Enter admni Email" required>
              </div>
              <div class="form-group">
                <h6><label for="formGroupprod_img1">Admni image:</label></h6>
                <input  type="file" name="Admin_img" class="form-control" id="formGroupprod_img1" required>
              </div>
          <div class="form-group">
            <h6><label for="formproduct_keywords">Admin password:</label></h6>
            <input type="password" name="admni_password" class="form-control" id="formproduct_keywords"
              placeholder="Enter Admni password" required>
          </div>
          <div class="form-group">
            <h6><label for="formproduct_keywords">Admin confirm password:</label></h6>
            <input type="text" name="confirm_pass" class="form-control" id="formproduct_keywords"
              placeholder="Confirm password" required>
          </div>
         
          <div class="form-group">
            <h6><label for="formproduct_keywords">Admin country:</label></h6>
            <input type="text" name="admni_country" class="form-control" id="formproduct_keywords"
              placeholder="Enter country" required>
          </div>
          <div class="form-group">
            <h6><label for="formproduct_keywords">Admin contact:</label></h6>
            <input type="text" name="admni_contact" class="form-control" id="formproduct_keywords"
              placeholder="Enter admni contact" required>
          </div>
          <div class="form-group">
            <h6><label for="formproduct_keywords">Admin abouts:</label></h6>
            <input type="text" name="admin_abouts" class="form-control" id="formproduct_keywords"
              placeholder="Enter admni abouts">
          </div>
          <div class="form-group">
            <h6><label for="product_desc">Admin Area of Jod specification:</label></h6>
            <textarea name="admni_desc" class="form-control" rows="6" id="product_desc" required></textarea>
          </div>
          <center>
              <button type="submit" name="Admnisubmission" class="btn btn-success">Register</button>
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