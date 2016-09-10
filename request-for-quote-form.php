<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include_once("meta.php");?>

		<!-- Local CSS -->
		<?php include_once 'head.php'; ?>
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	    <style>
		    .btn-file {
			    position: relative;
			    overflow: hidden;
			}
			.btn-file input[type=file] {
			    position: absolute;
			    top: 0;
			    right: 0;
			    min-width: 100%;
			    min-height: 100%;
			    font-size: 100px;
			    text-align: right;
			    filter: alpha(opacity=0);
			    opacity: 0;
			    outline: none;
			    background: white;
			    cursor: inherit;
			    display: block;
			}
		</style>
		
	</head>
	
	<body style="background: #f0f0f0;">
		
		<?php include_once("menu.php"); ?>
		
		<div class="container">
			
			<p class="col-lg-8 col-lg-offset-2 text-center"style="color:grey; position: relative; top:80px;"><strong style="color:red;">With a highly knowledgeable and experienced team designed specifically to maintain our tax-supported accounts, we take pride in how we do business with the government and its agencies. </strong><br>Our team is built with members readily available to assist any tax-supported account with a price quote (formal or informal), to process a new Purchase Order, billing questions, status of delivery, or to resolve any issue you may have with your order. We understand earning tax-supported business means ensuring rock-bottom pricing without sacrificing service and quality. Our expertise is to constantly secure strong logistics programs throughout the nation to ensure our costs to tax-supported bids are within organizational budget. Our Go Green initiative is another program we have been strengthening within our tax-supported community for many years too. </p>
			
			<!-- Button -->
<!-- 			<div style="margin-top:200px; padding:0px;"> -->
				<div class="col-md-12 text-center" style="padding-top:60px;">
				    <button id="rfq" name="singlebutton" class="btn btn-primary active" onclick="changeFrom('RFQ');">Request for Quote</button>
				    <button id="po" name="singlebutton" class="btn btn-primary" onclick="changeFrom('PO');">Purchase Order</button>
				    <button id="br" name="singlebutton" class="btn btn-primary" onclick="changeFrom('BR');">Billing Request</button>
				</div>
