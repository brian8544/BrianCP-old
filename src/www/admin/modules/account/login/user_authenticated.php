<?php
include_once $_SERVER['DOCUMENT_ROOT']."/config/config.php";
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: www.google.com');
	exit;
}
// Start authenticated area...
header('Location: /admin/index.php');