<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?php
//get data from index.html of stPeterSchool Register
$email = $_POST["email"];
$password = $_POST["password"];
$name = $_POST["name"];
$lastName = $_POST["lastName"];
$grade = $_POST["grade"];
$phone = $_POST["phone"];

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

$sql = "insert into students value ('$email', '$password', '$name', '$lastName', '$grade', '$phone')";
if(mysqli_query($link, $sql)){
    echo "Records of $email, $name $lastName, $grade, $phone inserted successfully. <br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link) . "<br>";
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