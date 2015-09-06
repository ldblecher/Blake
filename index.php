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
				<li class="line"><a class="shadow" href="index.php">HOME</a></li>
				<li class="line"><a class="shadow" href="about.php">ABOUT</a></li>
				<li class="line"><a class="shadow" href="roofing.php">ROOFING</a></li>
				<li class="line"><a class="shadow" href="siding.php">SIDING</a></li>
				<li class="line"><a class="shadow" href="windows.php">WINDOWS</a></li>
				<li class="line" id="dropdown" >OTHER SERVICES
					<ul id="subul">
						<li class="subdrop"><a class="shadow" href="gutters.php">GUTTERS &amp; LEADERS</a></li>
						<li class="subdrop"><a class="shadow" href="soffit.php">SOFFIT &amp; FASCIA</a></li>
						<li class="subdrop"><a class="shadow" href="awnings.php">AWNINGS</a></li>
						<li class="subdrop"><a class="shadow" href="doors.php">DOORS</a></li>
						<li class="subdrop"><a class="shadow" href="remodeling.php">REMODELING</a></li>
						<li class="subdrop" id="bottom"><a class="shadow" href="light.php">LIGHT CONSTRUCTION</a></li>
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
			<p class="blurbtext">With over 35 years of experience, you can trust in the quality and craftsmanship of Blake Windows, Siding &amp; Roofing. Whether it is for windows, siding, roofing, or any other home improvement, we start by listening to what you want. We always cater our service to you and your specific needs.</p>
		</div>
		<hr width="50%">
		<div id="serviceslist">
			<div class="servicediv">
				<a href="roofing.php" class="apic"><p>Roofing</p></a>
				<a href="roofing.php"><div class="img" style="background-image:url('images/roof1.jpg')"></div></a>
				<ul class="imgtext">
					<li>As a GAF Master Elite Certified Residential Roofing Contractor (since 2001) you receive top quality roofing materials, a professional roofing system, the best transferrable warranties and peace of mind.</li>
				</ul>
			</div>
			<div class="servicediv">
				<a href="siding.php" class="apic"><p>Siding</p></a>
				<a href="siding.php"><div class="img" style="background-image:url('images/siding1.jpg')"></div></a>
				<ul class="imgtext">
					<li>Vinyl siding on your home can be transformative.</li>
					<li>With the right colors, styles, trim, textures and accessories; your home can go from ordinary to beautiful, from liking it to loving it.</li>
				</ul>
			</div>
			<div class="servicediv">
				<a href="windows.php" class="apic"><p>Windows</p></a>
				<a href="windows.php"><div class="img" style="background-image:url('images/windows1.jpg')"></div></a>
				<ul class="imgtext"> 
					<li>New replacement windows enhance the appearance of your home inside and out and increase energy savings year round.</li>
					<li>Bays, bows, double hung, casement, awning, sliders; you have many styles to choose from.</li>
				</ul>
			</div>
			<div class="servicediv">
				<a href="gutters.php" class="apic"><p>Gutters and Leaders</p></a>
				<a href="gutters.php"><div class="img" style="background-image:url('images/guttersleaders.jpg')"></div></a>
				<ul class="imgtext"> 
					<li>Custom-made seamless aluminum gutters &amp; leaders keeps water away from your home's foundation and protects your home.</li>
					<li>With 15 colors to choose from, you can color coordinate with your roof and siding.
				</ul>
			</div>
			<div class="servicediv">
				<a href="soffit.php" class="apic"><p>Soffit and Fascia</p></a>
				<a href="soffit.php"><div class="img" style="background-image:url('images/soffitfascia.jpg')"></div></a>
				<ul class="imgtext">
					<li>Soffit &amp; fascia or trim work</li>
				</ul>
			</div>
			<div class="servicediv">
				<a href="doors.php" class="apic"><p>Awnings</p></a>
				<a href="doors.php"><div class="img" style="background-image:url('images/roof1.jpg')"></div></a>
				<ul class="imgtext"> 
					<li>Awnings extend the living space of the outside of your home.</li>
					<li>Transform your deck or patio into outside living space.</li>
					<li>Door hoods protect from rain when carrying packages or opening your door.</li>
				</ul>
			</div>
		</div>

		<hr width="50%">
		<h2 id="contactus">Contact Us</h2>
		<p id="indicates">* Indicates required field</p>
		<div class="submit-msg"></div>
		<form class="estimate" action="mail.php" method="POST">
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
				<textarea id="message" class="message" placeholder="Message*" maxlength="250"></textarea>
				<div id="message-msg" class="error"></div>
			</div><br><br>
			<input type="submit" class="submit" id="submit" name="submit" disabled>
		</form>
		<hr width="50%">
		<img id="thumbsmile" src="images/thumbsup/thumbssmile.png">
		<h2 id="thumbstitle">Ask How to Join Our Thumbs Up Club!</h2>
		<!-- <div id="scroller">
			<div class="innerScrollArea">
				<ul>
					<li><img src="images/thumbsup/thumbsup_elmont.jpeg"/></li>
					<li><img src="images/thumbsup/thumbsup_flushing.jpg"/></li>
					<li><img src="images/thumbsup/thumbsup_hollis.jpg"/></li>
					<li><img src="images/thumbsup/thumbsup_queensvillage.jpg"/></li>
				</ul>
			</div>
		</div> -->
	</div>
	<footer>
		<img id="footerlogo" src="images/logo.png"><br>
		<div id="badges">
			<a href="http://www.bbb.org/new-york-city/business-reviews/home-improvements/blake-windows-siding-roofing-in-new-hyde-park-ny-2634" target="_blank">
				<img title="BBB Badge" alt="BBB Badge" class="badge-logos" src="images/logos/bbb.png">
			</a>
    		<a href="http://www.gaf.com/Video_Library/0_otwo3min?CBViewer=3200" target="_blank">
            	<img title="GAF" alt="GAF" class="badge-logos" src="images/logos/gaf.jpg">
        	</a>
        	<a href="http://www.gaf.com/Roofing/Contractors/Reviews/Blake-Windows%2C-Siding-And-Roofing-1002509-RES?CBViewer=3200" target="_blank">
                <img title="GAF Master Elite" alt="GAF Master Elite" class="badge-logos" src="images/logos/master-elite.png">
            </a>
            <a href="https://www.energystar.gov/campaign/home?s=mega" target="_blank">
                <img title="Energy Star Badge" alt="Energy Star Badge" class="badge-logos"src="images/logos/energystar.png">
            </a>
            <a href="http://www.alside.com/about/history/" target="_blank">
                <img title="Alside Gold Star Badge" class="talllogos" alt="Alside Gold Star Badge" src="images/logos/alside.jpg">
            </a>
            <a href="http://business.nhpchamber.org/list/member/blake-windows-siding-roofing-23" target="_blank">
                <img src="images/logos/nhpchamber.jpg" alt="New Hyde Park Chamber of Commerce" title="New Hyde Park Badge" class="badge-logos">
            </a>
            <a href="http://www.pella.com/photo-gallery/" target="_blank">
                <img src="images/logos/pella.jpg" alt="Pella Badge" title="Pella Badge" class="talllogos">
            </a>
            <a href="http://www.angieslist.com/companylist/us/ny/new-hyde-park/blake-windows%2C-siding-and-roofing-reviews-226343.htm" target="_blank">
                <img src="images/logos/angies.png" alt="Angie's List Badge" title="Angie's List Badge" id="angies">
            </a>
		</div>
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
			<a href="soffit.php">Soffit &amp; Fascia</a><br>
			<a href="awnings.php">Awnings</a> | 
			<a href="doors.php">Doors</a> | 
			<a href="remodeling.php">Remodeling</a> | 
			<a href="light.php">Light Construction</a> | 
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