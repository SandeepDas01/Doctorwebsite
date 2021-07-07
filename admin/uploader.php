<?php session_start();

if(isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST")
{
	$manufacturers_id=$_SESSION['artistId'];
	

	$file_name		= strip_tags($_FILES['upload_file']['name']);
	$file_id 		= strip_tags($_POST['upload_file_ids']);
	$file_size 		= $_FILES['upload_file']['size'];
	 
	$files_path		= "adminSrc/djCornerTracks/";
	
	$file_name = str_replace(' ', '_', $file_name);
	$file_name = str_replace('&', '', $file_name);
	$file_name = str_replace(',', '', $file_name);	
	
	$file_name = str_replace('\\', '', $file_name);
	$file_name = str_replace('#', '', $file_name);
	
	$file_location 	= $files_path . $file_name;
	
	if(move_uploaded_file(strip_tags($_FILES['upload_file']['tmp_name']), $file_location)){
		echo $file_id;
	}else{
		echo 'system_error';
	}
	
	
}
?>