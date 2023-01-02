<?php
            include_once("func/func.php");
            $dbs=mysqli_connect("localhost","root","","shoppingonline");
            $cusname=$_POST['cusname'];
            $myemail=$_POST['myemail'];
             $city=$_POST['city']; 
             $pass=$_POST['pass'];
             $confirmpass=$_POST['confirmpass'];
             $contact=$_POST['contact']; 
             $address=$_POST['address']; 
             $country=$_POST['country']; 
             $profilepic=$_FILES['profilepic']['name'];
             $profi=$_FILES['profilepic']['tmp_name'];
             move_uploaded_file($profi,"customer/customerpic/$profilepic");
                    
        if (!isset($_POST['submt'])) {

            echo "<script>window.open('register.php','_self')</script>";        


        }elseif ($pass==$confirmpass) {
                            
                $regquery="insert into buyertable (cusname,myemail,city,contact,address,country,profilepic,pass) values ('$cusname','$myemail','$city','$contact','$address','$country','$profilepic','$pass')"; 
                mysqli_query($dbs,$regquery);
                echo"<script>alert(You have registered successfully)</script>";
                echo "<script>window.open('register.php','_self')</script>";
        }else {
           echo"<script>alert('Error!the password dont match')</script>";
           echo "<script>window.open('register.php','_self')</script>";
        }
            
        session_unset();
                    ?>