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
					<h6 class="w3-bold">Upcoming Matches:</h6>
					<?php $rep = 1; while ( $rep++ <= 9) { ?>
					<div class="container-fluid w3-padding-0 w3-section">
						<div class="row w3-light-grey">
							<div class="col-md-2 y-40 w3-padding-tiny" style="background: url('images/blue-gray-strip.png'); background-size: cover; background-position: top center;">
								<div class="w3-col s6 w3-center w3-padding-right y-40" style="position:relative;">
									<img class="img-responsive center-block middle" style="width:40px; height:auto;" src="images/ft-logo-2.png">
								</div>
								<div class="w3-col s6 w3-center w3-padding-left y-40" style="position:relative;">
									<img class="img-responsive center-block middle" style="width:40px; height:auto;" src="images/ft-logo-4.png">
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
										<a class="middle" href="#"><img class="img-responsive center-block" style="width:40px; height:auto;" src="images/edit-ico.png"></a>
									</div>
									<div class="w3-col s6 y-40 w3-center" style="position:relative;">
										<a class="middle" href="#"><img class="img-responsive center-block" style="width:40px; height:auto;" src="images/delete-ico.png"></a>
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

<script type="text/javascript">
	$('#link4 a').addClass('active-link').removeClass('w3-transparent');
</script>

<?php include('partner-footer.php'); ?>