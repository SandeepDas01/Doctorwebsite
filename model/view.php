<?php	if ( ! defined('ABSPATH')) exit('No direct script access allowed');

function view($viewName='',$subView='')
{
			$viewName .= '.php';
			$subView .= '.php';
			if (file_exists(basePath('view/'.$viewName))) {
			
				require (basePath('view/'.$viewName));	
				require (basePath('view/'.$subView));	
			}else{
				$error = "the view ".$viewName." was not found";
				echo "<center style='background:#F8949D; width:auto;padding:40px;'>".$error."</center>";	
			}
}

function view1($subView='')
{
		 
			$subView .= '.php';
			if (file_exists(basePath('view/'.$subView)))
			{
			 	require (basePath('view/'.$subView));	
			}
			else
			{
				$error = "the view ".$subView." was not found";
				echo "<center style='background:#F8949D; width:auto;padding:40px;'>".$error."</center>";	
			}
}


function model($modelName = ''){
			$modelName .= '.php';
			if (file_exists(basePath('model/'.$modelName))) {
				require (basePath('model/'.$modelName));	
			}else{
				$error = "the view ".$modelName." was not found";
				echo "<center style='background:#F8949D; width:auto;padding:40px;'>".$error."</center>";	
			}
}

?>