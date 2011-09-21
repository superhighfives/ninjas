<?php

/**
* The base class
*
* CHANGES: 2010-10-19
* -------------------
* - Requires PHP5
*
* @package NinjasLib
* @subpackage Structure
* @author Charlie Gleason <hi@charliegleason.com>
*/

class Structure
{	
	/**
	* Constructor
	* Sets up the user-generated settings
	* @param array		$_settings The settings passed from the user
	*/
	public function __construct($_settings)
	{
		$this->setInit(true);
		if(isset($_settings)) $this->setSettings($_settings);
	}
	
	/**
	* setSettings
	* @param array		$_settings The settings passed from the user
	*/
	public function setSettings($_settings)
	{
		$this->settings = $_settings;
		$this->parseSettings($this->settings);
	}

	/**
	* getSettings
	* @return array		$_settings The settings passed from the user
	*/
	public function getSettings()
	{
		return $this->settings;
	}
	
	/**
	* setInit
	* @param boolean	$_init Set to connected
	*/
	public function setInit($_init)
	{
		$this->init = $_init;
	}

	/**
	* setInit
	* @return boolean
	*/
	public function isInit()
	{
		return $this->init;
	}
	
}

?>