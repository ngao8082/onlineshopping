<?php
include_once("cincludes\headed.php");
include_once("cincludes\cdb.php");
$selectterms="select * from codnition_terms";
$runselectterms=mysqli_query($conn,$selectterms);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <i class="fa fa-gamepad" aria-hidden="true"></i>Dashboard</li>
                <li class="breadcrumb-item active">Terms & conditions|refund</li>
            </ol>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-header bg-danger">
                    <h4>Policies and Conditions</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <?php
                    while ($fetchterms=mysqli_fetch_array($runselectterms)){
                        
                    
                    ?>
                        <li class="list-group-item"><a href="term.php?termconditions=<?php echo $fetchterms['term_id']; ?>"
                                class="<?php echo 'text-dark active;' ?>">
                                <?php echo $fetchterms['term_title']; ?>
                            </a></li>
                        <?php
                    
                    }
                     ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid">
    <?php
    include_once("footer.php");
    ?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>