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
								print("<img src='images/thumbs/$thumbnail' data-large='images/siding/$url' alt='$description' data-description='$description'/>");
								print("</a></li>");
							};
							print("</ul>");
						?>
						<!-- <ul>
							<li><a href="#"><img src="images/thumbs/1.jpg" data-large="images/siding/cambriacropped.jpg" alt="image01" data-description="Before and after in Cambria Heights" /></a></li>
							<li><a href="#"><img src="images/thumbs/ferdinandafter.jpg" data-large="images/siding/collegepointcropped.jpg" alt="image02" data-description="Before and after in College Point" /></a></li>
							<li><a href="#"><img src="images/thumbs/3.jpg" data-large="images/siding/elmhurstcropped.jpg" alt="image03" data-description="Before and after in East Elmhurst" /></a></li>
							<li><a href="#"><img src="images/thumbs/4.jpg" data-large="images/siding/elmhurstbehind.jpg" alt="image04" data-description="Back of House in East Elmhurst" /></a></li>
							<li><a href="#"><img src="images/thumbs/5.jpg" data-large="images/siding/farrockawaycropped.jpg" alt="image05" data-description="Before and after in Far Rockaway" /></a></li>
							<li><a href="#"><img src="images/thumbs/6.jpg" data-large="images/siding/flushing1cropped.jpg" alt="image06" data-description="Before and after in Flushing" /></a></li>
							<li><a href="#"><img src="images/thumbs/7.jpg" data-large="images/siding/flushing2cropped.jpg" alt="image07" data-description="Before and after in Flushing" /></a></li>
							<li><a href="#"><img src="images/thumbs/8.jpg" data-large="images/siding/glenheadcropped.jpg" alt="image08" data-description="Before and after in Glen Head" /></a></li>
							<li><a href="#"><img src="images/thumbs/9.jpg" data-large="images/siding/holliscropped.jpg" alt="image09" data-description="Before and after in Hollis" /></a></li>
							<li><a href="#"><img src="images/thumbs/10.jpg" data-large="images/siding/nhpcropped.jpg" alt="image10" data-description="Before and after in New Hyde Park" /></a></li>
							<li><a href="#"><img src="images/thumbs/11.jpg" data-large="images/siding/nobeforebayside.jpg" alt="image11" data-description="Siding in Bayside" /></a></li>
							<li><a href="#"><img src="images/thumbs/12.jpg" data-large="images/siding/nobeforewhitestone.jpg" alt="image12" data-description="Siding in Whitestone" /></a></li>
							<li><a href="#"><img src="images/thumbs/13.jpg" data-large="images/siding/nobeforewhitestone2.jpg" alt="image13" data-description="Side of house in Whitestone" /></a></li>
							<li><a href="#"><img src="images/thumbs/14.jpg" data-large="images/siding/nobeforenhp.jpg" alt="image14" data-description="Siding in New Hyde Park" /></a></li>
							<li><a href="#"><img src="images/thumbs/15.jpg" data-large="images/siding/nobeforerosedale.jpg" alt="image15" data-description="Siding in Rosedale" /></a></li>
							<li><a href="#"><img src="images/thumbs/16.jpg" data-large="images/siding/nobeforehollis.jpg" alt="image16" data-description="Siding in Hollis" /></a></li>
							<li><a href="#"><img src="images/thumbs/17.jpg" data-large="images/siding/saintalbanscropped.jpg" alt="image17" data-description="Siding in Saint Albans" /></a></li>
							<li><a href="#"><img src="images/thumbs/18.jpg" data-large="images/siding/syossetcropped.jpg" alt="image18" data-description="Siding in Syosset" /></a></li>
							<li><a href="#"><img src="images/thumbs/19.jpg" data-large="images/siding/sidingonlycambria.jpg" alt="image19" data-description="Siding in Cambria Heights" /></a></li>
							<li><a href="#"><img src="images/thumbs/20.jpg" data-large="images/siding/sidingonlyhollis.jpg" alt="image20" data-description="Siding in Hollis" /></a></li>
							<li><a href="#"><img src="images/thumbs/21.jpg" data-large="images/siding/sidingonlylakesuccess.jpg" alt="image21" data-description="Siding in Lake Success" /></a></li>
							<li><a href="#"><img src="images/thumbs/22.jpg" data-large="images/siding/sidingonlylakesuccess2.jpg" alt="image22" data-description="Siding on Back of House in Lake Success" /></a></li>
							<li><a href="#"><img src="images/thumbs/23.jpg" data-large="images/siding/sidingonlywindowheaders.jpg" alt="image23" data-description="Siding and Window Headers" /></a></li>
							<li><a href="#"><img src="images/thumbs/24.jpg" data-large="images/24.jpg" alt="image24" data-description="As they did battery to the spheres intend" /></a></li>
						</ul> -->
					</div>
				</div>
				<!-- End Elastislide Carousel Thumbnail Viewer -->
			</div><!-- rg-thumbs -->
		</div><!-- rg-gallery -->
	</div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.elastislide.js"></script>
	<script type="text/javascript" src="js/gallery.js"></script>
	<script type="text/javascript" src="js/featherlight.min.js"></script>
	<script src="js/jquery.maskedinput.js"></script>
	<script src="js/script.js"></script>


</body>

</html>