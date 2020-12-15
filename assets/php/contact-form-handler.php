<?php

	$name = $_POST["name"];
	$visitor_email = $_POST["email"];
	$subject = "Rajpreet Portfolio Form Submission";
	$message = $_POST["message"];

	$toEmail = "dhaliwal.rajpreet@outlook.com";
	$mailHeaders = "From: " . $name . "<". $visitor_email .">\r\n";
	mail($toEmail, $subject, $message, $mailHeaders);
	    header("Location: index.html");
?>