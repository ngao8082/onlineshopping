<?php
    
   include_once("cdb.php");
   
  
   if (!isset($_POST['subpass'])) {

   }else {
   
    session_start();
    $passs=$_POST['username'];
    $cusnamel=$_POST['passwo'];
    $logquer = " select * from buyertable where pass=$cusnamel";
    $querlo=mysqli_query($conn,$logquer);
    $Queftech= mysqli_fetch_array($querlo);
    $Qnum= mysqli_num_rows($querlo);
    $dcusname=$Queftech['cusname'];
    $dpass=$Queftech['pass'];
        
       $passs=$_POST['username'];
       $cusnamel=$_POST['passwo'];
       $_SESSION['username']=$_POST['username'];
       $_SESSION['passwo']=$_POST['passwo'];
       if($passs==''){
             echo"<script>alert('input your name')</script>";
             echo"<script>window.open('signup.php','_self')</script>";
       }elseif($cusnamel==''){
            echo"<script>alert('Password can not be empty')</script>";
            echo"<script>window.open('signup.php','_self')</script>";  
       }elseif ($passs!=$dcusname) {
           echo"<script>alert('Invalid name')</script>";
           //echo"<script>window.open('signup.php','_self')</script>";
           die();
       }elseif ($cusnamel!=$dpass) {
        echo"<script>alert('Incorrect password')</script>";
        echo"<script>window.open('signup.php','_self')</script>";
    }elseif ($cusnamel!=$dpass || $passs!=$dcusname) {
           echo"<script>alert('Invalid name or incorrect password')</script>";
           echo"<script>window.open('signup.php','_self')</script>";
       }elseif ($Qnum==1) {
        $_SESSION['username']=$passs;
        $_SESSION['passwo']=$cusnamel;
        echo"<script>window.open('customer/myaccount.php?my_orders','_self')</script>";
   }else {
       echo"<script>window.open('../../header.php','_self')</script>";
   }
   }                                         
?>