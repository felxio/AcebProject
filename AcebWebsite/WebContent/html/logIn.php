<?php 	include '../php/generalVar.php'; ?>

<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">

<link rel="stylesheet" href="../css/popUp.css" type="text/css"
	media="screen">
</head>
</head>

<body>

	<div id="wb_Login1" align="center"
		style="height: 130px; text-align: right; z-index: 0;">

		<form name="loginform" method="post"
			action="../php/logIn.php" id="loginform">
			<input type="hidden" name="form_name" value="loginform">

			<table class="loginform_table" style="height: 130px;">
				<tr>
					<td class="loginform_header" colspan="2" style="height: 20px;">Log
						In</td>
				</tr>
				<tr>
					<td style="height: 20px;">User Name:</td>
					<!-- value="<?php echo $username; ?>"  -->
					<td style="text-align: left"><input class="loginform_text"
						name="username" type="text" id="username"
						style="width: 100px; height: 18px;"></td>
				</tr>
				<tr>
					<td style="height: 20px">Password:</td>
					<!-- value="<?php echo $password; ?>"  -->
					<td style="text-align: left"><input class="loginform_text"
						name="password" type="password" id="password"
						style="width: 100px; height: 18px;"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td style="text-align: left; height: 20px"><input
						id="rememberme" type="checkbox" name="rememberme">Remember
						me</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td style="text-align: left; vertical-align: bottom"><input
						class="loginform_button" type="submit" name="login" value="Log In"
						id="login" style="width: 70px; height: 20px;"></td>
				</tr>
			</table>

		</form>
	</div>
	
	

</body>