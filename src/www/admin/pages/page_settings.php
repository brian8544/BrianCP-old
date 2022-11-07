<?php
   require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
   ?>
<main class="content">
   <div class="container-fluid p-0">
      <h1 class="h3 mb-3">Settings</h1>
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title mb-0">Site Configuration</h5>
               </div>
               <div class="card-body">
                  <?php require $_SERVER['DOCUMENT_ROOT']."/admin/includes/site_settings/title.php"; ?>
                  </br>
                  <?php require $_SERVER['DOCUMENT_ROOT']."/admin/includes/site_settings/slogan.php"; ?>
				  </br>
                  <?php require $_SERVER['DOCUMENT_ROOT']."/admin/includes/site_settings/logo.php"; ?>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title mb-0">Package Manager</h5>
               </div>
               <div class="card-body">
                  <?php require $_SERVER['DOCUMENT_ROOT']."/admin/modules/package-manager/module_loader.php"; ?>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title mb-0">Enable / Disable Modules</h5>
               </div>
               <div class="card-body">
                  <?php
                     if (isset($_POST['checkBoxArray'])) {
                     	$checkBoxArray = $_POST['checkBoxArray'];
                     	foreach ($_POST['checkBoxArray'] as $checkboxvalue) {
                     
                     		$bulk_options = $_POST['bulk_options'];
                     			switch ($bulk_options) {
                     
                     			case '1':
                     				$p_query = "UPDATE site_modules SET `option`='{$bulk_options}' WHERE `id`={$checkboxvalue}";
                     				$run_p_query = mysqli_query($conn, $p_query);
                     				break;
                     			case '0':
                     				$d_query = "UPDATE site_modules SET `option`='{$bulk_options}' WHERE `id`={$checkboxvalue}";
                     				$run_d_query = mysqli_query($conn, $d_query);
                     				break;
                     
                     			default:
                     				echo "Error";
                     				break;
                     			}
                     		//}
                     	}
                     
                     }
                     ?>
                  <table class="table table-hover my-0" style="overflow-x:auto;">
                     <form action="" method="post">
                        <select class="form-control" name="bulk_options">
                           <option value="">Select Option</option>
                           <option value="1">Enable</option>
                           <option value="0">Disable</option>
                        </select>
               </div>
            </div>
            </br>
            <div>
            <div>
            <input type="submit" name="submit" class="btn btn-success" value="Apply">
            &nbsp;
            </div>
            </div>
            </br>
            <thead>
            <tr>
            <th><input type="checkbox" name="checkBoxArray" class='checkBoxes'></th>
            <th>ID</th>
            <th>Name</th>
            <th>Option</th>
            </thead>
            <tbody>
            <?php
               $query = "SELECT * FROM site_modules";
               $run_query = mysqli_query($conn, $query);
               
               while ($row = mysqli_fetch_array($run_query)) {
                  	$module_id = $row['id'];
                  	$module_name = $row['title'];
                  	$module_option = $row['option'];
               	echo "<tr>";
               	?>
            <td>
            <input type='checkbox' name='checkBoxArray[]' class='checkbox' value='<?php echo $module_id; ?>'>
            </td>
            <?php
               echo "<td>{$module_id}</td>";
                         	echo "<td>{$module_name}</td>";
               echo "<td>{$module_option}</td>";
                         }
                         
               ?>
            </tbody>
            </table>
            </form>
         </div>
      </div>
   </div>
   </div>
   </div>
</main>