<?php

if(isset($_POST['email'])) {
	$email_to	= "zhubindi@msn.com";
	$email_subject = "Patient Contact Information";
	$name	=	$_POST['name'];	// required
	$email_from	=	$_POST['email']; //	required
	$telephone = $_POST['phone'];	// not required
	$comments	=	$_POST['message'];	// required
	function clean_string($string) {
	    $bad = array("content-type","bcc:","to:","cc:","href");
	    return str_replace($bad,"",$string);
	}
	$email_message = "Patient Contact Information:\n\n";
	$email_message .=	"Name: ".clean_string($name)."\n";
	$email_message .=	"Email:	".clean_string($email_from)."\n";
	$email_message .=	"Telephone:	".clean_string($telephone)."\n";
	$email_message .=	"Comments: ".clean_string($comments)."\n";
	// create	email	headers
	//$headers = 'From:'.$email_from."\r\n".
	$headers = "From:$email_from\r\n";
	$headers .= "Reply-To:$email_from\r\n";
	$headers .= "X-Mailer: PHP/phpversion()";

	$send_contact=mail($email_to, $email_subject, $email_message, $headers);
	header('Content-type: application/json');
	echo json_encode(array("result"=>"success"));
}