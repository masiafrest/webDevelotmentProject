<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Hetero Systems - Leap Year</title>

</head>
<body>
	<div class="jumbotron">
	  	<h1 class="display-4 text-center">Leap Year</h1>
		<br>
			<div class="text-center">
			<a class="btn btn-primary btn-lg" href="index.html" role="button">Home</a>
	  		<a class="btn btn-primary btn-lg" href="Arithmetic.html" role="button">Arithmetic Operators</a>
			<a class="btn btn-primary btn-lg" href="Increment.html" role="button">Increment operator</a>
			</div>
	  	<hr class="my-4">
	<br>
		<div>
	  		<form method=GET action="LeapYear.php" class="text-center">
				Enter Year: 				
				<input type="text" name="year">
				<input type="submit" value="enter"><br><br><br>
				<?php
				$year = $_GET["year"];

				if ( (($year % 4) == 0 && ($year % 100) != 0) || ($year % 400) == 0)
				{
					echo "It is a Leap Year.";
				}
				else
				{
					echo "it is not a Leap Year.";
				}
				?>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

