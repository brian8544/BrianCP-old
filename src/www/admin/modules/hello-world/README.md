# Module system

BrianCP uses modules, with a simple ```module-loader.php```, the code for that is below.
Every module needs a ModuleID and OptionID, which will be checked in ```module-loader.php``` (enabled (1) or disabled (0).
Afterwards deciding to run it depending on the conditions.


## Code Snippet
```
<?php
/* 
Default module loader script, change columnID and optionID to the correct module from database.
*/

require_once $_SERVER['DOCUMENT_ROOT'].'/admin/modules/session_start.php';

$stmt = $conn->prepare('SELECT id, title, option FROM site_modules WHERE `id`=1 AND `option`=1;');
$stmt->execute();
$stmt->store_result();

if($stmt->num_rows) {
	// Statement => enabled. So code that is below will be executed on module load.
	echo 'Module is enabled.';
	require "subfolder/YourScript.php";
} else {
	// Statement => disabled. Stop code loading.
	echo 'Module is disabled.';
}		
?>
```