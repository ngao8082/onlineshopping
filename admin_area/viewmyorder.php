<?php

include("includes/db.php");
if (!isset($_SESSION['passw'])) {
  include_once("login.php");
}else {
    $selpending="select * from pend_orders";
    $rselproduct=mysqli_query($conn,$selpending);
?>


<div class="row">
<div class="col-md-12 col-sm-12">
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
  <i class="fab fa-tag  brands  "></i>
    <li class="breadcrumb-item"><a href="dashboard.php" class="tetx-dark">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">View  Orders</li>
  </ol>
</nav>
</div>
</div>
<div class="row"><!--row 2 begining-->
<div class="col-md-12 col-sm-12">
<table class="table table-bordered table-responsive table-info">
  <thead>
    <tr>
      <th scope="col">order id</th>
      <th scope="col">customerid</th>
      <th scope="col">invoiceno</th>
      <th scope="col">productid</th>
      <th scope="col">product qty</th>
      <th scope="col">product size</th>
      <th scope="col">order status</th>
      <th scope="col">Customer email</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  while ($fproduct=mysqli_fetch_array($rselproduct)) {
      $productslid=$fproduct['productid'];
      $selectproduct="select * from product where product_id='$productslid'";
      $fetchselectproduct=mysqli_query($conn,$selectproduct);
      while($runselectproduct=mysqli_fetch_array($fetchselectproduct)){

  ?>
    <tr>
      <th scope="row"><?php echo htmlspecialchars($fproduct['oder_id']);?></th>
      <td><h6><?php echo htmlspecialchars($fproduct['customerid']); ?></h6></td>
      <td><h6><?php echo htmlspecialchars($fproduct['Invoiceno']);?></h6></td>
      <td><h6><?php echo htmlspecialchars($runselectproduct['product_title'])?></h6></td>
      <td><h6><?php echo htmlspecialchars($fproduct['pqty'])?></h6></td>
      <td><h6><?php echo htmlspecialchars($fproduct['psize'])?></h6></td>
      <td><h6><?php echo htmlspecialchars($fproduct['porder_status'])?></h6></td>
      <td><h6><?php echo htmlspecialchars($fproduct['pendemail'])?></h6></td>
      <td><a href="index.php?deletmyorder=<?php echo htmlspecialchars($fproduct['oder_id'])?>" class="btn btn-danger">delete</a></td>
    </tr>
    <?php
   }
}
    ?>
  </tbody>
</table>
</div>
</div><!--row 2 end-->
<?php
}

?>