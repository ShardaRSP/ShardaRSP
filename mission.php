<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sharda RSP | Mission</title>
		
		<!-- Mobile First -->
				<?php include_once("meta.php");?>

		<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
				<?php include_once 'head.php'; ?>		
	</head>
	<body>
<!-- 		<div style="width:100%; height:800px; background:#12426f; position:absolute; z-index:-2;"></div> -->
		<div style="top:0px; width:100%; height:1850px; background:#f0f0f0; position:absolute; z-index:-3;"></div>
		<?php include_once("menu.php"); ?>
		<div style="position:absolute; top:80px; width:100%; z-index:-1;">
			<?php include("slider.php"); ?>
		</div>
		<div id="mission" style="top:400px; width:850px; height:auto; position:relative; z-index:1; margin-left:-425px; left:50%;">
			<div class="col-lg-12" style="background:white; padding:40px 80px;">
				<h2 class="red pt-sans bold">Our Past</h2>
				<p>Sharda Paper, Inc established itself as a trustworth wholesale paper distributor for the five boroughs of New York the day it opened its doors for business in 1978. Two brothers, Ashvin and Vipul Patel made it their mission in business to staisfy each and every need of their customer, no matter what size of account. Over the years, this tradition of valuing each inquiry from the customer has been passed down and instilled to each new member of Sharda Paper, Inc.</p>
				<img src="images/ourPast_pic.jpg" class="img-responsive"/>
				</br>
				<h2 class="red pt-sans bold">Our Future</h2>
				<div class="cp;-lg-12" style="padding:25px 0px;">
					<p class="col-lg-6" style="padding:0px 10px;">Our goal in the upcoming years is to distinguish ourselves as premium nationwide paper merchants. With products strategically warehoused across the United States, we now have the ability to ensure delivery on any stocked items to practically any state. With stronger mill (both foreign and domestic) relationships than ever, we plan to keep up with market changes, continue to offer advantageous pricing to our customer base, while offering a superior standard of quality in both service and product.</p>
					<img src="images/ourMission_pic.jpg" class="img-responsive col-lg-6"/>
				</div>
				<a href="overview.php" ><img src="images/mission_cta.jpg" class="img-responsive" style="padding:40px 0px 0px 0px;"/></a>
			</div>
<!-- 			<hr class="hr-white"></div> -->
		</div>
		<!--
<div class="middle-footer" style="position:absolute; height:278px; width:100%; z-index:200; background:#fff; top:1000px;">
			<div style="position:absolute; height:278px; width:850px; background:url(images/mid_footer_design.jpg) top left no-repeat; top:0px; left:50%; margin-left:-425px;">
			</div>
		</div>
-->
		<div class="footer" style="position:absolute; height:300px; width:100%; z-index:200; background:url(images/footer_ribbon.jpg) top left repeat-x; top:1520px;">
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
        
        var el = document.getElementById('aboutUs-m');
		el.className = "active";
		
    });
</script>