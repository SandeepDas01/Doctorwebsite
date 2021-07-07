<?php
	// first file to load in the project
	define("VERSION", "1.0");
	
	define("ABSPATH", dirname(__FILE__));		// absolute path of the website
	define("VIEWPATH", ABSPATH."/view");
	define("CONTROLLERPATH", ABSPATH."/controller");
	define("MODELPATH", ABSPATH."/model");
	
	if(!file_exists(ABSPATH."/config.php")){
		$error	=	"The <code>config.php</code> file do not exist create <code>config.php</code> manually by modifing <code>config-sample.php</code> file";
		echo "<center style='background:#F8949D; width:auto;padding:40px;'>".$error."</center>";
	}else{
		require_once(ABSPATH."/config.php");
	}
	
	require_once(MODELPATH."/common.functions.php");
	require_once(MODELPATH."/db.functions.php");
	 
	require_once(MODELPATH."/view.php");
?>