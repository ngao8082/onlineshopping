<?php
include_once("includes/db.php");
if (!isset($_SESSION['passw'])) {
    include_once("login.php");
  }else{
    while (isset($_GET['editprodut'])) {
      $proidentity=$_GET['editprodut'];
      $selctpro="select * from product where product_id='$proidentity'";
      $runselctpro=mysqli_query($conn,$selctpro);
      $fetrunselct=mysqli_fetch_array($runselctpro);
      $p_cat_id=$fetrunselct['p_cat_id'];
      $cat_id=$fetrunselct['cat_id'];
      $product_title=$fetrunselct['product_title'];
      $product_img1=$fetrunselct['product_img1'];
      $product_img2=$fetrunselct['product_img2'];
      $product_img3=$fetrunselct['product_img3'];
      $product_price=$fetrunselct['product_price'];
      $product_d=$fetrunselct['product_desc'];
      $product_label=$fetrunselct['product_label'];
      $product_sale=$fetrunselct['produc_sale'];
      $product_keywords=$fetrunselct['product_keywords'];
    break;
    }

?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="breadcrumb" style="margin-top:5px;">
        <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Dashboard</li>
        <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Edit products</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="jumbotron jumbotron-fluid"
        style="padding-top:25px;border-radius:4px;padding-bottom:2px;padding-left:25px;padding-right:25px">
        <center>
          <h4>Edit Products</h4>
        </center>

        <hr>
        <div class="form">
          <form action="editpro.php" method="post" enctype="multipart/form-data" style="padding:0; margin:0;">
            <input type="hidden" name="product_hidden" value="<?php echo $proidentity ?>" class="form-control"
              id="formProduct_title">
            <div class="form-group">
              <div class="row">
                <div class="col-md-3 col-sm-8">
                  <h6><label for="formProduct_title">Product Title:</label></h6>
                </div>
                <div class="col-md-8 col-sm-8"><input type="text" name="product_title" value="<?php echo $product_title ?>"
                    class="form-control" id="formProduct_title"></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3 col-sm-8">
                  <h6><label for="formGroupproduct_cat">Select Product category</label></h6>
                </div>
                <div class="col-md-8 col-sm-8">
                  <select name="product_cat" id="formGroupproduct_cat" value="<?php echo $p_cat_id ?>"
                    class="form-control">
                    <option disabled>Select Product Category</option>
                    <?php
                     $get_p_cat = "select*from product_categories";
                     $run_p_cat = mysqli_query($conn,$get_p_cat);

                     while ($row_p_cats=mysqli_fetch_array($run_p_cat)) {
                       $p_cat_id = $row_p_cats['p_cat_id'];
                       $p_cat_title = $row_p_cats['p_cat_title'];
                       echo "
                       
                         <option value=' $p_cat_id'>$p_cat_title</option>

                       ";
                     }
                     ?>
                  </select>
                </div>
              </div>


            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3 col-sm-8">
                  <h6><label for="formGroupcateg">Select category</label></h6>
                </div>
                <div class="col-md-8 col-sm-8">
                  <select name="categ" id="formGroupcateg" class="form-control">
                    <option disabled>Select Category</option>
                    <?php
                     $get_cat = "select*from categories";
                     $run_cat = mysqli_query($conn,$get_cat);

                     while ($row_cats=mysqli_fetch_array($run_cat)) {
                       $cat_id = $row_cats['cat_id'];
                       $cat_title = $row_cats['cat_title'];
                       echo "
                       
                         <option value='$cat_id '>$cat_title</option>

                       ";
                     }
                     ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3 col-sm-8">
                  <h6><label for="formGroupprod_img1">Product Image 1:</label></h6>
                </div>
                <div class="col-md-8 col-sm-8">
                  <input type="file" name="prodImg1" value="<?php echo $product_img1; ?>" class="form-control"
                    id="formGroupprod_img1" required>
                  <img src="propic/<?php echo $product_img1 ?>" class="card-img-top img-fluid img-thumbnail" alt=""
                    style="width:3%;height:6%;">

                </div>
              </div>


            </div>
            <div class="form-group">
            <div class="row">
              <div class="col-md-3"><h6><label for="formGroupprod_img2">Product Image 2:</label></h6></div>
              <div class="col-md-8 col-sm-8"><input type="file" name="prodImg2" value="<?php echo $product_img2; ?>" class="form-control"
                id="formGroupprod_img2" required>
              <img src="propic/<?php echo $product_img2 ?>" class="card-img-top img-fluid img-thumbnail" alt=""
                style="width:3%;height:6%;"></div>
            </div>
            </div>
            <div class="form-group">
            <div class="row">
              <div class="col-md-3"><h6><label for="formGroupprod_img3">Product Image 3:</label></h6></div>
              <div class="col-md-8 col-sm-8"><input type="file" name="prodImg3" value="<?php echo $product_img3; ?>" class="form-control"
                id="formGroupprod_img3" required>
              <img src="propic/<?php echo $product_img3  ?>" class="card-img-top img-fluid img-thumbnail" alt=""
                style="width:3%;"></div>
            </div>
              
              
            </div>
        </div>
        <div class="form-group">
        <div class="row">
          <div class="col-md-3 col-sm-8"> <h6><label for="formproduct_price">Product Price:</label></h6></div>
          <div class="col-md-8 col-sm-8"><input type="text" name="product_price" value="<?php echo $product_price ?>" class="form-control"
            id="formproduct_price" placeholder="Enter product price"></div>
        </div>
         
          
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3 col-sm-8">
              <h6><label for="formproduct_price">Product sale Price:</label></h6>
            </div>
            <div class="col-md-8"><input type="text"value="<?php echo $product_sale ?>" name="product_sale" class="form-control" id="formproduct_price"
                placeholder="product sale price" required></div>
          </div>
        </div>
        <div class="form-group">
        <div class="row">
          <div class="col-md-3 col-sm-8"><h6><label for="formproduct_keywords">Product Keywords:</label></h6></div>
          <div class="col-md-8 col-sm-8"><input type="text" name="product_keywords" value="<?php echo $product_keywords ?>" class="form-control"
            id="formproduct_keywords" placeholder="Enter product keywords"></div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
          <div class="col-md-3 col-sm-8"><h6><label for="product_desc">Product Description:</label></h6></div>
          <div class="col-md-8 col-sm-8"><input type="textarea" name="product_des" value="<?php echo $product_d ?>" class="form-control" rows="6"
            id="product_desc"></div>
        </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3 col-sm-8">
              <h6><label for="formproduct_price">Product Label:</label></h6>
            </div>
            <div class="col-md-8"><input type="text" value="<?php echo $product_label; ?>" name="product_label" class="form-control" id="formproduct_price"
                placeholder="Enter product label" required></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-8"><h6>Submit Edition:</h6></div>
          <div class="col-md-8 col-sm-8"><button type="submit" name="updateProducts" class="btn btn-success btn-sm btn-block">update</button></div>
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