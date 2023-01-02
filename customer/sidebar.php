
<div class="card bg-light mb-3">
<?php
include_once("cdb.php");
if (isset($_SESSION['passwo'])) {
    $selname=$_SESSION['username'];
    $selpass=$_SESSION['passwo'];
    $sel= "select * from buyertable where cusname='$selname' && pass='$selpass'";
    $rsel=mysqli_query($conn,$sel);
    $drsel=mysqli_fetch_array($rsel);
    $propicture=$drsel['profilepic'];
    $profilename=$drsel['cusname'];



?>
<img src="customerpic/<?php echo $propicture?>" class="card-img-top img-fluid img-thumbnail"alt="" style="width:97%; border-radius:72%;">
<div class="card-body">
<h6>Name:<?php echo $profilename ?></h6>
    <?php
   } else{
echo"
'<img src='' class='card-img-top img-fluid img-thumbnail'alt='first log in'>
    <div class='card-body'>
    <h6>Name:first log in</h6>";
   }
    
    
    ?>
        
            <li class="list-group-item <?php if (isset($_GET['my_orders'])) {
     echo "active";
 }?>"><a href="myaccount.php?my_orders" class="text-black-50"><i class="fa fa-list text-success" aria-hidden="true"></i> My Orders</a></li>
 
            <li class="list-group-item <?php if (isset($_GET['pay_offline'])) {
     echo "active";
 }?>"><a href="myaccount.php?pay_offline" class="text-black-50"><i class="fa fa-shopping-bag text-success" aria-hidden="true"></i> Pay offline</a>
      
        
            <li class="list-group-item <?php if (isset($_GET['edit_account'])) {
     echo "active";
 }?>"><a href="myaccount.php?edit_account" class="text-black-50"><i class="fa fa-pencil text-success" aria-hidden="true"></i> Edit Account</a></li> 
      
       
            <li class="list-group-item <?php if (isset($_GET['change_password'])) {
     echo "active";
 }?>">
 <a href="myaccount.php?change_password" class="text-black-50"><i class="fa fa-pencil-square text-success" aria-hidden="true"></i> Change Password</a></li>
 <li class="list-group-item <?php if (isset($_GET['delete'])) {
     echo "active";
 }?>">
 <a href="myaccount.php?delete" class="text-black-50"><i class="fa fa-trash text-success" aria-hidden="true"></i> Delete Account</a></li>
 <li class="list-group-item <?php if (isset($_GET['log_out'])) {
     echo "active";
 }?>">
 <a href="myaccount.php?log_out" class="text-black-50"><i class="fa fa-power-off text-success" aria-hidden="true"></i> Log Out</a></li> 
    </div>


</div>