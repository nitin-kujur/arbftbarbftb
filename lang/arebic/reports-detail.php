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
					<h6 class="w3-bold w3-padding-tiny">Match Report Details:</h6>
					<br>
					<div class="container-fluid w3-padding-0">
						<div class="row">
							<div class="col-sm-4 w3-padding-tiny">
								<h6><span class="w3-bold">Match Detail: </span>AL Wehed Vs Faisaly</h6>
							</div>
							<div class="col-sm-4 w3-padding-tiny">
								<h6><span class="w3-bold">Match Date: </span>February 18, 2017</h6>
							</div>
							<div class="col-sm-4 w3-padding-tiny">
								<h6><span class="w3-bold">Match Time: </span>19:30 PM</h6>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4 w3-padding-tiny">
								<h6><span class="w3-bold">Mode: </span>Abdul latif jameel league</h6>
							</div>
							<div class="col-sm-8 w3-padding-tiny">
								<h6><span class="w3-bold">Match Venue: </span>King Fahad International Stadium</h6>
							</div>
						</div>
					</div>

					<hr style="border-top: 2px lightgrey dashed;">

					<h6><span class="w3-bold">Total Amount Collected: </span>SAR 14,400</h6>
					<br>
					<div class="w3-block">
						<div id="" class="table-responsive">
							<table id="" class="table text-center table-bordered table-striped1">
								<tr>
									<td><b>Name of Stands</b></td>
									<td><b>Total No. of Seats</b></td>
									<td><b>Seats Sales </b></td>
									<td><b>Amount per Seat</b></td>
									<td><b>Total Amount</b></td>
								</tr>
								<tr>
									<td>North Bay Stand</td>
									<td>400</td>
									<td>72 </td>
									<td>50 </td>
									<td>3,600</td>
								</tr>
								<tr>
									<td>North Bay Stand</td>
									<td>400</td>
									<td>72 </td>
									<td>50 </td>
									<td>3,600</td>
								</tr>
								<tr>
									<td>North Bay Stand</td>
									<td>400</td>
									<td>72 </td>
									<td>50 </td>
									<td>3,600</td>
								</tr>
								<tr>
									<td>North Bay Stand</td>
									<td>400</td>
									<td>72 </td>
									<td>50 </td>
									<td>3,600</td>
								</tr>
								<tr>
									<td><b>Grand Total</b></td>
									<td colspan='3'></td>
									<td><b>14,400</b></td>
								</tr>
							</table>
					</div>
					
					<div class="w3-block w3-section">
						<h6 styles="display:inline;">Export report to: <a href="#" target="_blanck" style="display:inline;"><img class="img-responsive center" src="images/excel-ico.png" style="display:inline;"> Excel</a> / <a href="#" target="_blanck" style="display:inline-block;"><img class="img-responsive center-block" src="images/pdf-ico.png" style="display:inline;"> PDF</a></h6>
						<br>
						<a href="reports.php"><button type="button" class="w3-btn w3-blue w3-text-white">Back</button></a>
					</div>
					

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