<!doctype html>
<html>

<?php include 'headerpages.php' ?>

	<div class="mainpics" id="mainsidingpic">
		<!-- <img id="gafroof" src="images/gaf-roof-new.jpg"> -->
		<h1 id="restmaintext">CONTACT</h1>
	</div>
	<div class="innercontent">
		<p id="contacthead">Get in Touch with Blake Windows, Siding, and Roofing!<br>
		<span id="contactnumbers">1-877-BLAKE-OK / 516-488-4858 / 718-766-8600</span></p>
		<p class="contacttext">We appreciate the time you’ve taken looking around our website and reading a bit about Blake Windows, Siding &amp; Roofing we promise that we’ll take the time to look at your home and listen to your concerns regarding your home improvement project. We’d love to add you to our list of satisfied home owners. You can fill out the form below or give us a call and we’ll set up a time to meet with you at your home or business for a free no obligation quote.</p>

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
				<textarea id="message" placeholder="Message*" maxlength="250"></textarea>
				<div id="message-msg" class="error"></div>
			</div><br><br>
			<input type="submit" id="submit" name="submit" disabled>
			<div id="submit-msg"></div>
		</form>
	</div>


	<?php include 'footer.php' ?>

</html>