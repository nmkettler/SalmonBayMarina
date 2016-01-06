</body>
<footer class="text-center" id="foot">
  <div class="footer-above">
    <div class="container">
      <div class="row" id="descText">
        <div class="footer-col col-md-12" id="footNavText">
          <p><a href="index.php">Home </a> | <a href="history.php">About the Marina</a> | <a href="rates.php">Slips & Rates</a> | <a href="listingprice.php">Sales Repos & Auctions</a> |
            <a href="news.php">News </a>| <a href="guestmoorage.php">Guest Moorage </a>|
            <a href="tenant.php">Links</a> | <a href="news.php">Events</a> |
            <a href="mapsdirections.php"> Directions</a> | <a href="contact.php"> Contact Us</a></p>
        </div>
        <div class="row">
          <div class="footer-col col-md-12" id="footSocMedia">
            <ul class="list-inline">
              <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/pages/FSX-Inc-FSX-Equipment-Inc/146834845525900?rf=432189793569062">
                <i class="fa fa-facebook-square fa-2x"></i>
              </a>
              <a class="btn btn-social-icon btn-facebook" href="mailto:%73%61%6c%65%73%40%66%73%78%69%6e%63%2e%63%6f%6d">
                <i class="fa fa-envelope fa-2x"></i>
              </a>
              <a class="btn btn-social-icon btn-facebook" href="tel:206.282.5555">
                <i class="fa fa-phone fa-2x"></i>
              </a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="footer-below">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="text-center">© Copyright Salmon Bay Marina and Boat Sales 2002-
            <?php echo date("Y"); ?>, All Rights Reserved
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- /top-link-block -->
</footer>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<!-- Change Nav Color
    ================================================== -->
<script>
  $(window).scroll(function() {
    var scroll_start = 0;
    var startchange = $('#homeimg');
    var offset = startchange.offset();
    if ($(window).width() > 768) {
      if (startchange.length) {
        $(document).scroll(function() {
          scroll_start = $(this).scrollTop();
          if (scroll_start > offset.top) {
            $(".navbar-inverse").css('background-color', '#939393');
          } else {
            $('.navbar-inverse').css('background-color', 'rgba(0,0,0,0.7)');
          }
        });
      }
    } else {
      $('.navbar-inverse').css('background-color', '#191919'); //color of mobile menu
    }
  });

</script>
<!-- Shrink Nav
    ================================================== -->
<script>
  $(window).scroll(function() {
    if ($(document).scrollTop() > 30) {
      $('nav').addClass('shrink');
    } else {
      $('nav').removeClass('shrink');
    }
  });

</script>
<a href="#" class="back-to-top"><i class="fa fa-arrow-up fa-1x"></i> Back to Top</a>
<!-- Back to top
    ================================================== -->
<script>
  var offset = 220;
  var duration = 500;
  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > offset) {
      jQuery('.back-to-top').fadeIn(duration);
    } else {
      jQuery('.back-to-top').fadeOut(duration);
    }
  });

  jQuery('.back-to-top').click(function(event) {
    event.preventDefault();
    jQuery('html, body').animate({
      scrollTop: 0
    }, duration);
    return false;
  })

</script>

<!--Datatables======================
 -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
  $(function() {
    $('#rates').dataTable({
      aLengthMenu: [
        [25, 50, -1],
        [25, 50, "All"]
      ],
      iDisplayLength: -1
    });
    $('.dataTables_filter input').attr("placeholder", "Search By Length");
  })

  $(function() {
    $('#rvstorage').dataTable({
      aLengthMenu: [
        [25, 50, -1],
        [25, 50, "All"]
      ],
      iDisplayLength: -1
    });
    $('.dataTables_filter input').attr("placeholder", "Search");
  })

    $('#kayakstorage').dataTable({
      aLengthMenu: [
        [25, 50, -1],
        [25, 50, "All"]
      ],
      iDisplayLength: -1
    });
    $('.dataTables_filter input').attr("placeholder", "Search");
</script>

<script> //when #kayakstorage is deleted, other two tables work
  $(function() {
    $("#rates").dataTable();
  })

   $(function() {
    $("#rvstorage").dataTable();
  })

   $(function() {
    $("#kayakstorage").dataTable();
  })
</script>
<!--News Feed-->
<script>
$(document).ready(function() {

    $('.containero').hide();
    $('#btn-showinfo').click(function(){
        var target = "#" + $(this).data("target");
        $(".containero").not(target).hide();
        $(target).show();
    });

});

$(document).ready(function() {
  $('#btn-hideinfo').click(function(){
    $('.containero').hide();
  });
});
</script>
<!--Google Maps Embed-->

<script type="text/javascript">
function init_map() {
    var var_location = new google.maps.LatLng(47.659961,-122.384610);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 15
        };
 
    var var_marker = new google.maps.Marker({
      position: var_location,
            map: var_map,
      title:"Venice"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
    var_marker.setMap(var_map); 
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
</script


</body>

</html>
