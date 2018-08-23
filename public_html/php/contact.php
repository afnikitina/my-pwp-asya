<?php

use anikitina\MyPwpAsya\Visitor;

// instantiate a current Visitor object to default state (all fields are empty strings
$currVisitor = new Visitor();

// create an error JSON object (with all values being empty strings for now)
$errJSON = [
	'email' => "",
	'message' => "",
	'name' => "",
	'subject' => ""
];


// make sure that a visitor is trying to submit valid data
if (!empty($_POST)) {
	if (isset($_POST['email'])) {
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$currVisitor->setVisitorEmail($email);
		} else {
			$errJSON->email = "Email address is empty or insecure.";
		}
	}

	if (isset($_POST['message']) {
		$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if (!empty($message)) {
			$currVisitor->setVisitorMessage($message);
		}
		else {
			$errJSON->message = "Message is empty or insecure.";
		}
	}

	if (isset($_POST['name']) {
		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(!empty($name)) {
			$currVisitor->setVisitorName($name);
		} else {
			$errJSON->name = "Name is empty or insecure.";
		}
	}

	if (isset($_POST['subject']) {
		$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(!empty($subject)) {
			$currVisitor->setVisitorSubject($subject);
		}
	}

