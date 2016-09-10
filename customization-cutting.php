<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sharda RSP | Home</title>
		
		<!-- Mobile First -->
				<?php include_once("meta.php");?>

		<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
		
				<?php include_once 'head.php'; ?>		
	</head>
	<body>
<!-- 		<div style="width:100%; height:800px; background:#12426f; position:absolute; z-index:-2;"></div> -->
		<div style="top:0px; width:100%; height:750px; background:#f0f0f0; position:absolute; z-index:-3;"></div>
		<?php include_once("menu.php"); ?>
		<div style="position:absolute; top:80px; width:100%; z-index:-1;">
			<div class="royalSlider" >
			 	<div class="rsContent rsNoDrag">
					<img class="rsImg" src="images/converter_bg.jpg" alt="We Help You Help">
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
						<h1 style="color:white; font-family: 'Quicksand', sans-serif; font-size:60pt; text-align:center; letter-spacing:-0.05em; font-weight:100; margin-top:50px; width:100%;">Customization & Cutting</h1>
<!-- 						<p style="margin-top:0px; font-family: 'Quicksand', sans-serif; font-size:18pt; text-align:center; letter-spacing:-0.1em;">You deserve all three.</p> -->
						
					</div>
			 	</div>
			</div>		
		</div>
		<div style="top:360px; width:850px; height:600px; position:relative; z-index:1; margin-left:-425px; left:50%;">
			<div class="container">
				<img src="images/cust_cut.png" class="img-responsive" style="float:left; margin-left:-100px;" alt="Cinque Terre" width="1000" height="400">
<!--
				<img src="images/NJ.jpg" class="img-responsive" style="float:left; margin:14px;" alt="Cinque Terre" width="200" height="400">
				<img src="images/PA.jpg" class="img-responsive" style="float:left; margin:14px;" alt="Cinque Terre" width="354" height="400">
				<img src="images/CT.jpg" class="img-responsive" style="float:left; margin:14px;" alt="Cinque Terre" width="300" height="200">
-->
			</div>
			<h2 style="padding:16px 16px 0px; color:red; ">Machinery</h2>
			<h5 style="padding:0px 16px; color:#898989; font-weight:400; letter-spacing:0.05em; line-height:1.5em;">We work with an extensive network of the largest and most pristine converters in the world, with top-notch machinery to offer the highest quality sheeting work, customizations, cutting, packaging and privatizing, labeling, hole-punching, and any other specification based paper inquiry you may have for us. If you need a particular sheet to look a certain way in size, finish, and weight- we can make it happen for you! Inquire with us to optimize your printing jobs, save paper waste and overhead, by using our specialized services  to help you satisfy your customer base and provide them with the quality that they specifically want and deserve!</h5>

			<a href="#" style="text-decoration:none;"><h2 style="font-family: 'Quicksand', sans-serif; margin-top:40px; text-align:center;padding:0px 16px; color:red; font-weight:400; letter-spacing:-0.05em; line-height:1.5em;">Contact us for details on your next Customized Job!</h2></a>
				<!--
		<a href="complex-terms.php" target="_blank" style="text-decoration:none;"><h2 style="font-family: 'Quicksand', sans-serif; margin-top:10px; text-align:center;padding:0px 16px; color:red; font-weight:400; letter-spacing:-0.05em; line-height:1.5em;">Complex Terms</h2></a>
			<a href="#" style="text-decoration:none;"><h2 style="font-family: 'Quicksand', sans-serif; margin-top:10px; text-align:center;padding:0px 16px; color:red; font-weight:400; letter-spacing:-0.05em; line-height:1.5em;">Paper Comparison Guide</h2></a>
-->
			
<!-- 			<div class="img-responsive" style="width:100%; height:584px; background:url(images/papermaking.jpg) top left no-repeat; border:1px white;"></div> -->
<!-- 			<hr class="hr-white"></div> -->
		</div>
<!--
		<div class="middle-footer" style="position:absolute; height:278px; width:100%; z-index:200; background:#fff; top:1000px;">
			<div style="position:absolute; height:278px; width:850px; background:url(images/mid_footer_design.jpg) top left no-repeat; top:0px; left:50%; margin-left:-425px;">
			</div>
		</div>
-->
		<div class="footer" style="position:absolute; height:300px; width:100%; z-index:200; background:url(images/footer_ribbon.jpg) top left repeat-x; top:1180px;">
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
        
        var el = document.getElementById('service-m');
		el.className = "active";
        
    });
</script>