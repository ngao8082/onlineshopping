<?php
include("includes/db.php");
    $admni_name=$_POST['admni_name'];
    $admni_email=$_POST['admni_email'];
    $admni_password=$_POST['admni_password'];
    $confirm_pass=$_POST['confirm_pass'];
    $admni_country=$_POST['admni_country'];
    $admni_contact=$_POST['admni_contact'];
    $admin_abouts=$_POST['admin_abouts'];
    $admni_desc=$_POST['admni_desc'];
    $Admin_img=$_FILES['Admin_img']['name'];
    $temp_admin_img=$_FILES['Admin_img']['tmp_name'];
    move_uploaded_file($temp_admin_img,"admniprofil/$Admin_img");
 if (isset($_POST['Admnisubmission'])) {
     if ($admni_password==$confirm_pass) {
     $insertprofiledetails="insert into admin_table (adm_name,adm_email,adm_pass,adm_image,adm_country,adm_about,adm_contact,adm_job) values ('$admni_name','$admni_email','$admni_password','$Admin_img','$admni_country','$admin_abouts','$admni_contact','$admni_desc')";
     $runinsertprofile=mysqli_query($conn,$insertprofiledetails);
     if ($runinsertprofile) {
        echo"<script>alert('User added successfully')</script>";
        echo"<script>window.open('index.php?viewuser','_self')</script>";   
     }else{
        echo"<script>alert('Internal error occurred during submission')</script>";
        echo"<script>window.open('index.php?viewuser','_self')</script>"; 
     }
 }else {
     echo"<script>alert('The passoword don't match input valid password')</script>";
     echo"<script>window.open('index.php','_self')</script>";
 }
}

?>