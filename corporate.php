<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sharda RSP | Corporate</title>
		
		<!-- Mobile First -->
		<?php include_once("meta.php");?>
<!--
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=1400, initial-scale=1">
-->
		<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		
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
				<a href="index.php">Paper by Business</a> <span class="red">></span> <a href="corporate.php">Corporate</a>
			</div>
			<div class="col-lg-12" style="background:#e4e4e4; padding:0px 0px 20px 0px;">
				<div class="col-lg-6 col-lg-offset-3" style="padding-top:40px;">
<!-- 					<div style="background:url(images/ph.png) top left no-repeat; width:263px; height:160px; position:relative;"></div> -->
					<h1>Corporate</h1>
<!-- 					<h3 class="lh-15">We believe in providing all three: price, quality, and service to our customers.</h3> -->
					<p>In the past 3 decades, we have established strong relationships with the worlds largest to smallest corporate offices throughout the nation. We have built a strong network of sharing business with corporations that specialize in almost every industry possible. Our services to the corporate world are impeccable, and superior referral programs help enhance our relationships with the corporate world on a daily basis. We sell everything from printing to marketing, paper to office supplies, and even customized products to this sector of business. With relationships in place, our goal is to sustain a competitive advantage by personalizing / customizing our services and always keeping ourselves ahead of the curve when it comes to supplying business leaders of today and tomorrow. </p>
				</div>
			</div>
			<div class="col-lg-12" style="background:#f4f4f4; padding:10px 0px 20px 0px;">
				<div class="col-lg-6 col-lg-offset-3" style="padding-top:0px;">
<!-- 					<h1 class="grey">Digital & Offset</h1> -->
					<h3 class="lh-15">To set up a special dealer account, please contact:</h3>
					<h3 class="lh-15 grey">Sunny A. Patel</br>
Sunny.ShardaPaper@Gmail.com</br>
P: 732-979-5739</h3>
<!--
					<ul class="lh-3 grey col-lg-4">
					    <li>Text & Cover</li>
					    <li>Coated & Uncoated</li>
					    <li>Copy Paper</li>
					    <li>Colored Paper</li>
					    <li>Specialty Paper</li>
					</ul>
					<ul class="lh-3 grey col-lg-4">
					    <li>Writing Paper</li>
					    <li>Envelopes</li>
					    <li>Labels</li>
					    <li>Carbonless</li>
					    <li>Corrugated Boxes</li>
					</ul>
					<ul class="lh-3 grey col-lg-4">
					    <li>Wide Format</li>
					    <li>Closeout</li>
					    <li>Packaging Supplies</li>
					    <li>Padding Cement</li>
					    <li>Carbonless Fan-Apart</li>
					</ul>
-->
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