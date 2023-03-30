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
}if (!isset($_GET['pro_id'])){


}else {
    $pro_url=$_GET['pro_id'];
} 
    $get_products="select * from product where product_id='$pro_url'";
   $con_get_products=mysqli_query($dbs,$get_products);
   $check_product=mysqli_num_rows($con_get_products);
   if ($check_product<0) {
       echo"<script>window.open('header.php','_self')</script>";
   }else {
   $rows_pros=mysqli_fetch_array($con_get_products);
    $p_cate_id  =  $rows_pros['p_cat_id'];
    $product_title =  $rows_pros['product_title'];
    $p_cate_desc  =  $rows_pros['product_desc'];
    $p_cate_price  =  $rows_pros['product_price'];
    $p_cate_img1  =  $rows_pros['product_img1'];
    $p_cate_img2  =  $rows_pros['product_img2'];
    $p_cate_img3  =  $rows_pros['product_img3'];
    $product_label = $rows_pros['product_label'];
       $produc_sale=$rows_pros['produc_sale'];
       if ($product_label=="sale") {
        $p_cate_price ="<del>$$p_cate_price </del>";
        $produc_sale="$ $produc_sale";
       }else {
        $p_cate_price ="$ $p_cate_price ";
        $produc_sale="";
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
    $get_pros_cat = "select * from product_categories where p_cat_id='$p_cate_id'";
    $run_pros_cat =mysqli_query($dbs,$get_pros_cat);
    $rows_pros_cat = mysqli_fetch_array($run_pros_cat);
    $cat_title =  $rows_pros_cat['p_cat_title'];


?>
<div class="container">
<ul class="breadcrumb">
<li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Home</li>
<li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Shop</li>
<li class="breadcrumb-item active" aria-current="page" style="padding:0px;">
    <a href="detail.php?pro_id=<?php echo $pro_url;?> "><?php echo $product_title;?></a>
</li>
<li class="breadcrumb-item active" aria-current="page" style="padding:0px;">
    <?php echo  $cat_title;?>
</li>

</ul>
    <div class="row">
        <!--row begin-->
                
                <div class="col-md-6 col-sm-12"><!--col-md-6 col-sm-6 begin-->
                   
               

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <?php
                      
                      echo $product_label;
                        
                  ?>
                        <!--carousel slide begin-->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="admin_area/propic/<?php echo $p_cate_img1 ?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="admin_area/propic/<?php echo $p_cate_img2 ?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="admin_area/propic/<?php echo $p_cate_img3 ?>" class="d-block w-100" alt="...">
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                    <!--carousel slide end-->
                    
                </div>
                
                <!--col-md-4 col-sm-4 end-->
                <div class="col-md-6 col-sm-12">

                    <div class="jumbotron jumbotron-fluid" style="margin-left:0px;padding:15px;border-radius:7px">
                        <center>
                            <?php
                    
                                  echo"$product_title ";
                    
                             ?>

                        </center>
                        <hr>
                        <form action="cartsub.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="pro_id" value="<?php echo  $pro_url;?>">
                            <input type="hidden" name="useemail" value="<?php echo  $cusemail;?>">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <h6><label for="exampleFormControlSelect1">Size</label></h6>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <select name="size" class="form-control" id="exampleFormControlSelect1"
                                            placeholder="Enter amount" required>
                                            <option disabled>Choose size here</option>
                                            <option value="Large">Large</option>
                                            <option value="Small">Small</option>
                                            <option value="Medium">Medium</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div name="qty" class="col-md-3 col-sm-3">
                                        <h6><label for="exampleFormControlInput1">Amount</label></h6>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="number" name="qty" class="form-control"
                                            id="exampleFormControlInput1" placeholder="Enter amount" required></div>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <h6><label for="exampleFormControlInput1">Price in $</label></h6>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                    <?php 
                                    if ($product_label=="sale") {
                                        $p_cate_price=$rows_pros['produc_sale'];
                                    }else {
                                        $p_cate_price=$rows_pros['product_price'];
                                    }
                                    ?>
                                        <input type="text" name="price" value="<?php echo $p_cate_price ?>" class="form-control bg-danger text-white" id="exampleFormControlInput1"
                                         required></div>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <h6><label for="exampleFormControlInput1">Add to cart</label></h6>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <button type="submit" name="subm" class="btn btn-success btn-block btn-sm">Add to Cart</button>

                                    </div>
                                </div>

                        </form>
                    </div>
                    <div class="row">
                        
                    
                    <div class="col-md-4 col-sm-4 shadow mb-5 bg-light ">
                        
                        <img src="admin_area/propic/<?php echo $p_cate_img1 ?>" class="img-fluid">
                        </div>
                        <div class="col-md-4 col-sm-4 shadow  mb-5 bg-white">
                        
                        <img src="admin_area/propic/<?php echo $p_cate_img2 ?>" class="img-fluid">
                        </div>
                        <div class="col-md-4 col-sm-4 shadow  mb-5 bg-white">
                        
                        <img src="admin_area/propic/<?php echo $p_cate_img3 ?>" class="img-fluid">
                        </div>
                        </div>
                </div>
                
                        
                    
            </div>
            <!--row end-->

            <!--row 2 begining-->
            <div class="col-md-12">
                <!--col-md-12 begining-->
                <div class="jumbotron jumbotron-fluid" style="margin-left:0px;padding:15px;border-radius:7px">
                    <!--jumbotron jumbotron-fluid begining-->
                    <center>
                        <h5>
                            <?php echo $product_title ?> details
                        </h5>
                    </center>
                    <hr>

                    <li>Large</li>
                    <li>Medium</li>
                    <li>small</li>
                    <hr>

                    <?php
                 
                 echo $p_cate_desc ;
                 
                 ?>

                </div>
                <!--jumbotron jumbotron-fluid end-->
            </div>
            <!--col-md-12 end-->



            <div class="row">
        <div class="col-md-2 shadow p-3 mb-5 bg-white rounded">
            <h4>Product you may also like</h4>
        </div>
        <?php
                    
                        $get_from_pro="select * from product  order by rand () limit 0,5";
                        $conne_get_from_pro = mysqli_query($dbs,$get_from_pro);
                        while ($row_get_from=mysqli_fetch_array($conne_get_from_pro)) {
                            $pro_url = $row_get_from['product_id'];
                            $product_title = $row_get_from['product_title'];
                            $product_img1 = $row_get_from['product_img1'];
                            $product_price = $row_get_from['product_price'];
                            $product_label = $row_get_from['product_label'];
                            $produc_sale_prices=$row_get_from['produc_sale'];
                            if ($product_label=="sale") {
                             $product_price="/<del>$$product_price</del>";
                             $produc_sale_prices="$ $produc_sale_prices ";
                            }else {
                             $product_price="$ $product_price";
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
                            echo"
                            <div class='col-md-2 col sm-6  shadow p-3 mb-5 bg-white rounded'>
                                <a href='detail.php?proc_id=$pro_url'>
                                  <img src='admin_area/propic/$product_img1' class='img-thumbnail' alt='Responsive image'>
                              </a>
                          <div class='row'>
                               <div class='col-md-12'>
                                   <center>
                                   <h6><a href='detail.php?pro_id=$pro_url' class='text-dark'>
                                   $product_title
                                     </a></h6>'
                                  </center>
                                </div>
                           <div class='col-md-12'>
                              <center>
                                <p class='text-dark'>$produc_sale_prices $product_price</p>
                               </center>
                            </div>
                            </div>
                            <div class='row'>
                            <div class='col-md-6 col-sm-6'>
                                  <a href='detail.php?pro_id=$pro_url' class='btn btn-secondary btn-sm' >detail</a>
                             </div>
                             <div class='col-md-6 col-sm-6'>
                                  <a href='detail.php?pro_id=$pro_url' class='btn btn-success btn-sm' > Cart </a>
                             </div>
                            </div>
                            $product_label 
                        </div>
                        ";
                        }
                
                       ?>
    

      
        <!--col-md-9 col-sm-9 end-->
        </div>

    </div>
    
    <!--row end-->


</div>
<!--container end-->
<?php
                        
                        include("footer.php");
                      ?>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php

}
?>
