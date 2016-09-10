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
					<img class="rsImg" src="images/dropship_bg.jpg" alt="We Help You Help">
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
						<h1 style="color:white; font-family: 'Quicksand', sans-serif; font-size:60pt; text-align:center; letter-spacing:-0.05em; font-weight:100; margin-top:80px; width:100%;">Drop - Ship</h1>
						<p style="margin-top:0px; font-family: 'Quicksand', sans-serif; font-size:36pt; text-align:center; letter-spacing:-0.05em; font-weight:100;">Program</p>
						
					</div>
			 	</div>
			</div>		
		</div>
		<div style="top:460px; width:850px; height:340px; position:relative; z-index:1; margin-left:-425px; left:50%;">
			<!--
<div class="container">
				<img src="images/NY.jpg" class="img-responsive" style="float:left; margin:14px 0px 0px -240px;" alt="Cinque Terre" width="400" height="400">
				<img src="images/NJ.jpg" class="img-responsive" style="float:left; margin:14px;" alt="Cinque Terre" width="200" height="400">
				<img src="images/PA.jpg" class="img-responsive" style="float:left; margin:14px;" alt="Cinque Terre" width="354" height="400">
				<img src="images/CT.jpg" class="img-responsive" style="float:left; margin:14px;" alt="Cinque Terre" width="300" height="200">
			</div>
-->
			<h2 style="margin-top:0px;padding:16px 16px 0px; color:red; ">No Inventory. No Overhead.</h2>
			<h5 style="padding:0px 16px; color:#898989; font-weight:400; letter-spacing:0.05em; line-height:1.5em;">Our extensive network of suppliers and warehousing allows us to offer superior drop-ship programs for our customers. We offer this program to anyone who wants to resell our product offerings. This includes: office suppliers, stationers, online stores, paper brokers, print brokers, printers, and more! This allows our drop-shippers to hold little or no stocking inventory on the products we carry - meaning less overhead! Our bottom line is now your bottom line! We offer this drop-ship program nation-wide on practically all papers. We use blank trucks to ensure confidentiality on your orders. We are even willing to work out a disclosure statement if that makes you feel comfortable. Let us handle your business for you today!</h5>

<!-- 			<a href="#" style="text-decoration:none;"><h2 style="font-family: 'Quicksand', sans-serif; margin-top:24px; text-align:center;padding:0px 16px; color:red; font-weight:400; letter-spacing:-0.1em; line-height:1.5em;">Below are charts of how it typical works with us:</h2></a> -->
<!-- 			<img src="images/dropShip-chart.png" align="center" style="position:relative; margin-left:-275px; left:50%;"/> -->
				<!--
		<a href="complex-terms.php" target="_blank" style="text-decoration:none;"><h2 style="font-family: 'Quicksand', sans-serif; margin-top:10px; text-align:center;padding:0px 16px; color:red; font-weight:400; letter-spacing:-0.05em; line-height:1.5em;">Complex Terms</h2></a>
			<a href="#" style="text-decoration:none;"><h2 style="font-family: 'Quicksand', sans-serif; margin-top:10px; text-align:center;padding:0px 16px; color:red; font-weight:400; letter-spacing:-0.05em; line-height:1.5em;">Paper Comparison Guide</h2></a>
-->
			
<!-- 			<div class="img-responsive" style="width:100%; height:584px; background:url(images/papermaking.jpg) top left no-repeat; border:1px white;"></div> -->
<!-- 			<hr class="hr-white"></div> -->
		</div>
		<div class="container-fluid" style="padding:0px; margin-top:400px;">
			<div class="col-lg-12" style="height:400px; background: #e4e4e4; padding:0px;">
				<div style="position:absolute; background:url(images/drop_ship_label.png) top left no-repeat; width:255px; height:59px;"></div>
			</div>
		</div>
<!--
		<div class="middle-footer" style="position:absolute; height:278px; width:100%; z-index:200; background:#fff; top:1000px;">
			<div style="position:absolute; height:278px; width:850px; background:url(images/mid_footer_design.jpg) top left no-repeat; top:0px; left:50%; margin-left:-425px;">
			</div>
		</div>
-->
		<div class="footer" style="position:absolute; height:300px; width:100%; z-index:200; background:url(images/footer_ribbon.jpg) top left repeat-x; top:1580px;">
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