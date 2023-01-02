<?php

$conn=mysqli_connect('localhost','root','','shoppingonline');
$namebuyer=$_SESSION['username'];
$passbuyer=$_SESSION['passwo'];
$byquery="select * from buyertable where cusname='$namebuyer' && pass='$passbuyer'";

$rbyquery=mysqli_query($conn,$byquery);
$fbyquery=mysqli_fetch_array($rbyquery);
$idu=$fbyquery['cut_id'];
$fename=$fbyquery['cusname'];
$feEmail=$fbyquery['myemail'];
$feCity=$fbyquery['city'];
$fEcontact=$fbyquery['contact'];
$feAddress=$fbyquery['address'];
$feFle=$fbyquery['profilepic'];


while (isset($_POST['eUpdate'])) {
    $eName=$_POST['eName'];
    $eEmail=$_POST['eEmail'];
    $eCity=$_POST['eCity'];
    $Econtact=$_POST['Econtact'];
    $eAddress=$_POST['eAddress'];
    $picha=$_FILES['cpicha']['name'];
    $temp_picha=$_FILES['cpicha']['tmp_name'];
    move_uploaded_file($temp_picha,"customerpic/$picha");
    $upadtetable="update buyertable set cusname='$eName',myemail='$eEmail',city='$eCity',contact='$Econtact',address='$eAddress',profilepic='$picha' where cut_id='$idu'";
    $rupadatetable=mysqli_query($conn,$upadtetable);
    if ($rupadatetable) {
        echo"<script>alert('updated successfully...relogin to update your account')</script>";
        echo"<script>window.open('signout.php','_self')</script>";
    } else {
        echo"<script>alert('not update...error occurred')</script>";
    echo"<script>window.open('myaccount.php?my_orders','_self')</script>";
    }
    
break;
}


?>
<form action=""  method="post" style="padding:15px 15px;" enctype="multipart/form-data">
    <div class="form-group">
        <h6><label for="formGroupExampleInput">Customer Name:</label></h6>
        <input type="text" name="eName" value="<?php echo $fename ?>" class="form-control" id="formGroupExampleInput" placeholder="Enter name">
    </div>
    <div class="form-group">
        <h6><label for="formGroupExampleInput2">Customer Email:</label></h6>
        <input type="text" name="eEmail" value="<?php echo $feEmail ?>" class="form-control" id="formGroupExampleInput2" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <h6><label for="formGroupExampleInput2">Customer City:</label></h6>
        <input type="text" Name="eCity" value="<?php echo $feCity ?>" class="form-control" id="formGroupExampleInput2"
            placeholder="In short form show your subject">
    </div>
    <div class="form-group">
        <h6><label for="formGroupExampleInput2">Customer contact:</label></h6>
        <input type="text" name="Econtact" value=" <?php echo $fEcontact ?> " class="form-control" id="formGroupExampleInput2"
            placeholder="In short form show your subject">
    </div>
    <div class="form-group">
    
        <h6><label for="formGroupExampleInput2">Customer Address:</label></h6>
        <input type="text" Name="eAddress" value="<?php echo $feAddress ?>" class="form-control" id="formGroupExampleInput2"
            placeholder="In short form show your subject">
    </div>
    <div class="form-group">
    <h6><label for="exampleFormControlFile1">Profile picture</label></h6>
    <input type="file" name="cpicha" class="form-control-file" id="exampleFormControlFile1">
    <img src="customerpic/<?php echo $feFle ?>" class="card-img-top img-fluid img-thumbnail"alt="" style="width:12%;height:13%;">
  </div>
       <center>
       <button type="submit" name="eUpdate" class="btn btn-success">Update</button>
       </center>
        
    </div>
</form>
<?php



?>