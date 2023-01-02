<?php
session_start();
include_once("includes/db.php");
include_once("func/func.php");
?>
<?php
global $dbs;
if (isset($_GET['pro_id'])) {
   $proc_id=$_GET['pro_id'];
   $get_products="select * from product where product_url='$proc_id'";
   $con_get_products=mysqli_query($dbs,$get_products);
   $rows_pros=mysqli_fetch_array($con_get_products);
    $p_cate_id  =  $rows_pros['p_cat_id'];
    $product_title =  $rows_pros['product_title'];
    $p_cate_desc  =  $rows_pros['product_desc'];
    $p_cate_price  =  $rows_pros['product_price'];
    $p_cate_img1  =  $rows_pros['product_img1'];
    $p_cate_img2  =  $rows_pros['product_img2'];
    $p_cate_img3  =  $rows_pros['product_img3'];
    $get_pros_cat = "select * from product_categories where p_cat_id='$p_cate_id'";
    $run_pros_cat =mysqli_query($dbs,$get_pros_cat);
    $rows_pros_cat = mysqli_fetch_array($run_pros_cat);
    $cat_title =  $rows_pros_cat['p_cat_title'];
}

?>



<!doctype html>
<html lang="en">

<head>
  <title>Online shopping</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="fontawesome-free-5.12.0-web/css/fontawesome.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.12.0-web/css/fontawesome.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="#" class="btn btn-success btn-sm justify-content-begin">
         <?php
           if (isset($_SESSION['passwo'])) {
            $cus=$_SESSION['username'];
             echo"Welcome:$cus";
           }else {
             echo"WELCOME:GUEST";
           }
         ?>
    
    </a>
    <a href="cart.php" class="text-light"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php cartAmount()?> Items in the cart | total sub-price:<?php cartPrice()?></a> 
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

      <ul class="nav justify-content-end  text-white " id="navbarNav">
        <li class="nav-item">
          <a class="nav-link active text-white" href="register.php"><i class="fa fa-address-book" aria-hidden="true"></i> Register|</a>  
        </li>
        <li class="nav-item">
        <?php
        if (!isset($_SESSION['passwo'])) {
          echo"<a class='nav-link text-white' href='customer/myaccount.php'>|<i class='fa fa-user' aria-hidden='true'></i> My account|</a>";
        }else {
          echo"<a class='nav-link text-white' href='customer/myaccount.php?my_orders'>|<i class='fa fa-user' aria-hidden='true'></i> My account|</a>";
        }
          
          ?>
          
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="cart.php">|<i class="fa fa-shopping-cart" aria-hidden="true"></i> Go to cart|</a> 
        </li>
        <li class="nav-item">
          <?php
           if (!isset($_SESSION['passwo'])) {
             echo"<a class='nav-link text-white' href='customer/signup.php'>|<i class='fa fa-sign-in' aria-hidden='true'></i> Login|</a>";
           }else {
             echo"<a class='nav-link text-white' href='customer/signout.php'>|<i class='fa fa-power-off' aria-hidden='true'></i> Logout|</a>";
           }
         ?>
          
        </li>
      </ul>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="pic/8.jpg" alt="" style="height:36px;padding:0px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="header.php"><i class="fa fa-home" aria-hidden="true"></i> Home<span class="sr-only">(current)</span></a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Shop</a> 
        </li>
        <li class="nav-item">
        <?php
        if (!isset($_SESSION['passwo'])) {
          echo"<a class='nav-link' href='customer/myaccount.php'><i class='fa fa-user' aria-hidden='true'></i> My account</a>";
        }else {
          echo"<a class='nav-link' href='customer/myaccount.php?my_orders'> <i class='fa fa-user' aria-hidden='true'></i>My account</a>";
        }
          
          ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link " href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact us</a> 
        </li>
      </ul>
    </div>
    <a class="btn btn-success" href="cart.php" style="margin:4px;"><img src="pic/images (10).jpg" alt=""
        style="height:20px;padding:0px;"><?php cartAmount()?> Items added to cart
        </a>
        <button class="btn btn-success">
        <i class="fa fa-search " aria-hidden="true" data-toggle="collapse" data-target="#searchform"></i>
        </button>
    <form class="form-inline my-2 my-lg-0 collapse" id="searchform">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width:50%;">
      <button class="btn btn-outline-success my-2 my-xm-0" type="submit" style="width:35%;">Search</button> 
    </form>
  </nav>