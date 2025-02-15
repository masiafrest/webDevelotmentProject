<!DOCTYPE html>

<html>
<head>
  <title>King Travel and Tours</title>
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
	
</head>
<body class="bg-light"> <!--bg-info es un color celeste claro de bootstrap -->
	<nav class="navbar navbar-dark bg-primary navbar-expand-md "> 
		<a class="navbar-brand" href="index.html"><h3>Kings Travel</h3></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse " id="collapsingNavbar">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item ml-auto">
					<a class="nav-link" href="flights.html">Flights</a>
				</li>
				<li class="nav-item ml-auto">
					<a class="nav-link" href="availabilty.html">Availability</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<main class="h-100 container p-5">
		<br><br>
		<h3>Check Availability</h3>
		<br>
		<form method="get" action="availability.php">
			<div class="input-group mw-25">
				<select class="custom-select" name="country">
					<option selected>Choose...</option>
					<option value="1">Panama</option>
					<option value="2">Costa Rica</option>
					<option value="3">Colombia</option>
					<option value="4">Chile</option>
					<option value="5">Rusia</option>
					<option value="6">España</option>
					<option value="7">China</option>
					<option value="8">Estados Unidos</option>
					<option value="9">Canada</option>
					<option value="10">South Africa</option>
				</select>
				<div class="input-group-prepend">
					<button class="btn btn-primary" type="submit">Check</button>
				</div>
			</div>
		</form>
		<div class="text-center mt-5">
			<h2>
				<?php
				$country = $_GET["country"];
				$countryRand1 = rand(1,3);
				$countryRand2 = rand(3,7);
				$countryRand3 = rand(7,10);
				
				if($country == "Choose...")
				{
					echo "Please <br> Choose a country";
				}
				else if($country == $countryRand1 || $country == $countryRand2 || $country == $countryRand3)
				{
					echo "country is available";
				}
				else 
				{
					echo "country not available";
				}

				?>
			</h2>
		</div>
	</main>
	
	<div class="footer fixed-bottom pt-3" style="background-color: dodgerblue">
		<p class="text-center">Kings Travel 2019</p>
	</div>
		
</body>
</html>

