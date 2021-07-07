<?php session_start();
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
$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : '' ;
switch ($page)
{
	
 		case 'dashboard':
			require_once (basePath("controller/dashboard.php"));
		break;
	 
}

?>