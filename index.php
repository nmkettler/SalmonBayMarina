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
            <li><a href="#">Business With Us</a></li>
            <li><a href="#about">Marina</a></li>
            <li><a href="#contact">Properties</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li><a href="../navbar/">About Us</a></li>
            <li><a href="../navbar-static-top/">Contact Us</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
    <div class="widewrapper_main" id="homeimg">
      <div id="mycarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="item active">
            <img src="photos/salmon_bay_marina.png" class="img-responsive" alt="Responsive image">
            <div class="carousel-caption">
              <h1>Welcome !</h1>
            </div>
          </div>
        </div>
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

    </div>
    <!-- /container -->

    <?php include('footer.php') ?>
