<?php

//     require 'PHPMailerAutoload.php';

    if(	isset($_POST['Company-Name']) ||
    	isset($_POST['contact']) ||
    	isset($_POST['email']) ||
    	isset($_POST['phone']) ||
    	isset($_POST['fax']) ||
    	isset($_POST['address']) ||
    	isset($_POST['city']) ||
    	isset($_POST['state']) ||
    	isset($_POST['zip']) ||
    	isset($_POST['paper-size']) ||
    	isset($_POST['description']) ||
    	isset($_POST['quantity'])
	) {

	    $cname          = $_POST['Company-Name'];
	    $fullname       = $_POST['contact'];
	    $email          = $_POST['email'];
	    $phone          = $_POST['phone'];
	    $fax          	= $_POST['fax'];
	    $address        = $_POST['address'];
	    $city          	= $_POST['city'];
	    $state          = $_POST['state'];
	    $zip          	= $_POST['zip'];
	    $psize          = $_POST['paper-size'];
	    $pdescrip       = $_POST['description'];
	    $quantity       = $_POST['quantity'];

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {  //dont send email go back
            
//               echo ("UNSUCCESSFUL:Please Enter Your Email");
//           header("Location: http://lmgtfy.com/?q=Greg+needs+to+learn+how+to+write+emails");
    	header('Location: http://shardarsp/nationwide-carbonless-form.php?message="error"');
              
    	} else {    //try sending email

			$headers = 'From: do-not-reply@shardarsp.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
			
			$to      = 'mpantojan@gmail.com';
			$subject = 'FROM Nationwide Carbonless Form';
	// 		$message = "Hello";
			$message .= 	"Company	:	"  .
							$cname  	. 	"<br> Company	:	" . 
							$fullname 	. 	"<br> Fullname	:	" .  
							$email 		. 	"<br> Email		:	" .
							$phone 		. 	"<br> Phone		:	" .
							$fax 		. 	"<br> Fax		:	" .
							$address 	. 	"<br> Address	:	" .
							$city 		. 	"<br> City		:	" .
							$state 		. 	"<br> State		:	" .
							$zip 		. 	"<br> Zipcode	:	" .
							$psize 		. 	"<br><br> Paper Size	:	" .
							$pdescrip 	. 	"<br> Paper Description	:	" .
							$quantity 	. 	"<br> Quantity			:	";
			
			mail($to, $subject, $message, $headers);
	    	header('Location: http://shardarsp/nationwide-carbonless-form.php?message="Success"');
		
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
        }

	}

?>