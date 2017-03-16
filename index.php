<?php include('header.php'); ?>

<div class="jumbotron" style="padding-top: 0px; padding-bottom: 20px;">
	<div class=""  style="position: relative;">
		<div class="owl-carousel-hero owl-theme">
			<div class="item" style="max-height: 500px; overflowY: hidden;">
				<img src="images/wayne-rooney-wallpaper-14.jpg.png" class="img-responsive center-block" style="max-width:100%; height: 100%;">
						
			</div>
			<div class="item" style="max-height: 500px; overflowY: hidden;">
				<img src="images/football-field-wallpaper-4.jpg" class="img-responsive center-block" style="max-width:100%; height: 100%;">	
				<div class="carousel-caption bottom-right" style="left:0; right:0; bottom:50px;">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-4">
								<img class="img-responsive center-block w3-white w3-round" src="images/Saudi_Professional_League_Logo.png" style="width:350px; height:auto;">
							</div>
							<div class="col-xs-8 w3-text-shadow">
								<h6 class="toUpper w3-xxlarge"><b>Abdul latif jameel league</b></h6>
								<h6 class="w3-xxlarge"><b>King Fahad International Stadium</b></h6>
								<h6 class="w3-xxlarge"><b>6TH - 10TH FEBRUARY, 2017</b></h6>
								<br><br>
								<button type="button" class="w3-btn no-btn w3-white btn-xs w3-shadow-none w3-padding-4 w3-margin-right" style="width:20%;"></button>
								<button class="w3-btn w3-round w3-card w3-border-white w3-border w3-large w3-teal w3-text-white pull-right1 toUpper" data-toggle="modal" data-target="#signupModal" style="font-weight:bolder;">View Details</button>
								<button type="button" class="w3-btn no-btn w3-white btn-xs w3-shadow-none w3-padding-4 w3-margin-left" style="width:20%;"></button>
							</div>
						</div>
					</div>
				</div>		
			</div>
			<div class="item" style="max-height: 500px; overflowY: hidden;">
				<img src="images/vancouver-2010-winter-olympics-wallpaper-1.jpg" class="img-responsive center-block" style="max-width:100%; height: 100%;">	
						
			</div>		
		</div>	
		<!-- <div class="img-overlay w3-transparent" style="z-index: 990;">
				
		</div> -->
		<div class="pull-left parent" style="position: absolute; top:0px; bottom:0px; left:-5px; z-index: 997;">
			<button type="button" class="btn btn-lg w3-text-white child w3-xxlarge prev" style="background-color: rgba(0,0,0,0.5) !important;"><i class="fa fa-angle-left"></i></button>
		</div>
		<div class="pull-right parent" style="position: absolute; top:0px; bottom:0px; right:44px; z-index: 999;">
			<button type="button" class="btn btn-lg w3-text-white child w3-xxlarge next" style="background-color: rgba(0,0,0,0.5) !important;"><i class="fa fa-angle-right"></i></button>
		</div>
	</div>
</div>

<!-- Upcomming Matches -->

<div class="jumbotron" style="padding-top: 20px;">
	<div class="container-fluid text-center">
		<h6 class="toUpper w3-bold">Upcomming Soudi Professional League Matches</h6><br>
		<div class="">
			<button type="button" style="width:5%;" class="w3-btn no-btn w3-teal btn-xs w3-shadow-none w3-padding-4 w3-margin-right"></button>
			<a href="league-detail.php"><button type="button" class="w3-btn w3-teal btn-xs">View All</button></a>
			<button type="button" style="width:5%;" class="w3-btn no-btn w3-teal btn-xs w3-shadow-none w3-padding-4 w3-margin-left"></button>
		</div>
	</div>	

	<div class="container-fluid w3-section">
		<div class="row w3-padding-0">

			<?php $rep = 1; $delay = 0; while ( $rep++ <= 4) { ?>
			<div class="col-md-3 col-md-4 col-sm-6 w3-margin-top w3-margin-bottom wow slideInUp" data-wow-duration="1s" data-wow-delay="<?php echo($delay+=0.1); ?>s">
				<div class="w3-card-2 w3-teal">
					<div class="" style="position: relative; min-width:250px;">
						<img class="img-responsive center-block" src="images/banner_1.jpg" style="position:relative; z-index:-1;">	
						<div class="img-overlay w3-text-shadow">
							<button type="button" class="w3-margin-top w3-text-white w3-small w3-btn no-btn w3-light-green toUpper w3-bold">Thursday, 9 March</button>
							<div class="container w3-text-white">
								<div class="row text-center">
									<div class="col-xs-6 toUpper">
										<h6 class="w3-bold">Al Wehda</h6>
									</div>
									<div class="col-xs-6 toUpper">
										<h6 class="w3-bold">Al Faisaly</h6>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-5">
										<img class="img-responsive w3-right" src="images/44291x3.png" style="width:50px; height:auto;">
									</div>
									<div class="col-xs-2">
										<h6>Vs</h6>
									</div>
									<div class="col-xs-5">
										<img class="img-responsive w3-left" src="images/2000007441x3.png" style="width:50px; height:auto;">	
									</div>
								</div>
							</div>
							<div class="container-fluid w3-margin-top" style="botton:0px;">
								<div class="row text-center w3-text-white">
									<div class="col-xs-4 w3-border w3-border-white w3-round">
										<h6>Feb. 04</h6>
										<h6>2017</h6>	
									</div>
									<div class="col-xs-4 col-xs-offset-4">
										<h6>SAR.220</h6>	
										<h6 class="w3-small">Onwards</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid w3-white w3-padding-0">
						<div class="row w3-padding-0">
							<div class="col-xs-12 text-center">
								<h6>Soudi Professional League</h6>
								<small>Time: 21:20 PM</small><br>
								<small>Venue: King Fahad International Stadium</small>
							</div>
						</div>
						<a href="stadium.php"><button type="button" class="w3-btn btn-danger active col-xs-12">Book Now</button></a>
					</div>
				</div>
			</div>
			<?php } ?>

		</div>
	</div>
