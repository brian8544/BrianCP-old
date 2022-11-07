<?php
   require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
   
   // Grab input data from database
   $edit_query = "SELECT * FROM `site_settings` WHERE `id`=2";
   $post_run_query = mysqli_query($conn, $edit_query);
   
   while ($row = mysqli_fetch_assoc($post_run_query)) {
   	$db_row = $row['option'];
   }
   
   // Update input data to database 
   if (isset($_POST['update_slogan'])) {
   	$db_row = $_POST['site_slogan'];
   	$update_query = "UPDATE `site_settings` SET `option`='{$db_row}' WHERE `id`=2;";
   
   	$run_update_query = mysqli_query($conn, $update_query);
   	   	    echo '<script language="javascript" type="text/javascript"> 
      			 alert("Updated.");
      			 window.location = "/admin/settings.php";
                   </script>';
   }
   
   
   ?>
<form role="form" action="" method="POST" enctype="multipart/form-data">
   <div class="form-group">
      <label for="site_title">Site Slogan:</label>
      <input type="text" name="site_slogan" value="<?php echo $db_row; ?>"></input>
      <button type="submit" name="update_slogan" class="btn btn-primary" value="Update Post">Update</button>
   </div>
</form>