
<?php


// for database
define('DB_USER', 'acebadmin');
define('DB_HOST', 'localhost');
define('DB_PASSWORD', 'passworld');
define('DB_NAME', 'acebdatabase');

$dbcon = mysqli_connect ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$dbcon) {
	die("Failed to connect to MySQL: " . mysqli_connect_error());
}

echo 'you have connected successfully'."</br></br>";

?>