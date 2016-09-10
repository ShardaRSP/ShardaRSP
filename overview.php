<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sharda RSP | Overview</title>
		
		<!-- Mobile First -->
				<?php include_once("meta.php");?>

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
		<div id="overview" style="top:400px; width:850px; height:1108px; position:relative; z-index:1; margin-left:-425px; left:50%;">
			<div style="width:850px; height:1108px; background:url(images/overview_temp.jpg) top left no-repeat;"></div>
<!-- 			<hr class="hr-white"></div> -->
		</div>
		<div class="truck" style="position:absolute; height:543px; width:973px; z-index:201; background:url(images/truck.png) top left no-repeat; top:750px; left:50%; margin-left:-486px;">
		</div>
		<div class="truck-ribbon" style="position:absolute; height:255px; width:100%; z-index:200; background:url(images/grey_ribbon_truck.jpg) top left repeat-x; top:930px;">
		</div>
		<div class="footer" style="position:absolute; height:300px; width:100%; z-index:200; background:url(images/footer_ribbon.jpg) top left repeat-x; top:1548px;">
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