<?php
$A = $_GET["Firstname"];
$B = $_GET["Lastname"];
$C = $_GET["Subject"];
$FullName = $A." ".$B;

echo "Sus detalles personales";
echo "<BR><BR>";
echo "Nombre       : $A <BR>";
echo "Apellido     : $B <BR>";
echo "Materia : $C <BR>";

$Month = 86400 + time();
setcookie ('name', $FullName, $Month);

?>

