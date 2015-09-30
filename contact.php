<?php
	$email_to = "info@heyrosegolfclub.com";
	$fName = strip_tags($_POST['fName']);
	$sName = strip_tags($_POST['sName']);
	$address = strip_tags($_POST['address']);
	$city = strip_tags($_POST['city']);
	$postcode = strip_tags($_POST['postcode']);
	$county = strip_tags($_POST['county']);
	$email_from = strip_tags($_POST['email']);
	$tel = strip_tags($_POST['tel']);
	$message = strip_tags($_POST['enquiry']);
	$email_subject = "New Website Enquiry";
	$headers = "From: $email_from .\n";
	$headers .="Reply-To: $email_from .\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$enquiry = '<html><body>';
	$enquiry .= '<img src="http://heyrosegolfclub.com/images/emailEnquiryHeader.png" alt="New Website Enquiry" />';
	$enquiry .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$enquiry .= "<tr style='background: #eee;'><td><strong>Name</strong> </td><td>" . $fName . " " . $sName . "</td></tr>";
	$enquiry .= "<tr><td><strong>Address</strong> </td><td>" . $address . "</td></tr>";
	$enquiry .= "<tr><td><strong>City</strong> </td><td>" . $city . "</td></tr>";
	$enquiry .= "<tr><td><strong>Post Code</strong> </td><td>" . $postcode . "</td></tr>";
	$enquiry .= "<tr><td><strong>County</strong> </td><td>" . $county . "</td></tr>";
	$enquiry .= "<tr><td><strong>Email</strong> </td><td>" . $email_from . "</td></tr>";
	$enquiry .= "<tr><td><strong>Telephone</strong> </td><td>" . $tel . "</td></tr>";
	$enquiry .= "<tr><td colspan=2><strong>Enquiry:</strong>";
	$enquiry .= "<br>" . $message . "</td></tr>";
	$enquiry .= "</table>";
	$enquiry .= "</body></html>";
	
	ini_set("sendmail_from", $email_from);
	$sent = mail($email_to, $email_subject, $enquiry, $headers, "-f" .$email_from);
	if ($sent)
	{
	header("Location: http://www.heyrosegolfclub.com/thanks.html");
	} else {
	echo "There has been an error sending your comments. Please try later.";
	}
?>