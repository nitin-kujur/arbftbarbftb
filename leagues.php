<?php include('header.php'); ?>

<div class="jumbotron" style="padding-top: 0px; padding-bottom: 20px;">
	<div class=""  style="position: relative;">
		<div class="owl-carousel-hero owl-theme">
			<div class="item" style="max-height: 500px; overflowY: hidden;">
				<img src="images/wayne-rooney-wallpaper-14.jpg.png" class="img-responsive center-block" style="max-width:100%; height: 100%;">
						
			</div>
			<div class="item" style="max-height: 500px; overflowY: hidden;">
				<img src="images/football-field-wallpaper-4.jpg" class="img-responsive center-block" style="max-width:100%; height: 100%;">	
				<div class="carousel-caption bottom-right" style="left:0; right:0;">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-4">
								<img class="img-responsive center-block w3-white w3-round" src="images/Saudi_Professional_League_Logo.png" style="width:300px; height:auto;">
							</div>
							<div class="col-xs-8 w3-text-shadow">
								<h6 class="toUpper w3-xxlarge"><b>Abdul latif jameel league</b></h6>
								<h6 class="w3-xxlarge"><b>King Fahad International Stadium</b></h6>
								<h6 class="w3-xxlarge"><b>6TH - 10TH FEBRUARY, 2017</b></h6>
								<button type="button" class="w3-btn w3-teal btn-xs w3-shadow-none w3-padding-4 w3-margin-right" style="width:20%;"></button>
								<button class="w3-btn w3-round w3-card-21 w3-large w3-teal w3-text-white pull-right1 toUpper" data-toggle="modal" data-target="#signupModal" style="font-weight:bolder;">View Details</button>
								<button type="button" class="w3-btn w3-teal btn-xs w3-shadow-none w3-padding-4 w3-margin-right" style="width:20%;"></button>
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

<div class="jumbotron">
	<div class="container text-center">
		<button type="button" class="w3-btn w3-white w3-padding-large toUpper w3-card-1">Sports</button><br><br>
		<button type="button" class="w3-btn w3-round w3-section w3-card-1 w3-margin w3-grey w3-text-white toUpper" style="min-width: 250px;">All</button>
		<button type="button" class="w3-btn w3-round w3-section w3-card-1 w3-margin w3-light-grey toUpper" style="min-width: 250px;">Leagues</button>
		<button type="button" class="w3-btn w3-round w3-section w3-card-1 w3-margin w3-light-grey toUpper" style="min-width: 250px;">Matches</button>
	</div>
</div>

<nav id="navbar3" class="navbar navbar-default w3-card-2" data-spy="affix" data-offset-top="725">
	<div id="myNavbar-container3" class="container-fluid w3-padding-01">
		<div class="navbar-header navbar-bg-color">
		 <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar3">
				<h6 class="w3-margin-0 w3-text-white"><i class="fa fa-bars" style="font-size:15px"></i></h6>
		  </button> -->
		</div>
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

<div class="jumbotron" style="padding-top: 20px;">
	
	<div class="container-fluid w3-section">
		<div class="row w3-padding-0">

			<?php $rep = 1; $delay = 0; while ( $rep++ <= 8) { ?>
			<div class="col-md-3 col-sm-6 w3-margin-top w3-margin-bottom wow slideInUp" data-wow-duration="1s" data-wow-delay="<?php echo($delay+=0.1); ?>s">
				<div class="w3-card-2">
					<div class="" style="position: relative;">
						<img class="img-responsive center-block" src="images/banner_1.jpg">	
						<div class="img-overlay w3-text-shadow">
							<a href="league-detail.php"><button type="button" class="w3-margin-top w3-btn w3-teal toUpper">League</button></a>
							<div class="container w3-text-white">
								<div class="row text-center">
									<div class="col-xs-6 toUpper">
										<h6><b>Al	Wehda</b></h6>
									</div>
									<div class="col-xs-6 toUpper">
										<h6><b>Al Faisaly</b></h6>
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
						<a href="league-detail.php"><button type="button" class="w3-btn btn-danger active col-xs-12">View All Matches</button></a>
					</div>
				</div>
			</div>
			<?php } ?>

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
</style>

<?php include('footer.php'); ?>