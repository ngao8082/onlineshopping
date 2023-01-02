<?php

include_once("cincludes\headed.php");
include_once("cdb.php");
?>
<?php
if (isset($_GET['payconfirm'])) {
    

    
    $payid=$_GET['payconfirm'];
    echo  $payid;
    if (!isset($_POST['Confirm_pay'])){
    }else {
        $invoice=$_POST['invoice'];
        $Amount=$_POST['Amount'];
        $Paymentmode=$_POST['Paymentmode'];
        $Transactid=$_POST['Transactid'];
        $tarehe=$_POST['tarehe'];
        $selconfirm="select * from my_full_cart where oder_no=$payid";
        $rselconfirm=mysqli_query($conn,$selconfirm);
        $frselconfirm=mysqli_fetch_array($rselconfirm);
        $pri=$frselconfirm['dueAmount'];
        $inconfirm="insert into my_order(invoiceNo,amount,pay_mode,transaction_id,date) values ('$invoice','$Amount','$Paymentmode','$Transactid','$tarehe')";
        $rinconfirm=mysqli_query($conn,$inconfirm);
        if ($Amount==$pri) {
            $cstatus='complete';
            $upmyfullcart="update my_full_cart set status='$cstatus' where oder_no=$payid";
            $rupmyfullcart=mysqli_query($conn,$upmyfullcart);
            $upendings="update pend_orders set porder_status='$cstatus' where oder_id=$payid";
            $rupenings=mysqli_query($conn,$upendings);
            echo "<script>alert('payment completed successfully')</script>";
            echo "<script>window.open('myaccount.php?my_orders','_self')</script>";
        }else {
            $cstatus='incomplete';
            $upmyfullcart="update my_full_cart set status='$cstatus' where oder_no=$payid";
            $rumyfullcart=mysqli_query($conn,$upmyfullcart);
            $upendings="update pend_orders set porder_status='$cstatus' where oder_id=$payid";
            $rupenings=mysqli_query($conn,$upendings);
            echo "<script>alert('payment successfully though not complete')</script>";
            echo "<script>window.open('myaccount.php?my_orders','_self')</script>";
        }
        
     
        
    }
}
    
    ?>
    <div class="container">
        <ul class="breadcrumb" style="margin-top:5px;">
            <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Home</li>
            <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">My Account</li>
        </ul>
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <?php
                    include("sidebar.php");
                ?>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="jumbotron jumbotron-fluid" style="padding-top:3px;">
                    <h4 style="text-align:center;">Please confirm your payment</h4>
                    <form style="padding:15px 15px;" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <h6><label for="formGroupExampleInput">Invoice No:</label></h6>
                            <input type="text"name="invoice" class="form-control" id="formGroupExampleInput"
                                placeholder="Enter Invoice No">
                        </div>
                        <div class="form-group">
                            <h6><label for="formGroupExampleInput2">Amount sent:</label></h6>
                            <input type="text" name="Amount" class="form-control" id="formGroupExampleInput2"
                                placeholder="Enter Amount send">
                        </div>
                        <div class="form-group">
                        <h6><label for="formGroupExampleInput2">select Payment mode:</label></h6>
                            <select name="Paymentmode" class="custom-select custom-select-md" id="formGroupExampleInput2">
                                <option selected>select Payment mode</option>
                                <option value="Mpesa">Mpesa</option>
                                <option value="Western union">Western union</option>
                                <option value="Paypal">Paypal</option>
                                <option value="Paypal">Atm Card</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h6><label for="formGroupExampleInput2">Transaction/Reference ID</label></h6>
                            <input type="text" name="Transactid" class="form-control" id="formGroupExampleInput2">
                        </div>
                        <div class="form-group">
                            <h6><label for="formGroupExampleInput2">Date:</label></h6>
                            <input type="date" name="tarehe"class="form-control" id="formGroupExampleInput2">
                        </div>
                        <center>
                        <div class="form col justify-content-center">
                            <button type="submit" name="Confirm_pay" class="btn btn-success">Confirm payment</button>
                        </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
        <?php
          include("../footer.php");
        ?>
    </div>
    