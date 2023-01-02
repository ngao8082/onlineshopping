<?php

include_once("includes/db.php");
if (!isset($_SESSION['passw'])) {
    include_once("login.php");
  }else{
$selectcategory="select * from categories";
$runselectcategory=mysqli_query($conn,$selectcategory);


?>

<div class="row">
    <div class="col-md-12 col-sm-12">
    <ol class="breadcrumb alert alert-info">
        <li class="breadcrumb-item"><i class="fa fa-dashcube" aria-hidden="true"></i>Dashboard</li>
        <li class="breadcrumb-item">View Category</li>
        <li class="breadcrumb-item active"></li>
    </ol>
    </div>
    
</div>
<div class="row">
    <div class="col-md-12 col-sm-12">
    <center>
    <div class="jumbotron" style="padding-top:1%;">
        <h3 style="padding-top:1%;">View category</h3>
        <hr class="my-2">
        <table class="table table-info table-responsive-md table-bordered">
  <thead>
    <tr>
      <th scope="col">category id</th>
      <th scope="col">category title</th>
      <th scope="col">category top</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
  <?php
  while ($fetchselectcategory=mysqli_fetch_array($runselectcategory)) {
      
  ?>
  
    <tr>
      <th scope="row"><?php echo $fetchselectcategory['cat_id']; ?></th>
      <td><?php echo $fetchselectcategory['cat_title']; ?></td>
      <td><?php echo $fetchselectcategory['cat_top'];?></td>
      <td><a href="index.php?deletecategory=<?php echo $fetchselectcategory['cat_id']; ?>" class="btn btn-danger btn-sm">delete</a></td>
      <td><a href="index.php?editcategory=<?php echo $fetchselectcategory['cat_id']; ?>" class="btn btn-success btn-sm">Edit</a></td>
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