<?php
$con=mysqli_connect("localhost","acebadmin","passworld","acebdatabase");
$error_message = null;

// Check connection
if (mysqli_connect_errno ()) {
	$error_message = 'User database not found :' . mysqli_connect_error ();
	die ( 'User database not found :' . mysqli_connect_error () );
	exit ();
}

// escape variables for security
$newfirstname = mysqli_real_escape_string ( $con, $_POST ['firstname'] );
$newlastname = mysqli_real_escape_string ( $con, $_POST ['lastname'] );
$newusername = mysqli_real_escape_string ( $con, $_POST ['username'] );
$newpassword = mysqli_real_escape_string ( $con, $_POST ['password'] );
$confirmpassword = mysqli_real_escape_string ( $con, $_POST ['confirmpassword'] );
$newemail = mysqli_real_escape_string ( $con, $_POST ['email'] );
$newphone_number =  $_POST ['phone_number'];
$newfonction = mysqli_real_escape_string ( $con, $_POST ['fonction'] );
$newaddress = mysqli_real_escape_string ( $con, $_POST ['address'] );

if ($newpassword != $confirmpassword) {
	$error_message = 'Password and Confirm Password are not the same!';
} else if (! preg_match ( "/^[A-Za-z0-9_!@$]{1,50}$/", $newusername )) {
	$error_message = 'Username is not valid, please check and try again!';
} else if (! preg_match ( "/^[A-Za-z0-9_!@$]{1,50}$/", $newpassword )) {
	$error_message = 'Password is not valid, please check and try again!';
} else if (! preg_match ( "/^[A-Za-z0-9_!@$.' &]{1,50}$/", $newlastname )) {
	$error_message = 'Lastname is not valid, please check and try again!';
} else if (! preg_match ( "/^[A-Za-z0-9_!@$.' &]{1,50}$/", $newfirstname )) {
	$error_message = 'Firstname is not valid, please check and try again!';
} else if (! preg_match ( "/^[A-Za-z0-9_!@$.' &]{1,50}$/", $newfonction )) {
	$error_message = 'Fonction is not valid, please check and try again!';
} else if (! preg_match ( "/^[A-Za-z0-9_!@$.' &]{1,50}$/", $newaddress )) {
	$error_message = 'address is not valid, please check and try again!';
} else if (! preg_match ( "/^[0-9]$/", $newphone_number )) {
	$error_message = 'Phone number is not valid, please check and try again!';
} else if (! preg_match ( "/^.+@.+\..+$/", $newemail )) {
	$error_message = 'Email is not a valid email address. Please check and try again.';
}


// verify if user exist && l'email existe
$r = mysqli_query($con,"SELECT * FROM member");
while($row = mysqli_fetch_assoc($r)) {
	if ( $row['firstNameirstName'] )
		echo "user"+$newusername+" name in used";
	if ( $row['email'] )
		echo "email"+$newusername+" is allready register";
}

$querry =  "INSERT INTO member(lastName, fistName, userName, pwd, email, phoneNumber, fonction, adress) VALUES ('$newlastname','$newfirstname','$newusername','$newpassword','$newemail','$newphone_number','$newfonction','$newaddress')";
$result = mysqli_query($con,$querry);

if (!$result) {
	die ( 'Error: ' . mysqli_error ( $con ) );
}
echo "1 record added";

mysqli_close($con);
?>