<?php 
  
  include ('./includes/header.php');
  include ('./email2.php');
  
 ?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="10">
  <!--navigation bar starts here-->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#myPage">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Beginning of Jumbotron Picture-->
  <div class="box">
    <img class="image" src="/img/webdeveloper.jpg" alt="web developer">
    <img class="imagesmall" src="/img/webdevelopersmall.jpg" alt="web developer">
    <img class="imagetiny" src="/img/webdevelopertiny.jpg" alt="web developer">
    <!-- Typed Intro -->
    <div class="text-editor-wrap">
      <div id="typed-strings" style="display: none;">
        <span>Welcome to my Portfolio Website!</span>
        <p> Click the Arrow Below!</p>
      </div>
      <div class="title-bar">
        <span class="title">
        webdev —- bash -- 80x
        <span class="terminal-height">10</span>
        </span>
      </div>
      <div class="text-body">
        Jordans-MBP:webdev jordan$
        <span id="typed"></span>
      </div>
    </div>
    <!--Bouncing Arrow-->
    <a href="#about">
      <div class="arrow bounce"></div>
    </a>
  </div>
  <div id="about">
    <div class="wrapper">
      <div class="container-fluid slideanim">
        <h1 class="text-center">Who Am I?</h1>
        <img class="profile" src="img/me2017.jpg" alt="Jordan Smith" title="Jordan S">
        <p> Hello, My name is Jordan Smith.</p>
        <p> I graduated from the University of Michigan with a degree in Economics and began my career in Accounting. Accounting is an important field but it was not something I could see myself doing long term.</p>
        <p>Reminded of an old interest I began learning to code using Codecademy, FreeCodeCamp, W3 Schools, StackOverFlow, TeamTreeHouse and Github.</p>
        <p>I have a working knowledge with HTML5, CSS3, Sass, Bootstrap, Javascript, JQuery, Gulp, Git, and PHP.</p>
        <p> I am currently learning to use the React Library and looking into picking up Python as a backend language.</p>
        <p>I currently am working to become more capable with both frontend and backend programming.</p>
      </div>
    </div>
  </div>
  <div id="portfolio">
    <div class="wrapper">
      <div class="container-fluid">
        <h1 class="text-center">PORTFOLIO</h1>
        <br>
        <div class="row slideanim">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="thumbnail">
              <img class="border" src="img/thevapegenie.jpg" alt="The Vape Genie Online Vaporize Store" title="The Vape Genie">
              <div class="overlay">
                <a href="http://www.thevapegenie.com" target="_blank">
                  <p>The Vape Genie- An E-commerce website built using Magento CMS, CSS3, Javascript, and Photoshop.</p>
                </a>
              </div>
            </div>
            <div class="thumbnail">
              <img src="img/livenation2.jpg" alt="Livenation Affiliate Website" title="Livenation Marketing Affiliate">
              <div class="overlay">
                <a href="http://www.experiencepinpoint.com/livenation" target="_blank">
                  <p>Livenation- An E-commerce website built using HTML5, CSS3, Javascript, PHP and Magento CMS. Private Store with required login.</p>
                </a>
              </div>
            </div>
            <div class="thumbnail">
              <img src="img/mcmedcpr.jpg" alt="McmedCPR Website" title="McMedCPR Simple Solutions">
              <div class="overlay">
                <a href="http://www.mcmedcpr.com" target="_blank">
                  <p>McMedCPR- A business website built using HTML5, CSS3, Bootstrap, Javascript, JQuery, and Photoshop.</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="thumbnail">
              <img class="border" src="img/eblens.jpg" alt="Eblens" title="Eblens Online">
              <div class="overlay">
                <a href="http://www.eblens.com" target="_blank">
                  <p>Eblens- An E-commerce website built using HTML5, CSS3, Javascript, PHP and Magento CMS.</p>
                </a>
              </div>
            </div>
            <div class="thumbnail">
              <img class="border" src="img/hubbellrental.jpg" alt="Water Heater Rental Program" title="Hubbell Rentals">
              <div class="overlay">
                <a href="https://rentawaterheater.com" target="_blank">
                  <p>Hubbell Rentals- A business website built with HTML5, CSS3, Bootstrap 4, Javascript, and PHP.</p>
                </a>
              </div>
            </div>
            <div class="thumbnail">
              <img class="border" src="img/boosterheaters.jpg" alt="Booster Heaters Gas and Electric Heaters" title="Booster Heaters">
              <div class="overlay">
                <a href="http://www.boosterheater.com" target="_blank">
                  <p>Booster Heaters- A wordpress website built with HTML5, CSS3, Javascript, PHP, and Photoshop.</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="thumbnail">
              <img src="img/bonjo.jpg" alt="Bonjo Coffee Roasters" title="Bonjo Coffee Roasters">
              <div class="overlay">
                <a href="http://www.bonjocoffee.com" target="_blank">
                  <p>Bonjo Coffee Roasters- An E-commerce website built using Magento CMS, CSS3, Javascript, JQuery, and Photoshop.</p>
                </a>
              </div>
            </div>
            <div class="thumbnail">
              <img src="/img/ajaxboilerparts.jpg" alt="Ajax Boiler Parts" title="Ajax Boiler Parts">
              <div class="overlay">
                <a href="http://ajaxboiler.com/" target="_blank">
                  <p>Ajax Boiler Parts-An E-commerce website built using Wordpress/Woocommerce featuring over 200 products.</p>
                </a>
              </div>
            </div>
            <div class="thumbnail">
              <img src="img/giftcardform.jpg" alt="Giftcard for Customers" title="Giftcard Page">
              <div class="overlay">
                <a href="http://www.colonygrill.com/giftcard/index.php" target="_blank">
                  <p>A gift card form created with HTML5, CSS3, Javascript (JQuery, AJAX, JSON), PHP, and Authorize.net.</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <button id="view-more">View Upcoming</button>
            <div class="thumbnail hide" id="upcoming">
              <img src="/img/hubbellheaters.jpg" alt="Hubbell Heaters" title="Hubbell Heaters">
              <div class="overlay">
                <a href="http://dev.m.hubbellheaters.com/" target="_blank">
                  <p>Hubbell Heaters-A redeveloped website is under construction.</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include ('./includes/footer.php'); ?>
  