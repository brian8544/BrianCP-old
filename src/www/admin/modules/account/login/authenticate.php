<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";
session_start();

// isset() will check if the data exists.
if (!isset($_POST['username'], $_POST['password']))
{
    // Invalid data, create error:
    echo '

<script language="javascript" type="text/javascript"> 
			 alert("Please fill both the username and password fields!");
			 window.location = "/admin/login.php";
             </script>';
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $conn->prepare('SELECT id, password FROM accounts WHERE username = ?'))
{
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s".
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Store the result and check account DB, if exist.
    $stmt->store_result();
    if ($stmt->num_rows > 0)
    {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Account exists, check password:
        if (password_verify($_POST['password'], $password))
        {
            // Authenticated succesfully,
            // Create user-session:
            session_regenerate_id();
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;

            // User authenticated succesfully, run code below:
            //echo 'Welcome ' . $_SESSION['name'] . '!';
            header("Location: user_authenticated.php");

        }
        else
        {
            // Incorrect password, create error:
            echo '

<script language="javascript" type="text/javascript"> 
			 alert("Incorrect username and/or password!");
			 window.location = "/admin/login.php";
             </script>';
        }
    }
    else
    {
        // Incorrect username, create error:
        echo '

<script language="javascript" type="text/javascript"> 
			 alert("Incorrect username and/or password!");
			 window.location = "/admin/login.php";
             </script>';
    }
    $stmt->close();
}
?>