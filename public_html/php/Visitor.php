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
class Visitor implements \JsonSerializable {

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
	 * @return string value of visitor's name
	 **/
	public function getVisitorName(): string {
		return $this->visitorName;
	}

	/**
	 * mutator method for setting/changing visitor's name
	 *
	 * @param string $newVisitorName new value of an email address
	 * @throws \InvalidArgumentException if $newVisitorName is insecure
	 * @throws \RangeException if $newVisitorName is > 92 characters
	 **/
	public function setVisitorName(string $newVisitorName): void {
		// verify that the message is secure and not empty
		$newVisitorName = trim($newVisitorName);
		$newVisitorName = filter_var($newVisitorName, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		if(empty($newVisitorName)) {
			throw(new \InvalidArgumentException("Your message is empty or insecure."));
		}
		// verify that the message is not longer than 92 characters
		if(strlen($newVisitorName) > 92) {
			throw(new \RangeException("Name is too long."));
		}
		// store the valid email address
		$this->visitorName = $newVisitorName;
	}

	/**
	 * accessor method for a subject
	 *
	 *
	 * @return string value of visitor's subject
	 **/
	public function getVisitorSubject(): string {
		return $this->visitorSubject;
	}

	/**
	 * mutator method for setting/changing visitor's name
	 *
	 * @param string $newVisitorSubject new value of an email address
	 * @throws \InvalidArgumentException if $newVisitorSubject is insecure
	 * @throws \RangeException if $newVisitorSubject is > 100 characters
	 **/
	public function setVisitorSubject(string $newVisitorSubject): void {
		// verify that the message is secure and not empty
		$newVisitorSubject = trim($newVisitorSubject);
		$newVisitorSubject = filter_var($newVisitorSubject, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		if(empty($newVisitorSubject)) {
			throw(new \InvalidArgumentException("Your message is empty or insecure."));
		}
		// verify that the message is not longer than 100 characters
		if(strlen($newVisitorSubject) > 100) {
			throw(new \RangeException("Subject is too long."));
		}
		// store the valid email address
		$this->visitorSubject = $newVisitorSubject;
	}


	/**
	 * formats the state variables for JSON serialization
	 *
	 * @return array resulting state variables to serialize
	 **/
	public function jsonSerialize() {
		// keep this profileAccessToken secret
		// also we don't need profileOAuthId -- keep it out as well
		return [
			'visitorEmail' => $this->visitorEmail,
			'visitorMessage' => $this->visitorMessage,
			'visitorName' => $this->visitorName,
			'visitorSubject' => $this->visitorSubject
		];
	}
}
