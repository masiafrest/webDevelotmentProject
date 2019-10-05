<?php
$countryFrom = $_GET["countryFrom"];
$countryTo = $_GET ["countryTo"];
$fare = 0;

if ($countryFrom == $countryTo)
{
	echo "can't be the same country, please try again<br>";
}
else if ($countryFrom !== $countryTo)
{
	$fare = $countryFrom - $countryTo;
	$fare = abs($fare * 255);
	echo "from $countryFrom to $countryTo the fare is $fare";
}


?>
