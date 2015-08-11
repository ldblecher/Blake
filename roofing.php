<!doctype html>
<html>

<?php include 'headerpages.php' ?>

	<div id="mainroofingpic">
		<!-- <img id="gafroof" src="images/gaf-roof-new.jpg"> -->
		<h1 id="restmaintext">ROOFING</h1>
	</div>
	<div class="innercontent">
		<div id="sidebyside">
			<div class="leftside">
				<p class="descript">We offer peace of mind when you install your roof.  As a GAF Master Elite Ceritified Residential Roofing Contractor (since 2001) we use top quality roofing materials, give you a professional roof installation and give you the best transferrable warranties.
				<br><br>Your roof can represent up to 40% of your home's curb appeal
				<br><br>Choosing the style and color of your roof will greatly enhance the look of your home. GAF Architectural Timberline Roofing Shingles and GAF Architectural Designer Roofing Shingles offer a large variety of colors to choose from.
				</p>
			</div>
			<div class="rightside">
				<p id="righttitle">Request a Free Estimate!</p>
				<form class="sideform">
						<input type="text" name="name" class="sideput" id="name" placeholder="Name*"><br>
						<input type="text" name="address" class="sideput" id="address" placeholder="Address"><br>
						<input type="text" name="city" class="sideput" id="city" placeholder="City*"><br>
						<input type="text" name="zip" class="sideput" id="zip" placeholder="Zip Code*"><br>
						<input type="text" tabindex="3" name="number" class="sideput" id="number" placeholder="Phone Number*"><br>
						<input type="email" name="email" class="sideput" id="email" placeholder="Email*"><br>
						<textarea id="sidemessage" placeholder="Message*"></textarea>
					<br><br>
					<input type="submit" id="sidesub" name="submit">
				</form>
			</div>
		</div>
		<div id="rg-gallery" class="rg-gallery">
			<div class="rg-thumbs">
				<!-- Elastislide Carousel Thumbnail Viewer -->
				<div class="es-carousel-wrapper">
					<div class="es-nav">
						<span class="es-nav-prev">Previous</span>
						<span class="es-nav-next">Next</span>
					</div>
					<div class="es-carousel">
						<?php
							require_once 'config.php';
							$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
							//Get all photos
							$result = $mysqli->query("SELECT * FROM roofingpics");
							print("<ul>");
							while($row = $result->fetch_assoc()){
								$description = $row['description'];
								$thumbnail = $row['thumbnail'];
								$url = $row['url'];

								print("<li><a href='#'>");
								print("<img src='images/thumbs/roofing/$thumbnail' data-large='images/roofing/$url' alt='$description' data-description='$description'/>");
								print("</a></li>");
							};
							print("</ul>");
						?>
					</div>
				</div>
				<!-- End Elastislide Carousel Thumbnail Viewer -->
			</div><!-- rg-thumbs -->
		</div><!-- rg-gallery -->
	</div>

	<?php include 'footer.php' ?>

</html>