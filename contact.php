<?php include("header.php"); ?>

<section class="inner-page-wrap contact">
	<div class="page-banner">
		<div class="container-fluid">
			<div class="page-head">
				<h2>Contact Us</h2>
				<p>It is good to meet you.</p>
			</div>
		</div>
	</div>
	<aside class="inner-content page-contact">
	    <div class="container-fluid">
			<div class="row">
				<div class="col-sm-8">

					<form class="contact-form" action="" method="">
						<div class="row">
						  <div class="col-sm-12">
						    <input type="text" class="form-control" placeholder="Name">
						  </div>
						  <div class="col-sm-12">
						    <input type="text" class="form-control" placeholder="Email">
						  </div>
						  <div class="col-sm-12">
						    <input type="text" class="form-control" placeholder="Phone">
						  </div>					  
						  <div class="col-sm-12">
						    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
						  </div>
						  <div class="col-sm-12">
						    <button type="submit" class="btn btn-dark">SEND</button>
						  </div>
						</div>
					</form>

				</div>
				<div class="col-sm-4">
					
				</div>
			</div>
		</div>

		<aside class="gmap-area">
			<h2>Find us on Google Map</h2>
			<div class="gmap-area__block" id="map"></div>
		</aside>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmmF_i0IqduJmJVIYkLaQ1dGOsXP1VlpE"></script>
		<script src="js/gmap.js"></script>

	</aside>	
</section>	

<?php include("tagline.php") ;?>
<?php include("footer.php"); ?>