<?php include('header.php'); ?>

<div class="jumbotron w3-dark-blue" style="padding-top: 0px; padding-bottom: 0px;">
	<div class="container w3-padding-0"  style="max-height: 500px; overflowY: hidden; position: relative;">
		<img src="images/dark-blue-bg.jpg" class="img-responsive center-block" style="max-width:100%; height: 100%;">
		<div class="carousel-caption bottom-right" style="left:0; right:0;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-4">
						<img class="img-responsive center-block w3-white w3-round" src="images/spl_logo5.jpg" style="width:300px; height:auto;">
					</div>
					<div class="col-xs-8 w3-text-shadow">
						<h6 class="toUpper w3-xxlarge"><b>Abdul latif jameel league</b></h6>
						<h6 class="w3-xxlarge"><b>King Fahad International Stadium</b></h6>
						<h6 class="w3-xxlarge"><b>6TH - 10TH FEBRUARY, 2017</b></h6>
						<br><br>
						<button type="button" class="w3-btn w3-teal btn-xs w3-shadow-none w3-padding-4 w3-margin-right" style="width:20%;"></button>
						<button class="w3-btn w3-round w3-card-21 w3-large w3-teal w3-text-white pull-right1 toUpper" data-toggle="modal" data-target="#signupModal" style="font-weight:bolder;">View Details</button>
						<button type="button" class="w3-btn w3-teal btn-xs w3-shadow-none w3-padding-4 w3-margin-right" style="width:20%;"></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<nav id="navbar3" class="navbar navbar-default w3-card-2" data-spy="affix" data-offset-top="430">
	<div id="myNavbar-container3" class="container-fluid w3-padding-01">
		<!-- <div class="navbar-header navbar-bg-color">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar3">
				<h6 class="w3-margin-0 w3-text-white"><i class="fa fa-bars" style="font-size:15px"></i></h6>
		  </button>
		</div> -->
		<div id="myNavbar3" class="collapse1 navbar-collapse1 w3-padding-0">
			<ul id="myNavbar3-child" class="nav navbar-nav navbar-dark toUpper w3-text-gray">
				  <li id="tab-li1"><a class="w3-transparent" href="javascript:window.history.back();"><h6 class="text-center"><span>&nbsp;&nbsp;&nbsp;</span><i class="fa fa-angle-left"></i>&nbsp;Back<span>&nbsp;&nbsp;&nbsp;</span></h6></a></li>
				  <li id="tab-li2" class="active"><a class="w3-transparent" data-toggle="tab" href="#leaguesSection"><h6 class="text-center"><span>&nbsp;&nbsp;&nbsp;</span>Leagues<span>&nbsp;&nbsp;&nbsp;</span></h6></a></li>
				  <li id="tab-li3"><a class="w3-transparent" data-toggle="tab" href="#venueSection"><h6 class="text-center"><span>&nbsp;&nbsp;&nbsp;</span>Venue<span>&nbsp;&nbsp;&nbsp;</span></h6></a></li>
			</ul>
		</div>
	</div>
</nav>

<div id="psudo-div" class="w3-light-grey"></div>

