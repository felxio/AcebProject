<?php
include '../php/generalVar.php';

if (isset ( $_POST ['form_name'] )) {
	
	// connect to the database
	include '../php/connect.php';
	
	$error_message = "";
	$newfirstname = mysqli_real_escape_string ( $dbcon, $_POST ['firstname'] );
	$newlastname = mysqli_real_escape_string ( $dbcon, $_POST ['lastname'] );
	$newusername = mysqli_real_escape_string ( $dbcon, $_POST ['username'] );
	$newpassword = mysqli_real_escape_string ( $dbcon, $_POST ['password'] );
	$confirmpassword = mysqli_real_escape_string ( $dbcon, $_POST ['confirmpassword'] );
	$newemail = mysqli_real_escape_string ( $dbcon, $_POST ['email'] );
	$newphone_number = mysqli_real_escape_string ( $dbcon, $_POST ['phone_number'] );
	$newfonction = mysqli_real_escape_string ( $dbcon, $_POST ['fonction'] );
	$newaddress = mysqli_real_escape_string ( $dbcon, $_POST ['address'] );
	
	if (! preg_match ( "/^[A-Za-z0-9_!@$]{1,50}$/", $newusername ))
		$error_message = $error_message . 'Username is not valid, please check and try again!' . "<br>";
	if ($newpassword != $confirmpassword)
		$error_message = $error_message . 'Password and Confirm Password are not the same!' . "<br>";
	if (! preg_match ( "/^[A-Za-z0-9_!@$]{1,50}$/", $newpassword ))
		$error_message = $error_message . 'Password is not valid, please check and try again!' . "<br>";
	if (! filter_var ( $newemail, FILTER_VALIDATE_EMAIL ))
		$error_message = $error_message . "This ($newemail) email address is not a valid, please check and try again!";
	if (! preg_match ( "/^[0-9]{10}$/", $newphone_number ))
		$error_message = $error_message . 'Phone number is not valid, please check and try again!' . "<br>";
	if (! preg_match ( "/^[A-Za-z0-9_!@$.' &]{1,50}$/", $newlastname ))
		$error_message = $error_message . 'Lastname is not valid, please check and try again!' . "<br>";
	if (! preg_match ( "/^[A-Za-z0-9_!@$.' &]{1,50}$/", $newfirstname ))
		$error_message = $error_message . 'Firstname is not valid, please check and try again!' . "<br>";
	if (! preg_match ( "/^[A-Za-z0-9_!@$.' &]{1,50}$/", $newfonction ))
		$error_message = $error_message . 'Fonction is not valid, please check and try again!' . "<br>";
	if (! preg_match ( "/^[A-Za-z0-9_!@$.' &]{1,50}$/", $newaddress ))
		$error_message = $error_message . 'address is not valid, please check and try again!' . "<br>";
	
	$querry = "SELECT * FROM member";
	$result = mysqli_query ( $dbcon, $querry ) or die ( 'error getting data - 1st querry' ); 
	
	while ( $row = mysqli_fetch_assoc ( $result ) ) {
		if ($row ['userName'] == $newusername) {
			$error_message = $error_message . "user  " . $newusername . " name is allready used" . "<br>";
		}
		if ($row ['email'] == $newemail) {
			$error_message = $error_message . 'Message Error : ' . "email " . $newemail . " is allready register" . "<br>";
		}
		if ($row ['phoneNumber'] == $newphone_number) {
			$error_message = $error_message . 'Message Error : ' . "The phone number " . $newphone_number . " is allready register" . "<br>";
		}
	}
	
	if ($error_message != "" || $error_message != null) {
		$error_message = '<p>Message Error : </br>' . $error_message . '</p>';
		die ( $error_message );
	} else {
		$querry = "INSERT INTO member(lastName, firstName, userName, pwd, email, phoneNumber, fonction, adress) VALUES ('$newlastname','$newfirstname','$newusername','$newpassword','$newemail','$newphone_number','$newfonction','$newaddress')";
		$result = mysqli_query ( $dbcon, $querry ) or die ( 'error getting data - 2nd querry' );
		
		if (! $result) {
			$error_message .= 'Error: ' . mysqli_error ( $dbcon );
			die ( $error_message );
		} else
			$error_message = "parfait";
	}
	
	if ($error_message == "parfait") {
		echo "you have been successfully register";
	}
	
	// close connetion
	mysqli_close ( $dbcon );
}
?>




?>