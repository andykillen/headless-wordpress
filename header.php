<?php
/**
 * deny them access if we don't have a login
 */
if(!is_user_logged_in()){
	header('HTTP/1.0 403 Forbidden');
	die('no access here thank you.');
}
// load the child theme header file
require(get_template_directory().'/header.php');
