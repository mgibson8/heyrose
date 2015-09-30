<?php
error_reporting(E_ERROR | E_PARSE);
	$email_to = "info@heyrosegolfclub.com";
	$name = strip_tags($_POST['name']);
	$date = strip_tags($_POST['date']);
	$socName = strip_tags($_POST['socName']);
	$email_from = strip_tags($_POST['email']);
	$tel = strip_tags($_POST['tel']);
	$pack = strip_tags($_POST['pack']);
	
	
	$morningCoffeeTime = strip_tags($_POST['morningCoffeeTime']);
	$morningCoffeeNum = strip_tags($_POST['morningCoffeeNum']);
	
	$baconTime = strip_tags($_POST['baconTime']);
	$baconNum = strip_tags($_POST['baconNum']);
	
	$lunchTime = strip_tags($_POST['lunchTime']);
	$lunchNum = strip_tags($_POST['lunchNum']);
	
	$breakfastTime = strip_tags($_POST['breakfastTime']);
	$breakfastNum = strip_tags($_POST['breakfastNum']);
	
	$dinnerTime = strip_tags($_POST['dinnerTime']);
	$dinnerNum = strip_tags($_POST['dinnerNum']);
	$maincourse = strip_tags($_POST['maincourse']);
	$dessert = strip_tags($_POST['dessert']);
	$coffee = strip_tags($_POST['coffee']);
	
	$diet = strip_tags($_POST['diet']);
	
	$message = strip_tags($_POST['message']);
	
	$email_subject = "New Society Package Enquiry";
	$headers = "From: $email_from .\n";
	$headers .="Reply-To: $email_from .\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$enquiry_personal_details = '<html><body>';
	$enquiry_personal_details .= '<img src="http://heyrosegolfclub.com/images/emailSocietyHeader.png" alt="New Society Enquiry" />';
	$enquiry_personal_details .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$enquiry_personal_details .= "<tr><td><strong>Name</strong> </td><td>" . $name . "</td></tr>";
	$enquiry_personal_details .= "<tr><td><strong>Preferred Date</strong> </td><td>" . $date . "</td></tr>";
	$enquiry_personal_details .= "<tr><td><strong>Society Name</strong> </td><td>" . $socName . "</td></tr>";
	$enquiry_personal_details .= "<tr><td><strong>Telephone</strong> </td><td>" . $tel . "</td></tr>";
	$enquiry_personal_details .= "<tr><td><strong>Email</strong> </td><td>" . $email_from . "</td></tr>";
	$enquiry_personal_details .= "<tr><td><strong>Package</strong> </td><td>" . $pack . "</td></tr>";
	
	$enquiry_mornCoffee = "<tr style='background: #eee;'><td colspan=2><strong>Morning Coffee</strong></td></tr>";
	$enquiry_mornCoffee .= "<tr><td><strong>Time</strong> </td><td>" . $morningCoffeeTime . "</td></tr>";
	$enquiry_mornCoffee .= "<tr><td><strong>Numbers</strong> </td><td>" . $morningCoffeeNum . "</td></tr>";
	
	$enquiry_bacon = "<tr style='background: #eee;'><td colspan=2><strong>Bacon Rolls</strong></td></tr>";
	$enquiry_bacon .= "<tr><td><strong>Time</strong> </td><td>" . $baconTime . "</td></tr>";
	$enquiry_bacon .= "<tr><td><strong>Numbers</strong> </td><td>" . $baconNum . "</td></tr>";
	
	$enquiry_breakfast = "<tr style='background: #eee;'><td colspan=2><strong>Cooked Breakfast</strong></td></tr>";
	$enquiry_breakfast .= "<tr><td><strong>Time</strong> </td><td>" . $breakfastTime . "</td></tr>";
	$enquiry_breakfast .= "<tr><td><strong>Numbers</strong> </td><td>" . $breakfastNum . "</td></tr>";
	
	$enquiry_lunch = "<tr style='background: #eee;'><td colspan=2><strong>Lunch</strong></td></tr>";
	$enquiry_lunch .= "<tr><td><strong>Time</strong> </td><td>" . $lunchTime . "</td></tr>";
	$enquiry_lunch .= "<tr><td><strong>Numbers</strong> </td><td>" . $lunchNum . "</td></tr>";
	
	$enquiry_dinner = "<tr style='background: #eee;'><td colspan=2><strong>Dinner</strong></td></tr>";
	$enquiry_dinner .= "<tr><td><strong>Time</strong> </td><td>" . $dinnerTime . "</td></tr>";
	$enquiry_dinner .= "<tr><td><strong>Numbers</strong> </td><td>" . $dinnerNum . "</td></tr>";
	$enquiry_dinner .= "<tr><td><strong>Main</strong> </td><td>" . $maincourse . "</td></tr>";
	
	$enquiry_dessert = "<tr><td><strong>Dessert</strong> </td><td>" . $dessert . "</td></tr>";
	
	$enquiry_coffee = "<tr><td><strong>Coffee</strong> </td><td>" . $coffee . "</td></tr>";
	
	$enquiry_diet = "<tr><td><strong>Dietary Requirements</strong> </td><td>" . $diet . "</td></tr>";
	
	$enquiry_comments = "<tr><td colspan=2><strong>Comments:</strong>";
	$enquiry_comments .= "<br>" . $message . "</td></tr>";
	$enquiry_comments .= "</table>";
	$enquiry_comments .= "</body></html>";
	
	if($pack == 'The Society Summer Saver')
	{
		$enquiry = $enquiry_personal_details . $enquiry_mornCoffee . $enquiry_bacon . $enquiry_diet . $enquiry_comments;
	}
	elseif($pack == 'The Full Round')
	{
		$enquiry = $enquiry_personal_details . $enquiry_mornCoffee . $enquiry_lunch . $enquiry_dinner . $enquiry_dessert . $enquiry_coffee . $enquiry_diet . $enquiry_comments;
	}
	elseif($pack == 'The Early Starter')
	{
		$enquiry = $enquiry_personal_details . $enquiry_mornCoffee . $enquiry_breakfast . $enquiry_lunch . $enquiry_diet . $enquiry_comments;
	}
	elseif($pack == 'The Light Lunch')
	{
		$enquiry = $enquiry_personal_details . $enquiry_mornCoffee . $enquiry_lunch . $enquiry_diet . $enquiry_comments;
	}
	elseif($pack == 'The Eighteen Holer')
	{
		$enquiry = $enquiry_personal_details . $enquiry_dinner . $enquiry_dessert . $enquiry_coffee . $enquiry_diet . $enquiry_comments;
	}
	elseif($pack == 'The Good Value Day')
	{
		$enquiry = $enquiry_personal_details . $enquiry_dinner .  $enquiry_diet . $enquiry_comments;
	}
	elseif($pack == 'The Easy Round')
	{
		$enquiry = $enquiry_personal_details . $enquiry_mornCoffee . $enquiry_comments;
	}
	
	ini_set("sendmail_from", $email_from);
	$sent = mail($email_to, $email_subject, $enquiry, $headers, "-f" .$email_from);
	if ($sent)
	{
	header("Location: http://www.heyrosegolfclub.com/thanks.html");
	} else {
	echo "There has been an error sending your comments. Please try later.";
	}
?>