<center>
<?php
include_once("cdb.php");
while (isset($_POST['confirmsu'])) {
    $emial=$_SESSION['username'];
    $passwo=$_SESSION['passwo'];
    $oldword=$_POST['oldword'];
    $newpass=$_POST['newpass'];
    $confirmpass=$_POST['confirmpass'];
    $selecconfirm="select * from buyertable where  cusname='$emial' && pass='$passwo'";
    $rselecconfrim=mysqli_query($conn,$selecconfirm);
    $fetrselcconfirm=mysqli_fetch_array($rselecconfrim);
    $mailselect=$fetrselcconfirm['pass'];
    if($oldword==$mailselect) {
        if ($newpass==$confirmpass) {
            $code="update buyertable set pass='$newpass' where pass='$passwo'";
            mysqli_query($conn,$code);
            echo"<script>alert('updated succefully relogin to access your account')</script>";
            echo"<script>window.open('signout.php','_self')</script>";
        } else {
            echo"<script>alert('passwword dont match try again later')</script>";
            echo"<script>window.open('signout.php','_self')</script>";
        }
    }else {
        echo"<script>alert('the password dont match your password try again later')</script>";
        echo"<script>window.open('signout.php','_self')</script>";
    }
break;
}


?>
    <h4>Change Password:</h4>
    <hr>
<div class="col-md-6 col-sm-6">
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <h6><label for="formGroupExampleInput2">Old Password:</label></h6>
        <input type="password" name="oldword" class="form-control" id="formGroupExampleInput2" placeholder="Enter Old password">
    </div>
    <div class="form-group">
        <h6><label for="formGroupExampleInput2">New Password:</label></h6>
        <input type="password"name="newpass"  class="form-control" id="formGroupExampleInput2" placeholder="enter new password">
    </div>
    <div class="form-group">
        <h6><label for="messageText">Confirm New Password:</label></h6>
        <input type="password" name="confirmpass" class="form-control" id="formGroupExampleInput2" placeholder="Confirm new password">
    </div>
        <div class="form col justify-content-center">
            <button type="submit" name="confirmsu"  class="btn btn-success">Send</button>
    </div>
</form>
</div>
</center>