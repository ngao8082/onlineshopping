<?php
include_once("includes\db.php");
$customer= $_SESSION['username'];
$customerpass=$_SESSION['passwo'];
$g="select * from buyertable where cusname='$customer' && pass='$customerpass'";
$rg=mysqli_query($conn,$g);
$drg=mysqli_fetch_array($rg);
$buyerid=$drg['cut_id'];

?>
<div class="card text-dark ">
  <img src="customerpic/14.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
  <center>
  <h2 class="card-title text-dark">PAYMENT METHOD</h2>
  <hr>
    <div class="col-md-12 col-sm-12" style="margin-top:10%;">
    <a href="offline.php?c_offpay=<?php echo $buyerid?>" class="text-dark"><h5>Offline Payment</p></a>
    <a href="" class="text-dark"><h5>PayPal Payment</p></a>
    </div>
    </center>
  </div>
</div>