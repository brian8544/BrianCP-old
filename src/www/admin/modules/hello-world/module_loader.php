<?php
/* 
Default module loader script, change columnID and optionID to the correct module from database.
*/

require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
		
$stmt = $conn->prepare('SELECT id, title, option FROM site_modules WHERE `id`=2147483647 AND `option`=1;');
$stmt->execute();
$stmt->store_result();

if($stmt->num_rows) {
	require 'hello_world.php';
} else {
	echo 'Module is disabled. You can enable them in your settings menu.';
	echo '</br>';
	echo 'This will later be made nicer. Things work now.';
}		
?>

