<?php
include '../php/generalVar.php';

if (isset ( $_POST ['form_name'] )) {
	$error_message = "";
	
	// connect to the database
	include '../php/connect.php';
	
	$username = mysqli_real_escape_string ( $dbcon, $_POST ['username'] );
	$password = mysqli_real_escape_string ( $dbcon, $_POST ['password'] );
	
	$querry = "SELECT * FROM member";
	$result = mysqli_query ( $dbcon, $querry ) or die ( 'error getting data' );
	$test = false;
	while ( $row = mysqli_fetch_assoc ( $result ) ) {
			if ($row ['userName'] == $username && $row ['pwd'] == $password) {
				$error_message = $error_message . "welcome " . $username;
				$foundUser = true;
			} 
	}
	if ($foundUser) {
		echo $error_message;
	}
	else echo "identifiant ou mot de passe incorrecte";
		
	
	
	// close connetion
	mysqli_close ( $dbcon );
}
?>
