<?php 

include_once("includes/db.php");
session_start();
$_SESSION['adm_name']=$_POST['adm_name'];
$_SESSION['passw']=$_POST['passw'];  
$em = $_SESSION['adm_name'];
$pass= $_SESSION['passw'];
if(isset($_POST['login'])) {
    $seleadm="select * from admin_table where adm_pass='$pass' && adm_name='$em'";
    $rseleadm=mysqli_query($conn,$seleadm);
    $rrow=mysqli_num_rows($rseleadm);
    $fsele=mysqli_fetch_array($rseleadm);
    $fpassw=$fsele['adm_pass'];
    $fem=$fsele['adm_name'];
    if ($pass==$fpassw && $em==$fem) {
        echo "<script>alert('welcome back this is admin area')</script>";
        echo "<script>window.open('index.php?dashboard','_self')</script>";
    }else {
        echo"<script>alert('Either incorrect password or name')</script>";
        echo"<script>window.open('index.php?login','_self')</script>";
    }
}else {
    echo"<script>window.open('index.php?login','_self')</script>";
}



?>