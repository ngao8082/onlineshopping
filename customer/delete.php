<center>
<?php
include_once("cdb.php");
if(!isset($_SESSION['passwo'])) {
    echo"<script>window.open('header.php','_self')</script>";

}else {
    $pa=$_SESSION['passwo'];
    $na=$_SESSION['username'];
    while (isset($_POST['yes'])) {
        $del="delete from buyertable where cusname='$na' && pass='$pa'";
        $rdel=mysqli_query($conn,$del);
        if ($rdel) {
           session_destroy();
           echo"<script>window.open('../header.php','_self')</script>";
        }else {
            echo"<script>window.open('myaccount.php?my_orders','_self')</script>";
        }
    break;
    }
}
?>
<div class="container">
    <h4>delete your account</h4>
    <p class="text-muted">Are you sure you want to delete your account?</p>
    <form action="" method="post">
        <a href="myaccount.php?my_order" class="btn btn-success">Cancel,don't delete</a>
        <button type="submit" name="yes" class="btn btn-danger">yes,delete account</button>
    </form>
</div>
</center>