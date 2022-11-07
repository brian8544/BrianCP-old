<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
/*
echo '<script language="javascript" type="text/javascript"> 
	window.location = "/updater.php";
	</script>';
*/
    echo '
<script language="javascript" type="text/javascript"> 
			 alert("Updater is currently removed, you will be redirected to the GitHub issue.");
			 window.location = "https://github.com/brian8544/BrianCP/issues/5";
              </script>';
?>
