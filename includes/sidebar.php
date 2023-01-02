<?php
include_once("func/func.php");
include_once("db.php");
?>

<div class="card" style="margin-bottom:10px;">
    <div class="card-header">
        <h5>
            Manufacturers
            <div class="pull-right">
                <a href="" class="text-dark">
                    <span class="nav-toggle hide-show ">hide</span>
                </a>

            </div>
        </h5>
        <div class="input-group">
            <input type="text" name="country" class="form-control" id="manu-table-filters" data-filters="#manu_filters"
                data-action="filter" placeholder="Filter manufacturers">
            <div class="input-group-append">
                <span class="input-group-text"><a href=""><i class="fa fa-search" aria-hidden="true"></a></i></span>
            </div>

        </div>
    </div>
    <div class="collapsecollapse">
        <ul class="list-group list-group-flush" >
            <?php
               $selectmanufacturer="select * from manufacturer where manu_top='yes'";
               $conselectmanufacturer=mysqli_query($conn,$selectmanufacturer);
               while ($fetchmanu=mysqli_fetch_array($conselectmanufacturer)) {
                
                   $manu_id=$fetchmanu['manu_id'];
                   $manu_title=$fetchmanu['manu_title'];
                   $manu_image=$fetchmanu['manu_image'];
                   if ($manu_image=="") {
                       
                   }else {
                       $manu_image="<img src='admin_area/otherimage/$manu_image' alt='...' width=20px >&nbsp";
                   }
                   echo"<li class='list-group-item checkbox checkbox-primary' style='background:#dddddd' id='manuf'><h6>
                   
                   <label>
                   <input value='$manu_id' type='checkbox' name='' id=''>
                   <a href='' >
                   $manu_image
                   $manu_title
                   </label>
                   
                   </a>
                   
                   </h6>
                   
                   
                   </li>";
               }
               $selectmanufacturer="select * from manufacturer where manu_top='no'";
               $conselectmanufacturer=mysqli_query($conn,$selectmanufacturer);
               while ($fetchmanu=mysqli_fetch_array($conselectmanufacturer)) {
                
                   $manu_id=$fetchmanu['manu_id'];
                   $manu_title=$fetchmanu['manu_title'];
                   $manu_image=$fetchmanu['manu_image'];
                   if ($manu_image=="") {
                       
                   }else {
                       $manu_image="<img src='admin_area/otherimage/$manu_image' alt='...' width=20px >&nbsp";
                   }
                   echo"<li class='list-group-item checkbox checkbox-primary'><h6>
                   
                   <label>
                   <input value='$manu_id' type='checkbox' name='' id=''>
                   <a href=''>
                   $manu_image
                   $manu_title
                   </label>
                   
                   </a>
                   
                   </h6>
                   
                   
                   </li>";
               }

            ?>
        </ul>
    </div>
</div>
<div class="card" style="margin-bottom:10px;">
    <div class="card-header">
        <h5>

            Products Category


            <div class="pull-right">
                <a href="" class="text-dark">
                    <span class="nav-toggle hide-show ">hide</span>
                </a>

            </div>

        </h5>
        <div class="input-group">
            <input type="text" name="country" class="form-control" id="manu-table-filters" data-filters="#manu_filters"
                data-action="filter" placeholder="Filter product Category" style="font-size: 90%;">
            <div class="input-group-append">
                <span class="input-group-text" style="font-size: 90%;"><a href=""><i class="fa fa-search"
                            aria-hidden="true"></a></i></span>
            </div>
        </div>
    </div>

    <div class="li-collapse collapse-data">

        <ul class="list-group list-group-flush" id="manu_filters">
            <?php
    getPcats();
    ?>
        </ul>
    </div>
</div>
<div class="card" style="margin-top:10px;">
    <div class="card-header">
        <h5>
            Categories
            <div class="pull-right">
                <a href="" class="text-dark">
                    <span class="nav-toggle hide-show ">hide</span>
                </a>

            </div>
        </h5>
        <div class="input-group">
            <input type="text" name="country" class="form-control" id="manu-table-filters" data-filters="#manu_filters"
                data-action="filter" placeholder="Filter Category">
            <div class="input-group-append">
                <span class="input-group-text"><a href=""><i class="fa fa-search" aria-hidden="true"></a></i></span>
            </div>

        </div>
    </div>

    <div class=" catcollapse">
        <?php
      getCate();
    ?>
    </div>
</div>