<?php

/**
* Dojo manages page related stuff, like the title and description, and whether it's secure
*
* CHANGES: 2010-10-19
* -------------------
* - Requires PHP5
*
* @package NinjasLib
* @subpackage Dojo
* @author Charlie Gleason <hi@charliegleason.com>
*/

class Dojo Extends Structure
{
	/*@ public */
	public $init;
	
	/*@ private */
	public $settings;
	private $title;
	private $description;
	private $keywords;
	
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
	* secure
	* @param boolean		$boolean Checks if the page is SSL or non-SSL and reacts according to the boolean provided
	* 
	* TODO: Make work properly
	*/
	public function secure($boolean)
	{	
		if ($boolean && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
		{
		    $redirect = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			header("Location:$redirect");
		}
		if (!$boolean && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'on')
		{
			$redirect = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			header("Location:$redirect");
		}
	}
	
	/**
	* parseSettings
	* @param array		$_settings The settings passed from the settings array, or manually
	*/
	public function parseSettings($_settings)
	{
		if(isset($_settings['title'])) $this->setTitle($_settings['title']);
		if(isset($_settings['description'])) $this->setDescription($_settings['description']);
		if(isset($_settings['keywords'])) $this->setKeywords($_settings['keywords']);
	}
	
	/**
	* setTitle
	* @param array		$_title The settings passed from the user
	*/
	public function setTitle($_title)
	{
		$this->title = $_title;
	}

	/**
	* getTitle
	* @return array		$title The settings passed from the user
	*/
	public function getTitle()
	{
		return $this->title;
	}
	
	/**
	* setDescription
	* @param array		$_description The settings passed from the user
	*/
	public function setDescription($_description)
	{
		$this->description = $_description;
	}

	/**
	* getDescription
	* @return array		$description The settings passed from the user
	*/
	public function getDescription()
	{
		return $this->description;
	}
	
	/**
	* setKeywords
	* @param array		$_keywords The settings passed from the user
	*/
	public function setKeywords($_keywords)
	{
		$this->keywords = $_keywords;
	}

	/**
	* getKeywords
	* @return array		$keywords The settings passed from the user
	*/
	public function getKeywords()
	{
		return $this->keywords;
	}
	
}

?>