<?php
include_once("includes/head.php");

?>
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Home</li>
            <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Shop</li>
        </ul>
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <?php
                   include("includes/sidebar.php");
                ?>
            </div>
            <div class="col-md-9 col-sm-9">
        
            <?php
            if (!isset($_GET['p_cat'])) {
                if (!isset($_GET['cat'])) {
           echo"
           <div class='jumbotron jumbotron-fluid'
             style='margin-left:0px;padding:15px;border-radius:7px'>
                    <center>
                  <h5>SHOP</h5>
                  </center>
                  <hr>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab optio necessitatibus perspiciatis asperiores maxime odit excepturi labore obcaecati quaerat
                   velit nostrum omnis magnam repellat dolore similique reprehenderit, autem accusamus quisquam.</p>
           </div>
                ";
                }
            }
            ?> 
            <div class="row">
            
              <?php functionShop();?>
            
            </div>
            <div class="row">
                   <?php
                   GetCatDesc();
                   ?>
            </div>
            <div class="row">
                   <?php
                  GetproDesc();
                   ?>
                   </div>
                 
             </div>
         </div>
    
        </div>
                  
            
       </div>

            <?php
              include("footer.php");
            ?>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
