<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Salmon Bay Marina</title>

    <!-- Bootstrap core CSS -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/siteFunc.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navba">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <a href="index.php" class="pull-left"><img src="photos/SalmonBayLogo.png" id="logo" width="200" height="134"></a>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Business With Us <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Sales, Repos, & Auctions</a></li>
                <li><a href="#">Forms  Documents</a></li>
                <li><a href="#">Service Links</a></li>
                <li><a href="#">Dry Storage</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Parking & RVs</a></li>
                <li><a href="#">Map</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Marina <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Rates</a></li>
                <li><a href="#">Moorage</a></li>
                <li><a href="#">Guest Moorage</a></li>
                <li><a href="#">Dry Storage</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Parking & RVs</a></li>
                <li><a href="#">Map</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Notices</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Seattle Events</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Newsletter</a></li>
                <li><a href="#">Gallery</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Background & History</a></li>
                <li><a href="#">Financial Information</a></li>
                <li><a href="#">Documents</a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Contact Info</a></li>
                <li><a href="#">Hours of Operation</a></li>
                <li><a href="#">Map & Directions</a></li>
                <li><a href="#">Q&A</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
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
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide img-responsive" src="photos/homepageImg.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h3 class="carh3" id="carocap">Open and Covered Slips</h3>
              <h1 class="carh1" id="carocap">Moorage</h1>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide img-responsive" src="photos/BallardLocksJuly72013004.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h3 class="carh3" id="carocap">Visit Page For Latest</h3>
              <h1 class="carh1" id="carocap">Current Events</h1>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse Events</a></p>
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

      </div>

    </div>
    <div class="container" id="startchange">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h2 class="text-center"><strong>Welcome to Salmon Bay Marina</strong></h2>
        <p>Salmon Bay Marina and Boat Sales is a spacious 168-slip boat moorage in Seattle with covered and open berths. In addition to Seattle moorage for Yachts and pleasure craft, we have trailer, RV, auto, boat and Kayak storage. We provide marina boat
          sales and yacht brokerage services for pre-owned boats, Yachts, and Bank repossessed boats. We are adjacent to Salmon Bay Marine Center which has yacht services just next door.</p>
      </div>
      <div class="container-marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="img-square" src="photos/348s.jpg" width="350" height="200">
            <h4 class="text-center"><strong>Rates & Services</strong></h4>
            <p>Current rates and information on services offered</p>
            <p class="text-center"><a class="btn btn-default" href="basepkg.php" role="button">View details &raquo;</a></p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-square" src="photos/outerview.jpg" alt="Generic placeholder image" width="350" height="200">
            <h4 class="text-center"><strong>Available Slips</strong></h4>
            <p class="text-center">Current slips offered</p>
            <p class="text-center"><a class="btn btn-default" href="basepkg.php" role="button">View details &raquo;</a></p>
            <!-- /.col-lg-4 -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-square" src="photos/outerview.jpg" alt="Generic placeholder image" width="350" height="200">
            <h4 class="text-center"><strong>Available Slips</strong></h4>
            <p class="text-center">Current slips offered</p>
            <p class="text-center"><a class="btn btn-default" href="basepkg.php" role="button">View details &raquo;</a></p>
            <!-- /.col-lg-4 -->
          </div>
          <!-- /.row -->
        </div>

      </div>
      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-md-12">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="row">
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->
      </div>
    </div>
    <!-- /container -->

    <?php include('footer.php') ?>