<!-- 			</div> -->
			
			<form class="form-horizontal col-lg-12" style="position:relative; top:24px;" action="mailer/send-request-for-quote.php" method="post">
				<fieldset>
				
				<!-- Form Name -->
				<legend id="formName" class="text-center" style="height:50px;">Request for Quote</legend>
				
				<div id="rfq-form">
				
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Org-Name">Organization Name</label>  
					  <div class="col-md-4">
					  <input id="rfq-Company-Name" name="rfq-Company-Name" type="text" placeholder="Organization" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="contact">Purchasing Agent</label>  
					  <div class="col-md-4">
					  <input id="rfq-contact" name="rfq-contact" type="text" placeholder="Full Name" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="email">Email</label>  
					  <div class="col-md-4">
					  <input id="rfq-email" name="email" type="text" placeholder="name@company.com" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="phone">Phone</label>  
					  <div class="col-md-4">
					  <input id="rfq-phone" name="phone" type="text" placeholder="123-456-7890" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="fax">Fax</label>  
					  <div class="col-md-4">
					  <input id="rfq-fax" name="fax" type="text" placeholder="123-456-7891" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="address">Address</label>  
					  <div class="col-md-4">
					  <input id="rfq-address" name="address" type="text" placeholder="123 Paper Dr." class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="city">City</label>  
					  <div class="col-md-4">
					  <input id="rfq-city" name="city" type="text" placeholder="Papertown" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="state">State</label>
					  <div class="col-md-4">
					    <select id="rfq-state" name="state" class="form-control">
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
					  <input id="rfq-zip" name="rfq-zip" type="text" placeholder="01234" class="form-control input-md">
					    
					  </div>
					</div>
					
					<hr>
					
					<!-- Text input-->
					<div id="bidName-group" class="form-group" style="display: block;">
					  <label class="col-md-4 control-label" for="Bid-Name">Bid Name</label>  
					  <div class="col-md-4">
					  	<input id="rfq-bidName" name="rfq-bidName" type="text" placeholder="Bid Name" class="form-control input-md">
					    
					  </div>
					</div>

					
					<!-- Text input-->
					<div class="form-group">
					  <label id="bidNumLabel" class="col-md-4 control-label" for="Bid-Number">Bid #</label>  
					  <div class="col-md-4">
					  <input id="rfq-bidNum" name="rfq-bidNum" type="text" placeholder="Bid #" class="form-control input-md">
					    
					  </div>
					</div>
	
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Req-Number">Requisition #</label>  
					  <div class="col-md-4">
					  <input id="rfq-reqNum" name="rfq-reqNum" type="text" placeholder="Requisition #" class="form-control input-md">
					    
					  </div>
					</div>
					
					<hr>
	
					<!-- Textarea -->
					<div class="form-group">
					  <label id="descripLabel" class="col-md-4 control-label" for="Description">Description of Needed Paper</label>
					  <div class="col-md-4">                     
					    <textarea class="form-control" id="rfq-description-ta" name="rfq-description-ta" placeholder="Description of Needed Paper"></textarea>
					  </div>
					</div>
					
					<div class="form-group">
					  <label id="rfq-attachLabel" class="col-md-4 control-label" for="Description">Attach Request for Quote</label>
					  <div class="col-md-4">
						<span class="btn btn-default btn-file">
						    Browse <input type="file">
						</span>
					  </div>
					</div>
				</div>
				
				<div id="po-form" style="display:none;">
				
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Org-Name">Organization Name</label>  
					  <div class="col-md-4">
					  	<input id="po-Company-Name" name="Org-Name" type="text" placeholder="Organization" class="form-control input-md">  
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="contact">Purchasing Agent</label>  
					  <div class="col-md-4">
					  	<input id="po-contact" name="contact" type="text" placeholder="Full Name" class="form-control input-md">
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="email">Email</label>  
					  <div class="col-md-4">
					  	<input id="po-email" name="email" type="text" placeholder="name@company.com" class="form-control input-md">
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="phone">Phone</label>  
					  <div class="col-md-4">
					  	<input id="po-phone" name="phone" type="text" placeholder="123-456-7890" class="form-control input-md">
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="fax">Fax</label>  
					  <div class="col-md-4">
					  	<input id="po-fax" name="fax" type="text" placeholder="123-456-7891" class="form-control input-md">
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="address">Address</label>  
					  <div class="col-md-4">
					  	<input id="po-address" name="address" type="text" placeholder="123 Paper Dr." class="form-control input-md">
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="city">City</label>  
					  <div class="col-md-4">
					  	<input id="po-city" name="city" type="text" placeholder="Papertown" class="form-control input-md">
					  </div>
					</div>
					
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="state">State</label>
					  <div class="col-md-4">
					    <select id="po-state" name="state" class="form-control">
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
					  	<input id="po-zip" name="zip" type="text" placeholder="01234" class="form-control input-md">
					  </div>
					</div>
					
					<hr>
					
					<!-- Text input-->
					<div class="form-group">
					  <label id="poNumLabel" class="col-md-4 control-label" for="Bid-Number">Purchase #</label>  
					  <div class="col-md-4">
					  	<input id="po-bidNum" name="Bid-Number" type="text" placeholder="Purchase #" class="form-control input-md">
					  </div>
					</div>
	
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Req-Number">Requisition #</label>  
					  <div class="col-md-4">
					  	<input id="po-zip" name="Req-Number" type="text" placeholder="Requisition #" class="form-control input-md">
					  </div>
					</div>
					
					<hr>
	
					<!-- Textarea -->
					<div class="form-group">
					  <label id="podescripLabel" class="col-md-4 control-label" for="po-Description">List of Ordered Items</label>
					  <div class="col-md-4">                     
					    <textarea class="form-control" id="po-description-ta" name="po-Description" placeholder="Ordered Items"></textarea>
					  </div>
					</div>
					
					<div class="form-group">
					  <label id="po-attachLabel" class="col-md-4 control-label" for="po-Description">Attach Purchase Order</label>
					  <div class="col-md-4">
						<span class="btn btn-default btn-file">
						    Browse <input type="file">
						</span>
					  </div>
					</div>
				</div>

				<div id="br-form" style="display:none;">
				
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Org-Name">Organization Name</label>  
					  <div class="col-md-4">
					  	<input id="Company-Name" name="Org-Name" type="text" placeholder="Organization" class="form-control input-md">
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="contact">Accounts Payable Contact</label>  
					  <div class="col-md-4">
					  	<input id="contact" name="contact" type="text" placeholder="Full Name" class="form-control input-md">
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="email">A/P Email</label>  
					  <div class="col-md-4">
					  	<input id="email" name="email" type="text" placeholder="name@company.com" class="form-control input-md">
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="phone">A/P Phone</label>  
					  <div class="col-md-4">
					  	<input id="phone" name="phone" type="text" placeholder="123-456-7890" class="form-control input-md">
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="fax">A/P Fax</label>  
					  <div class="col-md-4">
					  	<input id="fax" name="fax" type="text" placeholder="123-456-7891" class="form-control input-md">
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="address">A/P Address</label>  
					  <div class="col-md-4">
					  	<input id="address" name="address" type="text" placeholder="123 Paper Dr." class="form-control input-md">
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="city">A/P City</label>  
					  <div class="col-md-4">
					  	<input id="city" name="city" type="text" placeholder="Papertown" class="form-control input-md">
					  </div>
					</div>
					
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="state">A/P State</label>
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
					  <label class="col-md-4 control-label" for="zip">A/P Zip</label>  
					  <div class="col-md-4">
					  	<input id="zip" name="zip" type="text" placeholder="01234" class="form-control input-md">
					  </div>
					</div>
					
					<hr>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="PO-Number">Purchase Order #</label>  
					  <div class="col-md-4">
					  	<input id="poNum" name="PO-Number" type="text" placeholder="Bid #" class="form-control input-md">
					  </div>
					</div>
	
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Req-Number">Requisition #</label>  
					  <div class="col-md-4">
					  	<input id="reqNum" name="Req-Number" type="text" placeholder="Requisition #" class="form-control input-md">
					  </div>
					</div>
					
					<hr>
	
					<!-- Textarea -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Description">Description of Placed Order</label>
					  <div class="col-md-4">                     
					    <textarea class="form-control" id="descrip" name="Description" placeholder="Description of Placed Order"></textarea>
					  </div>
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
<!-- 		<div style="top:0px; width:100%; height:100%; background:#f0f0f0; position:absolute; z-index:-3;"></div> -->
		<div style="padding:0px; margin-top:40px;">
		<?php include('footer.php'); ?>
		</div>
	</body>

