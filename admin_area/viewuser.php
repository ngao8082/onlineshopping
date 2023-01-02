<?php

include("includes/db.php");
if (!isset($_SESSION['passw'])) {
  include_once("login.php");
}else {
    $selpending="select * from admin_table";
    $rselproduct=mysqli_query($conn,$selpending);
?>


<div class="row">
<div class="col-md-12 col-sm-12">
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php" class="tetx-dark"><i class="fa fa-users" aria-hidden="true"></i>Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">View users</li>
  </ol>
</nav>
</div>
</div>
<!--row 2 begining-->
<div class="col-md-12 col-sm-12">
<table class="table table-bordered table-responsive table-info">
  <thead>
  
    <tr>
    <th scope="col">adm_id</th>
      <th scope="col">adm_name</th>
      <th scope="col">adm_email</th>
      <th scope="col">adm_image</th>
      <th scope="col">adm_country</th>
      <th scope="col">adm_contact</th>
      <th scope="col">adm_job</th>
      <th scope="col">Edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  while ($fproduct=mysqli_fetch_array($rselproduct)) {
  ?>
    <tr>
      <th scope="row"><?php echo htmlspecialchars($fproduct['adm_id']);?></th>
      <td><?php echo htmlspecialchars($fproduct['adm_name']); ?></td>
      <td><?php echo htmlspecialchars($fproduct['adm_email']);?></td>
      <td style="margin:0;"><img src="admniprofil/<?php echo htmlspecialchars($fproduct['adm_image']); ?>" 
      alt="" class="img-thumbnail" style="width:15%;height:1%;padding:0;margin:0;"></td>
      <td><?php echo htmlspecialchars($fproduct['adm_country'])?></td>
      <td><?php echo htmlspecialchars($fproduct['adm_contact'])?></td>
      <td><?php echo htmlspecialchars($fproduct['adm_job'])?></td>
      <td><a href="index.php?edituser=<?php echo htmlspecialchars($fproduct['adm_id'])?>" class="btn btn-success btn-sm" >Edit</a></td>
      <td><a href="index.php?deleteuser=<?php echo htmlspecialchars($fproduct['adm_id'])?>" class="btn btn-danger btn-sm">Delete</a></td>
      
    </tr>
    <?php
   }
    
    ?>
  </tbody>
</table>
</div>
<!--row 2 end-->
<?php
}

?>
