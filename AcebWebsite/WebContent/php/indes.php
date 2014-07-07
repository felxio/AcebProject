<?php 	include '../setup/setup.php'; ?>

<!DOCTYPE HTML>
<html>

	<head>
	  	<meta charset="utf-8">
	  	<!--  Concatenation -->
  		<title><?php echo $page_title.' | '.$site_title?></title>
  		
		<?php 	include '../config/css.php'; ?>
		<?php 	include '../config/js.php'; ?>
	</head>

	<body>
		
			<nav class="navbar navbar-default" role="navigation">
				
				<div class="container">
					<ul class="nav navbar-nav"> 
						<li class="active"> <a href="#">Home</a></li> 
						<li> <a href="#">About Us</a></li>
						<li> <a href="#">FAQ</a></li>
						<li> <a href="#">Contact</a></li>
					</ul>
				</div>
			
			</nav>
		
		<div class="container">
			<h1>Content Area</h1>
		</div>
		
<!-- 		<footer id="footer"> -->
<!-- 			<div class="container"> -->
<!-- 				<p>This is my footer</p> -->
<!-- 			</div> -->
<!-- 		</footer> -->
		
		
	</body>
</html>


