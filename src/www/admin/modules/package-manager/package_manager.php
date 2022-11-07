<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
?>
<p>
Panel Version: <?php require_once 'includes/get_version_panel.php';?>
</br>
Database Version: <?php require_once 'includes/get_version_db.php';?>
</p>


<form method="post" onSubmit="return confirm('Are you sure?');">
   <button class="btn btn-primary" name="init-update">Update Packages</button>
</form>

<?php
if(isset($_POST['init-update'])){
   require_once 'package_update.php';
   //mkdir(dirname(__FILE__) . "backup");
}
?>