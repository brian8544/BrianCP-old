<?php						       
// Database Configuration
define('DB_SERVER', 'localhost');	// IP / domain of MySQL server
define('DB_USERNAME', 'briancp');		// User with appropriate permissions
define('DB_PASSWORD', 'briancp'); 		// ^ password.
define('DB_NAME', 'briancp'); 		// Selected DB
define('DB_PORT', '3306');			// Port of MYSQL server
error_reporting(1);					// 1=On | 0=Off, be careful using this in live environments

// Create connection, so it doesn't have to be repeated in every php include/require
$conn = @mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
if (!$conn){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($conn, 'briancp');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}