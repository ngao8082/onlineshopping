<?php
include("cincludes/headed.php");


?>
  <div class="container">
  <!-- <?php
  // Myipstuff();
  ?> -->
    <ul class="breadcrumb" style="margin-top:5px;">
      <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Home</li>
      <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">My Account</li>
    </ul>
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <?php
            include("sidebar.php");
        ?>
      </div>
      
      <div class="col-md-9 col-sm-9">
     
      <div class="jumbotron jumbotron-fluid" style="padding-top:50px;border-radius:4px;padding-bottom:7px;padding-right:0px;">
        <?php
      if (isset($_SESSION['passwo'])) {
      
      
      
      
        ?>
        <?php
        if (isset($_GET['my_orders'])) {
          include("my_order.php");
        }    
        ?>
         <?php
        if (isset($_GET['delete'])) {
          include("delete.php");
        }    
        ?>
          <?php
        if (isset($_GET['pay_offline'])) {
          include("pay_offline.php");
        }    
        ?>
          <?php
        if (isset($_GET['edit_account'])) {
          include("edit_account.php");
        }    
        ?>
          <?php
        if (isset($_GET['change_password'])) {
          include("change_password.php");
        }    
        ?>
        <?php
        if (isset($_GET['processscheckout'])) {
          include("../processscheckout.php");
        }    
        ?>
          <?php
        if (isset($_GET['log_out'])) {
          include("signout.php");
        }    
        ?>
          <?php
        if (isset($_GET['login'])) {
          include("signup.php");
        }    
        ?>
        
        <?php
        
      }else {
        include("signup.php");
      }
        
        ?>
        
        </div>
      </div>
</div>
      </div>
        <?php
          include("footer.php");
        ?>
      
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>