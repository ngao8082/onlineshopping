<?php



$conn=mysqli_connect('localhost','root','','shoppingonline');
$product_title = $_POST['product_title'];
$product_cat = $_POST['product_cat'];
$product_categ = $_POST['categ'];
$product_price = $_POST['product_price'];
$product_keywords = $_POST['product_keywords'];
$product_desc = $_POST['product_desc'];
$product_sale = $_POST['product_sale'];
$product_label = $_POST['product_label'];
$product_manu=$_POST['product_manu'];

$product_img1=$_FILES['prodImg1']['name'];
$product_img2=$_FILES['prodImg2']['name'];
$product_img3=$_FILES['prodImg3']['name'];
$temp_name1=$_FILES['prodImg1']['tmp_name'];
$temp_name2=$_FILES['prodImg2']['tmp_name'];
$temp_name3=$_FILES['prodImg3']['tmp_name'];
move_uploaded_file($temp_name1,"propic/$product_img1");
move_uploaded_file($temp_name2,"propic/$product_img2");
move_uploaded_file($temp_name3,"propic/$product_img3");


if (isset($_POST['enterProducts'])) {
  

$insert_pro = "insert into product (p_cat_id,cat_id,manufacture_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keywords,product_label,produc_sale) values
('$product_cat','$product_categ','$product_manu',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keywords','$product_label','$product_sale')";
$run_pro = mysqli_query($conn,$insert_pro);
if ($run_pro){
       echo "<script>alert('product has been inserted succefully')</script>";
       echo "<script>window.open('index.php?dashboard','_self')</script>";
  }else {
    echo "<script>alert('Not submmitted succefully')</script>";
         echo "<script>window.open('insert.php','_self')</script>";
  }
}else {
  echo "<script>alert('error occurred during submission')</script>";
       echo "<script>window.open('insert.php','_self')</script>";
}
session_unset();
?>