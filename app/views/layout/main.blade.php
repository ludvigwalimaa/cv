<!DOCTYPE html>
<html>
	<head>
		<title>CV | Ludvig W&#228;limaa</title>
		<meta http-equiv="Content-Type" content="text/html" charset="utf8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		
		{{ HTML::style('css/navigation.css'); }}
		<link href="css/xsmall.css" rel="stylesheet">
		<link href="css/small.css" rel="stylesheet" media="screen and (min-width: 768px)">
		<link href="css/medium.css" rel="stylesheet" media="screen and (min-width: 992px)">
		<link href="css/large.css" rel="stylesheet" media="screen and (min-width: 1200px)">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="http://code.jquery.com/jquery.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function() {
				$(".more").click(function() {
					var panelId = $(this).attr('data-panelid');
					$('#'+panelId).slideToggle("slow");
					$(this).toggleClass('active');
				});
			});
		</script>

		<style type="text/css">

			html {
			 	 overflow-y: scroll;
			}
			body{
				font-family: 'Lora' , sans-serif;
				color: rgba(0, 0, 0, 0.8);
				background-color: white;
			}

	
			.col-xs-12{
				color: black;
				text-align: center;
				
			}
			
			.contentrecordhidden{
				display: none;
			}

			.more:hover{
				text-decoration: underline;
				cursor: pointer;
				cursor: hand;
			}

			.more:after{
				content: "+ Mera";
			}

			.more.active:after{
				content: "- Mer";
			}

			
		</style>
		
	</head>
<body>

<div class="container">

@include('layout.navigation')

<!-- Education -->
@include('layout.education')

<!-- Employments -->
@include('layout.employment')

<!-- Commitments -->
@include('layout.commitments')




</div>







</body>
</html>
