<?php
session_start();
include_once("cdb.php");

$customer= $_SESSION['username'];
$customerpass=$_SESSION['passwo'];
if (isset($_GET['c_offpay'])) {
    
    $customer_id=$_GET['c_offpay'];
    
    $status='pending';
    $invoice=mt_rand();
    
    $selcu="select * from buyertable where pass='$customerpass' && cusname='$customer'";
    $ruselcu=mysqli_query($conn,$selcu);
    $fruselcu=mysqli_fetch_array($ruselcu);
    $em=$fruselcu['myemail'];
    $selca="select * from cart where user_email='$em'";
    $ruselca=mysqli_query($conn,$selca);
    $na=mysqli_num_rows($ruselca);    
    while ($fruselca=mysqli_fetch_array($ruselca)) {
        $pcart_id=$fruselca['p_id'];
        $pcart_size=$fruselca['size'];
        $pcart_qty=$fruselca['qty'];
        $price=$fruselca['price']*$pcart_qty;
            $insert_cust_order="insert into my_full_cart (customer_no,Invoice_no,dueAmount,status,quty,size,order_date,cartemail) values ('$customer_id','$invoice','$price','$status','$pcart_qty','$pcart_size',NOW(),'$em')";
            $rinsert=mysqli_query($conn,$insert_cust_order);
            $pendings="insert into pend_orders (customerid,Invoiceno,productid,pqty,psize,porder_status,pendemail) values ('$customer_id','$invoice','$pcart_id','$pcart_qty','$pcart_size','$status','$em')";
            $rpend_order=mysqli_query($conn,$pendings);
            $removefromcart="delete from cart where user_email='$em'";
            $rremovecart=mysqli_query($conn,$removefromcart);
            echo "<script>alert('your order has been submitted successfully')</script>";
            echo "<script>window.open('myaccount.php?my_orders','_self')</script>";
            
            
        
        
    
}
}else {
    echo"<script>alert('Error! Not successfully submitted')</script>";
}
?>