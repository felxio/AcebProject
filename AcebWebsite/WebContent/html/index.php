<?php 	include '../php/generalVar.php'; ?>


<!DOCTYPE html>
<html>


<head>
<title>Aceb</title>

<meta charset="ISO-8859-1">
<meta name="description" content="Main" />
<meta name="author" content="enama/felix" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" href="../css/styles.css?v=1.0">
<link rel="stylesheet" href="../css/main.css" type="text/css"
	media="screen">

<script>
	function popUp(url, width, height) {
		var left = null;
		var top = null;
		if (window.innerWidth) {
			left = (window.innerWidth - width) / 2;
			top = (window.innerHeight - height) / 2;
		} else {
			left = (document.body.clientWidth - width) / 2;
			top = (document.body.clientHeight - height) / 2;
		}
		// 			var myWindow = 
		window.open(url, "_blank", "top=" + top + ",left=" + left + ",width="
				+ width + ",height=" + height + ","
				+ "scrollbars=yes, resizable=yes, toolbar=yes, menubar=yes, status=yes");
		//, toolbar=yes, menubar=yes	, directories=no, status=yes, location=yes
		// 	myWindow.document
		// 	.write("<p>This is 'MsgWindow'. I am 200px wide and 100px tall!</p>");
	}
</script>

<script type="../js/method.js"></script>

<!-- [if lt IE 9]> -->
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<!-- <![endif] -->

</head>


<body>

<!--  
<button onclick="popUp('insert.php',200,100)"
 				style="position: absolute; left: 10px; top: 10px;">Insert</button> -->

	<div id="page-body">
		<div id="header">
			<div id="logo"></div>
		</div>

		<div id="head">
			<div id="logIn" style="position: absolute; left: 910px; top: 28px;" align="center">
				<a href="#null" onclick="popUp('logIn.php',190,200)"><img
					src="../images/img0002.png" id="TextArt1" alt="Log In"
					title="Log In" style="border-width: 0; width: 50px; height: 15px;">
				</a>
			</div>
			<div id="signUp" style="position: absolute; left: 970px; top: 20px;" align="center">
				<a href="#null" onclick="popUp('signUp.php', 330, 390)"><img
					src="../images/img0001.gif" id="Shape1"
					style="border-width: 0; width: 80px; height: 25px;"> </a>
			</div>
