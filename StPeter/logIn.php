<html style="background-color:#E6E6E6;">
<head>
	<title> St. Peter Institute </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="h-100">
	<nav class="navbar navbar-light navbar-expand-sm">
		<a class="navbar-brand" href="Index.html"><h3>St. Peter School</h3></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar"><span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse" id="collapsingNavbar">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item ml-auto">
					<a class="nav-link" href="Addmision.html">Addmision Test</a>
				</li>
				<li class="nav-item ml-auto">
					<a class="nav-link" href="about.html">About</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="p-5 container mt-5 "> 
		<h5 class="text-center">	
			<?php
			$email = $_POST["email"];
			$password = $_POST["password"];
			$name = $_POST["name"];
			$lastName = $_POST["lastName"];
			$grade = $_POST["grade"];
			$phone = $_POST["phone"];

			echo "Your $email and password is register. <br>
						your name is $name $lasName and registering to $grage.<br>
						On any emergency your phone is $phone.<br>";
			?>
		</h5>
	</div>
	
	<div class="footer bg-secondary fixed-bottom pt-3">
		<p class="text-center">St. Patrick School 2019</P>
	</div>
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
