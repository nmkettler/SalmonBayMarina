<?php include('header.php') ?>


    <div class="widewrapper_main" id="homeimg">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide img-responsive" src="photos/salmon_bay_marina.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h3 class="carh3" id="carocap">Salmon Bay Marina</h3>
              <h1 class="carh1" id="carocap">Guest Moorage</h1>
              <p><a class="btn btn-lg btn-primary" href="guestmoorage.php" role="button">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide img-responsive" src="photos/homepageImg.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h3 class="carh3" id="carocap">Open and Covered Slips</h3>
              <h1 class="carh1" id="carocap">Moorage</h1>
              <p><a class="btn btn-lg btn-primary" href="moorage.php" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide img-responsive" src="photos/BallardLocksJuly72013004.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h3 class="carh3" id="carocap">Visit Page For Latest</h3>
              <h1 class="carh1" id="carocap">Current Events</h1>
              <p><a class="btn btn-lg btn-primary" href="events.php" role="button">Browse Events</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
        <div class="widewrapper-banner">
          <div class="row">
            <div class="col-md-12">
                <div class="row">
                <div class="col-md-6 text-right">
                  <h4 class="bannertxt">Office Will Be Closed Christmas (Dec 24, 25) <?php echo date("Y"); ?></h4>
                </div>
                <div class="col-md-6 text-center">
                  <a class="btn btn-lg btn-primary bannertxt" id="bannerbutton" href="news.php" role="button">Learn More</a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="widewrapper-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h1>Welcome to Salmon Bay Marina</h1>
              <h4>Fresh Water Moorage on Lake Washington Federal Ship Canal</h4>
            </div>
          </div>
        </div>
    </div>
    <div class="backgrnd" style="background-color:#f6f6f6;">
    <div class="container"  id="startchange">
      <div class="container-marketing" id="threepics">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="img-square" src="photos/348s.jpg" width="350" height="200">
            <h4 class="text-center"><strong>Rates & Services</strong></h4>
            <p>Current rates and information on services offered</p>
            <p class="text-center"><a class="btn btn-default" href="rates.php" role="button">View details &raquo;</a></p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-square" src="photos/fremontbridge.jpg" alt="Generic placeholder image" width="350" height="200">
            <h4 class="text-center"><strong>Boat Sales & Auctions</strong></h4>
            <p class="text-center">Full service boat brokerage</p>
            <p class="text-center"><a class="btn btn-default" href="listingprice.php" role="button">View details &raquo;</a></p>
            <!-- /.col-lg-4 -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-square" src="photos/outerview.jpg" alt="Generic placeholder image" width="350" height="200">
            <h4 class="text-center"><strong>Available Slips</strong></h4>
            <p class="text-center">Current slips offered</p>
            <p class="text-center"><a class="btn btn-default" href="moorage.php" role="button">View details &raquo;</a></p>
            <!-- /.col-lg-4 -->
          </div>
          <!-- /.row -->
        </div>
      </div>
    </div>
<div class="widewrapper_main" id="homeimg">
  <div class="widewrapper-bottombanner">
          <div class="row">
            <div class="col-md-12">
                <div class="row">
                <div class="col-md-6 text-right">
                  <?php 
                $date = strtotime("May 15, 2016 2:00 PM");
                $remaining = $date - time();
                $days_remaining = floor($remaining / 86400);
                $hours_remaining = floor(($remaining % 86400) / 3600);
               ?>
              <h3 class="ban3">Remaining Until the Event</h3>
              <h1 class="ban1"><?php echo $days_remaining ?> days and <?php echo $hours_remaining?> hours left</h1>
                </div>
                <div class="col-md-6 text-center">
                  <a class="btn btn-lg btn-primary bannertxt" id="bottombannerbutton" href="events.php" role="button">Browse Events</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
      <div class="container_wrapper" id="homepageinfo">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-4">
              <div class="col-xs-2">
                  <h4><i class="fa fa-car"></i></h4>
                </div>
                <div class="col-xs-10">
                  <a href="rvstorage.php"><h4 id="secTable"> PARKING</h4></a>
                </div>
               <p>Find designated parking areas for tenants, guests, and monthly commuters </p>
            </div>
            <div class="col-md-4">
               <div class="col-xs-2">
                  <h4><i class="fa fa-map-marker"></i></h4>
                </div>
                <div class="col-xs-10">
                  <a href="maps.php"><h4 id="secTable"> MAPS</h4></a>
                </div>
               <p>Helpful resources for planning your visit </p>
            </div>
            <div class="col-md-4">
              <div class="col-xs-2">
                  <h4><i class="fa fa-clock-o"></i></h4>
                </div>
                <div class="col-xs-10">
                  <a href="contact.php"><h4 id="secTable"> Current Hours</h4></a>
                </div>
               <p>Operational hours for fuel dock, boat launch, dry storage, travelift and administration </p>
            </div>
            </div>
          </div>
          
          
      </div>
    </div>
  </div>
    <!-- /container -->

    <?php include('footer.php') ?>
