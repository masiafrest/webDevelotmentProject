<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
$dbname = 'stPeterSchool';
$dbuser = 'masiaf';
$dbpass = 'creed';
$dbhost = 'localhost';

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

/* comprueba la conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* devuelve el nombre de la base de datos actualmente seleccionada */
if ($result = mysqli_query($link, "SELECT DATABASE()")) {
    //$row = mysqli_fetch_row($result);
    echo "Default database is $dbname.<br>";
    mysqli_free_result($result);
}

/* cambia de test bd a world bd */
mysqli_select_db($link, "world");

/* devuelve el nombre de la base de datos actualmente seleccionada */
if ($result = mysqli_query($link, "SELECT DATABASE()")) {
    //$row = mysqli_fetch_row($result);
    echo "Default database is $result.<br>";
    mysqli_free_result($result);
}

mysqli_close($link);
?>

</body>
</html>