<?php
include("includes/head.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Home</li>
                    <li class="breadcrumb-item active" aria-current="page" style="padding:0px;">Contact Us</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <?php
              include("includes/sidebar.php");
              ?>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="jumbotron jumbotron-fluid" style="padding-top:3px;">
                    <h4 style="text-align:center;">Feel free to contact us </h4>
                    <p class="text-muted" style="text-align:center;">if you have any question free to <a
                            href="contact.php">contact us</a> our customer service work 24/7</p>
                    <form style="padding:15px 15px;">
                        <div class="form-group">
                            <h6><label for="formGroupExampleInput">Name:</label></h6>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <h6><label for="formGroupExampleInput2">Email:</label></h6>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <h6><label for="formGroupExampleInput2">Subject:</label></h6>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="In short form show your subject">
                        </div>
                        <div class="form-group">
                            <h6><label for="messageText">Message</label></h6>
                            <textarea class="form-control"id="messageText"></textarea>
                        </div>
                        <div class="form col justify-content-center">
                        <center><button type="submit" class="btn btn-success btn-sm">Send message</button></center>
                        </div>
                    </form>
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