<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Beex Website</title>
	<!--fonts-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300|Slabo+27px' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">

</head>

<body>
	<?php include("navbar.php"); ?>

	<div class="container-fluid equipe">
		<h3 class="sous-titre text-center">L'équipe</h3>
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="panel panel-default panel-profile">
					<div id="francois-heading" class="panel-heading"></div>
					<div class="panel-body text-center">
					<img src="images/francois.png" class="img-responsive center-block img-portrait">
						<div class="caption">
							<h3>Francois</h3>
							<p>CEO</p>
							<p><a href="#" class="btn btn-primary" role="contact">Contact</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="panel panel-default panel-profile">
					<div id="alex-heading" class="panel-heading"></div>
					<div class="panel-body text-center">
					<img src="images/pib.png" class="img-responsive center-block img-portrait">
						<div class="caption">
							<h3>Alex</h3>
							<p>Co-founder</p>
							<p><a href="#" class="btn btn-primary" role="contact">Contact</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="panel panel-default panel-profile">
					<div id="thibaut-heading" class="panel-heading"></div>
					<div class="panel-body text-center">
					<img src="images/thibaut.png" class="img-responsive center-block img-portrait">
						<div class="caption">
							<h3>Thibaut</h3>
							<p>CTO</p>
							<p><a href="#" class="btn btn-primary" role="contact">Contact</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="panel panel-default panel-profile">
					<div id="alix-heading" class="panel-heading"></div>
					<div class="panel-body text-center">
					<img src="images/alix.png" class="img-responsive center-block img-portrait">
						<div class="caption">
							<h3>Alix</h3>
							<p>Co-founder</p>
							<p><a href="#" class="btn btn-primary" role="contact">Contact</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





	<?php include("footer.php"); ?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
