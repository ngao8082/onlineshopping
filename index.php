<?php
include_once("func/func.php");
include_once("includes/head.php");

?>

  <div class="container" id="slider">
    <div class="col-md-12">
      <div class="bd-example">
        <div id="Mycarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#Mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="#Mycarousel" data-slide-to="1"></li>
            <li data-target="#Mycarousel" data-slide-to="2"></li>
            <li data-target="#Mycarousel" data-slide-to="3"></li>
            <li data-target="#Mycarousel" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">

            <?php
                           $_get_slides = "select * from sliders LIMIT 0,1";
                           $run_slides = mysqli_query($conn,$_get_slides);
                           while ($row_slides=mysqli_fetch_array($run_slides)) {
                             $slider_name = $row_slides['slider_name'];
                             $slider_image = $row_slides['slider_image'];
                             
                             echo "
  
                             <div class='carousel-item active'>
                             
                             <img src='admin_area/sliderpic/$slider_image' class='d-block w-100' alt='...'>
                             
                           </div>";
                           }

                           $_get_slides = "select * from sliders LIMIT 1,4";
                           $run_slides = mysqli_query($conn,$_get_slides);
                           while ($row_slides=mysqli_fetch_array($run_slides)) {
                             $slider_name = $row_slides['slider_name'];
                             $slider_image = $row_slides['slider_image'];
                             
                             echo "
  
                             <div class='carousel-item'>
                             
                             <img src='admin_area/sliderpic/$slider_image' class='d-block w-100' alt='...'></a>
                           </div>";
                           }
              ?>

          </div>
          <a class="carousel-control-prev" href="#Mycarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#Mycarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div id="advantage">
    <div class="container" style="bacground:none;">
      <div class="row">
        <div class="col-sm-12 col-md-4" style="margin-top:5px;">
          <div class="box same-height"  id="bests" style="border:2px solid gray; border-radius:3px;margin:2px;">
            <div class="icon">
              <i class="fa fa-heart"></i>
            </div>
            <h4 style="text-align:center;font-size:35px;text-transform:uppercase;"><a href="#"
                style="padding-left:2px;">Best offer</a></h4>
            <p style="padding-left:2px;">You can modify the variables to your own custom values, or just use the mixins
              with their default values.
            </p>
          </div>
        </div>
        <div class="col-sm-12 col-md-4" style="margin-top:5px;">
          <div class="box same-height" style="border:2px solid gray;">
            <div class="icon">
            <i class="fa fa-tags" aria-hidden="true"></i>
            </div>
            <h4 style="text-align:center;font-size:35px;text-transform:uppercase;"><a href="#"
                style="padding-left:2px;">Best prices</a></h4>
            <p style="padding-left:2px;">You can modify the variables to your own custom values, or just use the mixins
              with their default values.
            </p>
          </div>
        </div>
        <div class="col-sm-12 col-md-4" style="margin-top:5px;">
          <div class="box same-height" style="border:2px solid gray; border-radius:3px;margin:2px;">
            <div class="icon">
              <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <h4 style="text-align:center;font-size:35px;text-transform:uppercase;"><a href="#"
                style="padding-left:2px;">100% original</a></h4>
            <p style="padding-left:2px;">You can modify the variables to your own custom values, or just use the mixins
              with their default values.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="col-md-12" id="subhead">
      <h2 style="text-align:center;font-size:36px;font-weight:400;color:teal">Our latest product</h2>
    </div>
  </div>
  <div class="container" id="products">
    <div class="row">
    
        <?php
          funPro();
        ?>
    </div>
  </div>
  <?php
  include("footer.php")
  ?>
  </div>
  <!-- container ends here -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
  
  $(document).ready(function () {
  $('#bests').mouseenter(function() {
    $('#bests').slidedown({"background-color":"rgba(64, 213, 224, 0.404)"},1200)
  });
  $('#bests').mouseleave(function() {
    $('#bests').css({"background-color":""},1200)
  });
  });
  
  </script>
</body>
</html>

