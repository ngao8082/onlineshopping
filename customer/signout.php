<?php
session_start();
session_destroy();
echo"<script>window.open('../header.php','_self')</script>";
?>