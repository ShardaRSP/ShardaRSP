<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sharda RSP | Products</title>
		
		<!-- Mobile First -->
				<?php include_once("meta.php");?>

		<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
		<?php include_once 'head.php'; ?>
		
		<link rel="stylesheet" type="text/css" href="styles/accordion-slider.min.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="styles/examples.css" media="screen"/>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
		
		<script type="text/javascript" src="scripts/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.accordionSlider.min.js"></script>
		
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				// instantiate the accordion
				$('#example1').accordionSlider({
					width: 1180,
					height: 400,
					responsiveMode: 'auto',
					openedPanelSize: 'max',
					maxOpenedPanelSize: '80%',
					visiblePanels: 5,
					closePanelsOnMouseOut: false,
					autoplay: true
				});
		
				// change the responsive mode
				$('.controls a').click(function(event) {
					event.preventDefault();
		
					if ($(this).hasClass('auto')) {
						// change the responsive mode to 'auto' and remove the 'custom-responsive' class
						$('#example1').removeClass('custom-responsive');
						$('#example1').accordionSlider('responsiveMode', 'auto');
		
						// change the arrows' visibility
						$('.auto-arrow').show();
						$('.custom-arrow').hide();
					} else if ($(this).hasClass('custom')) {
						// change the responsive mode to 'custom' and add the 'custom-responsive' 
						// class in order to use it as a reference in the CSS code
						$('#example1').addClass('custom-responsive');
						$('#example1').accordionSlider('responsiveMode', 'custom');
		
						// change the arrows' visibility
						$('.custom-arrow').show();
						$('.auto-arrow').hide();
					}
				});
				
				$(function () {
					$("#myPrice").wordsrotator({
						words: ['Price']
					});
					$("#myQuality").wordsrotator({
						words: ['Quality']
					});
					$("#myService").wordsrotator({
						words: ['Service']
					});
				});
			});
			
		</script>

		<!-- Word Rotator -->
		<link rel="stylesheet" href="styles/jquery.wordrotator.css">
		<script src="scripts/jquery.wordrotator.js"></script>
		<link rel="stylesheet" href="styles/animate.css">
		
	</head>
	<body style="background:#05284b;">
		<div style="width:100%; height:482px; background:#05284b; position:absolute; z-index:-2;"></div>
		<div style="top:0px; width:100%; height:840px; background:#05284b; position:absolute; z-index:-3;"></div>
		<?php include_once("menu.php"); ?>
		<div style="position:absolute; top:80px; width:100%; z-index:-1;">
			<?php include("prod-slider.php"); ?>
		</div>
		
		<!--
<div class="container" style="width:980px; height:400px; position:absolute; z-index:0; left:50%; margin-left:-490px; top:200px; color:white; font-family: 'Open Sans', sans-serif;">
			<span id="myPrice" class="col-lg-3 text-right" style="font-size:6em;"></span>
			<span id="myQuality" class="col-lg-4 text-center" style="font-size:6em;"></span>
			<span id="myService" class="col-lg-5 text-left" style="font-size:6em;"></span>
		</div>
-->
		<div style="position:absolute; top:482px; width:100%; z-index:1;">
			<!-- Accordion Slider -->

			<div id="example1" class="accordion-slider" >
				<?php include_once("preferred-slider.php"); ?>
		    </div>
		
		    <!-- End of Accordion Slider -->
		
		    <div class="controls">
		    	<!--
Change responsive mode: 
		    	<span class="auto-arrow">&rarr;</span> <a href="#" class="auto">Auto</a> or 
		    	<span class="custom-arrow">&rarr;</span> <a href="#" class="custom">Custom</a>
-->
		    </div>
		</div>
		<!--
<div style="top:940px; width:850px; height:800px; position:relative; z-index:0; margin-left:-425px; left:50%;">
			<div style="width:850px; height:584px; background:url(images/middle1.png) top left no-repeat;"></div>
 			<hr class="hr-white"></div>
		</div>
-->

<!--
		<div class="middle-footer" style="position:absolute; height:278px; width:100%; z-index:200; background:#fff; top:1110px;">
			<div style="position:absolute; height:278px; width:850px; background:url(images/mid_footer_design.jpg) top left no-repeat; top:0px; left:50%; margin-left:-425px;">
			</div>
		</div>
-->
		<div class="footer" style="position:absolute; height:300px; width:100%; z-index:200; background:url(images/footer_ribbon.jpg) top left repeat-x; top:920px;">
			<?php include('footer.php'); ?>
		</div>
		
	</body>
</html>

<script>
    jQuery(document).ready(function($) {
        
		var el = document.getElementById('paper-m');
		el.className = "active";
        
    });
</script>