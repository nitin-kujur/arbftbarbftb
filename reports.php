<?php include('partner-sign-in-header.php'); ?>

<div class="jumbotron">
	<div class="container-fluid w3-margin-left w3-margin-right w3-padding-64">
		<div class="row">
			<div class="col-md-4 padding-25">
				<div class="w3-white col-xs-12 w3-card-1 w3-round padding-15">
					<div class="w3-block w3-center w3-section">
						<img class="img-responsive center-block w3-border w3-round" style="width:130px;" src="images/ft-logo-2.png">
						<h6><span class="w3-bold">Team:</span> Al Hilal FC</h6>
					</div>
					<h6 class="w3-bold">Current Coach</h6>
					<h6>Ramon Diyaz, Argentinian</h6><br>
					<h6 class="w3-bold">Current City</h6>
					<h6>Riyadh</h6>
				</div>

				<div class="w3-white col-xs-12 w3-card-1 w3-round padding-15">
					<h6 class="w3-bold">Team Details</h6><br>
					<h6 class="w3-bold">Chairman </h6>
					<h6>Sir Chips Keswick </h6><br>
					<h6 class="w3-bold">Chief Executive Officer </h6>
					<h6>Ivan Cazidis </h6><br>
					<h6 class="w3-bold">Manager </h6>
					<h6>Arsene Wenger </h6><br>
					<h6 class="w3-bold">Team Doctor </h6>
					<h6>Dr cary O'Driscoll </h6><br>
					<h6 class="w3-bold">Academy Manager </h6>
					<h6>Andries Jonker</h6>
				</div>
			</div>
			<div class="col-md-8 padding-25">
				<div class="w3-white col-xs-12 w3-card-1 w3-round padding-15">
					<h6 class="w3-bold">Reports:</h6>
					<form class="form-inline1" role='form' method='POST' action=''>
						<div class="container-fluid w3-padding-0">
							<div class="row">
								<div class="col-md-6 w3-padding-tiny w3-section">
									<div class="form-group">
										<label class="w3-col s4" for="mode">Select Mode:</label>
										<select class="w3-col s8 w3-input w3-padding-small w3-border" id="mode">
											<option value="" selected disabled>League/Club Match</option>
											<option value="option1">option1</option>
											<option value="option1">option1</option>
											<option value="option1">option1</option>
										</select>
									</div>
								</div>
								<small class="w3-tiny"><br class="w3-hide-large"></small>
								<div class="col-md-6 w3-padding-tiny w3-section">
									<div class="form-group">
										<label class="w3-col s4" for="venue">Select Venue:</label>
										<select class="w3-col s8 w3-input w3-padding-small w3-border" id="venue">
											<option value="" selected disabled>Select</option>
											<option value="option1">option1</option>
											<option value="option1">option1</option>
											<option value="option1">option1</option>
										</select>
									</div>
								</div>
								<small class="w3-tiny"><br class="w3-hide-large"></small>
								<div class="col-md-6 w3-padding-tiny w3-section">
									<div class="form-group">
										<label class="w3-col s4" for="fromDate">From Date:</label>
										<input type="text" class="w3-col s8 w3-input w3-padding-tiny w3-border datepicker" id="fromDate" placeholder="DD/MM/YY">
									</div>
								</div>
								<small class="w3-tiny"><br class="w3-hide-large"></small>
								<div class="col-md-6 w3-padding-tiny w3-section">
									<div class="form-group">
										<label class="w3-col s4" for="tillDate">Till Date:</label>
										<input type="text" class="w3-col s8 w3-input w3-padding-tiny w3-border datepicker" id="tillDate" placeholder="DD/MM/YY">
									</div>
								</div>
							</div>
						</div>
						<div class="w3-block w3-section text-right w3-padding-tiny">
							<button type="button" class="w3-btn w3-blue w3-text-white">Submit</button>
						</div>
					</form>

					<hr style="border-top: 2px lightgrey dashed;">

					<h6 class="w3-bold">Completed Matches:</h6>
					<?php $rep = 1; while ( $rep++ <= 6) { ?>
					<div class="container-fluid w3-padding-0 w3-section">
						<div class="row w3-light-grey">
							<div class="col-md-2 y-40 w3-padding-tiny" style="background: url('images/blue-gray-strip.png'); background-size: cover; background-position: top center;">
								<div class="w3-col s6 w3-center w3-padding-right y-40" style="position:relative;">
									<img class="img-responsive center-block middle" style="width:80px; height:auto;" src="images/ft-logo-2.png">
								</div>
								<div class="w3-col s6 w3-center w3-padding-left y-40" style="position:relative;">
									<img class="img-responsive center-block middle" style="width:80px; height:auto;" src="images/ft-logo-4.png">
								</div>
							</div>
							<div class="col-md-4 w3-padding-0 w3-center y-40">
								<h6 class="w3-medium w3-section">AL Wehed Vs Faisaly</h6>
							</div>
							<div class="col-md-4 w3-padding-0 w3-center y-40">
								<h6 class="w3-medium w3-section">February 18, 2017, 21:30 PM</h6>
							</div>
							
							<div class="col-md-2 w3-padding-0 y-40 w3-center">
								<div class="w3-row">
									<div class="w3-col s6 y-40 w3-center" style="position:relative;">
										<a class="middle" href="#"><img class="img-responsive center-block" style="width:auto; height:40px;" src="images/history-ico.png"></a>
									</div>
									<div class="w3-col s6 y-40 w3-center" style="position:relative;">
										<h6 class="w3-small w3-margin-top"><a href="reports-detail.php">View Report</a></h6 class="w3-small w3-bold middle">
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>

					<ul class="pagination">
					  <li><a class="disabled" href="javascript:;"><i class="fa fa-angle-left"></i>&nbsp;Previous</a></li>
                      <li class="disabled1 active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">...</a></li>
                      <li><a href="#">Next&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
                    </ul>

				</div>
			</div>
		</div>
	</div>
</div>

<link href="css/datepicker-bootstrap.css" rel="stylesheet">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
	$('#link5 a').addClass('active-link').removeClass('w3-transparent');

	$('.datepicker').datepicker({
        showAnim: "drop",
        dateFormat: "dd/mm/yy",
        // inline: true,
        showOtherMonths: true
    });
</script>

<?php include('partner-footer.php'); ?>