<?php
   require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
   
// USES REGISTER SCRIPT FROM BASE. DONT FORGET TO REFLECT CHANGES BACK AND FORTH.

// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['email']))
{
    // Could not get the data that should have been sent.
    echo '<script language="javascript" type="text/javascript"> 
			 alert("Could not verify account.");
			 window.location = "/admin/profile_create.php";
              </script>';
    //exit('Please complete the registration form!');
    
}
// Check if submitted textboxes are not empty. We don't want to accept corrupt information.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']))
{
    // One or more values are empty.
    echo '<script language="javascript" type="text/javascript"> 
			 alert("Please complete the registration form.");
			 window.location = "/admin/profile_create.php";
             </script>';
    //exit('Please complete the registration form!');
    
}

// We need to check if the account with that username exists.
if ($stmt = $conn->prepare('SELECT id, password FROM accounts WHERE username = ?'))
{
    // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
    // Store the result so we can check if the account exists in the database.
    if ($stmt->num_rows > 0)
    {
        // If username exists, messagebox and return to previous page. Otherwise it will just link to a blank .php box.
        echo '<script language="javascript" type="text/javascript"> 
			 alert("Username already exists.");
			 window.location = "/admin/profile_create.php";
             </script>';
    }
    else
    {
        // Username doesnt exists, create new account
        if ($stmt = $conn->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)'))
        {
            // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stmt->execute();
            echo '<script language="javascript" type="text/javascript"> 
			 alert("Account has been created.");
			 window.location = "/admin/profile_create.php";
             </script>';
        }
        else
        {
            // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
            echo '<script language="javascript" type="text/javascript"> 
			 alert("SQL statement error. Try again, or contact support.");
			 window.location = "/admin/profile_create.php";
             </script>';
        }
    }
    $stmt->close();
}
else
{
    // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
    echo '<script language="javascript" type="text/javascript"> 
			 alert("Fatal error. Contact support.");
			 window.location = "/admin/profile_create.php";
             </script>';
}
$conn->close();
?>
