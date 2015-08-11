<!doctype html>
<html>

<?php include 'headerpages.php' ?>

	<div id="mainsidingpic">
		<!-- <img id="gafroof" src="images/gaf-roof-new.jpg"> -->
		<h1 id="restmaintext">SIDING</h1>
	</div>
	<div class="innercontent">
		<div id="sidebyside">
			<div class="leftside">
				<p class="descript">Your home is usually your largest asset. In terms of adding resale value to your home, vinyl siding is one of the the best investments you can make. Vinyl siding consistently ranks among the highest return on investments for remodeling projects.
				<br><br>You have a wide variety of choices for styles and beautiful colors of vinyl siding or vinyl shakes for your home. In addition, there is a beautiful palette of colors so you can color coordinate the siding, soffit and fascia, window trim, door trim and gutters and leaders.
				Your home is usually your largest asset. In terms of adding resale value to your home, vinyl siding is one of the the best investments you can make. Vinyl siding consistently ranks among the highest return on investments for remodeling projects.
				<br><br>You have a wide variety of choices for styles and beautiful colors of vinyl siding or vinyl shakes for your home. In addition, there is a beautiful palette of colors so you can color coordinate the siding, soffit and fascia, window trim, door trim and gutters and leaders.</p>
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
							$result = $mysqli->query("SELECT * FROM sidingpics");
							print("<ul>");
							while($row = $result->fetch_assoc()){
								$description = $row['description'];
								$thumbnail = $row['thumbnail'];
								$url = $row['url'];

								print("<li><a href='#'>");
								print("<img src='images/thumbs/siding/$thumbnail' data-large='images/siding/$url' alt='$description' data-description='$description'/>");
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