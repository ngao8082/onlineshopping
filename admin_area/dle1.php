
<?php
include("includes/db.php");
if (isset($_POST['detemyorder'])) {
    $dleteorder=$_POST['delet_title'];
    $dlequery="delete from pend_orders where oder_id='$dleteorder'";
    $rundelequery=mysqli_query($conn,$dlequery);
    if ($rundelequery) {
        echo"<script>alert('deleted successfully')</script>";
        echo"<script>window.open('index.php?viewmyorder','_self')</script>";
    }else {
        echo"<script>alert('Not deleted though')</script>";
        echo"<script>window.open('index.php?viewmyorder','_self')</script>";
    }

}else {
    echo"<script>alert('Not deleted technical error occurred')</script>";
        echo"<script>window.open('index.php?viewmyorder','_self')</script>";
}
?>