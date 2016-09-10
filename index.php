<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sharda RSP | Home</title>
		
		<!-- Mobile First -->
		<?php include_once("meta.php");?>
<!--
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=1400, initial-scale=1">
-->
		<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
		<link rel="stylesheet" href="styles/font-awesome-4.6.3/css/font-awesome.min.css">
		<?php include_once 'head.php'; ?>
			

		
	</head>
	<body style="background: #12426f;">
<!-- 		<div style="width:100%; height:800px; background:#12426f; position:absolute; z-index:-2;"></div> -->
		<div style="top:0px; width:100%; height:auto; background:#f0f0f0; position:absolute; z-index:-3;"></div>
		<?php include_once("menu.php"); ?>
		<div style="position:absolute; top:80px; width:100%; z-index:-1;">
			<?php include("slider.php"); ?>
		</div>
		<div class="container-fluid" style="padding:0px;">
<!-- 			<div class="col-lg-12" style="width:850px; height:584px; background:url(images/middle1.png) top center no-repeat;"> -->
			<div class="col-lg-8 col-lg-offset-2 text-center" style="background: #eee; margin-top:420px; padding:10px 50px 50px; border-radius: 20px;">
				<h1 class="lh-15 red pt-sans">Paper by Business</h1>
				<hr style="-moz-border-bottom-colors: none; -moz-border-image: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-color: #ccc;
  border-style: solid none;
  border-width: 0.5px 0;
  margin: 18px 0;">
				<a href="printers-copy-shops.php" class="col-lg-2" style="background:; height:auto; border-radius: 20px; border-color: #eee; border-width: 10px; padding:20px; text-decoration:none;">
					<span class="fa-stack fa-4x">
					  <i class="fa fa-circle fa-stack-2x" aria-hidden="true" style="color:#00ace2;"></i>
					  <i class="fa fa-print fa-stack-1x" style="color:white;"></i>
					  
					</span>
					<h4 class="inline white pt-sans" style="color:#00ace2;">Printer & Copy Shops</h4>
				</a>
				<a href="tax-supported.php" class="col-lg-2" style="background:; height:auto; border-radius: 20px; border-color: #eee; border-width: 10px; padding:20px; text-decoration:none;">
<!-- 					<i class="fa fa-usd inline fa-4x" aria-hidden="true" style="color:white;"><h4 class="inline white pt-sans">Tax Supported</h4></i> -->
					<span class="fa-stack fa-4x">
					  <i class="fa fa-circle fa-stack-2x" aria-hidden="true" style="color:#38c63d;"></i>
					  <i class="fa fa-usd fa-stack-1x" style="color:white;"></i>
					</span>
					<h4 class="inline pt-sans" style="color:#38c63d;">Tax Supported</h4>
				</a>
				<a href="schools.php" class="col-lg-2" style="background:; height:auto; border-radius: 20px; border-color: #eee; border-width: 10px; padding:20px; text-decoration:none;">
					<span class="fa-stack fa-4x">
					  <i class="fa fa-circle fa-stack-2x" aria-hidden="true" style="color:#ff9000;"></i>
					  <i class="fa fa-graduation-cap fa-stack-1x" style="color:white;"></i>
					</span>
					<h4 class="inline pt-sans" style="color:#ff9000;">Schools</h4>
				</a>
				<a href="resellers.php" class="col-lg-2" style="background:; height:auto; border-radius: 20px; border-color: #eee; border-width: 10px; padding:20px; text-decoration:none;">
					<span class="fa-stack fa-4x">
					  <i class="fa fa-circle fa-stack-2x" aria-hidden="true" style="color:#ff462c;"></i>
					  <i class="fa fa-retweet fa-stack-1x" style="color:white;"></i>
					</span>
					<h4 class="inline pt-sans" style="color:#ff462c;">Resellers</h4>
				</a>
				<a href="corporate.php" class="col-lg-2" style="background:; height:auto; border-radius: 20px; border-color: #eee; border-width: 10px; padding:20px; text-decoration:none;">
					<span class="fa-stack fa-4x">
					  <i class="fa fa-circle fa-stack-2x" aria-hidden="true" style="color:#0049b3;"></i>
					  <i class="fa fa-briefcase fa-stack-1x" style="color:white;"></i>
					</span>
					<h4 class="inline pt-sans" style="color:#0049b3;">Corporate</h4>
				</a>
				<a href="#" class="col-lg-2" style="background:; height:auto; border-radius: 100px; border-color: #eee; border-width: 10px; padding:20px; text-decoration:none;">
					<span class="fa-stack fa-4x">
					  <i class="fa fa-circle fa-stack-2x" aria-hidden="true" style="color:white;"></i>
					  <i class="fa fa-plus-circle fa-stack-1x" style="color:red;"></i>
					</span>
					<h4 class="inline pt-sans" style="color:red;">Create Account</h4>
				</a>
			</div>
			<div class="footer col-lg-12" style="padding:0px; background:url(images/footer_ribbon.jpg) top left repeat-x; top:50px;
				">
			<?php include('footer.php'); ?>
			</div>
		</div>
<!--
		<div style="top:440px; width:850px; height:auto; position:relative; z-index:1; margin-left:-425px; left:50%;">
			<div style="width:850px; height:584px; background:url(images/middle1.png) top left no-repeat;">
				
				<a href="printers-copy-shops.php" class="col-lg-4" style="height:163px; top:140px;"></a>
				<a href="tax-supported.php" class="col-lg-4" style="height:163px; top:140px;"></a>
				<a href="schools.php" class="col-lg-4" style="height:163px; top:140px;"></a>
				<a href="resellers.php" class="col-lg-4" style="height:163px; top:206px;"></a>
				<a href="corporate.php" class="col-lg-4" style="height:163px; top:206px;"></a>
				<a href="#" class="col-lg-4" style="height:163px; top:206px;"></a>
			</div>
		</div>
-->
<!--
		<div class="middle-footer" style="position:absolute; height:278px; width:100%; z-index:200; background:#fff; top:1000px;">
			<div style="position:absolute; height:278px; width:850px; background:url(images/mid_footer_design.jpg) top left no-repeat; top:0px; left:50%; margin-left:-425px;">
			</div>
		</div>
-->
<!--
		<div class="footer col-lg-12" style="padding:0px; background:url(images/footer_ribbon.jpg) top left repeat-x; 
/* 			top:1050px; */
				">
			<?php //include('footer.php'); ?>
		</div>
-->
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<!--     <script src="js/bootstrap.min.js"></script> -->
	
	</body>
</html>

<script>
    jQuery(document).ready(function($) {
/*
        $(".royalSlider").royalSlider({
            // options go here
            // as an example, enable keyboard arrows nav
            keyboardNavEnabled: true
        });
*/
        
        var el = document.getElementById('aboutUs-m');
		el.className = "active";
        
    });
</script>