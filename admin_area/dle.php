<?php
include("includes/db.php");
if (isset($_POST['detepro'])) {
    $hiddenform=$_POST['product_title'];
$delteq="delete from product where product_id='$hiddenform'";
$rundelteq=mysqli_query($conn,$delteq);  
echo"<script>alert('One product has been delete from the peoducts')</script>";
echo"<script>window.open('index.php?viewproduct','_self')</script>";
}
else {
echo"<script>window.open('index.php?viewproduct','_self')</script>";
} 
?>