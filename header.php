<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Salmon Bay Marina</title>

    <!-- Bootstrap core CSS -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/siteFunc.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script language="JavaScript" src="js/slipMap.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

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
            <a href="index.php" class="pull-left"><img src="photos/Logo.png" id="logo" width="200" height="134"></a>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="index.php" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-home" id="homebtn"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Marina <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="rates.php">Rates</a></li>
                <li><a href="moorage.php">Moorage</a></li>
                <li><a href="guestmoorage.php">Guest Moorage</a></li>
                <li><a href="rvstorage.php">Parking & RVs</a></li>
                <li><a href="maps.php">Maps</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="listingprice.php">Sales, Repos, & Auctions</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="news.php">Notices</a></li>               
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="tenant.php">Forms & Documents</a></li>
                <li><a href="history.php">Background & History</a></li>
                <li><a href="reposerv.php">Repossession Services</a></li>
                <li><a href="servicelinks.php">Service Links</a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="contact.php">Contact Info</a></li>
                <li><a href="staffpage.php">Meet Our Staff</a></li>
                <li><a href="mapsdirections.php">Map & Directions</a></li>
                <li><a href="QA.php">Q&A</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>