<?php $this->load->view('templates/header'); ?>
<script src="http://golfputz.com/golfslope-prototype/js/jquery.cycle.lite.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	// put all your jQuery goodness in here.
		$('#slideshow').hover(
			function() { $('#controls').fadeIn(); },
			function() { $('#controls').fadeOut(); }
		);
		$('#slideshow_container').cycle({
			fx: 'fade',
			next: '#next',
			prev:   '#prev'
		});
	});
</script>
<div id="container" class="home">
		<div id="content">	
<div id="main-wrapper">
	<div class="main gs-3">
		<div id="promo_area">
			<div class="promo-wrap">
  			<h1>A New Way to Play Private Golf Courses</h1>
  			<h3><a href="" class="shinnicock list"><span>Join a Foursome</span></a></h3>
  			<h3><a href="" class="shinnicock how"><span>How it Works</span></a></h3>
  			</div>
		</div>
		
		<div id="slideshow">
			<div id="controls">
        <span><a href="" id="prev">Prev</a></span>
        <span><a href="" id="next">Next</a></span>
    </div>

  			<ul id="slideshow_container">
  				<li class="slide"><a href="http://golfilicious.com/index.php/news/" class="shinnicock overlay"><img src="http://www.golfslope.com/wp-content/uploads/2011/12/ShinnecockHillsfairway.jpg" alt="" /></a>
  					<img alt="" src="http://www.golfslope.com/wp-content/uploads/mingle/avatars/f218628ec28d0907e167976229a3dabe_1332494919-50x50.jpg" class="mngl-profile-image avatar avatar-50 photo" height="50" width="50">
  					<div class="offer">
  						<div class="price"><a href="http://golfilicious.com/index.php/news/" class="shinnicock overlay">$2500</a><span></span></div>
  						<div class="gs-member"><a href="http://golfilicious.com/index.php/news/" class="shinnicock overlay">Member Offer</a></div>
  						<div class="gs-location">Shinnecock Hills, Southampton, NY</div>
  					</div>
  				</li>
  				<li class="slide"><a href="http://golfilicious.com/index.php/news/" class="overlay"><img src="http://www.golfslope.com/wp-content/uploads/2011/12/hudsonnat1.png" alt="" /></a>
  					<div class="offer  exclusive">
  						<div class="price"><a href="http://golfilicious.com/index.php/news/" class="overlay">$1500<span></span></a></div>
  						<div class="gs-member"><a href="http://golfilicious.com/index.php/news/" class="overlay">Exclusive Offer</a></div>
  						<div class="gs-location">Hudson National Golf Club, Croton On Hudson, NY</div>
  					</div>
  				</li>
  				<li class="slide"><a href="http://golfilicious.com/index.php/news/" class="olypmic overlay"><img src="http://www.golfslope.com/wp-content/uploads/2012/06/lake3.jpg" alt="" /></a>
  					
  					<div class="offer exclusive">
  						<div class="price"><a href="http://golfilicious.com/index.php/news/" class="olypmic overlay">$7500<span></span></a></div>
  						<div class="gs-member"><a href="http://golfilicious.com/index.php/news/" class="olypmic overlay">Charity Offer</a></div>
  						<div class="gs-location">The Olympic Club, San Francisco, CA</div>
  					</div>
  				</li>
  			</ul>
  		</div>
  		</div>
  	</div>
  	<!-- footer begins -->
  	<?php $this->load->view('templates/footer'); ?>