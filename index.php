<!doctype html>
<html>

<head>
	<title>Blake Windows, Siding, and Roofing</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css"/>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<script src="js/classie.js"></script>
	<script src="js/smaller.js"></script>
</head>

<body>
	<div id="topbar">
		<a href="index.php"><img id="logo" src="images/logo.png"></a>
		<div id="navbar">
			<div id="numbers">1-877-BLAKE-OK / 516-488-4858 / 718-766-8600</div><br>
			<ul class="list">
				<li class="line"><a class="shadow" href="info.php">ABOUT</a></li>
				<li class="line"><a class="shadow" href="roofing.php">ROOFING</a></li>
				<li class="line"><a class="shadow" href="siding.php">SIDING</a></li>
				<li class="line"><a class="shadow" href="windows.php">WINDOWS</a></li>
				<li class="line"><a class="shadow" href="contact.php">GUTTERS</a></li>
				<li class="line" id="dropdown" ><a class="shadow" href="contact.php">OTHER SERVICES</a>
					<ul id="subul">
						<li class="subdrop" id="first">Test</li>
						<li class="subdrop">Test</li>
						<li class="subdrop">Test</li>
					</ul>
				</li>
			</ul>
		</div><br>
	</div>
	<div id="mainpicdiv">
		<p id="maintext">IMPROVE YOUR HOME WITHOUT DELAY<br>
		CALL <span id="phone">1-877-BLAKE-OK</span></p>
	</div>
	<div id="frontblurb">
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
	<form class="estimate">
		<div class="contactdiv">
			<input type="text" name="name" class="inputs" id="name" placeholder="Name*"><br>
			<input type="text" name="address" class="inputs" id="address" placeholder="Address"><br>
			<input type="text" name="city" class="inputs" id="city" placeholder="City*"><br>
			<input type="text" name="zip" class="inputs" id="zip" placeholder="Zip Code*"><br>
		</div>
		<div class="contactdiv">
			<input type="text" tabindex="3" name="number" class="inputs" id="number" placeholder="Phone Number*"><br>
			<input type="email" name="email" class="inputs" id="email" placeholder="Email*"><br>
			<textarea id="message" placeholder="Message*"></textarea>
		</div><br><br>
		<input type="submit" id="submit" name="submit">
	</form>

	<?php include 'footer.php' ?>

</html>