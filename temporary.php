<?php

include_once("includes/head.php");
include_once("func/func.php");
global $dbs;
if (!isset($_SESSION['passwo'])) {
    echo"<script>window.open('customer/signup.php','_self')</script>";
  }else {
    
  
$username=$_SESSION['username'];
$pwens=$_SESSION['passwo'];
$cartq= "select * from buyertable where cusname='$username' && pass='$pwens'";
$rcartq=mysqli_query($dbs,$cartq);
$drcartq=mysqli_fetch_array($rcartq);
$cusemail=$drcartq['myemail'];
}
     $proc_id=$_GET['pro_id'];
    $get_products="select * from product where product_id=$proc_id";
   $con_get_products=mysqli_query($dbs,$get_products);
   $rows_pros=mysqli_fetch_array($con_get_products);
    $p_cate_id  =  $rows_pros['p_cat_id'];
    $product_title =  $rows_pros['product_title'];
    $p_cate_desc  =  $rows_pros['product_desc'];
    $p_cate_price  =  $rows_pros['product_price'];
    $p_cate_img1  =  $rows_pros['product_img1'];
    $p_cate_img2  =  $rows_pros['product_img2'];
    $p_cate_img3  =  $rows_pros['product_img3'];
    $product_label = $rows_pros['product_label'];
       $produc_sale_prices=$rows_pros['produc_sale'];
       if ($product_label=='sale') {
        $p_cate_price="$$p_cate_price";
        $produc_sale_prices="$ $produc_sale_prices ";
       }else {
        $p_cate_price="$ $p_cate_price";
        $produc_sale_prices="";
       }

       if ($product_label=="") {
       
       }else {
        $product_label="
        <a href='' class='label $product_label'>
        <div class='actuallabel'>$product_label</div>
        <div class='actualbacground'></div>
        
        <a/>
        ";
       }
    $get_pros_cat = "select * from product_categories where p_cat_id=$p_cate_id";
    $run_pros_cat =mysqli_query($dbs,$get_pros_cat);
    $rows_pros_cat = mysqli_fetch_array($run_pros_cat);
    $cat_title =  $rows_pros_cat['p_cat_title'];


?>
<?php
                    include("includes/sidebar.php")
                 
                ?>
                <div class="jumbotron jumbotron-fluid" style="margin-left:0px;padding:15px;border-radius:7px">

<h5><?php echo  $product_title;?></h5>
<hr>



<form action="cartsub.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="pro_id" value="<?php echo  $proc_id;?>">
    <input type="hidden" name="useemail" value="<?php echo  $cusemail;?>">

    <div class="row">
        <div class="col-md-3 col-sm-3">
            <h4>Size:</h4>
        </div>
        <div class="col-md-9 col-sm-9">
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="size"
                required>
                <option selected>Choose size</option>
                <option value="large">Large</option>
                <option value="medium">medium</option>
                <option value="small">small</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-3">

            <h4>Amount:</h4>
        </div>
        <div class="col-md-9 col-sm-9">
            <input type="text"  class="form-control mb-2 mr-sm-2"
                id="#inlineFormInputName2" placeholder="Enter Amount" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <h4>Price in $:</h4>
        </div>
        <div class="col-md-8 col-sm-6">
            <input type="text" value="<?php echo  $p_cate_price;?>"
                class="form-control mb-2 mr-sm-2" name="price">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-3">
            <h4>Add To Cart:</h4>
        </div>
        <div class="col-md-6 col-sm-3">
            <button type="submit" name="subm" class="btn btn-success btn-block btn-sm">submit</button>
        </div>
    </div>
</form>

</div>
