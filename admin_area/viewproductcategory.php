<?php

include_once("includes/db.php");
if (!isset($_SESSION['passw'])) {
    include_once("login.php");
  }else{
$selectproductcategory="select * from product_categories";
$runselectproductcategory=mysqli_query($conn,$selectproductcategory);


?>

<div class="row">
    <div class="col-md-12 col-sm-12">
    <ol class="breadcrumb alert alert-info">
        <li class="breadcrumb-item"><i class="fa fa-dashcube" aria-hidden="true"></i>Dashboard</li>
        <li class="breadcrumb-item">View product Category</li>
        <li class="breadcrumb-item active"></li>
    </ol>
    </div>
    
</div>
<div class="row">
    <div class="col-md-12 col-sm-12">
    <center>
    <div class="jumbotron" style="padding-top:1%;">
        <h3 style="padding-top:1%;">View product category</h3>
        <hr class="my-2">
        <table class="table table-info table-responsive-md table-bordered">
  <thead>
    <tr>
      <th scope="col">product id</th>
      <th scope="col">product title</th>
      <th scope="col">product description</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
  <?php
  while ($fetchselectproductcategory=mysqli_fetch_array($runselectproductcategory)) {
      
  ?>
  
    <tr>
      <th scope="row"><?php echo $fetchselectproductcategory['p_cat_id']; ?></th>
      <td><?php echo $fetchselectproductcategory['p_cat_title']; ?></td>
      <td><?php echo $fetchselectproductcategory['p_cat_desc']; ?></td>
      <td><a href="index.php?deleteproductcategory=<?php echo $fetchselectproductcategory['p_cat_id']; ?>" class="btn btn-danger btn-sm">delete</a></td>
      <td><a href="index.php?editproductcategory=<?php echo $fetchselectproductcategory['p_cat_id']; ?>" class="btn btn-success btn-sm">Edit</a></td>
    </tr>
    <?php
    
  }
    ?>
  </tbody>
</table>
    </div>
    </center>
    </div>
</div>
<?php

  }

?>
