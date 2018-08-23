<?php
namespace anikitina\MyPwpAsya;

/**
 * Message class describes a message created by the visitor of my web page
 *
 *
 * @author Asya Nikitina <a.f.nikitina@gmail.com>
 * @version 1.0.0
 **/
// create a Message class
class Visitor {

	// declare private state variables
	private $visitorEmail;
	private $visitorMessage;
	private $visitorName;
	private $visitorSubject;

	// Visitor constructor (all default values are empty strings)
	public function __construct(string $newVisitorEmail = "", string $newVisitorMessage ="",
										 string $newVisitorName = "", string $newVisitorSubject = "") {
		$this->setVisitorEmail($newVisitorEmail);
		$this->setVisitorMessage($newVisitorMessage);
		$this->setVisitorName($newVisitorName);
		$this->setVisitorSubject($newVisitorSubject);
	}

	/**
	 * accessor method for an email address
	 *
	 * @return string value of email address
	 **/
	public function getVisitorEmail(): string {
		return $this->visitorEmail;
	}

	/**
	 * mutator method for setting/changing an email address
	 *
	 * @param string $newVisitorEmail new value of an email address
	 * @throws \InvalidArgumentException if $newVisitorEmail is not a valid email or insecure
	 * @throws \RangeException if $newEmail is > 128 characters
	 **/
	public function setVisitorEmail(string $newVisitorEmail): void {
		// verify that the email address is secure
		$newVisitorEmail = trim($newVisitorEmail);
		$newVisitorEmail = filter_var($newVisitorEmail, FILTER_SANITIZE_EMAIL);

		if(empty($newProfileEmail) || !(filter_var($newVisitorEmail, FILTER_VALIDATE_EMAIL))) {
			throw(new \InvalidArgumentException("Email address is empty or insecure."));
		}
		// verify the email is not longer than 128 characters
		if(strlen($newProfileEmail) > 128) {
			throw(new \RangeException("Email address is too long."));
		}
		// store the valid email address
		$this->profileEmail = $newProfileEmail;
	}

	/**
 * accessor method for a message
 *
 * @return string value of visitor's message
 **/
	public function getVisitorMessage(): string {
		return $this->visitorMessage;
	}

	/**
	 * mutator method for setting/changing visitor's message
	 *
	 * @param string $newVisitorMessage new value of an email address
	 * @throws \InvalidArgumentException if $newVisitorMessage is insecure
	 * @throws \RangeException if $newVisitorMessage is > 1000 characters
	 **/
	public function setVisitorMessage(string $newVisitorMessage): void {
		// verify that the message is secure and not empty
		$newVisitorMessage = trim($newVisitorMessage);
		$newVisitorMessage = filter_var($newVisitorMessage, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		if(empty($newVisitorMessage)) {
			throw(new \InvalidArgumentException("Your message is empty or insecure."));
		}
		// verify that the message is not longer than 1000 characters
		if(strlen($newVisitorMessage) > 1000) {
			throw(new \RangeException("Message is too long."));
		}
		// store the valid email address
		$this->visitorMessage = $newVisitorMessage;
	}

	/**
	 * accessor method for a name
	 *
	 *
	 * @return string value of visitor's message
	 **/
	public function getVisitorMessage(): string {
		return $this->visitorMessage;
	}

	/**
	 * mutator method for setting/changing visitor's message
	 *
	 * @param string $newVisitorMessage new value of an email address
	 * @throws \InvalidArgumentException if $newVisitorMessage is insecure
	 * @throws \RangeException if $newVisitorMessage is > 1000 characters
	 **/
	public function setVisitorMessage(string $newVisitorMessage): void {
		// verify that the message is secure and not empty
		$newVisitorMessage = trim($newVisitorMessage);
		$newVisitorMessage = filter_var($newVisitorMessage, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		if(empty($newVisitorMessage)) {
			throw(new \InvalidArgumentException("Your message is empty or insecure."));
		}
		// verify that the message is not longer than 1000 characters
		if(strlen($newVisitorMessage) > 1000) {
			throw(new \RangeException("Message is too long."));
		}
		// store the valid email address
		$this->visitorMessage = $newVisitorMessage;
	}



}
