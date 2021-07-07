<?php
session_start();
/*
 * Session variables
 * 		isLoggedIn = value(true, false)
 * 		UserId = user id of current loggedin user
 * 		name = name of loggedin user 
 * 		username = username of loggedin user 
 * 
 */
 
 // onLoad.php should be included before any other function
require 'onload.php';  
/*
		echo "<pre>";
		print_r($_SESSION);
		echo "</pre>";
	session_destroy();
 */
$page = (!isset($_SESSION['userId'])) ? 'dashboard' : 'dashboard' ;

switch ($page)
{
	
	case 'login':
		require_once (basePath("controller/dashboard.php"));
		break;
	
	case 'dashboard':
		require_once (basePath("controller/dashboard.php"));
		break;
	// default:
			// require_once (basePath("controller/dashboard.php"));
		// break;
}

?>
