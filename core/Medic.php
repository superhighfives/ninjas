<?php

/**
* Logging, via email, for some reason that I can't quite understand now
*
* CHANGES: 2010-10-19
* -------------------
* - Requires PHP5
*
* @package NinjasLib
* @subpackage Medic
* @author Charlie Gleason <hi@charliegleason.com>
*/

class Medic extends Structure
{
	/*@ public */
	public $init;
	public $settings;

	/*@ private */
	private $email;
	private $subject;
	
	/**
	* Constructor
	* Sets up the user-generated settings
	* @param array		$_settings The settings passed from the user
	*/
	public function __construct($_settings)
	{
		parent::__construct($_settings);
	}
	
	/**
	* log
	* @param array		$_settings The settings passed from the settings array, or manually
	*/
	public function log($_message)
	{
		$headers  = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
		$headers .= 'From: Medic <"medic@noreply.com">' . "\r\n";
		
		mail($this->getEmail(), $this->getSubject(), $_message, $headers);
	}

	/**
	* parseSettings
	* @param array		$_settings The settings passed from the settings array, or manually
	*/
	public function parseSettings($_settings)
	{
		if(isset($_settings['email'])) $this->setEmail($_settings['email']);
		if(isset($_settings['subject'])) $this->setSubject($_settings['subject']);
	}

	/**
	* setEmail
	* @param array		$_email The settings passed from the user
	*/
	public function setEmail($_email)
	{
		$this->email = $_email;
	}

	/**
	* getEmail
	* @return array		$email The settings passed from the user
	*/
	public function getEmail()
	{
		return $this->email;
	}
	
	/**
	* setSubject
	* @param array		$_email The settings passed from the user
	*/
	public function setSubject($_subject)
	{
		$this->subject = $_subject;
	}

	/**
	* getSubject
	* @return array		$email The settings passed from the user
	*/
	public function getSubject()
	{
		return $this->subject;
	}
	
}

?>