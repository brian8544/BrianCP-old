<?php
   require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
   ?>
   
   <?php
   if (isset($_POST['checkBoxArray'])) {
   	$checkBoxArray = $_POST['checkBoxArray'];
   	foreach ($_POST['checkBoxArray'] as $checkboxvalue) {
   
   		$bulk_options = $_POST['bulk_options'];
   		/*
   		PERMISSIONS ARE NOT IMPLEMENTED IN DB, USE SESSIONS IN HEADER!!!
   		if ($_SESSION['role'] !== 'Admin') {
   			header('Location: ./user_error.php');
   		
   		} else {
   		*/
   			switch ($bulk_options) {
   
   			case 'delete':
   				$del_query = "DELETE FROM accounts WHERE id={$checkboxvalue}";
   				$run_del_query = mysqli_query($conn, $del_query);
   				break;
   
   			default:
   				echo "Error";
   				break;
   			}
   		//}
   	}
   
   }
   ?>
   
<main class="content">
   <div class="container-fluid p-0">
      <h1 class="h3 mb-3">Account List</h1>
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title mb-0">Be careful of executing account actions against your own account. It will log you out.</h5>
               </div>
               <div class="card-body">
                  <table class="table table-hover my-0" style="overflow-x:auto;">
                     <style>
                        .checkbox {
                        background-color: initial;
                        cursor: default;
                        appearance: auto;
                        box-sizing: border-box;
                        padding: initial;
                        border: initial;
                        }
                     </style>
                     <form action="" method="post">
                        <select class="form-control" name="bulk_options">
                           <option value="">Select Account Action(s)</option>
                           <option value="delete">Delete Account(s)</option>
                        </select>
                        </br>
                        <div>
                           <div>
                              <input type="submit" name="submit" class="btn btn-success" value="Apply">
                              &nbsp;
                              <a href="/admin/profile_create.php" class="btn btn-primary">Add New</a>
                           </div>
                        </div>
                        </br>
                        <thead>
                           <tr>
                              <th><input type="checkbox" name="checkBoxArray" class='checkBoxes'></th>
                              <th>ID</th>
                              <th>Username</th>
                              <th>Password</th>
                              <th>Email</th>
                              <th>Avatar</th>
                              <th>Role</th>
                              <th>Country</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $query = "SELECT * FROM accounts";
                              $run_query = mysqli_query($conn, $query);
                              
                              while ($row = mysqli_fetch_array($run_query)) {
                                 	$account_id = $row['id'];
                                 	$account_username = $row['username'];
                                 	$account_password = $row['password'];
                                 	$account_email = $row['email'];
                                 	$account_avatar = $row['avatar'];
                                 	$account_role = $row['role'];
									$account_country = $row['country'];
									echo "<tr>";
                              	?>
                           <td>
                              <input type='checkbox' name='checkBoxArray[]' class='checkbox' value='<?php echo $account_id; ?>'>
                           </td>
                           <?php
                              /* 
                              Not sure which to use yet..
                              
                              echo "<td>{$STRING}</td>";
                              
                              To limit cluttering, echo substring can be used, limiting to 300 characters, this makes the dashboard more clear, in case more characters are being used 
                              
                              echo "<td>"." ". substr($post_content, 0, 300) ." ....</td>";
                              
                              */
                              
                              echo "<td>{$account_id}</td>";
                                   	echo "<td>{$account_username}</td>";
                              echo "<td>{$account_password}</td>";
                              echo "<td>{$account_email}</td>";
                                   	echo "<td><img  width='100' src='{$account_avatar}'></td>";
                                   	echo "<td>{$account_role}</td>";
                              echo "<td>{$account_country}</td>";
                                   	echo "</tr>";
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