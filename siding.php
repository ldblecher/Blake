<!doctype html>
<html>

<?php include 'headerpages.php' ?>

	<div class="mainpics" id="mainsidingpic">
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
			
			<?php include 'sidecontactform.php' ?>
			
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