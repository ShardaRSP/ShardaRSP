<?php

    require 'PHPMailerAutoload.php';

    if(	isset($_POST['rfq-Company-Name']) 	||
    	isset($_POST['rfq-contact']) 		||
    	isset($_POST['rfq-email'])	 		||
    	isset($_POST['rfq-phone']) 			||
    	isset($_POST['rfq-fax']) 			||
    	isset($_POST['rfq-address']) 		||
    	isset($_POST['rfq-city']) 			||
    	isset($_POST['rfq-state']) 			||
    	isset($_POST['rfq-zip']) 			||
    	isset($_POST['rfq-bidName']) 		||
    	isset($_POST['rfq-bidNum']) 		||
    	isset($_POST['rfq-reqNum'])			||
    	isset($_POST['rfq-description-ta'])
		) {

	    $cname          = $_POST['rfq-Company-Name'];
	    $fullname       = $_POST['rfq-contact'];
	    $email          = $_POST['rfq-email'];
	    $phone          = $_POST['rfq-phone'];
	    $fax          	= $_POST['rfq-fax'];
	    $address        = $_POST['rfq-address'];
	    $city          	= $_POST['rfq-city'];
	    $state          = $_POST['rfq-state'];
	    $zip          	= $_POST['rfq-zip'];
	    $bidname        = $_POST['rfq-bidName'];
	    $bidnum       	= $_POST['rfq-bidNum'];
	    $reqnum       	= $_POST['rfq-reqNum'];
	    $description    = $_POST['rfq-description-ta'];

/*
		if(!filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {  //dont send email go back
            
//               echo ("UNSUCCESSFUL:Please Enter Your Email");
//           header("Location: http://lmgtfy.com/?q=Greg+needs+to+learn+how+to+write+emails");
    	header('Location: http://www.shardarsp.com/request-for-quote-form.php?message="error"');
              
    	} else {    //try sending email
*/

			$headers = 'From: do-not-reply@shardarsp.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
			
			$to      = 'mpantojan@gmail.com';
			$subject = 'FROM Nationwide Carbonless Form';
	// 		$message = "Hello";
			$message .= 	"Company	:	"  .
			$cname  	.PHP_EOL. 	"Fullname	:	" . 
			$fullname 	.PHP_EOL. 	"Email	:	" .  
			$email 		.PHP_EOL. 	"Phone		:	" .
			$phone 		.PHP_EOL. 	"Fax		:	" .
			$fax 		.PHP_EOL. 	"Address		:	" .
			$address 	.PHP_EOL. 	"City	:	" .
			$city 		.PHP_EOL. 	"State		:	" .
			$state 		.PHP_EOL. 	"Zipcode		:	" .
			$zip 		.PHP_EOL. 	"Bid Name	:	" .
			$bidname 	.PHP_EOL. 	"Bid Number	:	" .
			$bidnum 	.PHP_EOL. 	"Req Number	:	" .
			$reqnum 	.PHP_EOL. 	"Description	:	" .
			$description 	.PHP_EOL;
			
			mail($to, $subject, $message, $headers);
	    	header('Location: http://shardarsp.com/nationwide-carbonless-form.php?message="Success"');
		
/*
	    $mail = new PHPMailer();
	    $mail->IsHTML(true);
	    $mail->isSMTP();
	    $mail->SMTPDebug = 0;
	  
	    $mail->Host = "a2plcpnl0386.prod.iad2.secureserver.net"; 
	    $mail->SMTPAuth = true;   
	    $mail->Username = "contactform@5lion.com"; 
	    $mail->Password = "5Lionholdings";
	    $mail->port = 465;

		$mail->addReplyTo($visitor_email);
		$mail->setFrom('contactform@5lion.com');
		
		$mail->addAddress('info@5lion.com');
		$mail->addAddress('gonzalez.inbox@gmail.com');
		$mail->addAddress('mpantojan@me.com');
		$mail->Subject = $subject;
		$mail->Body = $bodytext;

		
        if($mail->Send()) {
			header('Location: http://www.5lion.com/');
			exit;  
		}  
*/          
/*
            } else {
	            
              echo ("<!DOCTYPE html>
				<html lang='en'>
				  <head>
				    <meta charset='utf-8'>
				    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
				    <meta name='viewport' content='width=device-width, initial-scale=1'>
				    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
				    <title>5Lion Holdings | Invest in Disruptive Ideas & The People Behind Them</title>
				
				    <!--Font-->
				    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,800italic,300italic,300' rel='stylesheet' type='text/css'>
				    <link href='https://fonts.googleapis.com/css?family=Sanchez:400,400italic' rel='stylesheet' type='text/css'>
				
				    <!-- Bootstrap -->
				    <link href='styles/bootstrap.min.css' rel='stylesheet'>
				    <link href='styles/bootstrap-tweak.css' rel='stylesheet'>
				    
				
				
					<!-- Latest compiled and minified CSS -->
					<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
					
					<!-- Optional theme -->
					<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css'>
					
					<!-- Latest compiled and minified JavaScript -->
				<!-- 	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script> -->
				
				    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
				    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
				    <!--[if lt IE 9]>
				      <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
				      <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
				    <![endif]-->
				 
				    <!-- Custom CSS -->
				    <link href='styles/5Lion.css' rel='stylesheet'>   
				
					<!-- JQuery -->
					<script src='//code.jquery.com/jquery-1.11.3.min.js'></script>
					<script src='//code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
				
				  </head>
				  
				  
				  
				  <body>
				  	<div id='logo' style='width:200px; height:55px; margin:-27px 0px 0px -100px; left:50%; top:46%; position:absolute; display:none;'>
					  	
					  	<img src='images/image_logo_color@2x.png' class='img-responsive' alt='Responsive image' width='200'>
					  	<h6 class='text-center' style='color:white'>Your message was not sent.</br>Please try again.</h6>
					  	<h6 class='text-center'><a href='index.php'>Go Back</a></h6>
				  	</div>
				    </body>
				</html>
				
				<script>
				$(function() {
				  $( '#logo' ).fadeIn( 2000);
				});
				</script>");
*/
//         }

	}

?>