<?php

include("includes/db.php");
if (!isset($_SESSION['passw'])) {
  include_once("login.php");
}else {
$selproduct="select * from product";
$rselproduct=mysqli_query($conn,$selproduct);
?>


<div class="row">
<div class="col-md-12 col-sm-12">
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php" class="tetx-dark"><i class="fa fa-tag  brands  "></i>Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">View products</li>
  </ol>
</nav>
</div>
</div>
<div class="row"><!--row 2 begining-->
<div class="col-md-12 col-sm-12">
<table class="table table-bordered table-responsive table-info">
  <thead>
    <tr>
      <th scope="col">product id</th>
      <th scope="col">product title</th>
      <th scope="col">product img</th>
      <th scope="col">product price</th>
      <th scope="col">product sold</th>
      <th scope="col">product keyword</th>
      <th scope="col"> product date</th>
      <th scope="col">product delete</th>
      <th scope="col">product edit</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  while ($fproduct=mysqli_fetch_array($rselproduct)) {
      $proident=$fproduct['product_id'];
      $selpending="select * from pend_orders where productid='$proident'";
      $rselecpendings=mysqli_query($conn,$selpending);
      $numbersold=mysqli_num_rows($rselecpendings);
  
  ?>
    <tr>
      <th scope="row"><?php echo $proident?></th>
      <td><h6><?php echo $fproduct['product_title']; ?></h6></td>
      <td style="margin:0;"><img src="propic/<?php echo $fproduct['product_img1'] ?>" 
      alt="" class="img-thumbnail" style="width:15%;height:1%;padding:0;margin:0;"></td>
      <td><h6>$<?php echo $fproduct['product_price'];?></h6></td>
      <td><?php echo $numbersold?></td>
      <td><h6><?php echo $fproduct['product_keywords']?></h6></td>
      <td><h6><?php echo $fproduct['date']?></h6></td>
      <td><a href="index.php?deletepro=<?php  echo $proident ?>" class="btn btn-danger btn-sm">Delete</a></td>
      <td><a href="index.php?editprodut=<?php  echo $proident ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></td>
    </tr>
    <?php
   }
    
    ?>
  </tbody>
</table>
</div>
</div><!--row 2 end-->
<?php
}

?>