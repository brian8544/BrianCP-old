# Module system

BrianCP uses modules, with a simple ```module-loader.php```, the code for that is below.
Every module needs a ModuleID and OptionID, which will be checked in ```module-loader.php``` (enabled (1) or disabled (0).
Afterwards deciding to run it depending on the conditions.

Adding a blank ```index.html``` to prevent browsing is advised too. 
Directory browsing is already disabled on Apache2 webservers by using ```.htaccess``` in the root folder.


## Code Snippet
```
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
```
