<?php

include("includes/db.php");
if (!isset($_SESSION['passw'])) {
  include_once("login.php");
}else {
    $selpending="select * from my_order";
    $rselproduct=mysqli_query($conn,$selpending);
?>


<div class="row">
<div class="col-md-12 col-sm-12">
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
  <i class="fab fa-tag  brands  "></i>
    <li class="breadcrumb-item"><a href="dashboard.php" class="tetx-dark">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">View  payments</li>
  </ol>
</nav>
</div>
</div>
<div class="row"><!--row 2 begining-->
<div class="col-md-8 col-sm-8">
<table class="table table-bordered table-responsive table-info">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">invoiceNo</th>
      <th scope="col">amount</th>
      <th scope="col">pay_mode</th>
      <th scope="col">transaction_id</th>
      <th scope="col">date</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  while ($fproduct=mysqli_fetch_array($rselproduct)) {
     
      

  ?>
    <tr>
      <th scope="row"><?php echo htmlspecialchars($fproduct['id']);?></th>
      <td><h6><?php echo htmlspecialchars($fproduct['invoiceNo']); ?></h6></td>
      <td><h6><?php echo htmlspecialchars($fproduct['amount']);?></h6></td>
      <td><h6><?php echo htmlspecialchars($fproduct['pay_mode'])?></h6></td>
      <td><h6><?php echo htmlspecialchars($fproduct['transaction_id'])?></h6></td>
      <td><h6><?php echo htmlspecialchars($fproduct['date'])?></h6></td>
      <td><a href="index.php?deletepayments=<?php echo htmlspecialchars($fproduct['id'])?>" class="btn btn-danger btn-sm">delete</a></td>
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