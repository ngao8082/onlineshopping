<?php

include("includes/db.php");
$hideenid=$_POST['product_hidden'];
$eproduct_title = $_POST['product_title'];
$eproduct_cat = $_POST['product_cat'];
$eproduct_categ = $_POST['categ'];
$eproduct_price = $_POST['product_price'];
$eproduct_keywords = $_POST['product_keywords'];
$eproduct_desc = $_POST['product_des'];
$product_sale = $_POST['product_sale'];
$product_label = $_POST['product_label'];

$eproduct_img1=$_FILES['prodImg1']['name'];
$eproduct_img2=$_FILES['prodImg2']['name'];
$eproduct_img3=$_FILES['prodImg3']['name'];
$temp_name1=$_FILES['prodImg1']['tmp_name'];
$temp_name2=$_FILES['prodImg2']['tmp_name'];
$temp_name3=$_FILES['prodImg3']['tmp_name'];
move_uploaded_file($temp_name1,"propic/$eproduct_img1");
move_uploaded_file($temp_name2,"propic/$eproduct_img2");
move_uploaded_file($temp_name3,"propic/$eproduct_img3");
if (isset($_POST['updateProducts'])) {
   $updatepro="update product set p_cat_id='$eproduct_cat',cat_id='$eproduct_categ',product_title='$eproduct_title',product_img1='$eproduct_img1',product_img2='$eproduct_img2',product_img3='$eproduct_img3',product_price='$eproduct_price',product_desc='$eproduct_desc',product_keywords='$eproduct_keywords'product_label='$product_label',produc_sale='$product_sale' where product_id='$hideenid'";
   $runupdatepro=mysqli_query($conn,$updatepro);
   echo"<script>alert('Products updated successfully')</script>";
echo"<script>window.open('index.php?viewproduct','_self')</script>"; 
} else {
    echo"<script>alert('Products not updated')</script>";
echo"<script>window.open('index.php?viewproduct','_self')</script>";
}


?>