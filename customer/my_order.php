<?php

$spasswo=$_SESSION['passwo'];
$user_name=$_SESSION['username'];
include_once("cdb.php");
$myordersel="select * from buyertable where cusname='$user_name' && pass='$spasswo'";
$comyordersel=mysqli_query($conn,$myordersel);
$fetmyorder=mysqli_fetch_array($comyordersel);
$cusid=$fetmyorder['cut_id'];
$selectfullcart="select * from my_full_cart where customer_no='$cusid'";
$rselectfullcart=mysqli_query($conn,$selectfullcart);
$na=0

?>
<center>
<h4>My Orders</h4>
<p>if you have any question free to <a href="../contact.php">contact us </a>our customer service work<strong>24/7</strong></p>
<?php
while ( $na==0) {
  echo"<h5>do you want to add something to cart <a href='../shop.php'>click here</a></h5>";
break;
}
?>
</center>
<hr>
<div class="table table-responsive">
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Due Amount</th>
      <th scope="col">Invoice No</th>
      <th scope="col">Qty</th>
      <th scope="col">Size</th>
      <th scope="col">Order Date</th>
      <th scope="col">Paid/Unpaid</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  while ($rfetch=mysqli_fetch_array($rselectfullcart)) {
    $oder_no=$rfetch['oder_no'];
    $customer_no=$rfetch['customer_no'];
    $Invoice_no=$rfetch['Invoice_no'];
    $dueAmount=$rfetch['dueAmount'];
    $quty=$rfetch['quty'];
    $order_date=substr($rfetch['order_date'],0,11);
    $size=$rfetch['size'];
    $status=$rfetch['status'];
    while($status=='pending') {
      $dstatus='Unpaid';
    break;
      
    }
    while($status=='complete') {
      $dstatus='paid';
    break;
    }while ($status=='incomplete') {
    $dstatus='incomplete';
    break;
    }
  ?>
    <tr>
      <th scope="row"><?php echo $cusid ?></th>
      <td>$ <?php echo $dueAmount ?></td>
      <td><?php echo $Invoice_no ?></td>
      <td><?php echo $quty ?></td>
      <td><?php echo $size ?></td>
      <td><?php echo $order_date?></td>
      <td><?php echo $dstatus?></td>
      <td>
      <a href="confirm.php?payconfirm=<?php echo $oder_no ?>" class="btn btn-info btn-sm">confirm</a>
      </td>
    </tr>
    <?php

     }
    ?>
  </tbody>
</table>
</div>