<?php

/**
* Turn on and off error reporting on the fly
*
* CHANGES: 2010-10-19
* -------------------
* - Requires PHP5
*
* @package NinjasLib
* @subpackage Training
* @author Charlie Gleason <hi@charliegleason.com>
*/

class Training extends Structure
{
	/*@ public */
	public $init;
	
	/**
	* Constructor
	* Sets up the user-generated settings
	* @param array		$_settings The settings passed from the user
	*/
	public function __construct($_settings = null)
	{
		parent::__construct($_settings);
	}
	
	/**
	* start
	* Turns on error reporting
	*/
	public function start()
	{
		error_reporting(E_ALL);
		ini_set('error_reporting', E_ALL);
		ini_set('display_errors', 1);
	}
	
	function stop() {
        ini_set('display_errors','Off');
        ini_set('log_errors', 'On');
	}
}

?>