<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include_once("meta.php");?>

		<!-- Local CSS -->
		<link rel="stylesheet" href="styles/styles.css">

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
		<!-- CSS Menu -->
		<link rel="stylesheet" href="styles/css_menu_styles.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="scripts/script.js"></script>
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
		
	</head>
	
	<body>
		
		<?php include_once("menu.php"); ?>
		
		<div class="container">
			
			<p class="col-lg-8 col-lg-offset-2 text-center"style="color:grey; position: relative; top:120px;"><strong class="" style="color:red;">We specialize in Nationwide Carbonless sales.</strong><br> We offer two brands: Glatfelter Mead Excelone and RainbowMax, both of which are digital and offset capability. Below is a form to fill out for a free sample and price quote (includes shipping) of any product of your choice along with a sample glue to ensure you can test the product you want. There is also a chart with all products that Excelone and RainbowMax offer below. 

Full List of Excelone & RainbowMax Products</p>
			<br>
			<a href="pdfs/Sharda Paper - Carbonless Pricing 2-3-14 RESALES.pdf" target="_blank" class="btn btn-primary text-center col-lg-6 col-lg-offset-3" style="position:relative; top:140px;"><span class="glyphicon glyphicon-hand-up"></span> Click here for full list of Mead ExcelOne & RainbowMax</a>
			<br>
			
			<form class="form-horizontal col-lg-12" style="position:relative; top:170px;" action="mailer/sendmail.php" method="post">
				<fieldset>
				
				<!-- Form Name -->
				<legend class="text-center" style="height:50px;">Request Price & Sample</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Company-Name">Company Name</label>  
				  <div class="col-md-4">
				  <input id="Company-Name" name="Company-Name" type="text" placeholder="Company" class="form-control input-md">
				    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="contact">Contact</label>  
				  <div class="col-md-4">
				  <input id="contact" name="contact" type="text" placeholder="Full Name" class="form-control input-md">
				    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="email">Email</label>  
				  <div class="col-md-4">
				  <input id="email" name="email" type="text" placeholder="name@company.com" class="form-control input-md">
				    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="phone">Phone</label>  
				  <div class="col-md-4">
				  <input id="phone" name="phone" type="text" placeholder="123-456-7890" class="form-control input-md">
				    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="fax">Fax</label>  
				  <div class="col-md-4">
				  <input id="fax" name="fax" type="text" placeholder="123-456-7891" class="form-control input-md">
				    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="address">Address</label>  
				  <div class="col-md-4">
				  <input id="address" name="address" type="text" placeholder="123 Paper Dr." class="form-control input-md">
				    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="city">City</label>  
				  <div class="col-md-4">
				  <input id="city" name="city" type="text" placeholder="Papertown" class="form-control input-md">
				    
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="state">State</label>
				  <div class="col-md-4">
				    <select id="state" name="state" class="form-control">
				      <option value="">Choose state</option>
				      <option value="AL">AL</option>
				      <option value="AK">AK</option>
				      <option value="AZ">AZ</option>
				      <option value="AR">AR</option>
				      <option value="CA">CA</option>
				      <option value="CO">CO</option>
				      <option value="CT">CT</option>
				      <option value="DE">DE</option>
				      <option value="FL">FL</option>
				      <option value="GA">GA</option>
				      <option value="HI">HI</option>
				      <option value="ID">ID</option>
				      <option value="IL">IL</option>
				      <option value="IN">IN</option>
				      <option value="IA">IA</option>
				      <option value="KS">KS</option>
				      <option value="KY">KY</option>
				      <option value="LA">LA</option>
				      <option value="ME">ME</option>
				      <option value="MD">MD</option>
				      <option value="MA">MA</option>
				      <option value="MI">MI</option>
				      <option value="MN">MN</option>
				      <option value="MS">MS</option>
				      <option value="MO">MO</option>
				      <option value="MT">MT</option>
				      <option value="NE">NE</option>
				      <option value="NV">NV</option>
				      <option value="NH">NH</option>
				      <option value="NJ">NJ</option>
				      <option value="NM">NM</option>
				      <option value="NY">NY</option>
				      <option value="NC">NC</option>
				      <option value="ND">ND</option>
				      <option value="OH">OH</option>
				      <option value="OK">OK</option>
				      <option value="OR">OR</option>
				      <option value="PA">PA</option>
				      <option value="RI">RI</option>
				      <option value="SC">SC</option>
				      <option value="SD">SD</option>
				      <option value="TN">TN</option>
				      <option value="TX">TX</option>
				      <option value="UT">UT</option>
				      <option value="VT">VT</option>
				      <option value="VA">VA</option>
				      <option value="WA">WA</option>
				      <option value="WV">WV</option>
				      <option value="WI">WI</option>
				      <option value="WY">WY</option>
				    </select>
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="zip">Zip</label>  
				  <div class="col-md-4">
				  <input id="zip" name="zip" type="text" placeholder="01234" class="form-control input-md">
				    
				  </div>
				</div>
				
				<hr>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="paper-size">Paper Size</label>
				  <div class="col-md-4">
				    <select id="paper-size" name="paper-size" class="form-control">
				      <option value="8.5 x 11">8.5 x 11</option>
				      <option value="11 x 17">11 x 17</option>
				      <option value="8.5 x 14">8.5 x 14</option>
				      <option value="8.5 x 11.5">8.5 x 11.5</option>
				      <option value="9 x 11">9 x 11</option>
				      <option value="17.5 x 22.5">17.5 x 22.5</option>
				      <option value="22.5 x 34.5">22.5 x 34.5</option>
				      <option value="28.5 x 34.5">28.5 x 34.5</option>
				    </select>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="description">Paper Description</label>
				  <div class="col-md-4">
				    <select id="description" name="description" class="form-control">
				      <option value="2 Part, Rev, W/C">2 Part, Rev, W/C</option>
				      <option value="2 Part, Rev, W/W">2 Part, Rev, W/W</option>
				      <option value="2 Part, Rev, W/P">2 Part, Rev, W/P</option>
				      <option value="3 Part, Rev, W/C/P">3 Part, Rev, W/C/P</option>
				      <option value="3 Part, Fwd, W/C/P">3 Part, Fwd, W/C/P</option>
				      <option value="4 Part, Rev, W/C/P/Gd">4 Part, Rev, W/C/P/Gd</option>
				      <option value="4 Part, Fwd, W/C/P/Gd">4 Part, Fwd, W/C/P/Gd</option>
				      <option value="5 Part, Rev, W/C/P/Gd/Gr">5 Part, Rev, W/C/P/Gd/Gr</option>
				      <option value="5 Part, Fwd, W/C/P/Gd/Gr">5 Part, Fwd, W/C/P/Gd/Gr</option>
				      <option value="6 Part, Rev, W/B/Gr/C/P/Gd">6 Part, Rev, W/B/Gr/C/P/Gd</option>
				      <option value="6 Part, Fwd, W/B/Gr/C/P/Gd">6 Part, Fwd, W/B/Gr/C/P/Gd</option>
				      <option value="7.5 CFTag White">7.5 CFTag White</option>
				      <option value="7.5 CFTag Manila">7.5 CFTag Manila</option>
				      <option value="CBWhite">CBWhite</option>
				      <option value="CBCanary">CBCanary</option>
				      <option value="CBPink">CBPink</option>
				      <option value="CBGreen">CBGreen</option>
				      <option value="CBBlue">CBBlue</option>
				      <option value="CBGold">CBGold</option>
				      <option value="CFWhite">CFWhite</option>
				      <option value="CFCanary">CFCanary</option>
				      <option value="CFPink">CFPink</option>
				      <option value="CFGreen">CFGreen</option>
				      <option value="CFBlue">CFBlue</option>
				      <option value="CFGold">CFGold</option>
				      <option value="CFBWhite">CFBWhite</option>
				      <option value="CFBCanary">CFBCanary</option>
				      <option value="CFBPink">CFBPink</option>
				      <option value="CFBGreen">CFBGreen</option>
				      <option value="CFBBlue">CFBBlue</option>
				      <option value="CFBGold">CFBGold</option>
				      <option value="SnapSet, 2 Part, Rev, W/C">SnapSet, 2 Part, Rev, W/C</option>
				      <option value="SnapSet, 3 Part, Rev, P/C/W">SnapSet, 3 Part, Rev, P/C/W</option>
				      <option value="SnapSet, 4 Part, Rev, W/C/P/Gd">SnapSet, 4 Part, Rev, W/C/P/Gd</option>
				      <option value="SnapSet, 5 Part, Rev, Gd/P/C/Gr/W">SnapSet, 5 Part, Rev, Gd/P/C/Gr/W</option>
				      <option value="SnapSet, 3 Part, Fwd, P/C/W">SnapSet, 3 Part, Fwd, P/C/W</option>
				      <option value="SnapSet, 4 Part, Fwd, W/C/P/Gd">SnapSet, 4 Part, Fwd, W/C/P/Gd</option>
				      <option value="SnapSet, 5 Part, Fwd, Gd/P/C/Gr/W">SnapSet, 5 Part, Fwd, Gd/P/C/Gr/W</option>
				    </select>
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="quantity">Quantity</label>  
				  <div class="col-md-4">
				  <input id="quantity" name="quantity" type="text" placeholder="# of Cartons" class="form-control input-md">
				    
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="submit-btn"></label>
				  <div class="col-md-4">
				    <button id="submit-btn" name="submit-btn" class="btn btn-primary">Submit</button>
				  </div>
				</div>
				
				</fieldset>
			</form>
		</div>
				<div style="top:0px; width:100%; height:1050px; background:#f0f0f0; position:absolute; z-index:-3;"></div>

		
	</body>

</html>
<script>
$( document ).ready(function() {
	var el = document.getElementById('nationwide-m');
	el.className = "active";
});
</script>