<?php
   require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
      // We need to use sessions, so you should always start sessions using the below code.
      session_start();
      // If the user is not logged in redirect to the login page...
      if (!isset($_SESSION['loggedin'])) {
      	header('Location: /admin/login.php');
      	exit;
      }
   
/* 
Retreiving data from the database, which can be used as example:
<h3><?=$role?></h3>
*/
// Retrieve information from the database
$stmt = $conn->prepare('SELECT username, password, email, avatar, role, country FROM accounts WHERE id = ?');
// Binding it to a variable
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result(
$account_username,
$account_password, 
$account_email,
$account_avatar,
$account_role,
$account_country,
);
$stmt->fetch();
$stmt->close();
?>