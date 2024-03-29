<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>IoT n' GIS</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
 
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">

                <!-- add the logo here-->
            <a class="navbar-brand" href="index.html"><img id="logo" src="images/logo.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="index.php">Home</a></li>
                        <li><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                        <li><a class="nav-link" href="#footer">Contact us</a></li>
						<!-- <li><a class="nav-link" href="#">Login</a></li> -->
                       <!--  <li><a class="nav-link active" style="background:#f2183f;color:#fff;" href="#">Sign up now</a></li> -->
                    </ul>
                </div> 
                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Search">
                    <a class="search-btn">
                        <img src="images/search_icon.png" alt="#" />
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(images/deng2.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3>WEATHER <br>MONITORING SYSTEM</h3>
                                        <br>
                                        <h4><span class="theme_color">REAL-TIME WEATHER MONITORNG</span></h4>
                                        <br>
                                        <p id="ty">Spatially collected Humidity,<br> Temparature, Barometric <br>Pressure and Altitude<br> approximations </p>
                                        <a class="contact_bt" href="#about">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(images/deng2.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3>WEATHER <br>MONITORING SYSTEM</h3>
                                        <br>
                                        <h4><span class="theme_color">REAL-TIME WEATHER MONITORNG</span></h4>
                                        <br>
                                        <p id="ty">Spatially collected Humidity,<br> Temparature, Barometric <br>Pressure and Altitude<br> approximations </p>
                                        <a class="contact_bt" href="#about">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
    
	<!-- section -->
    <div class="section layout_padding " id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">01</p>
						   </div>
						   <div class="right">
                            <p class="small_tag">About us</p>
                            <!--IMPORTANT  include your description here-->
                            <p>We make use of the embedded system made of sensors <br>and microcontrollers, together with a GPS module for the location monitoring. <br> The wireless communication technology is employed <br>to send the data from the embedded system to the cloud storage. </p><br><br>   
                            <p>We try to close the gap left for the data need, <br>mostly when tyring to study weather patterns using GIS. <br>We understand that the basis for any GIS analysis, data is very important.</p>
                           
						  </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <!-- end section -->
	
	<!-- end section -->

    <!-- Start Footer -->
    <footer class="container-fluid footer-box" id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3 footer1 d-flex wow bounceInLeft" data-wow-delay=".25s">
              <div class="d-flex flex-wrap align-content-center"> <a href="#"><img id="logo" src="images/logo.png" alt="logo" /></a>
                <p>We provide real-time spatially weather variables data</p>
                <p>&copy; 2020 . <br> All rights reserved.<br> <!-- <a href="#" target="_blank"> --></a>.</p>
              </div>
            </div>
            <div class="col-md-6 footer2 wow bounceInUp" data-wow-delay=".25s" id="contact">
              <div class="form-box">
                <h4>CONTACT US</h4>
                <table class="table table-responsive d-table">
                  <tr>
                    <td><input type="text" class="form-control pl-0" placeholder="NAME" /></td>
                    <td><input type="email" class="form-control pl-0" placeholder="EMAIL" /></td>
                  </tr>
                  <tr>
                    <td colspan="2"></td>
                  </tr>
                  <tr>
                    <td colspan="2"><input type="text" class="form-control pl-0" placeholder="ADDRESS" /></td>
                  </tr>
                  <tr>
                    <td colspan="2"></td>
                  </tr>
                  <tr>
                    <td colspan="2"><input type="text" class="form-control pl-0" placeholder="MESSAGES" /></td>
                  </tr>
                  <tr>
                    <td colspan="2"></td>
                  </tr>
                  <tr>
                    <td colspan="2" class="text-center pl-0"><button type="submit" class="btn btn-dark">SEND</button></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="col-md-3 footer3 wow bounceInRight" data-wow-delay=".25s">
              <h5>ADDRESS</h5>
              <p>Nyeri, CBD</p>
              <h5>PHONE</h5>
              <p><a href="# ">+254748387787</a></p>
              <h5>EMAIL</h5>
              <p> <a href="mail">dennisnjuguna321@gmail.com</a> </p>
              <div class="social-links">
                <ul class="nav nav-item">
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="@dennisnjoki4"><i class="fa fa-twitter"></i></a></li>
                    <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                    <li><a href="dennisnjuguna321@gmail.com"><i class="fa fa-google-plus"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© 2020 <br> All Rights Reserved.</p>
                    <ul class="bottom_menu">
                        <li><a href="#">Term of Service</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
	<script>
	/* counter js */

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	</script>
</body>

</html>