<!--			<button onclick="popUp('logIn.php',200,500)" -->
<!--  				style="position: absolute; left: 910px; top: 50px;">logIn</button> -->
<!-- 		<button onclick="popUp('signUp.php', 330, 390)" -->
<!--  				style="position: absolute; left: 970px; top: 50px; width: 80px">signIn</button> -->
		</div>

		<div id="menu">
			<ul>
				<li><a href="#" class="menu1">HOME</a></li>
				<li><a href="./about_us" class="menu2">ABOUT US</a></li>
				<li><a href="./activities" class="menu3">ACTIVTIES</a></li>
				<li><a href="./events" class="menu4">EVENTS</a></li>
				<li><a href="./contacts" class="menu5">CONTACT US</a></li>
			</ul>
		</div>

		<div id="contenu">
			<div id="welcome-up">
				<div id="welcome-intro">
					<h1>Introduction</h1>
					L�ACEB est une association apolitique, � but non lucrative
					enti�rement dirig�e par les �tudiants et r�cents dipl�m�s
					camerounais. Ses membres sont enti�rement int�ress�s par la
					promotion de la culture africaine en particulier Camerounaise, les
					�changes interculturelles, l�int�gration des africains en France et
					<a href="#" class="./about_us">Read more...</a>
				</div>
				<div id="welcome-slider">
					slider
					<div>
						<img src="../images/aceb.png" id="Image3" alt="" border="0"
							style="width: 260px; height: 150px;"> <img
							src="../images/img0014.png" id="TextArt3"
							alt="Association Camerounaise  des Etudiants de Brest"
							title="Association Camerounaise  des Etudiants de Brest"
							style="border-width: 0; width: 230px; height: 110px;">
					</div>
				</div>

			</div>

			<div id="welcome-down">

				<div class="content">

					half presentations with image
					<div class="part">
						<h1>Our Sponsors</h1>
						<marquee id="Marquee1">
							<span
								style="color: #376BAD; font-family: 'Times New Roman'; font-size: 15px;">For
								more information on<br>our sponsors, click on the image<br>corresponding.
							</span>
						</marquee>

						<div id="wb_Image3" style="margin-top: 10px; margin-bottom: 15px;">
							<a href="https://particuliers.societegenerale.fr/"
								target="_blank"><img src="../images/sg.jpg" id="Image3"
								alt="" border="0" style="width: 200px; height: 45px;"></a>
						</div>
						<div id="wb_Image4" style="margin-bottom: 15px;">
							<a href="http://www.brest.fr/" target="_blank"><img
								src="../images/brest.png" id="Image3" alt="" border="0"
								style="width: 200px; height: 50px;"></a>
						</div>
						<div id="wb_Image5" style="margin-bottom: 15px;">
							<a href="http://www.univ-brest.fr/" target="_blank"><img
								src="../images/UBO.jpg" id="Image5" alt="" border="0"
								style="width: 200px; height: 90px;"></a>
						</div>
						<div id="wb_Image6" style="margin-bottom: 15px;">
							<a href="http://www.crous-rennes.fr/brest_1" target="_blank"><img
								src="../images/crous.jpg" id="Image6" alt="" border="0"
								style="width: 200px; height: 70px;"></a>
						</div>
						<div id="wb_Image7" style="margin-bottom: 15px;">
							<a href="http://www.gmf.fr/index.jsp" target="_blank"><img
								src="../images/GMF.jpg" id="Image7" alt="" border="0"
								style="width: 200px; height: 50px;"></a>
						</div>
						<div id="wb_Image9" style="margin-bottom: 15px;">
							<a href="http://www.lmde.com/" target="_blank"><img
								src="../images/LMDE.jpg" id="Image9" alt="" border="0"
								style="width: 200px; height: 50px;"></a>
						</div>
						<div id="wb_Image8" style="margin-bottom: 15px;">
							<a href="http://www.smeba.fr/" target="_blank"><img
								src="../images/smeba.jpg" id="Image8" alt="" border="0"
								style="width: 200px; height: 30px;"></a>
						</div>

					</div>


					latest news
					<div class="part">
						<h1>Lastest news</h1>
						<ul>
							<li><a href="#">latest news 1</a> : for this convenient, we
								are ready, as long as we are childs of God, fair not !</li>
							<li><a href="#">latest news 2</a> : for this convenient, we
								are ready, as long as we are childs of God, fair not !</li>
							<li><a href="#">latest news 3</a> : for this convenient, we
								are ready, as long as we are childs of God, fair not !</li>
						</ul>
						<a href="./activities" class="read-more">See more...</a>
					</div>


					useful links
					<div class="part">
						<h1>We will figure it out later</h1>
						<ul>
							<li><a href="#">useful link 1</a></li>
							<li><a href="#">useful link 2</a></li>
							<li><a href="#">useful link 3</a></li>
							<li><a href="#">useful link 4</a></li>
							<li><a href="#">useful link 5</a></li>
							<li><a href="#">useful link 6</a></li>
						</ul>
						<a href="#" class="read-more">See more...</a>
					</div>


					latest events
					<div class="part">
						<h1>Events</h1>
						<ul>
							<li><a href="#">upcoming event 1 (09/06/2014)</a> : for this
								event, we are ready, as long as we are childs of God, fair not !</li>
							<li><a href="#">upcoming event 2 (09/06/2014)</a> : for this
								event, we are ready, as long as we are childs of God, fair not !</li>
							<li><a href="#">upcoming event 3 (09/06/2014)</a> : for this
								event, we are ready, as long as we are childs of God, fair not !</li>
						</ul>
						<a href="./events" class="read-more">See more...</a>
					</div>


				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		<div id="footer"></div>
	</div>
	





</body>


</html>