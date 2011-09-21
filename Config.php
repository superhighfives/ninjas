<?php

class Config
{
	private static $_meta = array(
		"title"			=> "",
		"description"	=> "",
		"keywords"		=> ""
	);

	private static $_database = array(
		"dbhost"		=> "",
		"dbuser"		=> "",
		"dbpass"	 	=> "",
		"dbname"		=> ""
	);

	private static $_reporting = array(
		"email"			=> "",
		"subject"		=> ""
	);
	
	private static $_pages = array(
		
	);
	
	public static function getMeta()
	{
		return self::$_meta;
	}
	
	public static function getDatabase()
	{
		return self::$_database;
	}
	
	public static function getReporting()
	{
		return self::$_reporting;
	}
	
	public static function getAll()
	{
		return array("meta" => self::$_meta, "database" => self::$_database, "reporting" => self::$_reporting);
	}
}

?>