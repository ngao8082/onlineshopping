<?php
include_once("includes/db.php");
if (!isset($_SESSION['passw'])) {
    include_once("login.php");
  }else{
$selectslider="select * from sliders";
$upselectsliders=mysqli_query($conn,$selectslider);
?>

<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">View slider</li>
        </ol>

    </div>
</div>
<div class="row">
<?php

while ($fetchslider=mysqli_fetch_array($upselectsliders)) {
    


?>
    <div class="col-md-4 col-sm-4" style="margin-bottom:3%;">
        <div class="card text-center">
            <div class="card-header bg-info">
                <?php echo $fetchslider['slider_name'] ?>
            </div>
            <div class="card-body">
                <img src="sliderpic/<?php echo $fetchslider['slider_image'] ?>" alt="" class="img-thumbnail" srcset="">

            </div>
            <div class="card-footer text-muted">
                <div class="row">
                    <div class="col-md-6 col-sm-6 justify-content-start">
                        <a href="index.php?deleteslider=<?php echo $fetchslider['slider_id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i> delete</a>
                    </div>
                    <div class="col-md-6 col-sm-6 float-right">
                        <a href="index.php?editslider=<?php echo $fetchslider['slider_id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                    </div>
                </div> 
            </div>
        </div>

    </div>
<?php

  }


?>
</div>
<?php
  }
?>