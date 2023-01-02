<?php
include("includes/head.php");
include_once("func/func.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Home</li>
                    <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Cart</li>
                </ul>
            </div>
        </div>
        
        <div class="row">

            <div class="col-md-8  col-sm-6">
            <?php
            if (!isset($_SESSION['passwo'])) {
                echo"<script>alert('first login into your account')</script>";
                echo"<script>window.open('customer/myaccount.php?login','_self')</script>";
            }else {
            $dbs=mysqli_connect("localhost","root","","shoppingonline");
            $customer= $_SESSION['username'];
            $customerpass=$_SESSION['passwo'];
            $visiblecart="select * from buyertable where cusname='$customer' && pass='$customerpass'";
            $rvisiblecart=mysqli_query($dbs,$visiblecart);
            $frvisiblecart=mysqli_fetch_array($rvisiblecart);
            $custommail=$frvisiblecart['myemail'];
            $displaycart="select * from cart where user_email='$custommail'";
            $rdisplaycart=mysqli_query($dbs,$displaycart);
            $rowRdisplay=mysqli_num_rows($rdisplaycart);
            
            $a=0;
        }
                 ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="jumbotron jumbotron-fluid"
                        style="padding-top:3px;border-radius:2px;padding-bottom:0px;padding-right:0px;">
                        <div class="container-fluid">
                            <h4 class="text-dark">Shopping Cart</h4>
                            <p class="text-muted">You currently have <?php echo $rowRdisplay;?> items in your cart</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">product</th>
                                        <th scope="col"></th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit price</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                $totalstuff=0;
                                
                                while ($totalstuff < $rowRdisplay){
                                    while ($vitu=mysqli_fetch_array($rdisplaycart)) {
                                        $sizec=$vitu['size'];
                                        $qtyc=$vitu['qty'];
                                        $pricec=$vitu['price'];
                                        $p_idc=$vitu['p_id'];
                                         $subtototal=$pricec*$qtyc;
                                         $totalstuff=$totalstuff+$subtototal;
                                          $accesspro="select * from product where product_id =$p_idc";
                                          $raccesspro=mysqli_query($dbs,$accesspro);
                                          while ($graccesspro=mysqli_fetch_array($raccesspro)) {
                                            $mgracesspro=$graccesspro['product_title'];
                                            $cartimg=$graccesspro['product_img1'];
                                            
                                          ?>
                                    <tr> 
                                        <th scope="row"><img src="admin_area/propic/<?php echo $cartimg;?>" alt=""style="height:0.8%;padding:0%;"></th>
                                        <td><a href="detail.php?pro_id=<?php echo $p_idc?>"><?php echo $mgracesspro;?></a></td>
                                        <td><?php echo $qtyc;?></td>
                                        <td><?php echo $pricec; ?></td>
                                        <td><?php echo $sizec;?></td>
                                        <td><input type="checkbox" aria-label="Checkbox for following text input" name=""></td>
                                        <td>$<?php echo $subtototal?></td>
                                    </tr>
                                    <?php
                                    $totalstuff--;
                                            }
                                           }
                                         }
                                        ?>
                                    <tr>
                                        <th colspan="6">Total</th>
                                        <th colspan="2">$<?php echo  $totalstuff?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class=" form col justify-content-start">
                                <a href="header.php" class="btn btn-success">continue shopping</a>
                            </div>
                            <div class=" form col justify-content-end" style="padding-bottom:px;">
                                <button class="btn btn-secondary" type="submit">
                                    Update Cart
                                </button>
                                <a href="customer/myaccount.php?processscheckout" class="btn btn-success" style="margin-right:0px;">Process
                                    Checkout</a>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="jumbotron jumbotron-fluid" style="padding-top:3px;border-radius:2px;">
                    <h5 class="text-dark" style="padding-left:6px;">Order Summary</h5>
                    <p class="text-muted justify-content-center" style="padding-left:3px;">shipping and other additional
                        costs are calculated depending on the value you have entered</p>
                    <table class="table table-sm ">

                        <tbody>
                            <tr>
                                <th scope="row">Order sub-Title</th>
                                <th>$<?php echo  $totalstuff ?></th>

                            </tr>
                            <tr>
                                <th scope="row">Shipping and handling</th>
                                <th>$100</th>
                            </tr>
                            <tr>
                                <th scope="row">Tax</th>
                                <th>$29</th>
                            </tr>
                            <tr>
                                <th scope="row">Total</th>
                                <th>$200</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-2 shadow p-3 mb-5 bg-white rounded">
            <h2>Product you may also like</h2>
        </div>
        <?php
                    
                        $get_from_pro="select * from product  order by rand () limit 0,5";
                        $conne_get_from_pro = mysqli_query($dbs,$get_from_pro);
                        while ($row_get_from=mysqli_fetch_array($conne_get_from_pro)) {
                            $proc_id = $row_get_from['product_id'];
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
                            <div class='col sm-6 col-md-2 shadow p-3 mb-5 bg-white rounded'>
                                <a href='detail.php?proc_id=$proc_id'>
                                  <img src='admin_area/propic/$product_img1' class='img-thumbnail' alt='Responsive image'>
                              </a>
                          <div class='row'>
                               <div class='col-md-12'>
                                   <center>
                                   <h6><a href='detail.php?pro_id=$proc_id' class='text-dark'>
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
                            <div class='col-md-6 col-sm-12'>
                                  <a href='detail.php?pro_id=$proc_id' class='btn btn-secondary btn-sm' >Detail</a>
                             </div>
                             <div class='col-md-6 col-sm-12'>
                                  <a href='detail.php?pro_id=$proc_id' class='btn btn-success btn-sm' >Cart </a>
                             </div>
                            </div>
                            $product_label 
                        </div>
                        ";
                        }
                
                       ?>
    </div>
    </div>
        <?php
        include_once("footer.php");
        ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>