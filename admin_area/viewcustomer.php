<?php

include("includes/db.php");
if (!isset($_SESSION['passw'])) {
  include_once("login.php");
}else {
    $selpending="select * from buyertable";
    $rselproduct=mysqli_query($conn,$selpending);
?>


<div class="row">
<div class="col-md-12 col-sm-12">
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
  <i class="fab fa-tag  brands  "></i>
    <li class="breadcrumb-item"><a href="dashboard.php" class="tetx-dark">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">View Customer</li>
  </ol>
</nav>
</div>
</div>
<div class="row"><!--row 2 begining-->
<div class="col-md-12 col-sm-12">
<table class="table table-bordered table-responsive table-info">
  <thead>
  
    <tr>
      <th scope="col">Customer id</th>
      <th scope="col">Customer name</th>
      <th scope="col">Customer email</th>
      <th scope="col">City</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Country</th>
      <th scope="col">Profile pic</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  while ($fproduct=mysqli_fetch_array($rselproduct)) {
  ?>
    <tr>
      <th scope="row"><?php echo htmlspecialchars($fproduct['cut_id']);?></th>
      <td><h6><?php echo htmlspecialchars($fproduct['cusname']); ?></h6></td>
      <td><h6><?php echo htmlspecialchars($fproduct['myemail']);?></h6></td>
      <td><h6><?php echo htmlspecialchars($fproduct['city'])?></h6></td>
      <td><h6><?php echo htmlspecialchars($fproduct['contact'])?></h6></td>
      <td><h6><?php echo htmlspecialchars($fproduct['address'])?></h6></td>
      <td><h6><?php echo htmlspecialchars($fproduct['country'])?></h6></td>
      <td style="margin:0;"><img src="../customer/customerpic/<?php echo htmlspecialchars($fproduct['profilepic']); ?>" 
      alt="" class="img-thumbnail" style="width:15%;height:1%;padding:0;margin:0;"></td>
      <td><h6><?php echo htmlspecialchars($fproduct['pass'])?></h6></td>
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