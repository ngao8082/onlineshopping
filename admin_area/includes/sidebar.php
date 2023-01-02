<div class="row">
    <li class="nav-item">
        <a class="nav-link text-light" href="index.php?dashboard"><i class="fa fa-dashcube" aria-hidden="true"></i>
            Dashboard</a>
    </li>
</div>
<div class="row">
    <li class="nav-item">
        <a href="" class="nav-link text-light" data-toggle="collapse" data-target="#products"><i class="fa fa-list"
                aria-hidden="true"></i> Products <i class="fa fa-caret-down" aria-hidden="true"></i></a>
    </li>
    <ul class="flex-column collapse" id="products">
        <a class="text-muted d-block" href="index.php?insertproduct">Add products</a>
        <a class="text-muted d-block" href="index.php?viewproduct">View products</a>
    </ul>
</div>
<div class="row">
    <li class="nav-item">
        <a href="" class="nav-link text-light" data-toggle="collapse" data-target="#productcategory"><i
                class="fa fa-briefcase" aria-hidden="true"></i> Product Category <i class="fa fa-caret-down"
                aria-hidden="true"></i></a></li>
    <ul class="flex-column collapse" id="productcategory">
        <div class="row">
            <a class="text-muted d-block" href="index.php?productcatgerory">Add product category</a>
        </div>
        <div class="row">
            <a class="text-muted d-block" href="index.php?viewproductcategory">View products
                category</a>
        </div>
    </ul>
</div>
<div class="row">
    <li class="nav-item">
        <a href="" class="nav-link text-light" data-toggle="collapse" data-target="#category"><i class="fa fa-bitbucket"
                aria-hidden="true"></i> Category <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
    <ul class="flex-column collapse" id="category">
        <a class="text-muted d-block" href="index.php?addcategory">Add Category</a>
        <a class="text-muted d-block" href="index.php?viewcategory">View Category</a>

    </ul>
</div>
<div class="row">
    <li class="nav-item">
        <a href="" class="nav-link text-light" data-toggle="collapse" data-target="#manu"><i class="fa fa-star"
                aria-hidden="true"></i> Manufacturers <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
    <ul class="flex-column collapse" id="manu">
        <a class="text-muted d-block" href="index.php?addmanfactuter">Add manufacturer</a>
        <a class="text-muted d-block" href="index.php?viewmanufacturers">View Manufacturers</a>

    </ul>
</div>
<div class="row">
    <div class="col-md-12 sm-12">
        <li class="nav-item">


            <a href="" class="nav-link text-light" data-toggle="collapse" data-target="#Boxes"><i class="fa fa-star"
                    aria-hidden="true"></i> Boxes <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
    </div>
    <ul class="flex-column collapse" id="Boxes">
        <a class="text-muted d-block" href="index.php?addobxes">Add Boxes</a>
        <a class="text-muted d-block" href="index.php?viewboxes">View Boxes</a>

    </ul>
</div>

<div class="row">
    <div class="col">
        <li class="nav-item">
            <a href="" class="nav-link text-light" data-toggle="collapse" data-target="#sliders"><i
                    class="fa fa-sliders" aria-hidden="true"></i> Sliders <i class="fa fa-caret-down"
                    aria-hidden="true"></i></a>
        </li>
    </div>

    <ul class="flex-column collapse" id="sliders">
        <a class="text-muted d-block" href="index.php?addslider">Add sliders</a>
        <a class="text-muted d-block" href="index.php?viewsliders">View sliders</a>
    </ul>
</div>
<div class="row">
    <li class="nav-item">
        <a class="nav-link text-light" href="index.php?viewcustomer"><i class="fa fa-buysellads" aria-hidden="true"></i>
            View Customer</a>
    </li>
</div>
<div class="row">
    <li class="nav-item">
        <a class="nav-link text-light" href="index.php?viewmyorder"><i class="fa fa-tags" aria-hidden="true"></i> View
            Orders</a>
    </li>
</div>
<div class="row">
    <li class="nav-item">
        <a class="nav-link text-light" href="index.php?viewpayments"><i class="fa fa-paypal" aria-hidden="true"></i>
            View Payments</a>
    </li>
</div>
<div class="row">
    <li class="nav-item">
        <a class="nav-link text-light" href="index.php?css_editor"><i class="fa fa-pencil" aria-hidden="true"></i> Css
            Editor</a>
    </li>
</div>
<div class="row">
    <div class="col-md-12">
        <li class="nav-item">
            <a href="" class="nav-link text-light" data-toggle="collapse" data-target="#user"><i
                    class="fa fa-users    "></i> Users<i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
    </div>
    <ul class="flex-column collapse" id="user">
        <a class="text-muted d-block" href="index.php?adduser">Add Users</a>
        <a class="text-muted d-block" href="index.php?viewuser">View Users</a>
    </ul>
</div>
<div class="row">
    <li class="nav-item">
        <?php
                    
                    if (!isset($_SESSION['passw'])) {
                        echo" <a class='nav-link text-light' href='index.php?login'><i class='fa fa-sign-in    '></i> Log in</a>";
                    }else {
                      echo "<a class='nav-link text-light' href='logout.php'><i class='fa fa-power-off    '></i> Log Out</a>";
                    }
                    
                    ?>
    </li>
</div>