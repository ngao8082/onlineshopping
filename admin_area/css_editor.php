<?php
include_once("includes/db.php");
if (!isset($_SESSION['passw'])) {
    include_once("login.php");
  }else{

?>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <i class="fa fa-gamepad" aria-hidden="true"></i>Dashboard</li>
            <li class="breadcrumb-item active">Edit CSS</li>
        </ol>
    </div>
</div>
<?php

$file = "../styles.css";
if (file_exists($file)) {
    $datafile=file_get_contents($file);
}

?>
<form action="" method="post">
    <div class="col-md-12">
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-header">
                <i class="fa fa-pencil" aria-hidden="true"></i>CSS Editors
            </div>
            <textarea name="data_files" id="" cols="134" rows="12" style="border:2px solid grey">
            
            <?php
            
            echo $datafile;
            ?>
            
            </textarea>

            <div class="card-footer justify-content-center ">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" name="subcss_files" class="btn btn-info btn-sm btn-block text-light">
                            <h6>Update Css</h6>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<?php
if (isset($_POST['subcss_files'])) {
    $data_files=$_POST['data_files'];
    $handle=fopen($file,"w");
    fwrite($handle,$data_files);
    fclose($handle);
    echo"<script>alert('Css updated successfully')</script>";
    echo"<script>window.open('index.php?dashboard')</script>";
}
  }
?>