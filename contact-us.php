<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sharda RSP | Home</title>
		
		<!-- Mobile First -->
				<?php include_once("meta.php");?>

		<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
		
		<?php include_once 'head.php';?>
		
		<style type="text/css">
            /* Set a size for our map container, the Google Map will take up 100% of this container */
            #map {
                width: 850px;
                height: 400px;
                border:10px solid white;
            }
        </style>
        
        <!-- 
            You need to include this script tag on any page that has a Google Map.

            The following script tag will work when opening this example locally on your computer.
            But if you use this on a localhost server or a live website you will need to include an API key. 
            Sign up for one here (it's free for small usage): 
                https://developers.google.com/maps/documentation/javascript/tutorial#api_key

            After you sign up, use the following script tag with YOUR_GOOGLE_API_KEY replaced with your actual key.-->
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK4cN7vN_5HdgFytYGXHr6OzdvVAKSKjg&sensor=false"></script>
        
<!--         <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 13,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.705957, -73.923414), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.705957, -73.923414),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>
	</head>
	<body>
<!-- 		<div style="width:100%; height:800px; background:#12426f; position:absolute; z-index:-2;"></div> -->
		<div style="top:0px; width:100%; height:880px; background:#f0f0f0; position:absolute; z-index:-3;"></div>
		<?php include_once("menu.php"); ?>
		<div style="position:absolute; top:80px; width:100%; z-index:-1;">
			<div class="royalSlider" >
			 	<div class="rsContent rsNoDrag">
					<img class="rsImg" src="images/products_bg.jpg" alt="We Help You Help">
					<div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="top" data-speed="900" style="color:white;">
			<!--
						<div class="container">
							<span id="myPrice" class="col-lg-1 text-right" style="font-size:6em;"></span>
							<span id="myQuality" class="col-lg-1 text-center" style="font-size:6em;"></span>
							<span id="myService" class="col-lg-1 text-left" style="font-size:6em;"></span>
						</div>
			-->
						<!--
			<div style="width:611px; height:247px; position:absolute; left:50%; margin-left:-305px; background:url(images/25yr.png) top left no-repeat; top:40px;">
						</div>
			-->
						<h1 style="color:white; font-family: 'Quicksand', sans-serif; font-size:60pt; text-align:center; letter-spacing:-0.05em; font-weight:100; margin-top:80px; width:100%;">Contact Us</h1>
<!-- 						<p style="margin-top:0px; font-family: 'Quicksand', sans-serif; font-size:18pt; text-align:center; letter-spacing:-0.1em;">You deserve all three.</p> -->
						
					</div>
			 	</div>
			</div>		
		</div>
		<div style="top:360px; width:850px; height:800px; position:relative; z-index:1; margin-left:-425px; left:50%;">
			<div id="map"></div>
			<div class="cols-lg-12 text-center">
				<h4 style="color:red; ">Daily Operations</h4>
				<h5 style="color:#898989; font-weight:400; letter-spacing:-0.01em; line-height:1.5em;">We take orders from <b>5AM - 6PM Monday thru Friday</b>. </br>** Faxed or emailed orders after hours will be confirmed <b>immediately</b>. **</h5>
			</div>
		</div>
		<div class="container" style="margin-top:140px;">
			
			<div class="col-lg-3 col-lg-offset-2 text-left" style="">
				<h4 style="color:red; margin-left:-10px; ">SHARDA Office | Contact Info</h4>
				<img class="img-responsive" style="display:inline-block; margin:0px 30px 0px -70px;" src="images/mobile-phone-icon.png" width="30" height="30"/><h4 style="margin-top:20px; display:inline-block; color:#898989; font-weight:700; letter-spacing:-0.01em; line-height:1em;">(718) 628 - 4106</h4></br>
				<img class="img-responsive" style="display:inline-block; margin:0px 30px 0px -70px;" src="images/fax-icon.png" width="30" height="30"/><h4 style="margin-top:20px; display:inline-block; color:#898989; font-weight:700; letter-spacing:-0.01em; line-height:1em;">(718) 628 - 4109</h4></br>
				<img class="img-responsive" style="display:inline-block; margin:0px 30px 0px -70px;" src="images/mail-icon.png" width="30" height="30"/><h4 style="margin-top:20px; display:inline-block; color:#898989; font-weight:700; letter-spacing:-0.01em; line-height:1em;">shardapaperinc@yahoo.com</h4></br>
			</div>
			<div class="col-lg-5 col-lg-offset-1 text-left" style="border-left:1px solid #f0f0f0;">
				<h4 style="color:red; margin-left:140px; ">RSP Office | Contact Info</h4>
				<img class="img-responsive" style="display:inline-block; margin:0px 30px 0px 80px;" src="images/mobile-phone-icon.png" width="30" height="30"/><h4 style="margin-top:20px; display:inline-block; color:#898989; font-weight:700; letter-spacing:-0.01em; line-height:1em;">1 (800) 928 - 6160</h4></br>
				<img class="img-responsive" style="display:inline-block; margin:0px 30px 0px 80px;" src="images/fax-icon.png" width="30" height="30"/><h4 style="margin-top:20px; display:inline-block; color:#898989; font-weight:700; letter-spacing:-0.01em; line-height:1em;">1 (800) 928 - 9260</h4></br>
				<img class="img-responsive" style="display:inline-block; margin:0px 30px 0px 80px;" src="images/mail-icon.png" width="30" height="30"/><h4 style="margin-top:20px; display:inline-block; color:#898989; font-weight:700; letter-spacing:-0.01em; line-height:1em;">orders@rsppaper.com</h4></br>
			</div>
			<a target="_blank" href="https://www.google.com/maps/dir//''/@40.7058468,-73.9255654,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x89c25c1d380a2c3f:0xe572d73724897889!2m2!1d-73.9234196!2d40.7058468"><div class="col-lg-6 col-lg-offset-3 text-center" style="margin-top:40px;">
				<img class="img-responsive" style="margin:0 auto;" src="images/building-icon.png" width="30" height="30"/><h4 style="margin-top:20px; display:inline-block; color:#898989; font-weight:700; letter-spacing:-0.01em; line-height:1em;">378 Troutman Street Brooklyn, NY 11237</h4>
			</div></a>
		</div>
		<div class="footer" style="position:absolute; height:300px; width:100%; z-index:200; background:url(images/footer_ribbon.jpg) top left repeat-x; top:1350px;">
			<?php include('footer.php'); ?>
		</div>
		
	</body>
</html>

<script>
    jQuery(document).ready(function($) {
        $(".royalSlider").royalSlider({
            // options go here
            // as an example, enable keyboard arrows nav
            keyboardNavEnabled: true
        });  
        
        var el = document.getElementById('contact-m');
		el.className = "active";
        
    });
</script>