<?php
$dbs=mysqli_connect("localhost","root","","shoppingonline");
if (!isset($_SESSION['pass'])) {
}else {
  

$usrpaass=$_SESSION['passwo'];
$usrname=$_SESSION['username'];
$cartemail=$usrname;
$cartpass=$usrpaass;
global $cartemail;
global $cartpass;
}
//begin of product 
function funPro(){

    global $dbs;
    $get_product="select * from product lIMIT 8";
    $run_product = mysqli_query($dbs,$get_product);
    while ($row_product = mysqli_fetch_array($run_product)) {
       $proc_id = $row_product['product_id'];
       $product_title = $row_product['product_title'];
      //  $pro_url= $row_product['product_url'];
       $product_img1 = $row_product['product_img1'];
       $product_price = $row_product['product_price'];
       $product_label = $row_product['product_label'];
       $produc_sale_prices=$row_product['produc_sale'];
       if ($product_label=="sale") {
        $product_price="/<del>$$product_price</del>";
        $produc_sale_prices="$ $produc_sale_prices ";
       }else {
        $product_price="$ $product_price";
        $produc_sale_prices="";
       }

       if ($product_label=="new") {
        $product_label="
        <a href='' class='label $product_label'>
        <div class='actuallabel'>$product_label</div>
        <div class='actualbacground'></div>
        
        <a/>
        ";
       }else {
        $product_label="
        <a href='' class='label $product_label'>
        <div class='actuallabel'>$product_label</div>
        <div class='actualbacground'></div>
        
        <a/>
        ";
       }
       echo"
       <div class='col sm-2 col-md-3 shadow p-3 mb-4 bg-white rounded'>
           <a href='detail.php?pro_id=$proc_id'>
             <img src='admin_area/propic/$product_img1' class='img-fluid' alt='Responsive image'>
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
             <a href='detail.php?pro_id=$proc_id' class='btn btn-secondary btn-sm' >View detail</a>
        </div>
        <div class='col-md-6 col-sm-12'>
             <a href='detail.php?pro_id=$proc_id' class='btn btn-success btn-sm' ><i class='fa fa-plus text-dark' aria-hidden='true'></i><i class='fa fa-shopping-cart text-dark' aria-hidden='true'></i> Cart</a>
        </div>
       </div>
       $product_label 
   </div>
   ";
    }

}
//end of product
//start of ip
// function Myipstuff(){
//   switch (true) {
//     case(!empty($_SERVER['HTTP_X_REAL_IP'])):
//       return $_SERVER['HTTP_X_REAL_IP'];
//       break;
//       case(!empty($_SERVER['HTTP_CLIENT_IP'])):
//         return $_SERVER['HTTP_CLIENT_IP'];
//         break;
//         case(!empty($_SERVER['HTTP_X_FORWARDED_fOR'])):
//           return $_SERVER['HTTP_X_FORWARDED_fOR'];
//           break;
//     default:
//       return $_SERVER['REMOTE_ADDR'];
//       break;
//   }
// }
// //end of ip\
//cart amount begin


