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
					<h6 class="w3-bold">Add Matches:</h6>
					<div class="container-fluid w3-padding-0">
						<div class="row">
							<div class="col-md-5 col-sm-5 w3-blue w3-padding-top w3-padding-bottom">
								<div class="form-group">
									<input type="text" class="w3-input w3-border w3-margin-top w3-text-black" placeholder="Al-Hilal FC">
								</div>
								<div class="form-group">
									<input id="teamLogo1" type="file" class="teamLogo w3-input w3-light-grey w3-padding-small" name="teamLogo" accept="image/*" style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">
								</div>
								<div class="form-group w3-center">
									<button type="submit" class="w3-btn w3-border w3-border-white" style="background-color: #4c5164;">Upload</button>
									<button type="button" id="crop1" class="crop upload-result w3-btn w3-border w3-border-white w3-hide" style="background-color: #4c5164;">CROP</button>
								</div>
								<div class="form-group w3-center">
									<div id="logo_div1" class="logo_div text-center center-block w3-animate-opacity" style="display:block;">
										<img id="logo1" class="logo img-responsive center-block w3-hover-shadow" src="" alt="&#x0D;&#x0A;&#x0D;&#x0A;&#xf1c5;&#x0D;&#x0A;No Logo" style="width:180px; height:180px; font-family:Arial, FontAwesome; font-size:20px; line-height:150%; white-space:pre; background: white; color:#1a1a1a; text-shadow: #444 0 1px 1px;">
									</div>
									<div id="upload-demo1" class="upload-demo text-center w3-hide w3-animate-opacity">

									</div>
								</div>
							</div>
							<div class="col-md-2 col-sm-2" style="position:relative;">
								<h6 class="middle">Vs</h6>
							</div>
							<div class="col-md-5 col-sm-5 w3-blue w3-padding-top w3-padding-bottom">
								<div class="form-group">
									<input type="text" class="w3-input w3-border w3-margin-top w3-text-black" placeholder="Al-Hilal FC">
								</div>
								<div class="form-group">
									<input id="teamLogo2" type="file" class="teamLogo w3-input w3-light-grey w3-padding-small" name="teamLogo" accept="image/*" style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">
								</div>
								<div class="form-group w3-center">
									<button type="submit" class="w3-btn w3-border w3-border-white" style="background-color: #4c5164;">Upload</button>
									<button type="button" id="crop2" class="crop upload-result w3-btn w3-border w3-border-white w3-hide" style="background-color: #4c5164;">CROP</button>
								</div>
								<div class="form-group w3-center">
									<div id="logo_div2" class="logo_div text-center center-block w3-animate-opacity" style="display:block;">
										<img id="logo2" class="logo img-responsive center-block w3-hover-shadow" src="" alt="&#x0D;&#x0A;&#x0D;&#x0A;&#xf1c5;&#x0D;&#x0A;No Logo" style="width:180px; height:180px; font-family:Arial, FontAwesome; font-size:20px; line-height:150%; white-space:pre; background: white; color:#1a1a1a; text-shadow: #444 0 1px 1px;">
									</div>
									<div id="upload-demo2" class="upload-demo text-center w3-hide w3-animate-opacity">

									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="container-fluid w3-padding-0">
						<div class="row">
							<small class="w3-tiny"><br class="w3-hide-large"></small>
							<div class="col-md-12 w3-padding-tiny w3-section">
								<div class="form-group">
									<label class="w3-col s3" for="fromDate">From Date:</label>
									<input type="text" class="w3-col s8 w3-input w3-padding-tiny w3-border datepicker" id="fromDate" placeholder="DD/MM/YY">
								</div>
							</div>
							<small class="w3-tiny"><br class="w3-hide-large"></small>
							<div class="col-md-12 w3-padding-tiny w3-section">
								<div class="form-group">
									<label class="w3-col s3" for="tillDate">Till Date:</label>
									<input type="text" class="w3-col s8 w3-input w3-padding-tiny w3-border datepicker" id="tillDate" placeholder="DD/MM/YY">
								</div>
							</div>
							<small class="w3-tiny"><br class="w3-hide-large"></small>
							<div class="col-md-12 w3-padding-tiny w3-section">
								<div class="form-group">
									<label class="w3-col s3" for="mode">Select Mode:</label>
									<select class="w3-col s8 w3-input w3-padding-small w3-border" id="mode">
										<option value="" selected disabled>League/Club Match</option>
										<option value="option1">option1</option>
										<option value="option1">option1</option>
										<option value="option1">option1</option>
									</select>
								</div>
							</div>
							<small class="w3-tiny"><br class="w3-hide-large"></small>
							<div class="col-md-12 w3-padding-tiny w3-section">
								<div class="form-group">
									<label class="w3-col s3" for="venue">Select Venue:</label>
									<select class="w3-col s8 w3-input w3-padding-small w3-border" id="venue">
										<option value="" selected disabled>Select</option>
										<option value="option1">option1</option>
										<option value="option1">option1</option>
										<option value="option1">option1</option>
									</select>
								</div>
							</div>
						</div>
					</div>

					<br>
					<h6 class="w3-bold">Add Ticket Price:</h6>
					<div class="container-fluid w3-padding-0">
						<div class="row">
							<div class="col-md-6 w3-padding-tiny w3-section">
								<div class="form-group">
									<label class="w3-col s4" for="stand1">Select Stand:</label>
									<select class="w3-col s8 w3-input w3-padding-small w3-border" id="stand1">
										<option value="" selected disabled></option>
										<option value="option1">option1</option>
										<option value="option1">option1</option>
										<option value="option1">option1</option>
									</select>
								</div>
							</div>
							<small class="w3-tiny"><br class="w3-hide-large"></small>
							<small class="w3-tiny"><br class="w3-hide-large"></small>
							<div class="col-md-6 w3-padding-tiny w3-section">
								<div class="form-group">
									<label class="w3-col s4" for="standPrice1">Add Price:</label>
									<input type="text" class="w3-col s8 w3-input w3-padding-tiny w3-border" id="standPrice1" placeholder="SAR">
								</div>
							</div>
							<small class="w3-tiny"><br class="w3-hide-large"></small>
							<div class="col-md-6 w3-padding-tiny w3-section">
								<div class="form-group">
									<label class="w3-col s4" for="stand2">Select Stand:</label>
									<select class="w3-col s8 w3-input w3-padding-small w3-border" id="stand2">
										<option value="" selected disabled></option>
										<option value="option1">option1</option>
										<option value="option1">option1</option>
										<option value="option1">option1</option>
									</select>
								</div>
							</div>
							<small class="w3-tiny"><br class="w3-hide-large"></small>
							<div class="col-md-6 w3-padding-tiny w3-section">
								<div class="form-group">
									<label class="w3-col s4" for="standPrice2">Add Price:</label>
									<input type="text" class="w3-col s8 w3-input w3-padding-tiny w3-border" id="standPrice2" placeholder="SAR">
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="w3-row w3-section">
						<div class="w3-col s6">
							<button type="button" class="w3-btn w3-dark-gray w3-text-white">+ Add More Stands</button>
							<h6 class="w3-tiny">View all stands of stadium <a class="w3-text-blue" href="#">Click Here</a></h6>
						</div>
						<div class="w3-col s6 text-right">
							<button type="button" class="w3-btn w3-blue w3-text-white">Add Match</button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<link href="css/datepicker-bootstrap.css" rel="stylesheet">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
	$('#link3 a').addClass('active-link').removeClass('w3-transparent');

	jQuery(document).ready(function($) {
		$('.col-sm-2').css('height', $('.col-md-5').height() + 'px');
	});

	$(window).resize(function(){
		$('.col-sm-2').css('height', $('.col-md-5').height() + 'px');
	});
