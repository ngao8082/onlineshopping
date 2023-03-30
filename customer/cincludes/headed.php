
<?php
session_start();
include_once("../func/func.php");
?>
<!doctype html>
<html lang="en">

<head>
  <title>My Account</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  
  <link rel="stylesheet" href="css\all.css">
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
    <a href="checkout.php" class="text-light"><i class="fas fa-shopping-cart"></i> <?php cartAmount()?> Items in the cart | total sub-price:<?php cartPrice()?></a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

      <ul class="nav justify-content-end  text-white " id="navbarNav">
        <li class="nav-item">
          <a class="nav-link active text-white" href="../register.php"><i class="fab fa-address-book" aria-hidden="true"></i> Register|</a>
        </li>
        <li class="nav-item">
        <?php
        if (!isset($_SESSION['passwo'])) {
          echo"<a class='nav-link text-white' href='myaccount.php'>|<i class='fab fa-user' aria-hidden='true'></i> My Account|</a>";
        }else {
          echo"<a class='nav-link text-white' href='myaccount.php?my_orders'>|<i class='fab fa-user' aria-hidden='true'></i> My Account|</a>";
        }
        
        
        ?>
          
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../cart.php">|<i class="fa fa-shopping-cart" aria-hidden="true"></i> Go to cart|</a>
        </li>
        <li class="nav-item">
        <?php
           if (!isset($_SESSION['passwo'])) {
             echo"<a class='nav-link text-white' href='signup.php'>|<i class='fa fa-sign-in' aria-hidden='true'></i> Login|</a>";
           }else {
             echo"<a class='nav-link text-white' href='../customer/signout.php'>|<i class='fa fa-power-off' aria-hidden='true'></i>Logout|</a>";
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
        <li class="nav-item">
          <a class="nav-link" href="../index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../shop.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Shop</a> 
        </li>
        <li class="nav-item  active">
        <?php
        if (!isset($_SESSION['passwo'])) {
          echo"<a class='nav-link' href=''myaccount.php'><i class='fa fa-user' aria-hidden='true'></i> My account<span class='sr-only'>(current)</span></a>";
        }else {
          echo"<a class='nav-link' href='myaccount.php?my_orders'><i class='fa fa-user' aria-hidden='true'></i> My account<span class='sr-only'>(current)</span></a>";
        }
          
          ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact us</a>
        </li>
      </ul>
    </div>
    <a class="btn btn-success" href="../cart.php" style="margin:4px;"><img src="../pic/images (10).jpg" alt=""
        style="height:20px;padding:0px;"><?php cartAmount()?> Items added to cart</a>
        <button class="btn btn-success">
        <i class="fa fa-search " aria-hidden="true" data-toggle="collapse" data-target="#formsearch"></i>
        </button>
    <form class="form-inline my-2 my-lg-0 collapse" id="formsearch">
      <input class="form-control mr-sm-2" type="search"  placeholder="Search" aria-label="Search" style="width:50%;">
      <button class="btn btn-outline-success my-2 my-xm-0" type="submit" style="width:35%;"><i class="fa fa-search" aria-hidden="true"></i> Search</button> 
    </form>
  </nav>