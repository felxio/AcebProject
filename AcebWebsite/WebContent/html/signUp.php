<?php include '../php/generalVar.php'; ?>

<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">

<link rel="stylesheet" href="../css/popUp.css" type="text/css"
	media="screen">
</head>

<body>

	<div id="wb_Signup1"
		style="width: 275px; text-align: right; z-index: 4;">
		<form name="signupform" method="post" action="../php/signUp.php"
			id="signupform">
			<input type="hidden" name="form_name" value="signupform">
			<?php
			echo $error_message;
			?>
			<table class="signupform_table" style="width: 290px; height: 202px;">
				<tr>
					<td class="signupform_header" colspan="2" style="height: 20px;">Sign
						up for a new account</td>
				</tr>
				<tr>
					<td style="height: 20px">Last Name:</td>
					<td style="text-align: left"><input class="signupform_text"
						name="lastname" type="text" id="lastname"
						style="width: 150px; height: 18px;"></td>
				</tr>
				<tr>
					<td style="height: 20px">First Name:</td>
					<td style="text-align: left"><input class="signupform_text"
						name="firstname" type="text" id="firstname"
						style="width: 150px; height: 18px;"></td>
				</tr>
				<tr>
					<td style="height: 20px">User Name:</td>
					<td style="text-align: left"><input class="signupform_text"
						name="username" type="text" id="username"
						style="width: 150px; height: 18px;"></td>
				</tr>
				<tr>
					<td style="height: 20px;">Password:</td>
					<td style="text-align: left"><input class="signupform_text"
						name="password" type="password" id="password"
						style="width: 150px; height: 18px;"></td>
				</tr>
				<tr>
					<td style="height: 20px">Confirm Password:</td>
					<td style="text-align: left"><input class="signupform_text"
						name="confirmpassword" type="password" id="confirmpassword"
						style="width: 150px; height: 18px;"></td>
				</tr>
				<tr>
					<td style="height: 20px">E-mail:</td>
					<td style="text-align: left"><input class="signupform_text"
						name="email" type="text" id="email"
						style="width: 150px; height: 18px;"></td>
				</tr>
				<tr>
					<td style="height: 20px">Phone number:</td>
					<td style="text-align: left"><input class="signupform_text"
						name="phone_number" type="text" id="phone_number"
						style="width: 150px; height: 18px;"></td>
				</tr>
				<tr>
					<td style="height: 20px">Fonction:</td>
					<td style="text-align: left"><input class="signupform_text"
						name="fonction" type="text" id="fonction"
						style="width: 150px; height: 18px;"></td>
				</tr>
				<tr>
					<td style="height: 20px">Adresse:</td>
					<td style="text-align: left"><input class="signupform_text"
						name="address" type="text" id="address"
						style="width: 150px; height: 18px;"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td style="text-align: left; vertical-align: bottom"><input
						class="signupform_button" type="submit" name="signup"
						value="Create User" id="signup" style="width: 90px; height: 20px;"></td>
				</tr>
			</table>
		</form>
	</div>

</body>