<!DOCTYPE html>
<html>
	<head>
		<title>Ludvig C W&#228;limaa</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		
		<!-- {{ HTML::style('css/index.css'); }} -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="http://code.jquery.com/jquery.js"></script>
		
		<style type="text/css">
			body{
				background-color: black;
			}
			.col-xs-12{
				height: 100px;
				background-color: green;
				color: white;
				text-align: center;
				border: 2px solid black;
			}

			.col-xs-6{
				height: 100px;
				background-color: blue;
				color: white;
				text-align: center;
				border: 2px solid black;
			}

			.col-xs-4{
				height: 100px;
				background-color: yellow;
				color: white;
				text-align: center;
				border: 2px solid black;
			}

			.col-xs-8{
				height: 100px;
				background-color: red;
				color: white;
				text-align: center;
				border: 2px solid black;
			}
			.footer .col-sm-4{
				height: 100px;
				background-color: purple;
				color: white;
				text-align: center;
				border: 2px solid black;
			}
		</style>
		
	</head>
<body>

	<!--  **** NOTES *****
		Grid classes: 
			.container: wrapper for your rows
			.row: contains all your column classes
			.col-##-##: the sizes of the columns in your row {xs, sm, md, lg,   1-12}

		Ordering classes( only for lg or md screens):
			.col-##-push-##: Pushes your content
			.col-##-pull-##: Pulls your content

		Offset classes( only for lg or md screens):
			.col-##-offset-##: moves your columns depending on what the column is offset by

		Responsive Utility Classes: They hide and show content on your screen depending on which device you style for.
			
			.visible-##: Your content will only be visible on that screensize.
			.hidden-##: Your content will only be hidden on that screensize.

	
	 -->

<div class="container">

	<div class="row">

		<div class="col-xs-12">

			<div class="visible-lg"><h1>Ludvig C. W&#228;limaa</h1></div>
			<div class="visible-md"><h2>Ludvig C. W&#228;limaa</h2></div>
			<div class="visible-sm"><h3>Ludvig C. W&#228;limaa</h3></div>
			<div class="visible-xs"><h4>Ludvig C. W&#228;limaa</h4></div>


		</div>
	</div>

	

		<div class="row">

			<div class="col-xs-12 col-lg-8">
						.col xs 8
			</div>

			<div class="col-xs-12 col-lg-4">
						.col xs 4
			</div>

		</div>


		<div class="row hidden-xs">
			<div class="col-sm-6">
				<div class="row">
					<div class="col-xs-4 col-lg-push-8">.col xs 4</div>
					<div class="col-xs-8 col-lg-pull-4">.col xs 8</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="row">
					<div class="col-xs-4">.col xs 4</div>
					<div class="col-xs-8">.col xs 8</div>
				</div>
			</div>

		</div>


		<div class="row footer">
			<div class="col-sm-4">.col sm 4</div>
			<div class="col-sm-4">.col sm 4</div>
			<div class="col-sm-4">.col sm 4</div>
		</div>


		<div class="row">
			<div class="col-md-4 col-md-offset-8 panel">
				Find easydevtut on social media
			</div>
			
		</div>

</div>







</body>
</html>
