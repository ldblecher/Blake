<!doctype html>
<html>

<head>
	<title>Blake Windows, Siding, and Roofing</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css"/>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/smaller.js"></script>
	<script src="ajax.js"></script>
</head>

<body>
	<div id="topbar">
		<a href="index.php"><img id="logo" src="images/logo.png"></a>
		<div id="navbar">
			<div id="numbers">1-877-BLAKE-OK / 516-488-4858 / 718-766-8600</div><br>
			<ul class="list">
				<li class="line"><a class="shadow" href="about.php">ABOUT</a></li>
				<li class="line"><a class="shadow" href="roofing.php">ROOFING</a></li>
				<li class="line"><a class="shadow" href="siding.php">SIDING</a></li>
				<li class="line"><a class="shadow" href="windows.php">WINDOWS</a></li>
				<li class="line"><a class="shadow" href="gutters.php">GUTTERS</a></li>
				<li class="line" id="dropdown" >OTHER SERVICES
					<ul id="subul">
						<li class="subdrop"><a class="shadow" href="soffit.php">SOFFIT &amp; FASCIA</a></li>
						<li class="subdrop"><a class="shadow" href="awnings.php">AWNINGS</a></li>
						<li class="subdrop"><a class="shadow" href="doors.php">DOORS</a></li>
						<li class="subdrop" id="bottom"><a class="shadow" href="remodeling.php">REMODELING</a></li>
						<li class="subdrop"><a class="shadow" href="light.php">LIGHT CONSTRUCTION</a></li>
					</ul>
				</li>
				<li class="line"><a class="shadow" href="testimonials.php">TESTIMONIALS</a></li>
				<li class="line"><a class="shadow" href="contact.php">CONTACT</a></li>
			</ul>
		</div><br>
	</div>
	<div id="mainpicdiv">
		<p id="maintext">IMPROVE YOUR HOME WITHOUT DELAY<br>
		CALL <span id="phone">1-877-BLAKE-OK</span></p>
	</div>
	<div id="maininner">
		<div id="frontblurb">
			<h2 id="proudly">Proudly serving Queens County and Nassau County for over 35 years</h2>
			<p class="blurbtext">With over 35 years of experience, you can trust in the quality and craftsmanship of Blake Windows, Siding & Roofing. Whether it is for windows, siding, roofing, or any other home improvement, we start by listening to what you want. We always cater our service to you and your specific needs.</p>
		</div>
		<hr width="50%">
		<div id="serviceslist">
			<div class="servicediv">
				<a href="roofing.php" class="apic"><p>Roofing</p></a>
				<a href="roofing.php"><div class="img" style="background-image:url('images/roof1.jpg')"></div></a>
			</div>
			<div class="servicediv">
				<a href="siding.php" class="apic"><p>Siding</p></a>
				<a href="siding.php"><div class="img" style="background-image:url('images/siding1.jpg')"></div></a>
			</div>
			<div class="servicediv">
				<a href="windows.php" class="apic"><p>Windows</p></a>
				<a href="windows.php"><div class="img" style="background-image:url('images/windows1.jpg')"></div></a>
			</div>
			<div class="servicediv">
				<a href="gutters.php" class="apic"><p>Gutters and Leaders</p></a>
				<a href="gutters.php"><div class="img" style="background-image:url('images/guttersleaders.jpg')"></div></a>
			</div>
			<div class="servicediv">
				<a href="soffit.php" class="apic"><p>Soffit and Fascia</p></a>
				<a href="soffit.php"><div class="img" style="background-image:url('images/soffitfascia.jpg')"></div></a>
			</div>
			<div class="servicediv">
				<a href="doors.php" class="apic"><p>Doors</p></a>
				<a href="doors.php"><div class="img" style="background-image:url('images/roof1.jpg')"></div></a>
			</div>
		</div>

		<hr width="50%">
		<h1 id="contactus">Contact Us</h1>
		<p id="indicates">* Indicates required field</p>

		<form class="estimate" action="" method="post">
			<div class="contactdiv">
				<input type="text" name="name" class="inputs" id="name" placeholder="Name*"maxlength="100"><br>
				<div id="name-msg" class="error"></div>
				<input type="text" name="address" class="inputs" id="address" placeholder="Address" maxlength="120"><br>
				<input type="text" name="city" class="inputs" id="city" placeholder="City*" maxlength="100"><br>
				<div id="city-msg" class="error"></div>
				<input type="text" name="zip" class="inputs" id="zip" placeholder="Zip Code*" maxlength="5"><br>
				<div id="zip-msg" class="error"></div>
			</div>
			<div class="contactdiv">
				<input type="text" name="number" class="inputs" id="number" placeholder="Phone Number*" maxlength="10"><br>
				<div id="phone-msg" class="error"></div>
				<input type="email" name="email" class="inputs" id="email" placeholder="Email*" maxlength="100"><br>
				<div id="email-msg" class="error"></div>
				<textarea id="message" placeholder="Message*" maxlength="250"></textarea>
				<div id="message-msg" class="error"></div>
			</div><br><br>
			<input type="submit" id="submit" name="submit" disabled>
		</form>
	</div>
	<footer>
		<img id="footerlogo" src="images/logo.png"><br>
		<table>
			<tr>
				<td>
					<a target="_blank" href="https://www.facebook.com/pages/Blake-Windows-Siding-Roofing/1480600345558549?ref=br_tf">
					<img class="facebook" src="images/facebookcolor.png">
					<img class="facebookbw" src="images/facebookbw.png">
					</a>
				</td>
				<td>
					<a target="_blank" href="https://plus.google.com/b/107674125604655553566/107674125604655553566/about">
					<img class="google" src="images/googlewhite.png">
					<img class="googlebw" src="images/googlebw.png">
					</a>
				</td>
				<td>
					<a target="_blank" href="#">
					<img class="insta" src="images/instacolor.png">
					<img class="instabw" src="images/instabw.png">
					</a>
				</td>

				<td>
					<a target="_blank" href="http://www.yelp.com/biz/blake-windows-siding-and-roofing-new-hyde-park">
					<img class="yelp" src="images/yelpwhite.png">
					<img class="yelpbw" src="images/yelpbw.png">
					</a>
				</td>
			</tr>
		</table>
		<p id="copy">
			<a href="index.php">Home</a> | 
			<a href="about.php">About</a> | 
			<a href="roofing.php">Roofing</a> | 
			<a href="siding.php">Siding</a> | 
			<a href="windows.php">Windows</a> | 
			<a href="gutters.php">Gutters</a> | 
			<a href="other.php">Other Services</a> | 
			<a href="testimonials.php">Testimonials</a> | 
			<a href="contact.php">Contact</a>
		</p>
		<p id="copy">Copyright &copy; 2015 Blake Windows, Siding, and Roofing</p>
	</footer>

	<script src="js/jquery.maskedinput.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
</body>

</html>