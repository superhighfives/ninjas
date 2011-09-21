<?php

/**
* Create magic methods simply - the sky is the limit. Get it? PUNS!
*
* CHANGES: 2010-10-19
* -------------------
* - Requires PHP5
*
* @package NinjasLib
* @subpackage Sky
* @author Charlie Gleason <hi@charliegleason.com>
*/

class Sky
{
	/*@ private */
	private $properties = array();
	
	/**
	* Constructor
	* Sets up the user-generated settings
	* @param array		$_settings The settings passed from the user
	*/
	public function __construct()
	{
		
	}
	
	public function fetch($key = null)
	{
		if($key != null)
		{
			if(isset($this->properties[$key])) return $this->properties[$key];
		} else {
			return $this->properties;
		}
		
	}
	
	public function __set($key, $value)
	{
		if (is_array($value))
		{
			$this->$key = $value;
		} else {
			$this->properties[$key] = $value;
		}
	}

	public function __get($key) {
		if (array_key_exists($key, $this->properties)) {
			return $this->properties[$key];
		}

		return null;
	}
}

?>