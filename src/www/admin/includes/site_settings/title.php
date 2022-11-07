<?php
   require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
   
   // Grab input data from database
   $edit_query = "SELECT * FROM `site_settings` WHERE `id`=1";
   $post_run_query = mysqli_query($conn, $edit_query);
   
   while ($row = mysqli_fetch_assoc($post_run_query)) {
   	$db_row = $row['option'];
   }
   
   // Update input data to database 
   if (isset($_POST['update_title'])) {
   	$db_row = $_POST['site_title'];
   	$update_query = "UPDATE `site_settings` SET `option`='{$db_row}' WHERE `id`=1;";
   
   	$run_update_query = mysqli_query($conn, $update_query);
   	   	    echo '<script language="javascript" type="text/javascript"> 
      			 alert("Updated.");
      			 window.location = "/admin/settings.php";
                   </script>';
   }
   
   
   ?>
<form role="form" action="" method="POST" enctype="multipart/form-data">
   <div class="form-group">
      <label for="site_title">Site Title:</label>
      <input type="text" name="site_title" value="<?php echo $db_row; ?>"></input>
      <button type="submit" name="update_title" class="btn btn-primary" value="Update Post">Update</button>
   </div>
</form>