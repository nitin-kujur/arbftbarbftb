<?php include('header.php'); ?>

<div class="jumbotron" style="padding-top: 0px; padding-bottom: 20px;">
	<div class=""  style="position: relative;">
		<div class="owl-carousel-hero owl-theme">
			<div class="item" style="max-height: 500px; overflowY: hidden;">
				<img src="images/wayne-rooney-wallpaper-14.jpg.png" class="img-responsive center-block" style="max-width:100%; height: 100%;">
						
			</div>
			<div class="item" style="max-height: 500px; overflowY: hidden;">
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
								<button type="button" class="w3-btn w3-white btn-xs w3-shadow-none w3-padding-4 w3-margin-right" style="width:20%;"></button>
								<button class="w3-btn w3-round w3-card w3-border-white w3-border w3-large w3-teal w3-text-white pull-right1 toUpper" style="font-weight:bolder;">View Details</button>
								<button type="button" class="w3-btn w3-white btn-xs w3-shadow-none w3-padding-4 w3-margin-right" style="width:20%;"></button>
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
		<button type="button" class="w3-btn w3-white w3-padding-large toUpper no-btn w3-card-1">Sports</button><br><br>
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
				  <li id="tab-li2" class="active w3-dropdown-hover" style="position: relative;">
				  	<a class="w3-transparent dropdown-toggle" tabindex="-1" data-toggle="dropdown" href="javascript:;"><h6 class="text-center"><span>&nbsp;&nbsp;&nbsp;</span>Pick a Date<span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>&nbsp;</span></h6></a>
			  		<ul class="dropdown-menu text-center toUpper w3-padding w3-dropdown-content w3-white w3-card-4"> 
	                    <li class="dropdown-header w3-col w3-center">Quick Date Selections</li>
	                    <li class="w3-col"><a class="w3-block text-center w3-btn w3-teal w3-text-white w3-card" href="javascript:;" onclick="document.getElementById('datepicker').value = '<?php echo date('d-m-Y'); ?>';">Today (<?php echo date('d-m-Y'); ?>)</a></li>
	                    <li class="divider"><hr></li>
	                    <li class="w3-col"><a class="w3-block text-center w3-btn w3-teal w3-text-white w3-card" href="javascript:;" onclick="document.getElementById('datepicker').value = '<?php echo ('0'.(date('d')+1).date('-m-Y')); ?>';">Tomorrow (<?php echo ('0'.(date('d')+1).date('-m-Y')); ?>)</a></li>
	                    <li class="divider"><hr></li>
	                    <li class="divider"><hr></li>
	                    <li class="divider"><hr></li>
	                    <li><input id="datepicker" placeholder="Enter Date.." type="text" class="form-control1 w3-input w3-border w3-center" name="date"/><!-- <a href="javascript:;" onclick="">Select Date</a> --></li>
	                </ul>
				  </li>
				  <li id="tab-li3" class="w3-dropdown-hover">
				  	<a class="w3-transparent dropdown-toggle" tabindex="-1" data-toggle="dropdown" href="javascript:;"><h6 class="text-center"><span>&nbsp;&nbsp;&nbsp;</span>Filter by Price<span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>&nbsp;</span></h6></a>
				  	<ul class="dropdown-menu text-center toUpper w3-padding w3-dropdown-content w3-white w3-card-4"> 
	                    <!-- <li class="w3-col"><a class="w3-block text-center w3-section" href="javascript:;" onclick="document.getElementById('date').value = '<?php echo date('d/m/Y'); ?>';">Today (<?php echo date('d/m/Y'); ?>)</a></li>
	                    <li class="divider"><hr></li>
	                    <li class="w3-col"><a class="w3-block text-center w3-section" href="javascript:;" onclick="document.getElementById('date').value = '<?php echo ('0'.(date('d')+1).date('/m/Y')); ?>';">Tomorrow (<?php echo ('0'.(date('d')+1).date('/m/Y')); ?>)</a></li>
	                    <li class="divider"><hr></li> -->
	                    <li class="text-center1">
	                    	<input id="priceRange" type="text" class="w3-section1" data-slider-tickss="[0, 100, 200, 300, 400]" data-slider-ticks-snap-boundss="30" data-slider-ticks-labelss='["$0", "$100", "$200", "$300", "$400"]'/>
	                    </li>
	                </ul>
				  </li>
				  <li id="tab-li4" class="w3-dropdown-hover">
				  	<a class="w3-transparent dropdown-toggle" tabindex="-1" data-toggle="dropdown" href="javascript:;"><h6 class="text-center"><span>&nbsp;&nbsp;&nbsp;</span>Filter by Venue<span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>&nbsp;</span></h6></a>
				  	<ul class="dropdown-menu text-center toUpper w3-padding w3-dropdown-content w3-white w3-card-4"> 
				  		<li class="dropdown-header w3-col w3-center">Favourite Venues</li>
	                    <li class="w3-col"><a class="w3-block text-center w3-btn w3-teal w3-text-white w3-card" data-venue="Behrin" href="javascript:;" onclick="document.getElementById('venue').value = this.getAttribute('data-venue');">Behrin</a></li>
	                    <li class="divider"><hr></li>
	                    <li class="divider"><hr></li>
	                    <li><input id="venue" placeholder="Enter Venue.." type="text" class="form-control1 w3-input w3-border w3-center" name="venue"/><!-- <a href="javascript:;" onclick="">Select Date</a> --></li>
	                </ul>
				  </li>
			</ul>
			<div class="w3-block">
				<h6>Filters:</h6>
				<span class="label w3-teal w3-medium"><span id="dateFilterTag"><?php echo date('d-m-Y'); ?></span> | <i class="fa fa-times-circle w3-hover-shadow" title="Remove this" onclick=""></i></span>
				<span class="label w3-teal w3-medium"><span id="priceFilterTag">$0, $100</span> | <i class="fa fa-times-circle w3-hover-shadow" title="Remove this" onclick=""></i></span>
				<span class="label w3-teal w3-medium"><span id="venueFilterTag">Behrin</span> | <i class="fa fa-times-circle w3-hover-shadow" title="Remove this" onclick=""></i></span>
			</div>
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
							<div class="container w3-text-white text-center">
								<h6 class="w3-bold">Abdul latif jameel league,</h6>
								<h6 class="w3-bold">6th - 10th FEB, 2017</h6>
								<div class="row">
									<div class="col-xs-6 toUpper">
										<h6 class="w3-bold">Al	Wehda</h6>
									</div>
									<div class="col-xs-6 toUpper">
										<h6 class="w3-bold">Al Faisaly</h6>
									</div>
								</div>
							</div>
							<div class="container-fluid w3-margin-top" style="botton:0px;">
								<div class="row text-center w3-text-white">
									<div class="col-xs-3 w3-border w3-border-white w3-round w3-padding-0">
										<h6 class="w3-small">Feb. 04</h6>
										<h6 class="w3-small">2017</h6>	
									</div>
									<div class="col-xs-6 w3-padding-0">
										<div class="row">
											<div class="col-xs-5 w3-padding-0">
												<img class="img-responsive w3-right" src="images/44291x3.png" style="width:30px; height:auto;">
											</div>
											<div class="col-xs-2 w3-padding-0">
												<h6> Vs </h6>
											</div>
											<div class="col-xs-5 w3-padding-0">
												<img class="img-responsive w3-left" src="images/2000007441x3.png" style="width:30px; height:auto;">	
											</div>
										</div>
									</div>
									<div class="col-xs-3 w3-padding-0">
										<h6 class="w3-small">SAR.220</h6>	
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