</html>
<script>
$( document ).ready(function() {
	var el = document.getElementById('nationwide-m');
	el.className = "active";
	
	$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        alert(numFiles);
        alert(label);
    });
	
});

$(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
});

function changeFrom(command){
	switch(command){
		case 'RFQ':
			$("legend").html("Request for Quote");
			$("#rfq-form").css("display", "block");
			$("#po-form").css("display", "none");
			$("#br-form").css("display", "none");
			$("#rfq").removeClass("active").addClass( "active" );
			$("#po").removeClass("active");
			$("#br").removeClass("active");
/*
			$("#bidNumLabel").html("Bid #");
			$("#bidNum").attr("placeholder","Bid #");			
			$("#bidName-group").css("display", "block");
			$("#descripLabel").html("Description of Needed Paper");
			$("#description-ta").attr("placeholder","Description of Needed Paper");
			$("#attachLabel").html("Attach Request for Quote");
*/
			break;
		case 'PO':
			$("legend").html("Purchase Order Form");
			$("#rfq-form").css("display", "none");
			$("#po-form").css("display", "block");
			$("#br-form").css("display", "none");
			$("#rfq").removeClass("active")
			$("#po").removeClass("active").addClass( "active" );
			$("#br").removeClass("active");
/*
			$("#bidNumLabel").html("Purchase #");
			$("#bidNum").attr("placeholder","Purchase #");
			$("#bidName-group").css("display", "none");
			$("#descripLabel").html("List of Ordered Items");
			$("#description-ta").attr("placeholder","Ordered Items");
			$("#attachLabel").html("Attach Purchase Order");
*/
			break;	
		case 'BR':
			$("legend").html("Request POD, Invoice & Statement");
			$("#rfq-form").css("display", "none");
			$("#po-form").css("display", "none");
			$("#br-form").css("display", "block");
			$("#rfq").removeClass("active");
			$("#po").removeClass("active");
			$("#br").removeClass("active").addClass( "active" );
			break;		
		default:
			break;
			
	}
}

</script>