function cartAmount(){
  global $cartemail;
 global $cartpass;
  global $dbs;
  $buyert="select * from buyertable where cusname='$cartemail' && pass='$cartpass'";
  $rbuyert= mysqli_query($dbs,$buyert);
  $frbyert=mysqli_fetch_array($rbuyert);
  if ($frbyert) {
    # code...
    $femail=$frbyert['myemail'];
  $cartA="select * from cart where email='$femail'";
  $rcartA= mysqli_query($dbs,$cartA);
  $noitems=mysqli_num_rows($rcartA);
  echo $noitems;
  }else{
    echo null;
  }

  

}
//cart price begining
function cartPrice(){
  global $cartemail;
  global $cartpass;
  global $dbs;
  $buyert="select * from buyertable where cusname='$cartemail' && pass='$cartpass'";
  $rbuyert= mysqli_query($dbs,$buyert);
  $frbyert=mysqli_fetch_assoc($rbuyert);
  if ($frbyert) {
    $femail=$frbyert['myemail'];
  $cartA="select * from cart where email='$femail'";
  $rcartA= mysqli_query($dbs,$cartA);
  $noitems=mysqli_num_rows($rcartA);
    $total=0;
  while($fcart=mysqli_fetch_array($rcartA)) {  
    $qty=$fcart['qty'];
    $price=$fcart['price'];
    $subprice=$qty*$price;
  $total=$total+$subprice;
  }
  echo "$".$total;
  }else{
    echo null;
  }
  
}
//cart price end
//cart amount end
//begin of product categories
function getPcats(){
  global $dbs;
  $get_product_cat="select * from product_categories where p_cat_top='yes'";
  $run_product_cat = mysqli_query($dbs,$get_product_cat);
while ($row_product_cat=mysqli_fetch_array($run_product_cat)) {
  $p_cat_id = $row_product_cat['p_cat_id'];
  $p_cat_title = $row_product_cat['p_cat_title'];
  $p_cat_top=$row_product_cat['p_cat_top'];
  $p_cat_image=$row_product_cat['p_cat_image'];
  if ($p_cat_top=="") {
    
  }else {
    $p_cat_image="<img src='admin_area/otherimage/$p_cat_image' alt='...' width=20px >&nbsp";
    
  }
  echo"<li class='list-group-item checkbox checkbox-primary' style='background:#dddddd'><h6>
                 
                 <label>
                 <input value='$p_cat_id' type='checkbox' name='' id=''>
                 <a href='shop.php?p_cat=$p_cat_id' class='text-dark'>
                 $p_cat_image
                 $p_cat_title
                 </label>
                 
                 </a>
                 
                 </h6>
                 
                 
                 </li>";
}
$get_product_cat="select * from product_categories where p_cat_top='no'";
  $run_product_cat = mysqli_query($dbs,$get_product_cat);
while ($row_product_cat=mysqli_fetch_array($run_product_cat)) {
  $p_cat_id = $row_product_cat['p_cat_id'];
  $p_cat_title = $row_product_cat['p_cat_title'];
  $p_cat_top=$row_product_cat['p_cat_top'];
  $p_cat_image=$row_product_cat['p_cat_image'];
  if ($p_cat_top=="") {
    
  }else {
    $p_cat_image="<img src='admin_area/otherimage/$p_cat_image' alt='...' width=20px >&nbsp";
    
  }
  echo"<li class='list-group-item checkbox checkbox-primary' id><h6>
                 
                 <label>
                 <input value='$p_cat_id' type='checkbox' name='' id=''>
                 <a href='shop.php?p_cat=$p_cat_id' class='text-dark'>
                 $p_cat_image
                 $p_cat_title
                 </label>
                 
                 </a>
                 
                 </h6>
                 
                 
                 </li>";
}
}
//end of product categories
//begin of product categories
function getCate(){
  global $dbs;
  $get_cat="select * from categories where cat_top='yes'";
  $run_cat = mysqli_query($dbs,$get_cat);
  while ($row_cat=mysqli_fetch_array($run_cat)) {
    $cat_id = $row_cat['cat_id'];
    $cat_title = $row_cat['cat_title'];
    $cat_image=$row_cat['cat_image'];
    $cat_top=$row_cat['cat_top'];
    if ($cat_top=="") {
      
    }else {
      $cat_top="<img src='admin_area/otherimage/$cat_image' alt='...' width=20px >&nbsp";
      
    }
    echo"<li class='list-group-item checkbox checkbox-primary' style='background:#dddddd' id='catdata'><h6>
                   
                   <label>
                   <input value='$cat_id' type='checkbox' name='' id=''>
                   <a href='shop.php?cat=$cat_id' class='text-dark'>
                   $cat_top
                   $cat_title
                   </label>
                   
                   </a>
                   
                   </h6>
                   
                   
                   </li>";
   
  }
  $get_cat="select * from categories where cat_top='no'";
  $run_cat = mysqli_query($dbs,$get_cat);
  while ($row_cat=mysqli_fetch_array($run_cat)) {
    $cat_id = $row_cat['cat_id'];
    $cat_title = $row_cat['cat_title'];
    $cat_image=$row_cat['cat_image'];
    $cat_top=$row_cat['cat_top'];
    if ($cat_top=="") {
      
    }else {
      $cat_top="<img src='admin_area/otherimage/$cat_image' alt='...' width=20px >&nbsp";
      
    }
    echo"<li class='list-group-item checkbox checkbox-primary' id='p_catadata'><h6>
                   
                   <label>
                   <input value='$cat_id' type='checkbox' name='' id=''>
                   <a href='shop.php?cat=$cat_id' class='text-dark'>
                   $cat_top
                   $cat_title
                   </label>
                   
                   </a>
                   
                   </h6>
                   
                   
                   </li>";
                  
                  }
}
//end of product categories
//begin of the shop
function functionShop(){
if (!isset($_GET['p_cat'])) {
  if (!isset($_GET['cat'])) {

    global $dbs;
    $nlimits=3;
    $pa_que="select * from product";
    $copa_que=mysqli_query($dbs,$pa_que);
    $nitems=mysqli_num_rows($copa_que);
     $npage=ceil($nitems/$nlimits);
   if (!isset($_GET['page'])) {
    $i=1;
   }else {
    $i=$_GET['page'];
      
   }
   $nlimits=12;
     $previous = $i-1;
      $next = $i+1;
    $start_page = ($i-1) * $nlimits;
    global $dbs;
    $peg="select * from product limit $start_page,$nlimits";
    $sqls=mysqli_query($dbs,$peg);
    while($row_prod = mysqli_fetch_array($sqls)) {
      $pro_id =$row_prod['product_id'];
      // $pro_url =$row_prod['product_url'];
      $produc_title =$row_prod['product_title'];
      $produc_img1 = $row_prod['product_img1'];
      $produc_price =$row_prod['product_price'];
      $product_label = $row_prod['product_label'];
       $produc_sale_prices=$row_prod['produc_sale'];
       if ($product_label=="sale") {
        $produc_price="/<del>$$produc_price</del>";
        $produc_sale_prices="$ $produc_sale_prices ";
       }else {
        $produc_price="$ $produc_price";
        $produc_sale_prices="";
       }

       if ($product_label=="") {
        
        $product_label="
        <a href='' class='label $product_label'>
        <div class='actuallabel'>$product_label</div>
        <div class='actualbacground'></div>
        
        <a/>
        ";
       }else {
        $product_label="
        <a href='' class='label $product_label'>
        <div class='actuallabel'>$product_label</div>
        <div class='actualbacground'></div>
        
        <a/>
        ";
       }
      
      echo"
      
      <div class='col-md-3 shadow p-3 mb-5 bg-white rounded' id='produc'>
                <a href='detail.php?pro_id=$pro_id'>
                     <img src='admin_area/propic/$produc_img1' class='img-fluid' alt='$produc_img1'>
                </a>
        <div class='row'>
            <div class='col-md-12'>
              <center>
                 <h5><a href='detail.php?pro_id=$pro_id' class='text-dark'>$produc_title</a></h5>'
              </center>
              </div>
            <div class='col-md-12'>
                  <center> 
                     <h6>$produc_sale_prices $produc_price</h6>
                  </center>
            </div>
          </div>
        <div class='row'>
        <div class='col-md-6'>
          <a href='detail.php?pro_id=$pro_id' class='btn btn-secondary btn-sm'>view detail</a>
          </div>
          <div class='col-md-6'>
          <a href='detail.php?pro_id=$pro_id' class='btn btn-success btn-sm'> <i class='fa fa-plus text-dark' aria-hidden='true'></i><i class='fa fa-shopping-cart text-dark' aria-hidden='true'></i> Cart</a>
          </div>
         
        </div>
        $product_label
      </div> 
      ";
   }
   if ($previous==0) {
    $previous=$previous+1; 
  }else {
  echo"
  
   <ul class='pagination justify-content-center'>
     <center>
        <li class='page-item'>
          <a class='page-link' href='shop.php?page=$previous'>Previous</a>
        </li>
     </center>
   </ul>";
  }
     
   for ($i=1; $i<=$npage ; $i++) { 
     echo"
     <ul class='pagination justify-content-end'>
     <li class='page-item'>
       <a class='page-link' href='shop.php?page=$i'>$i</a>
     </li>
     </ul>";
    }
    if ($next<=$i) {
    echo"
     <center>
     <ul class='pagination justify-content-end'>
     <li class='page-item'>
     <a class='page-link' href='shop.php?page=$next'>Next</a>
   </li>
     </ul>
     </center>";
     
    }
  }
}
}
//end of the shop
//begin of the categoires
function GetCatDesc(){
  if (isset($_GET['cat'])) {
    $f_cat_id=$_GET['cat'];
global $dbs;
$Cat_que="select * from categories where cat_id='$f_cat_id'";
$cat_que_con = mysqli_query($dbs,$Cat_que);
$row_getFcat=mysqli_fetch_array($cat_que_con);
$f_cat_title=$row_getFcat['cat_title'];
global $dbs;
$Cat_que_pro="select * from product where cat_id='$f_cat_id'";
$cat_que_pro_con = mysqli_query($dbs,$Cat_que_pro);

$row_get_Pcat=mysqli_fetch_array($cat_que_pro_con);
$produc_desc_title =$row_get_Pcat['product_title'];
    $produc_desc_img1 = $row_get_Pcat['product_img1'];
$produc_desc_price =$row_get_Pcat['product_price'];
$pro_desc_id =$row_get_Pcat['product_id'];
$product_label = $row_get_Pcat['product_label'];
       $produc_sale_prices=$row_get_Pcat['produc_sale'];
       if ($product_label=="sale") {
        $produc_desc_price="/<del>$$produc_desc_price</del>";
        $produc_sale_prices="$ $produc_sale_prices ";
       }else {
        $produc_desc_price="$ $produc_desc_price";
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
$count=mysqli_num_rows($cat_que_pro_con);
if ($count==0) {
  
     echo"
     <div class='jumbotron jumbotron-fluid'style='margin-left:3px;margin-right:3px;padding:15px;border-radius:7px'>
     <h1>No Product Found In This category</h1>
     </div>";
}
else {
  echo"
  <div class='col-md-12 col-sm-12'>
  <div class='jumbotron jumbotron-fluid'style='margin-left:3px;margin-right:3px;padding:15px;border-radius:7px'>
       <center>
           <h4>$f_cat_title</h4>
       </center>
  </div>
  </div>";
  
       $produc_sale_prices=$row_get_Pcat['produc_sale'];
  echo"   
  <div class='col sm-6 col-md-4' id='produc'>
                <a href='detail.php?pro_id=$f_cat_id'>
                     <img src='admin_area/propic/$produc_desc_img1' class='img-fluid' alt='Responsive image'>
                </a>
        <div class='row'>
            <div class='col-md-12'>
              <center>
                 <h5><a href='detail.php?pro_id=$f_cat_id' class='text-dark'>$produc_desc_title</a></h5>'
              </center>
              </div>
            <div class='col-md-12'>
                  <center> 
                     <h6> $produc_sale_prices $produc_desc_price</h6>
                  </center>
            </div>
          </div>
        <div class='row'>
        <div class='col-md-6'>
          <a href='detail.php?pro_id=$f_cat_id' class='btn btn-secondary btn-sm'>view detail</a>
          </div>
          <div class='col-md-6'>
          <a href='detail.php?pro_id=$f_cat_id' class='btn btn-success btn-sm'> <i class='fa fa-plus text-dark' aria-hidden='true'></i><i class='fa fa-shopping-cart text-dark' aria-hidden='true'></i> Cart</a>
          </div>
         
        </div>
        $product_label
      </div> 
  ";

}
}
}
//end of the categoires
//begin of product desc
function GetproDesc(){
  if (isset($_GET['p_cat'])) {
    $f_p_cat_id=$_GET['p_cat'];
global $dbs;
$PCat_que="select * from product_categories where p_cat_id=$f_p_cat_id";
$pcat_que_con = mysqli_query($dbs,$PCat_que);
$prow_getFcat=mysqli_fetch_array($pcat_que_con);
$f_p_cat_title=$prow_getFcat['p_cat_title'];

$PCat_que_pro="select * from product where p_cat_id=$f_p_cat_id";
$Pcat_que_pro_con = mysqli_query($dbs,$PCat_que_pro);
$prow_get_cat=mysqli_fetch_array($Pcat_que_pro_con);
     $pro_desc_id =$prow_get_cat['product_id'];
      $produc_desc_title =$prow_get_cat['product_title'];
      $produc_desc_img1 = $prow_get_cat['product_img1'];
      $produc_desc_price =$prow_get_cat['product_price'];
       
      $product_label = $prow_get_cat['product_label'];
       $produc_sale_prices=$prow_get_cat['produc_sale'];
       if ($product_label=="sale") {
        $produc_desc_price="/<del>$$produc_desc_price</del>";
        $produc_sale_prices="$ $produc_sale_prices ";
       }else {
        $produc_desc_price="$ $produc_desc_price";
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
$Pcount=mysqli_num_rows($Pcat_que_pro_con);
if ($Pcount==0) {
  
 echo"
 <div class='jumbotron jumbotron-fluid'style='margin-left:3px;margin-right:3px;padding:15px;border-radius:7px'>
    <h1>No Product Found In This category</h1>
 </div>";
}
else {
  echo"
  <div class='col-sm-12 col-md-12'>
  <div class='jumbotron jumbotron-fluid'style='margin-left:3px;margin-right:3px;padding:15px;border-radius:7px'>
        <center>
          <h4>$f_p_cat_title</h4>
        </center>
  </div>
  </div>";
  echo"
      <div class='col sm-6 col-md-4 shadow p-3 mb-5 bg-white rounded ' id='produc'>
                <a href='detail.php?pro_id=$pro_desc_id'>
                     <img src='admin_area/propic/$produc_desc_img1' class='img-fluid' alt='Responsive image'>
                </a>
        <div class='row'>
            <div class='col-md-12'>
              <center>
                 <h5><a href='detail.php?pro_id=$pro_desc_id' class='text-dark'>$produc_desc_title</a></h5>'
              </center>
              </div>
            <div class='col-md-12'>
                  <center> 
                     <h6> $produc_desc_price</h6>
                  </center>
            </div>
          </div>
        <div class='row'>
        <div class='col-md-6'>
          <a href='detail.php?pro_id=$pro_desc_id' class='btn btn-secondary btn-sm'>view detail</a>
          </div>
          <div class='col-md-6'>
          <a href='detail.php?pro_id=$pro_desc_id' class='btn btn-success btn-sm'> <i class='fa fa-plus text-dark' aria-hidden='true'></i><i class='fa fa-shopping-cart text-dark' aria-hidden='true'></i> Cart</a>
          </div>
         
        </div>
        $product_label
      </div>  
      ";
}
}
}
//end of the categoires
//begin of the real ip
//end of the real ip
//begin of the real ip
function Add_cart(){
  global $dbs;
  if (isset($_GET['add_cart'])) {
    $p_id=$_GET['add_cart'];
    $pro_quant=$_POST['qty'];
    $product_size=$_POST['size'];
    $phone_no=$_POST[' phone_no'];
    $email=$_POST['email'];
    $check_product="select * from cart where phone_no=$phone_no && p_id=$p_id";
    $run_check=mysqli_query($dbs,$check_product);
    if (mysqli_num_rows( $run_check)>0 ) {
      echo"<script>alert('this product has already been added to the cart')</script>";
      echo"<script>window.open('detail.php?pro_id=$p_id','_self ')</script>";
    }else {
      $querry="insert into cart(p_id,qty,size,phone_no,email) values('$p_id','$pro_quant','$product_size','$phone_no','$email')";
      $run_query=mysqli_query($dbs,$querry);
      echo"<script>window.open('detail.php?pro_id=$p_id','_self ')</script>";
    }
  }
}
function cart(){
  if (isset($_GET['pro_id'])) {
global $dbs;
$product_size=$_POST['size'];
$pro_quant=$_POST['qty'];
$price=$_POST['price'];
$p_id=$_GET['pro_id'];
$check_prod="select * from cart where p_id=$p_id";
$run_check_prod=msqli_query($dbs,$check_prod);
if (mysqli_num_rows($run_check_prod)>0) {
  echo"<sript>alert('this product already in cart')</script>";
  echo"<script>window.open('detail.php?pro_id=$p_id','_self ')</script>";
}else {
  $queerry="insert into cart(size,qty,price,p_id) values('$product_size','$pro_quant','$price','$p_id')";
}
}
}
?>