<div class="jumbotron w3-white" style="padding-top: 20px; padding-bottom: 20px;">
	<img class="img-responsive center-block" style="width:100%;" src="images/flick-click2.png">
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.2/bootstrap-slider.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
	style = '<link href="css/datepicker-bootstrap.css" rel="stylesheet"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.2/css/bootstrap-slider.min.css" />';

	$(function() {

		$('head').append(style);

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
	        
	    $("#myNavbar3-child > li ").hover(function() {
	        $el = $(this);
	    	if($('.dropdown-menu').filter(':visible').length > 0){ $magicLine.css({'bottom':'-6px'}); return;}
	    	else { $magicLine.css({'bottom':'-1px'}); }
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

        $.datepicker._updateDatepicker_original = $.datepicker._updateDatepicker;
	    $.datepicker._updateDatepicker = function(inst) {
	        $.datepicker._updateDatepicker_original(inst);
	        var afterShow = this._get(inst, 'afterShow');
	        if (afterShow)
	            afterShow.apply((inst.input ? inst.input[0] : null));  // trigger custom callback
	    }

        $('#datepicker').datepicker({
            showAnim: "drop",
            dateFormat: "dd-mm-yy",
            // inline: true,
            showOtherMonths: true,
            numberOfMonths:[1,2],
            afterShow: function(inst) {
		    	$('.ui-datepicker-group').addClass('w3-half');
		    }
        });

        $("#priceRange").bootstrapSlider({
		    ticks: [0, 100, 200, 300, 400],
		    ticks_labels: ['$0', '$100', '$200', '$300', '$400'],
		    ticks_snap_bounds: 30,
		    formatter: function(value) {
		    	value = value.toString().replace(/,/, ', $');
		    	return '$' + value;
			},
			min: 0, max: 400, range: true, value: [0, 100] 
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
	#myNavbar3-child { margin: 0 auto; list-style: none !important; position: relative !important; width: 750px !important; }
	#myNavbar3-child li { display: inline !important; }
	#myNavbar3-child li a { color: ; font-size: ; display: block !important; float: left !important; padding1: 6px 10px 4px 10px; text-decoration: none; text-transform1: uppercase; }
	#myNavbar3-child li a:hover { color: ; }
	#magic-line { position: absolute !important; bottom: -1px; left: 0; width: 100px; height: 6px; background: grey; }

	#navbar3.affix{ 
		position: fixed !important;
		top: 65px !important;
		width: 100% !important;
	}

	.ui-datepicker-group{
		width: 50% !important;
	}
</style>

<?php include('footer.php'); ?>