<div class="tab-content" style="position:relative;">
	<div id="leaguesSection" class="jumbotron tab-pane fade in active">
		<br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7">

					<?php $rep = 1; $delay = 0; while ( $rep++ <= 4) { ?>
					<div class="row w3-white border-2-lg wow slideInUp" data-wow-duration="0.5s" data-wow-delay="<?php echo($delay+=0.05); ?>s">
						<div class="col-xs-2 w3-light-grey right-dshd-brdr text-center">
							<div class="container-fluid w3-padding-0">
								<h6 class="w3-small">FEB</h6>
								<h6 class="w3-xxlarge"><b>23</b></h6>
								<h6 class="toUpper w3-small">Thursday</h6><hr class="w3-margin-0 w3-border-grey">
								<h6 class="toUpper w3-small">9:30 AM</h6>
							</div>
						</div>
						<div class="col-xs-10 w3-padding-0">
							<div class="container-fluid w3-padding-0 vertical-center">
								<div class="row">
									<div class="col-md-4 w3-padding-0">
										<!-- <div class="container-fluid"> -->
											<div class="row">
												<div class="col-xs-5 w3-padding-0">
													<img class="img-responsive w3-right w3-circle" src="images/44291x3.png" style="width:30px; height:auto;">
												</div>
												<div class="col-xs-2 w3-padding-0">
													<h6 class="w3-small"><b>Vs</b></h6>
												</div>
												<div class="col-xs-5 w3-padding-0">
													<img class="img-responsive w3-left w3-circle" src="images/2000007441x3.png" style="width:30px; height:auto;">	
												</div>
											</div>
											<div class="row text-center">
												<div class="col-xs-6 toUpper">
													<h6 class="w3-small w3-text-grey"><b>Al	Wehda</b></h6>
												</div>
												<div class="col-xs-6 toUpper">
													<h6 class="w3-small w3-text-grey"><b>Al Faisaly</b></h6>
												</div>
											</div>
										<!-- </div> -->
									</div>
									<div class="col-md-5 w3-padding-0">
										<h6class="w3-small"><b>Abdul latif jameel league</b></h6>
										<h6class="w3-small"><b>King Fahad International Stadium</b></h6>
									</div>
									<div class="col-md-3 w3-padding-0 text-center">
										<a href="match-detail.php"><button type="button" class="w3-btn btn-danger active">Book Now</button></a>
										<h6 class="w3-small toUpper">SAR: 200 - 1000 </h6>
									</div>
								</div>
							</div>
						</div>
					</div><br>
					<?php } ?>
				</div>
				<div class="col-md-5">
					<div id="wyswug-container" class="row w3-white w3-margin-bottom border-2-lg" data-spys="affix" data-offset-tops="535">
						<div class="col-xs-12">
							<h6 class="w3-xlarge text-center"><b>Abdul latif jameel league</b></h6>
							<div class="wyswug pre">
								The Saudi Professional League. officially known as 
								Jameel League named after Abdul Latif Jameel Croup 
								for sponsorship reasons. is the top division of 
								Association football league in Saudi Arabia. 
								Prize money: 
								First place: 3.800.000 Saudi Riyals 
								Second place: 2,000.000 Saudi Riyals 
								Third place: I .000.000 Saudi Riyals 
								(Note. all clubs in the Saudi Professional League receive 
								prize money depending on their rank)
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="venueSection" class="jumbotron tab-pane fade">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7">
					venue
				</div>
				<div class="col-md-5">
				
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function() {

	    var $el, leftPos, newWidth,
	        $mainNav = $("#myNavbar3-child");
	    
	    $mainNav.append("<li id='magic-line' class='w3-bottombar1 w3-border-grey1'></li>");
	    var $magicLine = $("#magic-line");
	    
	    function initMagicLine() {
	        $magicLine
	        .width($mainNav.find(".active").width())
	        .css("left", $mainNav.find(".active ").position().left)
	        .data("origLeft", $magicLine.position().left)
	        .data("origWidth", $magicLine.width());
        }

        initMagicLine();
	        
	    $("#myNavbar3-child li ").hover(function() {
	        $el = $(this);
	        leftPos = $el.position().left;
	        newWidth = $el.width();
	        $magicLine.stop().animate({
	            left: leftPos,
	            width: newWidth
	        });
	    }, function() {
	        $magicLine.stop().animate({
	            left: $magicLine.data("origLeft"),
	            width: $magicLine.data("origWidth")
	        });    
	    });

	    $("#myNavbar3-child li ").click(function() {
	    	$el = $(this);
	        $magicLine
	        .width($el.width())
	        .css("left", $el.position().left)
	        .data("origLeft", $magicLine.position().left)
	        .data("origWidth", $magicLine.width());
        });
	});

	$('#navbar3').on('affixed.bs.affix', function(){
       $('#psudo-div').css({height:'70px'});
    });
    $('#navbar3').on('affixed-top.bs.affix', function(){
       $('#psudo-div').css({height:'0px'});
    });

</script>

<style type="text/css">
	/*for magicLine*/
	#myNavbar3-child { margin: 0 auto; list-style: none !important; position: relative !important; width: 450px !important; }
	#myNavbar3-child li { display: inline !important; }
	#myNavbar3-child li a { color: ; font-size: ; display: block !important; float: left !important; padding1: 6px 10px 4px 10px; text-decoration: none; text-transform1: uppercase; }
	#myNavbar3-child li a:hover { color: ; }
	#magic-line { position: absolute !important; bottom: -2px; left: 0; width: 100px; height: 5px; background: grey; }

	#navbar3.affix{ 
		position: fixed !important;
		top: 65px !important;
		width: 100% !important;
	}

	#wyswug-container.affix{ 
		/*position: fixed !important;*/
		top: 169px !important;
		width: auto !important;
		margin-right: 30px !important;
	}

	.border-2-lg{
		border: 2px lightgrey solid;
	}

	.right-dshd-brdr{
		border-right: 2px lightgrey dashed;
	}
</style>

<?php include('footer.php'); ?>