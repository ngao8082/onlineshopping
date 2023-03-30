<div class="row bg-dark">
    <div class="col-sm-4 col-md-4 text-muted">
        <h4 class="text-white text- muted"><i class="fa fa-pagelines" aria-hidden="true"></i> Pages</h4>
        <ul class="text-white">
            <li><a href="shop.php" class="text-muted">Shop</a></li>
            <li><a href="cart.php" class="text-muted">Shopping Cart</a></li>
            <li><a href="customer/myaccount.php" class="text-muted">My account</a></li>
            <li><a href="contact.php" class="text-muted">Contacts</a></li>
        </ul>
    </div>
    <hr>
    <div class="col-sm-4 col-md-4 text-muted">
        <h4 class="text-white"><i class="fa fa-users" aria-hidden="true"></i> User Section</h4>
        <ul class="text-white">
            <li><?php
                       if (!isset($_SESSION['passwo'])) {
                         echo"<a class='text-muted' href='customer/signup.php'>Login</a>";
                       }else {
                           echo"<a class='text-muted' href='customer/signout.php'>Logout</a>";
                       }
                   ?>
            </li>
            <li><a href="register.php" class="text-muted">Register</a></li>
            <li><a href="customer/term.php" class="text-muted">Terms & condition</a></li>
        </ul>
    </div>
    <div class="col-sm-4 col-md-4 text-muted">
        <h4 class="text-white text- muted">Top Products Categories</h4>
        <ul class="text-white">
            <?php
               $conne = mysqli_connect("localhost","root","","shoppingonline");
               $running="select * from product_categories";
               $conn_running=mysqli_query($conne,$running);
               while ($row_cate=mysqli_fetch_array($conn_running)){
                $p_cat_title = $row_cate['p_cat_title'];
                $p_category_id=$row_cate['p_cat_id'];
               echo "
               <li><a href='shop.php?p_cat=$p_category_id' class='text-muted'>$p_cat_title</a></li>
               ";
               }
               ?>
        </ul>
    </div>
    <div class="col-sm-4 col-md-4 text-muted">
        <h4 class="text-white text- muted"><i class="fa fa-barcode    "></i> FInds Us</h4>
        <p>
            <strong>Shopping Online</strong>
            <br>marketCentre
            <br>shopping Online
            <br>+254-796-694-091
            <br>danielngao1999@gmail.com
        </p>
        <li><a href="contact.php" class="text-muted">See our contact page</a></li>
    </div>
    <div class="col-sm-4 col-md-4 text-muted" id="social">
        <h4 class="text-white text- muted"> <i class="fa fa-laptop" aria-hidden="true"></i> Get the latest</h4>
        <p>Dont miss our latest updates</p>
        <form action="" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label for="formGroupExampleInput">Email:</label>
                    </div>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input type="email" class="form-control btn-sm" id="formGroupExampleInput"
                                placeholder="subscribe with Email">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-danger btn-sm">subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>
    </form>
    <hr>
    <div class="col-sm-4 col-md-4">
        <h4 class="text-white">Keep In Touch</h4>
        <p>
            <a href="" class=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href=""><i class="fab fa-google plus" aria-hidden="true"></i></a>
            <a href=""><i class="fab fa-instagram" aria-hidden="true"></i></a>
            <a href=""><i class="fab fa-envelope" aria-hidden="true"></i></a>
            <a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a>
        </p>
    </div>
</div>
</div>