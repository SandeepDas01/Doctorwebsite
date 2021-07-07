<?php 	if ( ! defined('ABSPATH')) exit('No direct script access allowed');

function version(){
	return VERSION;
}

function siteName(){
	return SITENAME;
}

/*	URL functions	*/
function siteUrl(){
	return BASEURL;	
}

function absPath(){
	return ABSPATH;
}

function baseUrl($url = ''){
	return $baseUrl = siteUrl().'/' .$url;	
}

function basePath($path = ''){
	return $baseUrl = absPath().'/' .$path;	
}

function redirectTo( $location = NULL ) {

  if ($location != NULL) {
    header("Location: ".$location);
    exit;
  }
}

/*	Error Handler functions */

function setMessage($message = ''){
	if (isset($_SESSION['message'])) {
		$_SESSION['message'] .="<p>". $message ."</p>";
	}else{
		$_SESSION['message'] ="<p>". $message ."</p>";
	}
	
}

function isMessageAvailable(){
	$message ='';
	if (isset($_SESSION['message'])) {
		return TRUE;
	}else{
		return FALSE;
	}
}

function showMessage(){
	$message ='';
	if (isset($_SESSION['message'])) {
		$message = $_SESSION['message'];
		unset($_SESSION['message']);
	}
	return $message;
}

function unsetMessage(){
	if (isset($_SESSION['message'])) {
		unset($_SESSION['message']);
	}
}

/*	session and login related function	*/
function isLoggedIn(){
	if(isset($_SESSION['isLoggedIn'])){
		return TRUE;
	}else{
		return FALSE;
	}
}



function randomWordGenerator($size = 6){
	$char = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '!', '@', '#', '$', '%', '&', '*', '(', ')', '-', '_', '=', '+', '[', ']', '{', '}', '.', '|');
	$word = "";
	$maxLimit = count($char) - 1;
	for ($i=0; $i < $size; $i++) {
		$randomNumber = rand(0, $maxLimit); 
		$word .= $char[$randomNumber];
	}
	return $word;
}

function encryptIt( $value ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $valueEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $value, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $valueEncoded );
}

function decryptIt( $value ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $valueDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $value ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $valueDecoded );
}

/*		validation function		*/


function validateEmail($email=''){
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}


?>