<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sharda RSP | Sale</title>
		
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
			<div class="col-lg-6 col-lg-offset-3" style="width:257px; height:55px; background:url(images/Paper_by_business.png) top left no-repeat; position:relative; top:20px; z-index:2;"></div>
			<div class="col-lg-12" style="background:#e4e4e4; padding:0px 0px 20px 0px;">
				<div class="col-lg-6 col-lg-offset-3" style="padding:20px 0px 20px;">
<!-- 					<div style="background:url(images/ph.png) top left no-repeat; width:263px; height:160px; position:relative;"></div> -->
					<h1>Sale</h1>
					<h3 class="lh-15" style="font-size: 18pt;">RainbowMax is finally fully back in stock.</h3>
					<img class="pull-right" style="padding:40px;" src="images/rainbowmax_sale.png"/>
					<p>It has been a long wait, but the wait is finally over! If your new to RainbowMax Carbonless paper just give us a call in the office and we will be sure to help you out and answer any question you may have. It transfers beautifully and smoothly, it runs well, and comes with a price that is sure to win you those jobs! Wanna test it out? Tell us and we'll send you a sample ream and glue so you can try it out for yourself.</p><p><b>To celebrate the arrival of this long awaited product we are having a special. Buy any 10 cases and get a free quart of glue (Limit 1 quart per order per day).</b> This offer is valid till the end of Summer so be sure to take advantage of it while you can because even though RainbowMax Carbonless is here to stay, this offer is not. </p>
					
<!--
					<ul class="lh-3 grey" style="">
					    <li>Copy Paper, Supporting Sizes (8.5x14, 11x17) , and Hole Punched Paper (3HP, Velo 9, 11, 5HP, 11HP, & Custom)</li>
					    <li>Colored Paper (Both Pastels & Brights) in text and Cover Weights</li>
					    <li>20lb, 24/60lb, 65lb, 67lb Vellum Bristols, 90lb Index, 110lb Index</li>
					    <li>Recycled Papers (30%, 50%, 100%) In Text and Cover Weights</li>
					</ul>
-->
				</div>
			</div>
			<div class="col-lg-12" style="background:#f4f4f4; padding:10px 0px 20px 0px;">
				<h3 class="lh-15 text-center"><b>Offer valid ALL SUMMER LONG!</b></br>
<span style="font-size: 9pt;">Limit 1 free quart of glue per order per day.</br>
Any questions about gluing or the paper, please give us a call.</span></h3>
<!--
				<div class="col-lg-6 col-lg-offset-3" style="padding-top:0px;">
					<h3 class="red">Our School Brands</h3>
					<ul class="lh-3 grey col-lg-4" >
					    <li>Hammermill</li>
					    <li>Xerox</li>
					    <li>Springhill</li>
					</ul>
					<ul class="lh-3 grey col-lg-4" >
					    <li>Expert</li>
					    <li>Britehue</li>
					    <li>Astrobrights</li>
					    
					</ul>
					<ul class="lh-3 grey col-lg-4" >
						<li>Exact</li>
					    <li>Xerographic Multipurpose</li>					    
					    <li>Navigator</li>
					</ul>
				</div>
				<div class="col-lg-6 col-lg-offset-3" style="padding-top:0px;">
					<h3 class="red">Color Charts</h3>
					<ul class="lh-3 grey col-lg-4" >
					    <li>Hammermill Foremp</li>
					    <li>Expert</li>
					</ul>
					<ul class="lh-3 grey col-lg-4" >
					    <li>Springhill</li>
					    <li>Britehue</li>					    
					</ul>
					<ul class="lh-3 grey col-lg-4" >
						<li>Astrobrights</li>
					</ul>
				</div>
-->
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
        
        var el = document.getElementById('specials-m');
		el.className = "active";
        
    });
</script>