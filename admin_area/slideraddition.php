<?php
include_once("includes/db.php");
 if (isset($_POST['slidersubmission'])) {
     $slidername=$_POST['slidername'];
     $sliderurl=$_POST['sliderurl'];
     $sliderimages=$_FILES['sliderimages']['name'];
     $tmpsliderimages=$_FILES['sliderimages']['tmp_name'];
     move_uploaded_file($tmpsliderimages,"sliderpic/$sliderimages");
     $selectslidernumber="select * from sliders";
     $runselectslidernumber=mysqli_query($conn,$selectslidernumber);
     $numberofslider=mysqli_num_rows($runselectslidernumber);
     if ($numberofslider==5) {
        echo"<script>alert('slider should not exceed six delete some sliders')</script>";
        echo"<script>window.open('index.php?viewsliders','_self')</script>"; 
     }else {
        $insertslider="insert into sliders (slider_name,slider_image,slider_url) values ('$slidername','$sliderimages','$sliderurl')";
        $runinsertslider=mysqli_query($conn,$insertslider);
     }
     if ($runinsertslider) {
         echo"<script>alert('slider added successfully')</script>";
         echo"<script>window.open('index.php?viewsliders','_self')</script>";
     }else {
        echo"<script>alert('slider not added try again later')</script>";
        echo"<script>window.open('index.php?viewsliders','_self')</script>";
     }
 }else {
    echo"<script>alert('Technical errror occurred try again later')</script>";
    echo"<script>window.open('index.php?viewsliders','_self')</script>";
 }

?>