</script>

<script type="text/javascript" src="js/croppie.min.js"></script>

<script type="text/javascript">

	style = '<link rel="stylesheet" href="css/croppie.css">';

	function popupResult(result, elem) { 
        var html;
        if (result.html) {
          html = result.html; 
        }
        if (result.src) {
          html = '<img  src="' + result.src + '" />';
        }

        $(elem).find('.logo').attr('src', result.src).removeClass('w3-hide');
        // $(elem).find('.logo').removeClass('w3-hide');
        $(elem).find('.upload-demo, .crop').addClass('w3-hide');
        $(elem).find('.logo_div').removeClass('w3-hide');

    }

    $(document).ready(function(){
        $('head').append(style);

        $('.datepicker').datepicker({
	        showAnim: "drop",
	        dateFormat: "dd/mm/yy",
	        // inline: true,
	        showOtherMonths: true
	    });

        function readFile(input, elem) {
          $(elem).find('.upload-demo, .crop').removeClass('w3-hide');
          $(elem).find('.logo_div').addClass('w3-hide');

          if (input.files && input.files[0]) {
                  var reader = new FileReader();
                  
                  reader.onload = function (e) {
                  	if($(elem).find('#upload-demo1').length > 0){
                  		$uploadCrop1.croppie('bind', {
	                      url: e.target.result
	                    });	
                  	}
                    else if($(elem).find('#upload-demo2').length > 0){
                  		$uploadCrop2.croppie('bind', {
	                      url: e.target.result
	                    });	
                  	}
                    $(elem).find('.upload-demo').addClass('ready');
                  }
                  
                  reader.readAsDataURL(input.files[0]);
              }
              else {
                alert("Sorry - you're browser doesn't support the FileReader API");
            }
        }

        $uploadCrop1 = $('#upload-demo1').croppie({
          viewport: {
            width: 180,
            height: 180,
            type: 'square'
          },
          boundary: {
            width: 180,
            height: 180
          },
          enforceBoundary: false
        });

        $uploadCrop2 = $('#upload-demo2').croppie({
          viewport: {
            width: 180,
            height: 180,
            type: 'square'
          },
          boundary: {
            width: 180,
            height: 180
          },
          enforceBoundary: false
        });

        $('.teamLogo').on('change', function () { $this = $(this); readFile($this[0], $this.parent().parent()[0]); });
        $('#crop1').on('click', function (ev) { 
        	$this = $(this);
			$uploadCrop1.croppie('result', {
				type: 'canvas',
				size: 'viewport'
			}).then(function (resp) {
				popupResult({
				  src: resp
				}, $this.parent().parent()[0]);
			});
        });

        $('#crop2').on('click', function (ev) { 
        	$this = $(this);
			$uploadCrop2.croppie('result', {
				type: 'canvas',
				size: 'viewport'
			}).then(function (resp) {
				popupResult({
				  src: resp
				}, $this.parent().parent()[0]);
			});
        });
    });

</script>

<?php include('partner-footer.php'); ?>