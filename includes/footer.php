<div id="contact">
    <div class="wrapper">
      <div class="container-fluid bg-grey">
        <h1 class="text-center">CONTACT</h1>
        <br>
        <div class="row slideanim">
          <div class="col-sm-12 contactinfo">
            <p>Please feel free to leave me a message.</br>I will get back to you as soon as possible.</p>
            <p><span class="glyphicon glyphicon-envelope"></span> j&#97;ysmi&#116;1&#53;8&#64;&#103;m&#97;il&#46;&#99;&#111;m</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Bridgeport, CT</p>
            <p><i class="fa fa-linkedin"></i><a href="https://www.linkedin.com/in/jordan-smith-b1068483/"> My LinkedIn</a></p>
            <p><i class="fa fa-github"></i><a href="https://github.com/jaysmit158"> Jaysmit158</a></h4>
          </div>
          <div class="form-wrapper">
            <form name="sentMessage" id="contactForm" action="./email.php" method="post">
              <div class="row">
                <div class="col-sm-6 form-group form-name">
                  <input type="text" class="form-control" placeholder="Your Name *" id="name" name="user_name" required>
                </div>
                <div class="col-sm-6 form-group form-email">
                  <input type="email" class="form-control" placeholder="Your Email *" id="email" name="user_email" required>
                </div>
                <textarea class="form-control" placeholder="Your Message *" id="message" name="user_message" rows="4" required></textarea>
              </div>
              <div class="row">
                <div class="col-sm-12 text-center form-group">
                  <button class="btn pull-right" type="submit">Send</button>
                </div>
              </div>
           
            </form>
          </div>
          <!-- Ends Column -->
        </div>
        <!-- Ends Row -->
      </div>
      <!--Ends Container-->
   <!--    <iframe id="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96084.7425935028!2d-73.26904640971898!3d41.18583963475426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e8092a96783719%3A0xdf8bfca7094fcece!2sBridgeport%2C+CT!5e0!3m2!1sen!2sus!4v1469128826454" frameborder="0" style="border:0" allowfullscreen></iframe> -->
    </div>
  </div>
  <!--Ends Contact-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="/typed.min.js"></script>
  <script>
  $(function() {

    //This adds smooth scrolling to the page
    $(".navbar a, .box a").on('click', function(ev) {
      ev.preventDefault();
      // Store hash
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function() {
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    });

    //This makes divs slide into frame
    $(window).scroll(function() {
      $(".slideanim").each(function() {
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
      });
    });

    //These are the controls for typed.js
    $("#typed").typed({
      stringsElement: $('#typed-strings'),
      typeSpeed: 50,
      backDelay: 800,
      loop: true,
      contentType: 'html', // or text
      // defaults to false for infinite loop
      loopCount: 2,
      showCursor: true,
      // character for cursor
      cursorChar: "|",
      // attribute to type (null == text)
      callback: function() {
        foo();
      },
      resetCallback: function() {
        newTyped();
      }
    });

    function newTyped() { /* A new typed object */ }

    function foo() {
      console.log("Callback");
    }

    $(".reset").click(function() {
      $("#typed").typed('reset');
    });

  });

  //reveal upcoming projects

  var viewMore = document.getElementById('view-more');
  var upcoming = document.getElementById('upcoming');

  viewMore.onclick = () => {
    upcoming.classList.toggle('show');
  }
  </script>
  <script>
  // Google Analytics

  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-58999809-2', 'auto');
  ga('send', 'pageview');
  </script>
</body>

</html>
