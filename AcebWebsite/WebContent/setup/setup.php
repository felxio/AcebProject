<?php 

// Variable 
$database = 'acebdatabase';
// Create connection
$database=mysqli_connect("localhost","acebadmin","passworld","acebdatabase");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



// signUp var
$success_page = '';
$error_message = "";

$newusername = $_POST['username'];
$newemail = $_POST['email'];
$newpassword = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$newfullname = $_POST['fullname'];
$code = 'NA';

// logIn var
$success_page = '';
$error_page = basename(__FILE__);
$crypt_pass = md5($_POST['password']);
$found = false;
$fullname = '';






?>


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               