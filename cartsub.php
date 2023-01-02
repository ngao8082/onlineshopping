<?php

session_start();
$dbs=mysqli_connect("localhost","root","","shoppingonline");

if (isset($_POST['subm'])) {



  
  $product_size=$_POST['size'];
    $pro_quant=$_POST['qty'];
    $price=$_POST['price'];
    $p_id=$_POST['pro_id'];
    $useremail=$_POST['useemail'];
$uquery="select * from cart where p_id =$p_id";
$ruquery=mysqli_query($dbs,$uquery);
$fuquery=mysqli_fetch_array($ruquery);
$comemail=$fuquery['p_id'];
if ($comemail==$p_id) {
  $cuquer="update cart set qty=$pro_quant,size='$product_size',price='$price' where p_id=$p_id and user_email='$useremail'";
  $rcuquery=mysqli_query($dbs,$cuquer);
  echo"<script>alert('cart was successfully updated')</script>";
  echo"<script>window.open('shop.php','_self')</script>";
}else {

  $queerry="insert into cart(size,qty,price,p_id,user_email)values('$product_size','$pro_quant','$price','$p_id','$useremail')";
  mysqli_query($dbs,$queerry);
  echo"<script>alert('successfully inserted into a cart')</script>";
  echo"<script>window.open('shop.php','_self')</script>";
}
}
else {
    echo"<script>alert('not saved error occured in submision')</script>";
    echo"<script>window.open('shop.php','_self')</script>";
}

 


?>