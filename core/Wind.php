<?php

/**
* Connect to a MySQL database
*
* CHANGES: 2010-10-19
* -------------------
* - Requires PHP5
*
* @package NinjasLib
* @subpackage Wind
* @author Charlie Gleason <hi@charliegleason.com>
*/

class Wind extends Structure
{
	/*@ public */
	public $init;
	
	/*@ private */
	public $settings;
	private $dbhost;
	private $dbuser;
	private $dbpass;
	private $dbname;
	private $connection;
	private $connected;
	
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
	* parseSettings
	* @param array		$_settings The settings passed from the settings array, or manually
	*/
	public function parseSettings($_settings)
	{
		if(isset($_settings)):
			$this->setDBHost($_settings['dbhost']);
			$this->setDBUser($_settings['dbuser']);
			$this->setDBPass($_settings['dbpass']);
			$this->setDBName($_settings['dbname']);
		endif;
	}
	
	/**
	* connect
	*/
	public function connect() 
	{
		@$this->connection = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass);
		
		if(!$this->connection)
			return false;
		
		@$db_selected = mysql_select_db($this->dbname, $this->connection);// or die("Connect error: ".mysql_error());
		
		if(!$db_selected)
		{
			mysql_close($this->connection);
			return false;
		}
		
		$this->setConnected(true);
	}
	
	/**
	* disconnect
	*/
	public function disconnect() {
		if($this->getConnected() === true)
		{
			mysql_close($this->connection);
			$this->setConnected(false);
		}
	}
	
	/**
	* setDBHost
	* @param array		$_dbhost The settings passed from the user
	*/
	public function setDBHost($_dbhost)
	{
		$this->dbhost = $_dbhost;
	}

	/**
	* getDBHost
	* @return array
	*/
	public function getDBHost()
	{
		return $this->dbhost;
	}
	
	/**
	* setDBUser
	* @param array		$_dbuser The settings passed from the user
	*/
	public function setDBUser($_dbuser)
	{
		$this->dbuser = $_dbuser;
	}

	/**
	* getDBUser
	* @return array
	*/
	public function getDBUser()
	{
		return $this->dbuser;
	}
	
	/**
	* setDBPass
	* @param array		$_dbpass The settings passed from the user
	*/
	public function setDBPass($_dbpass)
	{
		$this->dbpass = $_dbpass;
	}

	/**
	* getDBPass
	* @return array
	*/
	public function getDBPass()
	{
		return $this->dbpass;
	}
	
	/**
	* setDBName
	* @param array		$_dbname The settings passed from the user
	*/
	public function setDBName($_dbname)
	{
		$this->dbname = $_dbname;
	}

	/**
	* getDBName
	* @return array
	*/
	public function getDBName()
	{
		return $this->dbname;
	}
	
	/**
	* setDBName
	* @param boolean	$_boolean Set to connected
	*/
	public function setConnected($_connected)
	{
		$this->connected = $_connected;
	}

	/**
	* getDBName
	* @return boolean
	*/
	public function getConnected()
	{
		return $this->connected;
	}
}

?>