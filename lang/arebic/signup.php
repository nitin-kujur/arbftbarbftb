<?php include('header.php'); ?>

<div class="jumbotron w3-dark-blue" style="padding-top: 0px; padding-bottom: 0px;">
	<div class="container w3-padding-0"  style="max-height: 500px; overflowY: hidden; position: relative;">
		<img src="images/dark-blue-bg.jpg" class="img-responsive center-block" style="max-width:100%; height: 100%;">
		<div class="carousel-caption bottom-right" style="left:0; right:0;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-4">
						<img class="img-responsive center-block w3-white w3-round" src="images/Saudi_Professional_League_Logo.png" style="width:350px; height:auto;">
					</div>
					<div class="col-xs-8 w3-text-shadow">
						<h6 class="toUpper w3-xxlarge"><b>Abdul Latif Jameel League</b></h6>
						<h6 class="w3-xxlarge"><b>King Fahad International Stadium</b></h6>
						<h6 class="w3-xxlarge"><b>6TH - 10TH FEBRUARY, 2017</b></h6>
						<br><br>
						<button type="button" class="w3-btn no-btn w3-white btn-xs w3-shadow-none w3-padding-4 w3-margin-right" style="width:20%;"></button>
						<button class="w3-btn w3-round w3-card w3-border-white w3-border w3-large w3-teal w3-text-white pull-right1 toUpper" style="font-weight:bolder;">View Details</button>
						<button type="button" class="w3-btn no-btn w3-white btn-xs w3-shadow-none w3-padding-4 w3-margin-left" style="width:20%;"></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<nav id="navbar3" class="navbar navbar-default w3-card-2" style="z-index: ;">
	<div id="myNavbar-container3" class="container-fluid w3-padding-01">
		<div id="myNavbar3" class="collapse1 navbar-collapse1 w3-padding-0">
			<ul id="myNavbar3-child" class="nav navbar-nav navbar-dark toUpper w3-text-gray">
				  <li id="tab-li1"><a class="w3-transparent" href="javascript:window.history.back();"><h6 class="text-center"><span>&nbsp;&nbsp;&nbsp;</span><i class="fa fa-angle-left"></i>&nbsp;Back<span>&nbsp;&nbsp;&nbsp;</span></h6></a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="jumbotron w3-padding" style="padding-top: 20px !important; padding-bottom: 20px !important;">
	<div class="container-fluid w3-white w3-padding-0">
		<div class="w3-block w3-padding w3-teal">
			<h6><i class="fa fa-angle-down"></i>&nbsp;Share your Contact Details</h6>
		</div>
		<br><br>
		<div class="row">
			<div class="row-height1">
				<div id="custFormDiv" class="col-md-6 col-sm-6 col-height1">
					<div class="w3-block w3-center">
						<h6 class="w3-bold">Returning Customer? <a class="w3-text-blue" href="#">Click Here</a> to login.</h6>
						<h6 class="w3-small w3-bold">You are required to Sign-In, to book this ticket. Please take a moment amd log in.</h6>
					</div>
					<br>
					<form role='form' method='POST' action=''>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="firstName" placeholder="First Name" class="w3-input w3-border">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="lastName" placeholder="Last Name" class="w3-input w3-border">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="firstName" placeholder="Email Id" class="w3-input w3-border">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="lastName" placeholder="Phone Number" class="w3-input w3-border">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="firstName" placeholder="Street Address Line 1" class="w3-input w3-border">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="lastName" placeholder="Street Address Line 2" class="w3-input w3-border">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="firstName" placeholder="Post Code" class="w3-input w3-border">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="lastName" placeholder="Street Address Line 2" class="w3-input w3-border">
								</div>
							</div>
						</div>
						<div class="w3-block w3-center">
							<a href="index.php"><button type="button" class="w3-btn btn-danger active w3-section" style="padding-left:30px; padding-right:30px;">Submit</button></a>
						</div>
					</form>
				</div>
				<div class="col-md-6 col-sm-6 col-height1">
					<div class="container-fluid w3-border w3-padding-0">
						<div class="w3-block w3-padding w3-blue w3-center w3-text-white">
							<h6>Choose your Favourite Team</h6>
						</div>
						<div id="teamListDiv" class="w3-padding-top" style="overflow-y: auto !important; max-height:330px;">
							<?php $rep = 1; while ( $rep++ <= 4) { ?>
							<div class="row">
								<div class="col-md-4">
									<label class="w3-small"><input class="form-control1 w3-margin-right" type="checkbox" name="favTeam"><img class="img-responsive center-block w3-margin-right" src="images/ft-logo-1.jpg" style="width:25px; display:inline; position:relative; bottom:6px;">Alq Adisiyahar FC</label>
								</div>
								<div class="col-md-4">
									<label class="w3-small"><input class="form-control1 w3-margin-right" type="checkbox" name="favTeam"><img class="img-responsive center-block w3-margin-right" src="images/ft-logo-1.jpg" style="width:25px; display:inline; position:relative; bottom:6px;">Alq Adisiyahar FC</label>
								</div>
								<div class="col-md-4">
									<label class="w3-small"><input class="form-control1 w3-margin-right" type="checkbox" name="favTeam"><img class="img-responsive center-block w3-margin-right" src="images/ft-logo-1.jpg" style="width:25px; display:inline; position:relative; bottom:6px;">Alq Adisiyahar FC</label>
								</div>
							
								<div class="col-md-4">
									<label class="w3-small"><input class="form-control1 w3-margin-right" type="checkbox" name="favTeam"><img class="img-responsive center-block w3-margin-right" src="images/ft-logo-2.jpg" style="width:25px; display:inline; position:relative; bottom:6px;">AIHILAL FC</label>
								</div>
								<div class="col-md-4">
									<label class="w3-small"><input class="form-control1 w3-margin-right" type="checkbox" name="favTeam"><img class="img-responsive center-block w3-margin-right" src="images/ft-logo-2.jpg" style="width:25px; display:inline; position:relative; bottom:6px;">AIHILAL FC</label>
								</div>
								<div class="col-md-4">
									<label class="w3-small"><input class="form-control1 w3-margin-right" type="checkbox" name="favTeam"><img class="img-responsive center-block w3-margin-right" src="images/ft-logo-2.jpg" style="width:25px; display:inline; position:relative; bottom:6px;">AIHILAL FC</label>
								</div>
							
								<div class="col-md-4">
									<label class="w3-small"><input class="form-control1 w3-margin-right" type="checkbox" name="favTeam"><img class="img-responsive center-block w3-margin-right" src="images/ft-logo-3.jpg" style="width:25px; display:inline; position:relative; bottom:6px;">KHALEEJ FC</label>
								</div>
								<div class="col-md-4">
									<label class="w3-small"><input class="form-control1 w3-margin-right" type="checkbox" name="favTeam"><img class="img-responsive center-block w3-margin-right" src="images/ft-logo-3.jpg" style="width:25px; display:inline; position:relative; bottom:6px;">KHALEEJ FC</label>
								</div>
								<div class="col-md-4">
									<label class="w3-small"><input class="form-control1 w3-margin-right" type="checkbox" name="favTeam"><img class="img-responsive center-block w3-margin-right" src="images/ft-logo-3.jpg" style="width:25px; display:inline; position:relative; bottom:6px;">KHALEEJ FC</label>
								</div>
							
								<div class="col-md-4">
									<label class="w3-small"><input class="form-control1 w3-margin-right" type="checkbox" name="favTeam"><img class="img-responsive center-block w3-margin-right" src="images/ft-logo-4.jpg" style="width:25px; display:inline; position:relative; bottom:6px;">ITTIHAD FC</label>
								</div>
								<div class="col-md-4">
									<label class="w3-small"><input class="form-control1 w3-margin-right" type="checkbox" name="favTeam"><img class="img-responsive center-block w3-margin-right" src="images/ft-logo-4.jpg" style="width:25px; display:inline; position:relative; bottom:6px;">ITTIHAD FC</label>
								</div>
								<div class="col-md-4">
									<label class="w3-small"><input class="form-control1 w3-margin-right" type="checkbox" name="favTeam"><img class="img-responsive center-block w3-margin-right" src="images/ft-logo-4.jpg" style="width:25px; display:inline; position:relative; bottom:6px;">ITTIHAD FC</label>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('#teamListDiv').css('max-height', ($('#custFormDiv').height() - 70) + 'px');
	});

	$(window).resize(function(){
		$('#teamListDiv').css('max-height', ($('#custFormDiv').height() - 70) + 'px');
	});
</script>

<?php include('footer.php'); ?>