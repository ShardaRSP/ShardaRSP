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
		<div style="top:0px; width:100%; height:1080px; background:#f0f0f0; position:absolute; z-index:-3;"></div>
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
						<h1 style="color:white; font-family: 'Quicksand', sans-serif; font-size:60pt; text-align:center; letter-spacing:-0.05em; font-weight:100; margin-top:80px; width:100%;">Paper Basics</h1>
<!-- 						<p style="margin-top:0px; font-family: 'Quicksand', sans-serif; font-size:18pt; text-align:center; letter-spacing:-0.1em;">You deserve all three.</p> -->
						
					</div>
			 	</div>
			</div>		
		</div>
		<div style="top:360px; width:850px; height:800px; position:relative; z-index:1; margin-left:-425px; left:50%;">
			<img src="images/papermaking.jpg" class="img-responsive" alt="Cinque Terre" width="850" height="400">
			<h2 style="padding:16px 16px 0px; color:red; ">Keep it simple</h2>
			<h5 style="padding:0px 16px; color:#898989; font-weight:200; letter-spacing:0.05em; line-height:1.5em;">Paper can be very complex in terms. There are many paper icons and synonymous terms used to determine a specific paper sheet. Below are very useful links to help you search for your type of paper without confusion:</h5>
			<a href="pdfs/IconsAndBasicTerms.pdf" target="_blank" style="text-decoration:none;"><h2 style="font-family: 'Quicksand', sans-serif; margin-top:90px; text-align:center;padding:0px 16px; color:red; font-weight:400; letter-spacing:-0.05em; line-height:1.5em;">Icons & Basic Terms</h2></a>
			<a href="complex-terms.php" target="_blank" style="text-decoration:none;"><h2 style="font-family: 'Quicksand', sans-serif; margin-top:10px; text-align:center;padding:0px 16px; color:red; font-weight:400; letter-spacing:-0.05em; line-height:1.5em;">Complex Terms</h2></a>
			<a href="paper-weights.php" style="text-decoration:none;"><h2 style="font-family: 'Quicksand', sans-serif; margin-top:10px; text-align:center;padding:0px 16px; color:red; font-weight:400; letter-spacing:-0.05em; line-height:1.5em;">Paper Comparison Guide</h2></a>
			
<!-- 			<div class="img-responsive" style="width:100%; height:584px; background:url(images/papermaking.jpg) top left no-repeat; border:1px white;"></div> -->
<!-- 			<hr class="hr-white"></div> -->
		</div>
<!--
		<div class="middle-footer" style="position:absolute; height:278px; width:100%; z-index:200; background:#fff; top:1000px;">
			<div style="position:absolute; height:278px; width:850px; background:url(images/mid_footer_design.jpg) top left no-repeat; top:0px; left:50%; margin-left:-425px;">
			</div>
		</div>
-->
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
        
        var el = document.getElementById('paper-m');
		el.className = "active";
        
    });
</script>