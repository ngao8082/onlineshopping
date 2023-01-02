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
        <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Insert products</li>
      </ul>
    </div>
  </div>
  <div class="row">
   

      <div class="col-sm-8 col-md-12">
        <div class="jumbotron jumbotron-fluid"
          style="padding-top:25px;border-radius:4px;padding-bottom:2px;padding-left:25px;padding-right:25px">
          <center>
            <h4>Insert Products</h4>
          </center>

          <hr>
          <div class="form">
            <form action="insertdb.php" method="post" enctype="multipart/form-data" style="padding:0; margin:0;">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <h6><label for="formProduct_title">Product Title:</label></h6>
                  </div>
                  <div class="col-md-8"><input type="text" name="product_title" class="form-control"
                      id="formProduct_title" placeholder="Product Title" required></div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <h6><label for="formGroupproduct_cat">Select Product category:</label></h6>
                  </div>
                  <div class="col-md-8">
                    <select name="product_cat" id="formGroupproduct_cat" class="form-control" required>
                      <option disabled value="Select Product Category">Select Product Category</option>
                      <?php
                     $get_p_cat = "select*from product_categories";
                     $run_p_cat = mysqli_query($conn,$get_p_cat);

                     while ($row_p_cats=mysqli_fetch_array($run_p_cat)) {
                       $p_cat_id = $row_p_cats['p_cat_id'];
                       $p_cat_title = $row_p_cats['p_cat_title'];
                       
                       ?>
                         <option value="<?php echo  $p_cat_id ?>"><?php echo $p_cat_title ?></option>

                      <?php 
                     }
                     ?>
                    </select>
                  </div>
                </div>

              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <h6><label for="formGroupcateg">category:</label></h6>
                  </div>
                  <div class="col-md-8"><select name="categ" id="formGroupcateg" class="form-control" required>
                      <option disabled value="Select Category">Select Category</option>
                      <?php
                     $get_cat = "select*from categories";
                     $run_cat = mysqli_query($conn,$get_cat);

                     while ($row_cats=mysqli_fetch_array($run_cat)) {
                       $cat_id = $row_cats['cat_id'];
                       $cat_title = $row_cats['cat_title'];


                       ?>
                       
                         <option value="<?php echo $cat_id?>"><?php echo $cat_title ?></option>

                      <?php
                     }
                     ?>
                    </select></div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <h6><label for="formGroupproduct_cat">Select Manufacturer:</label></h6>
                  </div>
                  <div class="col-md-8">
                    <select name="product_manu" id="formGroupproduct_cat" class="form-control" required>
                      <option disabled value="Select Product Category">Select Manufacturer</option>
                      <?php
                     $getmanu = "select*from manufacturer";
                     $runmanu = mysqli_query($conn,$getmanu);

                     while ($row_p_manu = mysqli_fetch_array($runmanu)) {
                       $p_manu = $row_p_manu ['manu_id'];
                       $p_catmanu = $row_p_manu ['manu_title'];
                       
                       ?>
                         <option value="<?php echo  $p_manu ?>"><?php echo $p_catmanu ?></option>

                      <?php 
                     }
                     ?>
                    </select>
                  </div>
                </div>

              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <h6><label for="formGroupprod_img1">Product Image 1:</label></h6>
                  </div>
                  <div class="col-md-8"> <input type="file" name="prodImg1" class="form-control" id="formGroupprod_img1"
                      required></div>
                </div>


              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <h6><label for="formGroupprod_img2">Product Image 2:</label></h6>
                  </div>
                  <div class="col-md-8">
                    <input type="file" name="prodImg2" class="form-control" id="formGroupprod_img2" required></div>
                </div>

              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <h6><label for="formGroupprod_img3">Product Image 3:</label></h6>
                  </div>
                  <div class="col-md-8">
                    <input type="file" name="prodImg3" class="form-control" id="formGroupprod_img3" required>
                  </div>
                </div>

              </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <h6><label for="formproduct_price">Product Price:</label></h6>
              </div>
              <div class="col-md-8"><input type="text" name="product_price" class="form-control" id="formproduct_price"
                  placeholder="Enter product price" required></div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <h6><label for="formproduct_price">Product sale Price:</label></h6>
              </div>
              <div class="col-md-8"><input type="text" name="product_sale" class="form-control" id="formproduct_price"
                  placeholder="product sale price" required></div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <h6><label for="formproduct_keywords">Product Keywords:</label></h6>
              </div>
              <div class="col-md-8"><input type="text" name="product_keywords" class="form-control"
                  id="formproduct_keywords" placeholder="Enter product keywords" required></div>
            </div>


          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <h6><label for="product_desc">Product Description:</label></h6>
              </div>
              <div class="col-md-8"><textarea name="product_desc" class="form-control" rows="6" id="product_desc"
                  required></textarea></div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <h6><label for="formproduct_price">Product Label:</label></h6>
              </div>
              <div class="col-md-8"><input type="text" name="product_label" class="form-control" id="formproduct_price"
                  placeholder="Enter product label" required></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <h6><label for="product_desc">Submit:</label></h6>
            </div>
            <div class="col-md-8"><button type="submit" name="enterProducts"
                class="btn btn-primary btn-block btn-sm">Register</button></div>
          </div>

          </form>
        </div>
      </div>

  </div>
</div>
</div>
<?php
}
?>
