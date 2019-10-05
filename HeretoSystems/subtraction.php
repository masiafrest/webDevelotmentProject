<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Hetero Systems - Arithmetic</title>

</head>
<body>
	<div class="jumbotron">
	  	<h1 class="display-4 text-center">Arithmetic</h1>
		<div class="row">
		  <div class="col-3">
		    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		      <a class="nav nav-pill" href="index.html">Home</a>
		      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Addition</a>
		      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Subtraction</a>
		      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Multiplication</a>
		      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Division</a>
		    </div>
		  </div>
		  <div class="col-9">
		    <div class="tab-content" id="v-pills-tabContent">
		      	<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<br>
				<form method=GET action="addition.php">
				<input type="text" size="4" name="addition1">+<input type="text" size="4" name="addition2">
				<input type="submit" value="calculate">
				</form>
			</div>
		      	<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<br>
				<form method=GET action="subtraction.php">
				<input type="text" size="4" name="subtraction1">-<input type="text" size="4" name="subtraction2">
				<input type="submit" value="calculate">
				</form>
				<?php

				$subtraction1 = $_GET["subtraction1"];
				$subtraction2 = $_GET["subtraction2"];

				$total = $subtraction1 - $subtraction2;

				echo $subtraction1." - ".$subtraction2." is = $total.";

				?>
			</div>
		      	<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<br>
				<form method=GET action="Multiplication.php">
				<input type="text" size="4" name="Multiplication1">*<input type="text" size="4" name="Multiplication2">
				<input type="submit" value="calculate">
				</form>
			</div>
		      	<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
				<br>
				<form method=GET action="Division.php">
				<input type="text" size="4" name="Division1">/<input type="text" size="4" name="Division2">
				<input type="submit" value="calculate">
				</form>
			</div>
		    </div>
		  </div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

