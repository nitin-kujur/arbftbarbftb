<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title></title>
		<link rel='stylesheet' id='theme_stylesheet'>
	    <link rel='stylesheet' id='icon_stylesheet'>

	    <style>[class*="foundicon-"] {font-family: GeneralFoundicons;font-style: normal;}</style>
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script type="text/javascript" src="js/jsoneditor.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	</head>
	<body>
		<div class="jumbotron">
			<div class="container">
				<div id ="editor_holder">
				
				</div>
			</div>
		</div>

		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript">

			var schema = <?php echo (file_get_contents('lang/companies-list.json', true)); ?>;
			var element = document.getElementById('editor_holder');

			var editor = new JSONEditor(element, {
			  schema: schema,
			  theme: 'bootstrap2',
			  iconlib: "fontawesome4"
			});
		</script>

	</body>
</html>