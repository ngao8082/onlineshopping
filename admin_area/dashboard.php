<?php
if (!isset($_SESSION['passw'])) {
  include_once("login.php");
}else {
  
$passwo=$_SESSION['passw'];
$usernam=$_SESSION['email'];
$myorder="select * from my_order";
$rmyorder=mysqli_query($conn,$myorder);
$rowmyorders=mysqli_num_rows($rmyorder);
$spending_orders="select * from pend_orders limit 0,4";
  $rpending_orders=mysqli_query($conn,$spending_orders);
  $numrows=mysqli_num_rows($rpending_orders);
$selectadmni_table="select * from admin_table where adm_name='$usernam' && adm_pass='$passwo'";
$runselectadm_table=mysqli_query($conn,$selectadmni_table);

?>

<div class="row">
  <!-- row 1 begining-->
  <div class="col-lg-12">
    <!--col-lg-12 begining-->
    <h2>Dashboard</h2>
    <hr>
    <ol class="breadcrumb">
      <!--ol begining-->
      <li class="breadcrumb-item"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</li> 
    </ol>
    <!--ol end-->
  </div>
  <!--col-lg-12 end-->
</div><!-- row 1 end-->
<div class="row">
  <!-- row 2 begining-->
  <div class="col-lg-3 col-md-6">
    <!--col-lg-3 col-md-6 end-->
    <div class="card ">
      <!--card begining-->
      <div class="card-header bg-info">
        <!--card-header begining-->
        <div class="row">
          <!--row begining-->
          <div class="col-sm-6">
            <!--col-xs-3 begining-->
           <i class="fa fa-list text-light" aria-hidden="true" ></i>
          </div>
          <!--col-xs-3 end-->
          <div class="col-sm-6 justify-content-end">
            <div class="row justify-content-end text-light">
              <h2><?php echo $productrow; ?></h2>
            </div>
            <div class="row justify-content-end text-light">
              <h6>Product</h6>
            </div>
            <!--col-xs-9 begining-->

          </div>
          <!--col-xs-9 end-->
        </div>
        <!--row end-->
      </div>
      <!--card-header end-->
      <div class="card-footer">
        <div class="row">
          <div class="col-sm-9 justify-content-end">
            <a href="index.php?viewproduct" class="text-info">
              <span class="pull-left">
                <h5>View Details</h5>
              </span>
            </a>
          </div>
          <div class="col-sm-3">
            <span class="pull-right"><i class="fa fa-arrow-right text-info"></i></span>
          </div>
        </div>
      </div>
    </div>
    <!--card end-->
  </div>
  <!--col-lg-3 col-md-6 end-->
  <div class="col-lg-3 col-md-6">
    <!--col-lg-3 col-md-6 end-->
    <div class="card ">
      <!--card begining-->
      <div class="card-header bg-warning">
        <!--card-header begining-->
        <div class="row">
          <!--row begining-->
          <div class="col-sm-6">
            <!--col-xs-3 begining-->
            <i class="fa fa-users text-light" aria-hidden="true" ></i>
          </div>
          <!--col-xs-3 end-->
          <div class="col-sm-6 justify-content-end">
            <div class="row justify-content-end text-light">
              <h2><?php echo $rowrcusle ;?></h2>
            </div>
            <div class="row justify-content-end text-light">
              <h6>Customers</h6>
            </div>
            <!--col-xs-9 begining-->

          </div>
          <!--col-xs-9 end-->
        </div>
        <!--row end-->
      </div>
      <!--card-header end-->
      <div class="card-footer">
        <div class="row">
          <div class="col-sm-9 justify-content-end">
            <a href="index.php?viewcustomer" class="text-warning">
              <span class="pull-left">
                <h5>View Details</h5>
              </span>
            </a>
          </div>
          <div class="col-sm-3">
            <span class="pull-right"><i class="fa fa-arrow-right text-warning"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <!--col-lg-3 col-md-6 end-->
    <div class="card ">
      <!--card begining-->
      <div class="card-header bg-success">
        <!--card-header begining-->
        <div class="row">
          <!--row begining-->
          <div class="col-sm-3">
            <!--col-xs-3 begining-->
            <i class="fa fa-tags text-light"></i>
          </div>
          <!--col-xs-3 end-->
          <div class="col-sm-9 justify-content-end">
            <div class="row justify-content-end text-light">
              <h2><?php echo  $rowpro; ?></h2>
            </div>
            <div class="row justify-content-end text-light">
              <h6>Product categories</h6>
            </div>

            <!--col-xs-9 begining-->

          </div>
          <!--col-xs-9 end-->
        </div>
        <!--row end-->
      </div>
      <!--card-header end-->
      <div class="card-footer">
        <div class="row">
          <div class="col-sm-9 justify-content-end">
            <a href="index.php?viewproductcategory" class="text-success">
              <span class="pull-left">
                <h5>View Details</h5>
              </span>
            </a>
          </div>
          <div class="col-sm-3">
            <span class="pull-right"><i class="fa fa-arrow-right text-success"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <!--col-lg-3 col-md-6 end-->
    <div class="card ">
      <!--card begining-->
      <div class="card-header bg-danger">
        <!--card-header begining-->
        <div class="row">
          <!--row begining-->
          <div class="col-sm-6">
            <!--col-xs-3 begining-->
          <i class="fa fa-shopping-cart text-light" aria-hidden="true"></i>
          </div>
          <!--col-xs-3 end-->
          <div class="col-sm-6 justify-content-end">
            <div class="row justify-content-end text-light">
              <h2><?php echo $rowmyorders ?></h2>
            </div>
            <div class="row justify-content-end text-light">
              <h6>Orders</h6>
            </div>
            <!--col-xs-9 begining-->

          </div>
          <!--col-xs-9 end-->
        </div>
        <!--row end-->
      </div>
      <!--card-header end-->
      <div class="card-footer">
        <div class="row">
          <div class="col-sm-9 justify-content-end">
            <a href="index.php?viewmyorder" class="text-danger">
              <span class="pull-left">
                <h5>View Details</h5>
              </span>
            </a>
          </div>
          <div class="col-sm-3">
            <span class="pull-right"><i class="fa fa-arrow-right text-danger"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- row 2 end-->
<div class="row"><!--row 3 begining-->
  
  <div class=" col col-md-9 col-sm-6"><!--col-md-9 col-sm-6-->
  <div class="jumbotron jumbotron-fluid"style="padding-top:3px;border-radius:2px;padding-bottom:0px;padding-right:0px;margin-top:2%;"><!--jumbotron jumbotron-fluid-->
      <div class="container-fluid">
      <div class="row bg-info"><h3><i class="fa fa-shopping-cart    "></i> new orders</h3></div>
      <div class="table-responsive">
          <table class="table table-bordered table-md">
          <thead>
    <tr>
      <th scope="col">Order No</th>
      <th scope="col">customer email</th>
      <th scope="col">invoice No</th>
      <th scope="col">product ID</th>
      <th scope="col">product size</th>
      <th scope="col">product qty</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
  <?php
    
    while ($fetchpending=mysqli_fetch_array($rpending_orders)) {
      
      ?>
    
    <tr>
      <th scope="row"><?php echo $fetchpending['customerid'];?></th>
      <td><?php echo $fetchpending['pendemail'];?></td>
      <td><?php echo $fetchpending['Invoiceno'];?></td>
      <td><?php echo $fetchpending['productid'];?></td>
      <td><?php echo $fetchpending['psize'];?></td>
      <td><?php echo $fetchpending['pqty'];?></td>
      <td><?php echo $fetchpending['porder_status'];?></td>
    </tr>
       <?php
     }
     
     ?>
    
  </tbody>
  
          </table>
          <div class="row justify-content-end">
          <a href="" class="justify-content-end text-info" ><span class="pull-left"><h6>View all products</h6></span></a>
           <span class="pull-right"><i class="fa fa-arrow-right"></i></span>
          </div>
      </div>
    </div>
  </div><!--jumbotron jumbotron-fluid-->
  </div>
  <!--col-md-9 col-sm-6-->
  <div class="col-md-3 col-sm-3" style="margin-top:1.5%;">
  <?php
  
  while ($fetcadmn=mysqli_fetch_array($runselectadm_table)) {

  ?>
  
  <p class="bg-dark position-absolute position-sticky-bottom text-info col-sm-4"><?php echo $fetcadmn['adm_job'];?></p>
  <img src="admniprofil/<?php echo $fetcadmn['adm_image'];?>" alt="..." class="img-thumbnail">
  
  <div></div>
  <p><h6>email:</h6><i class="fa fa-envelope text-info" aria-hidden="true"></i> <?php echo $fetcadmn['adm_email'];?></p>
  <h6>phone:</h6><i class="fa fa-phone text-info" aria-hidden="true"></i> <?php echo $fetcadmn['adm_contact'];?><br>
  you would like to have website call osman developers or click <a href="">Osman developers mweene mbesa </a>
  <p><?php echo $fetcadmn['adm_about'];?></p>
</div>

<!--row begining-->
<?php
}
}
?>