</div>

<!-- Upcomming Leagues -->

<div class="jumbotron" style="padding-top: 20px; padding-bottom: 20px;">
	<div class="container-fluid text-center">
		<h6 class="toUpper w3-bold">Club Matches</h6><br>
		<div class="">
			<button type="button" style="width:5%;" class="w3-btn no-btn w3-teal btn-xs w3-shadow-none w3-padding-4 w3-margin-right"></button>
			<a href="leagues.php"><button type="button" class="w3-btn w3-teal btn-xs">View All</button></a>
			<button type="button" style="width:5%;" class="w3-btn no-btn w3-teal btn-xs w3-shadow-none w3-padding-4 w3-margin-left"></button>
		</div>
	</div>	

	<div class="container-fluid w3-section">
		<div class="row w3-padding-0">

			<?php //$rep = 1; $delay = 0; while ( $rep++ <= 4) { ?>
			<!-- <div class="col-md-3 col-sm-6 w3-margin-top w3-margin-bottom wow slideInUp" data-wow-duration="1s" data-wow-delay="<?php echo($delay+=0.1); ?>s">
				<div class="w3-card-2">
					<div class="" style="position: relative;">
						<img class="img-responsive center-block" src="images/spl_logo4.jpg">	
					</div>
					<div class="container-fluid w3-white w3-padding-0">
						<div class="row w3-padding-0">
							<div class="col-xs-12 text-center">
								<h6>Abdul Latif Jameel League, 2017</h6>
								<small>6th till 10th Feb, 2017</small>
								<small>Venue: King Fahad International Stadium</small>
							</div>
						</div>
						<a href="league-detail.php"><button type="button" class="w3-btn btn-danger active col-xs-12">View All Matches</button></a>	
					</div>
				</div>
			</div> -->
			<?php //} ?>

			<?php $rep = 1; $delay = 0; while ( $rep++ <= 4) { ?>
			<div class="col-md-3 col-md-4 col-sm-6 w3-margin-top w3-margin-bottom wow slideInUp" data-wow-duration="1s" data-wow-delay="<?php echo($delay+=0.1); ?>s">
				<div class="w3-card-2 w3-teal">
					<div class="" style="position: relative; min-width:250px;">
						<img class="img-responsive center-block" src="images/banner_1.jpg" style="position:relative; z-index:-1;">	
						<div class="img-overlay w3-text-shadow">
							<button type="button" class="w3-margin-top w3-text-white w3-small w3-btn no-btn w3-light-green toUpper w3-bold">Thursday, 9 March</button>
							<div class="container w3-text-white">
								<div class="row text-center">
									<div class="col-xs-6 toUpper">
										<h6 class="w3-bold">Al Wehda</h6>
									</div>
									<div class="col-xs-6 toUpper">
										<h6 class="w3-bold">Al Faisaly</h6>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-5">
										<img class="img-responsive w3-right" src="images/44291x3.png" style="width:50px; height:auto;">
									</div>
									<div class="col-xs-2">
										<h6>Vs</h6>
									</div>
									<div class="col-xs-5">
										<img class="img-responsive w3-left" src="images/2000007441x3.png" style="width:50px; height:auto;">	
									</div>
								</div>
							</div>
							<div class="container-fluid w3-margin-top" style="botton:0px;">
								<div class="row text-center w3-text-white">
									<div class="col-xs-4 w3-border w3-border-white w3-round">
										<h6>Feb. 04</h6>
										<h6>2017</h6>	
									</div>
									<div class="col-xs-4 col-xs-offset-4">
										<h6>SAR.220</h6>	
										<h6 class="w3-small">Onwards</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid w3-white w3-padding-0">
						<div class="row w3-padding-0">
							<div class="col-xs-12 text-center">
								<h6>Soudi Professional League</h6>
								<small>Time: 21:20 PM</small><br>
								<small>Venue: King Fahad International Stadium</small>
							</div>
						</div>
						<a href="stadium.php"><button type="button" class="w3-btn btn-danger active col-xs-12">Book Now</button></a>
					</div>
				</div>
			</div>
			<?php } ?>

		</div>
	</div>
</div>


<div class="jumbotron w3-white" style="padding-top: 20px; padding-bottom: 20px;">
	<img class="img-responsive center-block" style="width:100%;" src="images/flick-click2.png">
</div>


<?php include('footer.php'); ?>