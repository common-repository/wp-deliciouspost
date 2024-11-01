<?php /*
Plugin Name: DeliciousPost ( DISCONTINUED )
Plugin URI: http://delicouspost.dcoda.co.uk/
Description: Publicise your posts and pages by adding them to the social bookmarking site Delicious, automatically as soon as you post them.
Author: dcoda
Author URI: 
Version: DISCONTINUED
License: GPLv2 or later
*/
@require_once  dirname ( __FILE__ ) . '/library/wordpress/application.php';
if (class_exists("wv43v_application"))
{
	new wv43v_application ( __FILE__);
}