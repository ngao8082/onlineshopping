<?php
    include("includes/db.php");
    $admni_id = $_POST['admn_id'];
    $admin_email=$_POST['admn_email'];
    $adm_name = $_POST['admn_name'];
    $adm_country = $_POST['admn_country'];
    $adm_contacts = $_POST['admn_contacts'];
    $adm_jobs = $_POST['admn_jobs'];
    $adm_about = $_POST['admn_about'];
    $profilephoto = $_FILES['pisa']['name'];
    echo $profilephoto;
    $tmpproImg = $_FILES['pisa']['tmp_name'];
    move_uploaded_file($tmpproImg,"admniprofil/$profilephoto");
if (isset($_POST['updaUser'])) {
    $pdadm="update admin_table set adm_name='$adm_name',adm_email='$admin_email',adm_country='$adm_country',adm_image='$profilephoto',adm_contact='$adm_contacts',adm_job='$adm_jobs',adm_about='$adm_about' where adm_id='$admni_id'";
    $runpdadm=mysqli_query($conn,$pdadm);
    echo"<script>alert('update successfully view the update on the page that will open below')</script>";
    echo"<script>window.open('index.php?viewuser','_self')</script>";
}else {
    echo"<script>alert('Not update actually technical error occurred')</script>";
    echo"<script>window.open('index.php?viewuser','_self')</script>";
}

?>