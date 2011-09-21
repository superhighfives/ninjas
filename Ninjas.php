<?php

/**
* This is an all-inclusive package for interfacing with your PHP based site.
*
* CHANGES: 2010-10-19
* -------------------
* - Requires PHP5
*
* @package NinjasLib
* @subpackage Ninjas
* @author Charlie Gleason <hi@charliegleason.com>
*/

include_once('core/Structure.php');

include_once('core/Dojo.php');
include_once('core/Wind.php');
include_once('core/Forest.php');
include_once('core/Medic.php');
include_once('core/Sky.php');

//Debugging
include_once('core/Training.php');

class Ninjas
{
	/*@ private */
	public $dojo;
	public $wind;
	public $forest;
	public $training;
	public $medic;
	public $sky;
	
	/**
	* Constructor
	* Sets up the Ninjas classes
	*/
	
	public function __construct()
	{
		include_once('Config.php');
		
		$this->dojo = new Dojo(Config::getMeta());
		$this->wind = new Wind(Config::getDatabase());
		$this->forest = new Forest();
		$this->training = new Training();
		$this->medic = new Medic(Config::getReporting());
		$this->sky = new Sky();
	}
	
	/**
	* available
	* Checks which classes are available
	* @return array		The available classes as an array;
	*/
	
	public function available()
	{
		$array = array();
		
		foreach($this as $classes => $values):
	    	array_push($array, $classes);
		endforeach;
		
		return $array;
	}
}

?>