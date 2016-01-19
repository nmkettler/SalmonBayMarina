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
              <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/Salmonbaymarina/">
                <i class="fa fa-facebook-square fa-2x"></i>
              </a>
              <a class="btn btn-social-icon btn-facebook" href="mailto:sales@salmonbaymarina.com">
                <i class="fa fa-envelope fa-2x"></i>
              </a>
              <a class="btn btn-social-icon btn-facebook" href="tel:206.282.5555">
                <i class="fa fa-phone fa-2x"></i>
              </a>
              <a class="btn btn-social-icon btn-facebook" href="https://plus.google.com/105151280502496574784/about">
                 <i class="fa fa-google-plus-square fa-2x"></i>
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

<!-- Change Nav Color
    ================================================== -->
<script>
$(document).ready(function(){
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
  var offset = 120;
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
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
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

<!--Calendar-->

<script>
$.getScript('http://arshaw.com/js/fullcalendar-1.6.4/fullcalendar/fullcalendar.min.js',function(){
  
  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();
  
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,'
    },
    editable: true,
    events: [
      {
        title: 'All Day Event',
        start: new Date(y, m, 1)
      },
      {
        title: 'Long Event',
        start: new Date(y, m, d-5),
        end: new Date(y, m, d-2)
      },
      {
        id: 999,
        title: 'Lake Union Duck Dodge',
        start: new Date(y, m+4, 3, 19, 0),
        allDay: false,
        url: 'http://http://www.duckdodge.org/'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d-3, 16, 0),
        allDay: false
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d+4, 16, 0),
        allDay: false
      },
      {
        title: 'Meeting',
        start: new Date(y, m, d, 10, 30),
        allDay: false
      },
      {
        title: 'Lunch',
        start: new Date(y, m, d, 12, 0),
        end: new Date(y, m, d, 14, 0),
        allDay: false
      },
      {
        title: 'Birthday Party',
        start: new Date(y, m, d+1, 19, 0),
        end: new Date(y, m, d+1, 22, 30),
        allDay: false
      },
      {
        title: 'Click for Google',
        start: new Date(y, m, 28),
        end: new Date(y, m, 29),
        url: 'http://google.com/'
      }
    ]
  });
})
</script>
</body>

</html>
