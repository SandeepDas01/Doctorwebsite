<?php
/*
 * functions related to databases 
 */
function sqlConnect()
{
	$host = DB_HOST;
	$user = DB_USER;
	$password = DB_PASSWORD;
	$database = DB_NAME;
	
	$connect = mysqli_connect($host, $user, $password,$database) or die("Unable to Connect to Database Server".mysql_error());
	
	return $connect;
} 
 function sqlReady($value=''){
	$magicQuotesActive = get_magic_quotes_gpc();
	if(function_exists('addslashes')){
		if($magicQuotesActive){
			$value = stripslashes($value);
		}
		$value = addslashes($value);
	}else{
		if (!$magicQuotesActive) {
			$value = addslashes($value);
		}
	}
	return $value;
}
/*function sqlReady($value=''){
	$magicQuotesActive = get_magic_quotes_gpc();
	if(function_exists('mysql_real_escape_string')){
		if($magicQuotesActive){
			$value = stripslashes($value);
		}
		$value = mysql_real_escape_string($value);
	}else{
		if (!$magicQuotesActive) {
			$value = addslashes($value);
		}
	}
	return $value;
}
*/

function query($sql = "", $connect = 0){
	if($connect == 0){
		
		$connect = sqlConnect();
	}
	$result = mysqli_query($connect, $sql)or die("Error");

	confirmQuery($result);
	
	return $result;
}

function fetchArray($result = ''){
	return $row = mysqli_fetch_array($result);
}

function fetchAssoc($result = ''){
	return $row = mysqli_fetch_assoc($result);
}

function confirmQuery($result){
	if (!$result) {
		die("Error in Query Execution".mysql_error());
	}
	
}

function rowCount($result = ''){
	return mysqli_num_rows($result);	
}

?>