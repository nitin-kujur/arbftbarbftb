
		<div class="jumbotron w3-padding-0 w3-grey2" style="padding-top: 20px !important;">
			<div class="container-fluid w3-padding-0">
				<div class="row toUpper text-center w3-text-white">
					<div class="col-md-4 w3-hover-shadow">
						<img class="img-responsive center-block" style="width:90px;" src="images/CC.png">
						<h6 class="w3-small">24/7 Customer Care</h6>			
						<small><br></small>
					</div>
					<div class="col-md-4 w3-hover-shadow">
						<img class="img-responsive center-block" style="width:90px;" src="images/RBC.png">
						<h6 class="w3-small">Resend Booking Confirmation</h6>		
						<small><br></small>
					</div>
					<div class="col-md-4 w3-hover-shadow">
						<img class="img-responsive center-block" style="width:90px;" src="images/STN.png">
						<h6 class="w3-small">Subscribe to Newsletter</h6>			
						<small><br></small>
					</div>		
				</div>	
			</div>
		</div>

		<div class="jumbotron" style="background: rgb(52,51,56); padding-top: 20px !important; padding-bottom: 10px !important;">
			<div class="container">
				<div class="row text-center w3-text-white toUpper">
					<div class="col-md-2 col-sm-4 col-xs-6">
						<button type="button" class="w3-btn btn-sm w3-grey2 w3-section footer-menu-btn">Sports</button>	
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6">
						<button type="button" class="w3-btn btn-sm w3-grey2 w3-section footer-menu-btn">Cinemas</button>	
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6">
						<button type="button" class="w3-btn btn-sm w3-grey2 w3-section footer-menu-btn">Parking</button>	
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6">
						<button type="button" class="w3-btn btn-sm w3-grey2 w3-section footer-menu-btn">Metro</button>	
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6">
						<button type="button" class="w3-btn btn-sm w3-grey2 w3-section footer-menu-btn">Notification</button>	
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6">
						<button type="button" class="w3-btn btn-sm w3-grey2 w3-section footer-menu-btn">My Tickets</button>	
					</div>
				</div>
			</div>	

			<div class="container-fluid w3-padding-0 w3-margin-top">
				<div class="row">
					<div class="row-height">
						<div class="col-md-5 col-height w3-padding-0">
							<hr class="w3-border-grey2 w3-margin-0">	
						</div>
						<div class="col-md-2 col-height w3-padding-0">
							<img src="images/Logo.png" class="img-responsive center-block"  alt="p" width="130px" height="40%" style="object-fit: contain;">	
						</div>
						<div class="col-md-5 col-height w3-padding-0">
							<hr class="w3-border-grey2 w3-margin-0">	
						</div>
					</div>
				</div>
				<br>
				<h6 class="w3-text-grey w3-small text-center w3-section w3-margin-top">Copyright <?php echo date('Y'); ?> &copy; All Rights Reserved.</h6>

			</div>

		</div>

		<button type="button" class="w3-btn w3-tiny w3-border-0 w3-card-2" style="position:fixed; width:150px; bottom:110px; z-index:999999; right:30px; opacity:0.5;" onmouseout="this.style.opacity = '0.5'" onmouseover="this.style.opacity = '1';" onclick="notifyFuncCall();">show notification</button>

		<button type="button" class="w3-btn w3-tiny w3-border-0 w3-card-2" style="position:fixed; width:150px; bottom:70px; z-index:999999; right:30px; opacity:0.5;" onmouseout="this.style.opacity = '0.5'" onmouseover="this.style.opacity = '1';" onclick="freez();">show loader</button>

		<button type="button" class="w3-btn w3-tiny w3-border-0 w3-card-2" style="position:fixed; width:150px; bottom:30px; z-index:999999; right:30px; opacity:0.5;" onmouseout="this.style.opacity = '0.5'" onmouseover="this.style.opacity = '1';" onclick="defreez();">hide loader</button>

		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js"></script>
		<script src="js/bootstrap-notify.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-notify.css">
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/wow.min.js"></script>
	  	<script src="js/flowtype.js"></script>
		<!-- // <script src="js/jquery.stellar.min.js"></script> -->
		<script type="text/javascript" src="js/jquery.blockUI.js"></script>
		<script type="text/javascript">
			// media query event handler
			  if (matchMedia) {
			    var mq = window.matchMedia("(min-width: 1366px)");
			    mq.addListener(WidthChange);
			    WidthChange(mq);
			  }

			  // media query change
			  function WidthChange(mq) {
			    if (mq.matches) {
			      // window width is at least 1366px
			      // $('#navbar').removeClass('navbar-fixed-top');
			      $('.force-lg-width').removeClass('lg-width');
			    } else {
			      // window width is less than 1366px
			      // $('#navbar').addClass('navbar-fixed-top');
			      $('.force-lg-width').addClass('lg-width');
			      $('.force-lg-width').scrollLeft(1366);
			    }

			  }

			  // media query event handler
			  if (matchMedia) {
			    var mq4nav = window.matchMedia("(min-width: 768px)");
			    mq4nav.addListener(WidthChange4nav);
			    WidthChange4nav(mq4nav);
			  }

			  // media query change
			  function WidthChange4nav(mq) {
			    if (mq.matches) {
			      // window width is at least 768px
			      if($('#navbar-container2 #myNavbar').length > 0){
			      	navHtml = $('#navbar-container2').html();
			      	$('#navbar-container2').html('');
			      	// document.getElementById('navbar-container2').innerHTML = '';
			      	$('#navbar-container1').html('').append(navHtml);

			      	$('.w3-xxlarge1').addClass('w3-xxlarge').removeClass('w3-xxlarge1 w3-large');
			      	$('button.w3-large1').addClass('w3-large').removeClass('w3-large1 w3-small');
			      }
			    } else {
			      // window width is less than 768px
			      if($('#navbar-container1 #myNavbar').length > 0){
			      	navHtml = $('#navbar-container1').html();
			      	$('#navbar-container1').html('');
			      	// document.getElementById('navbar-container1').innerHTML = '';
			      	$('#navbar-container2').html('').append(navHtml);

			      	$('.w3-xxlarge').addClass('w3-xxlarge1 w3-large').removeClass('w3-xxlarge');
			      	$('button.w3-large').addClass('w3-large1 w3-small').removeClass('w3-large');
			      }
			    }

			  }
			$(document).ready(function() {

		  		new WOW().init();

		  		$('.owl-carousel-hero').owlCarousel({
		  			items:1,
		            // autoplay:true,
		            loop:true,
				    autoplaySpeed:2000,
				    center: true,
				    margin: 0,
				    stagePadding: 60,
				    dots: true,
				    startPosition: 1,
				    responsiveClass:true,
				    responsive:{
				        0:{
				           stagePadding: 0
				            
				        },
				        600:{
				           stagePadding: 30
				            
				        },
				        1000:{
				           stagePadding: 60

				        }
				    }
		  		});

				$(".next").click(function(){
					$(".owl-carousel-hero").find( ".owl-next" ).click();
				});
				$(".prev").click(function(){
				    $(".owl-carousel-hero").find( ".owl-prev" ).click();
				});

				// $('.nav').affix({offset: {top: 150} });
				$('#navbar2').on('affixed.bs.affix', function(){
			        $('#myNavbar-container').removeClass('animated fadeIn').addClass('animated fadeOutUp').slideUp(0);
			        $('#navbar').removeClass('w3-card-2 navbar-bg-color');
					$('#navbar-container2').addClass('margin-top60');
					$('#ham2').removeClass('animated fadeOut').addClass('animated fadeIn');
			    });
			    $('#navbar2').on('affixed-top.bs.affix', function(){
			        $('#myNavbar-container').removeClass('animated fadeOutUp').addClass('animated fadeIn').slideDown(0);
					$('#navbar').addClass('w3-card-2 navbar-bg-color');
					$('#navbar-container2').removeClass('margin-top60');
					$('#ham2').removeClass('animated fadeIn').addClass('animated fadeOut');
			    });

			    $('#navbar').on('mouseover', function() { 
			    	if($('#navbar2').hasClass('affix') && $('#myNavbar-container').hasClass('fadeOutUp'))
			    	$('#myNavbar-container').removeClass('animated fadeOutUp').addClass('animated fadeIn').slideDown(0);
			    });

			    $('#navbar').on('mouseleave', function() { 
			    	if($('#navbar2').hasClass('affix') && $('#myNavbar-container').hasClass('fadeIn'))
			    	$('#myNavbar-container').removeClass('animated fadeIn').addClass('animated fadeOutUp').slideUp(0);
			    });

			});

			function selectChange(index){
				$('#header-select option:eq('+index+')').prop('selected', 'selected').change();
			}

			function selectResponse(obj){ 
				var index = obj.selectedIndex;
				var text = obj.options[index].innerHTML;
				$('#selected-action').html('<i class="fa fa-th-large"></i>&nbsp;&nbsp;&nbsp;'+text+'&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-down"></i>');
				switch(index){
					case 0: $('#search-box').attr('placeholder', 'Search by League or Venue or Team'); break;
					case 1: $('#search-box').attr('placeholder', 'Search by League'); break;
					case 2: $('#search-box').attr('placeholder', 'Search by Venue'); break;
					case 3: $('#search-box').attr('placeholder', 'Search by Team'); break;
				}
				
			}

			function freez(){
				$.blockUI({ 
		            message: '<div class="pre-loader"></div>', 
		            overlayCSS: { backgroundColor: 'black' },
		            css: { 
		                top:  ($(window).height() - 50) /2 + 'px',    
		                left: ($(window).width() - 50) /2 + 'px', 
		                width: 'auto',
		                border: 'none',
		                baseZ: 999998,
		                backgroundColor: 'transparent' 
		            } 
		        }); 

		        // setTimeout($.unblockUI(), 2000);
			}

			function defreez(){ $.unblockUI(); }

			function notifyFuncCall(){
				$.notify({
					title: 'Email: Erica Fisher',
					message: 'Investment, stakeholders micro-finance equity health Bloomberg; global citizens climate change. Solve positive social change sanitation, opportunity insurmountable challenges...'
				},{
					type: 'pastel-warning',
					delay: 5000,
					template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
						'<span data-notify="title">{1}</span>' +
						'<span data-notify="message">{2}</span>' +
					'</div>',
					placement: {
						from: 'bottom',
						align: 'left'
					},
					animate: {
						enter: 'animated fadeInLeft',
						exit: 'animated fadeOutLeft'
					}
				});
			}
		</script>
		
	</body>
</html>