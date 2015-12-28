</body>
<footer class="text-center" id="foot">
  <div class="footer-above">                         
    <div class="container">
      <div class="row" id="descText">
        <div class="footer-col col-md-12" id="footNavText">
          <p><a href="index.php">Home </a> | <a href="contact.php">Contact</a> | <a href="news.php">News</a> | <a href="products.php">Products</a> |
            <a href="site1/Competition/compare.html">Competitive Comparison </a>| <a href="site1/EnvNSafety/EnvHome.html">Enviromental &amp; Safety </a>|
            <a href="bidSpecLang.php">Bid Spec. Language</a> | <a href="servicelocator.php">Service Locator Map</a> |
            <a href="baselineChart.php"> Baseline Chart</a> | <a href="videos.php"> Video</a></p>
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
                <a class="btn btn-social-icon btn-facebook" href="tel:360-691-5991">
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
          <p>© Copyright Salmon Bay Marina and Boat Sales 2002-<?php echo date("Y"); ?>, All Rights Reserved
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
          var startchange = $('.container');
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
        if ($(document).scrollTop() > 50) {
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
              jQuery('html, body').animate({scrollTop: 0}, duration);
              return false;
          })

  </script>
  <script>
    

  </script>
  </body>
</html>