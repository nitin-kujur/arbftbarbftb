<?php include('partner-sign-in-header.php'); ?>

		<div class="jumbotron w3-padding-0 parent1"  style="padding-top: 20px; padding-bottom: 20px; background-image:url('images/welcome-banner.jpg'); background-size:cover; background-position:top center; ">
			<div>
				<div class="container w3-text-white" style="margin-top:65px;">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-xs-12 w3-padding-0 w3-animate-bottom w3-blue">
							<h6 class="w3-padding-large w3-center w3-block w3-margin-0 w3-xxlarge w3-bold">Welcome to <span style="display:inline-block; white-space: nowrap;"><img class="img-responsive center-block" src="images/logo2.5.png" style="width:100px; display:inline; bottom:8px; position:relative;">&nbsp;!</span></h6>
							<div class="container text-left w3-margin-top">
								<form role='form' method='POST' action=''>
									<div class="row">
										<div class="col-md-6 col-sm-6">
											<div class="form-group">
												<label for="clubName">Club Name</label>
												<input id="clubName" type="text" class="w3-input w3-text-black w3-padding-small" name="clubName">
											</div>
											<div class="form-group">
												<label for="currentCoach">Current Coach</label>
												<input id="currentCoach" type="text" class="w3-input w3-text-black w3-padding-small" name="currentCoach">
											</div>
											<div class="form-group">
												<label for="currentNationality">Current Nationality</label>
												<input id="currentNationality" type="text" class="w3-input w3-text-black w3-padding-small" name="currentNationality">
											</div>
											<div class="form-group">
												<label for="currentLocation">Current Location / City</label>
												<input id="currentLocation" type="text" class="w3-input w3-text-black w3-padding-small" name="currentLocation">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="form-group">
												<label for="teamLogo">Upload Team Logo</label>
												<input id="teamLogo" type="file" class="w3-input w3-light-grey w3-padding-small" name="teamLogo" accept="image/*" style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">
											</div>
											<div class="form-group w3-center">
												<button type="submit" class="w3-btn w3-border w3-border-white" style="background-color: #4c5164;">Upload</button>
												<button type="button" id="crop" class="upload-result w3-btn w3-border w3-border-white w3-hide" style="background-color: #4c5164;">CROP</button>
											</div>
											<div class="form-group w3-center">
												<div id="logo_div" class="text-center center-block w3-animate-opacity" style="display:block;">
													<img id="logo" class="img-responsive center-block w3-hover-shadow" src="" alt="&#x0D;&#x0A;&#x0D;&#x0A;&#xf1c5;&#x0D;&#x0A;No Logo" style="width:180px; height:180px; font-family:Arial, FontAwesome; font-size:20px; line-height:150%; white-space:pre; background: white; color:#1a1a1a; text-shadow: #444 0 1px 1px;">
												</div>
												<div id="upload-demo" class="text-center w3-hide w3-animate-opacity">

												</div>
											</div>
										</div>
									</div>
									<div class="w3-block w3-center">
										<button type="submit" class="w3-btn w3-border w3-border-white w3-section" style="background-color: #4c5164;">Save and Continue to Profile</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="js/croppie.min.js"></script>

		<script type="text/javascript">

			style = '<link rel="stylesheet" href="css/croppie.css">';

			function popupResult(result) {
		        var html;
		        if (result.html) {
		          html = result.html; 
		        }
		        if (result.src) {
		          html = '<img  src="' + result.src + '" />';
		        }

		        $('#logo').attr('src',result.src);
		        $('#logo').removeClass('w3-hide');
		        $('#upload-demo,#crop').addClass('w3-hide');
		        $('#logo_div').removeClass('w3-hide');

		    }

		    $(document).ready(function(){
		        $('head').append(style);

		        function readFile(input) {
		          $('#upload-demo,#crop').removeClass('w3-hide');
		          $('#logo_div').addClass('w3-hide');

		          if (input.files && input.files[0]) {
		                  var reader = new FileReader();
		                  
		                  reader.onload = function (e) {
		                    $uploadCrop.croppie('bind', {
		                      url: e.target.result
		                    });
		                    $('#upload-demo').addClass('ready');
		                  }
		                  
		                  reader.readAsDataURL(input.files[0]);
		              }
		              else {
		                alert("Sorry - you're browser doesn't support the FileReader API");
		            }
		        }

		        $uploadCrop = $('#upload-demo').croppie({
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

		        $('#teamLogo').on('change', function () { readFile(this); });
		        $('.upload-result').on('click', function (ev) { 
		          $uploadCrop.croppie('result', {
		            type: 'canvas',
		            size: 'viewport'
		          }).then(function (resp) {
		            popupResult({
		              src: resp
		            });
		          });
		        });
	        });

		</script>

		<?php include('partner-footer.php'); ?>