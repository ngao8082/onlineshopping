<?php

include_once("includes/headers.php");
include_once("includes/db.php");

 
    $selc="select * from product";
    $rselc=mysqli_query($conn,$selc);
    $ftcrsel=mysqli_fetch_array($rselc);
    $productrow=mysqli_num_rows($rselc);
    $product_id=['product_id'];
    $p_cat_id=['p_cat_id'];
    $cat_id=['cat_id'];
    $product_title=['product_title'];
    $product_img1=['product_img1'];
    $product_desc=[''];
    $productkeywords=['productkeywords'];
    $selectproductcategories="select * from product_categories";
    $rselcpro=mysqli_query($conn,$selectproductcategories);
    $rowpro=mysqli_num_rows($rselcpro);
    $cusselc="select * from buyertable";
    $rcusle=mysqli_query($conn,$cusselc);
    $rowrcusle=mysqli_num_rows($rcusle);
    $profile="select * from admin_table";
    $rprofile=mysqli_query($conn,$profile);
    $rowprofile=mysqli_num_rows($rprofile);



?>

<body>
    <div class="container-fluid" style="padding:0%;">
        <!--container-fluid beginning-->
        
        <ul class="navbar nav nav-tabs bg-dark">
            <!--ul beginning-->
            <a class="navbar-brand text-light" href="#">ADMIN AREA</a>
            <li class="nav-item dropdown justify-content-end bg-dark">
                <a class="nav-link collapse-toggle text-light" data-toggle="collapse" data-target="#dsa " href="#" 
                    aria-haspopup="false" aria-expanded="true"><?php
                    if (!isset($_SESSION['passw'])) {
                        echo"<i class='fa fa-sign-in' aria-hidden='true'></i> Login first";
                    } else{
                        $pass=$_SESSION['passw'];
                        $emai=$_SESSION['adm_name'];
                        $selpro="select * from admin_table where adm_pass='$pass' && adm_name='$emai'";
                        $ruselpro=mysqli_query($conn,$selpro);
                        $fetchruselpro=mysqli_fetch_array($ruselpro);
                        if (! $fetchruselpro) {
                            # code...
                            echo 'cannot be null';
                        }else{
                        $admimg=$fetchruselpro['adm_image'];
                        echo $fetchruselpro['adm_name'];
                    }
                    }
                    ?></a>
                <ul class="collapse" id="dsa">
                <a class="dropdown-item text-light " href="index.php?viewuser" style="margin:0;"><i class="fa fa-user brand-user   ">
                </i> profile <span class="badge badge-pill badge-info"><?php echo $rowprofile; ?></span></a>
                    <a class="dropdown-item text-light" href="index.php?viewproduct" style="margin:0;"><i class="fa fa-envelope    ">
                    </i> products <span class="badge badge-pill badge-info"><?php echo $productrow; ?></span></a>
                    <a class="dropdown-item text-light" href="index.php?viewcustomer" style="margin:0;"><i class="fa fa-users">
                    </i> Customer <span class="badge badge-pill badge-info"><?php echo $rowrcusle; ?></span></a>
                    <a class="dropdown-item text-light" href="index.php?viewproductcategory" style="margin:0;"><i class="fa fa-tags">
                    </i> product categories <span class="badge badge-pill badge-info"><?php echo  $rowpro; ?></span></a>

                    <?php
                    
                    if (!isset($_SESSION['passw'])) {
                        echo" <a class='dropdown-item text-light' href='index.php?login' style='margin:0;'><i class='fa fa-sign-in    '>
                        </i> Login</a>";
                    }else {
                      echo "<a class='dropdown-item text-light' href='logout.php' style='margin:0;'><i class='fa fa-power-off    '>
                      </i> Log Out</a>";
                    }
                    
                    ?>
                    
                </ul>
            </li>
        </ul>
        
        <!--ul end-->

        <div class="row">
            <!--row begining-->
            <div class="col-md-2 col-sm-3 bg-dark">
                <ul class="nav flex-column" >
                <?php
                include_once("includes/sidebar.php");
                
                ?>
                </ul>
            </div>
            <div class="col-md-10">
                 <?php
                  if (isset($_GET['dashboard'])) {
                    include_once("dashboard.php");
                  }elseif (isset($_GET['insertproduct'])) {
                    include_once("insert.php");
                  }elseif (isset($_GET['viewproduct'])) {
                    include_once("viewproduct.php");
                  }elseif (isset($_GET['deletepro'])) {
                     include_once("deleteproduct.php");
                  }elseif (isset($_GET['editprodut'])) {
                    include_once("editproduct.php");
                  }elseif (isset($_GET['productcatgerory'])) {
                    include_once("addproductcategory.php");
                  }elseif (isset($_GET['viewproductcategory'])) {
                    include_once("viewproductcategory.php");
                  }elseif (isset($_GET['deleteproductcategory'])) {
                    include_once("deleteproductcategory.php");
                  }elseif (isset($_GET['editproductcategory'])) {
                    include_once("editproductcategory.php");
                  }elseif (isset($_GET['addcategory'])) {
                    include_once("addcategory.php");
                  }elseif (isset($_GET['viewcategory'])) {
                    include_once("viewcategory.php");
                  }elseif (isset($_GET['deletecategory'])) {
                    include_once("deletecategory.php");
                  }elseif (isset($_GET['editcategory'])) {
                   include_once("editcategory.php");
                   }elseif (isset($_GET['viewcustomer'])) {
                    include_once("viewcustomer.php");
                    }elseif (isset($_GET['viewmyorder'])) {
                        include_once("viewmyorder.php");
                    }elseif (isset($_GET['deletmyorder'])) {
                        include_once("deletemyorder.php");
                    }elseif (isset($_GET['viewpayments'])) {
                        include_once("viewpayments.php");
                    }elseif (isset($_GET['deletepayments'])) {
                        include_once("deletepayments.php");
                    }elseif (isset($_GET['adduser'])) {
                        include_once("adduser.php");
                    }elseif (isset($_GET['viewuser'])) {
                        include_once("viewuser.php");
                    }elseif (isset($_GET['deleteuser'])) {
                        include_once("deleteuser.php");
                    }elseif (isset($_GET['edituser'])) {
                        include_once("edituser.php");
                    }elseif (isset($_GET['addslider'])) {
                        include_once("addslider.php");
                    }elseif (isset($_GET['viewsliders'])) {
                        include_once("viewsliders.php");
                    }elseif (isset($_GET['deleteslider'])) {
                        include_once("deleteslider.php");
                    }elseif (isset($_GET['editslider'])) {
                        include_once("editslider.php");
                    }elseif (isset($_GET['css_editor'])) {
                        include_once("css_editor.php");
                    }elseif (isset($_GET['login'])) {
                        include_once("login.php");
                    }elseif (isset($_GET['addobxes'])) {
                        include_once("boxes.php");
                    }elseif (isset($_GET['addobxes'])) {
                        include_once("boxes.php");
                    }
                  
                 
                 ?>
            </div>
        </div>
        <!--row begining-->

    </div><!-- container-fluid end-->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>