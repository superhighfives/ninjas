<?php

/**
* Easy to use social media plugins
*
* CHANGES: 2010-10-19
* -------------------
* - Requires PHP5
*
* @package NinjasLib
* @subpackage Forest
* @author Charlie Gleason <hi@charliegleason.com>
*/

class Forest extends Structure
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
	public function __construct($_settings = null)
	{
		parent::__construct($_settings);
	}
	
	/**
	* embedTwitter
	* Adds Twitter to the page
	* @param string		$_url The url being tweeted
	* @param string		$_text The pre-defined text for the tweet
	* @param string		$_style The optional style of the button ('horizontal', 'vertical' or 'none')
	*/
	public function embedTwitter($_url, $_text, $_style = "none")
	{	
		return '<a href="http://twitter.com/share" class="twitter-share-button" data-url="' . $_url . '" data-text="' . $_text . '" data-count="' . $_style . '">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>';
	}
	
	/**
	* embedLike
	* Adds Facebook like to the page
	* @param string		$_url The pre-defined text for the tweet
	* @param string		$_verb The url being tweeted ('like', 'recommend')
	* @param string		$_width The width of the button, in pixels
	* @param string		$_colour The colour scheme ('light', 'dark')
	* @param string		$_height The height of the button, in pixels
	*/
	public function embedLike($_url, $_verb = "like", $_width = 450, $_colour = "light", $_height = 80)
	{
		return '<iframe src="http://www.facebook.com/plugins/like.php?href=' . $_url . '&amp;layout=standard&amp;width=' . $_width . '&amp;action=' . $_verb . '&amp;colorscheme=' . $_colour . '&amp;height=' . $_height . '" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:' . $_width . 'px; height:' . $_height . 'px;" allowTransparency="true"></iframe>';
	}
	
}



?>