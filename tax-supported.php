<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sharda RSP | Tax Supported</title>
		
		<!-- Mobile First -->
		<?php include_once("meta.php");?>
<!--
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=1400, initial-scale=1">
-->
		<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
		<?php include_once 'head.php'; ?>

		
	</head>
	<body>
<!-- 		<div style="width:100%; height:800px; background:#12426f; position:absolute; z-index:-2;"></div> -->
		<div style="top:0px; width:100%; height:1050px; background:#f0f0f0; position:absolute; z-index:-3;"></div>
		<?php include_once("menu.php"); ?>
		<div style="position:absolute; top:80px; width:100%; z-index:-1;">
			<?php include("slider.php"); ?>
		</div>
		<div class="container-fluid" style="top:420px; position:relative; z-index:1; padding:0px;">
			<div class="col-lg-6 col-lg-offset-3" style="width:257px; height:55px; position:relative; top:20px; z-index:2;">
				<a href="index.php">Paper by Business</a> <span class="red">></span> <a href="tax-supported.php">Tax Supported</a>
			</div>
			<div class="col-lg-12" style="background:#e4e4e4; padding:0px 0px 20px 0px;">
				<div class="col-lg-6 col-lg-offset-3" style="padding-top:20px;">
<!-- 					<div style="background:url(images/ph.png) top left no-repeat; width:263px; height:160px; position:relative;"></div> -->
					<h1>Tax Supported</h1>
					<h3 class="lh-15">With a highly knowledgeable and experienced team designed specifically to maintain our tax-supported accounts, we take pride in how we do business with the government and its agencies.</h3>
					<p>Our team is built with members readily available to assist any tax-supported account with a price quote (formal or informal), to process a new Purchase Order, billing questions, status of delivery, or to resolve any issue you may have with your order. We understand earning tax-supported business means ensuring rock-bottom pricing without sacrificing service and quality. Our expertise is to constantly secure strong logistics programs throughout the nation to ensure our costs to tax-supported bids are within organizational budget. Our Go Green initiative is another program we have been strengthening within our tax-supported community for many years too. 
					</p>
				</div>
			</div>
			<div class="col-lg-12" style="background:#f4f4f4; padding:10px 0px 20px 0px;">
				<div class="col-lg-6 col-lg-offset-3" style="padding-top:0px;">
					<h1 class="red">Tax Supported Links</h1>
					<ul class="lh-3 grey">
					    <li>RFQ (Formal & Informal)</li>
					    <li>Send a Bid</li>
					    <li>Certificate Attachments</li>
					    <li>Join Our Network of Tax-Supported Agencies and Organizations</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-12" style="background:url(images/footer_ribbon.jpg) top left repeat-x; padding:10px 0px 20px 0px; height:300px;">
				<?php include('footer.php'); ?>
			</div>
		</div>
<!--
		<div class="middle-footer" style="position:absolute; height:278px; width:100%; z-index:200; background:#fff; top:1000px;">
			<div style="position:absolute; height:278px; width:850px; background:url(images/mid_footer_design.jpg) top left no-repeat; top:0px; left:50%; margin-left:-425px;">
			</div>
		</div>
-->
<!--
		<div class="footer" style="position:absolute; height:300px; width:100%; z-index:200; background:url(images/footer_ribbon.jpg) top left repeat-x; top:1278px;">
			<div style="position:absolute; height:300px; width:850px; top:0px; left:50%; margin-left:-425px;">
			</div>
		</div>
-->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<!--     <script src="js/bootstrap.min.js"></script> -->
	
	</body>
</html>

<script>
    jQuery(document).ready(function($) {
        $(".royalSlider").royalSlider({
            // options go here
            // as an example, enable keyboard arrows nav
            keyboardNavEnabled: true
        });
        
        var el = document.getElementById('aboutUs-m');
		el.className = "active";
        
    });
</script>