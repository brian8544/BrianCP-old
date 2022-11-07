<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/config/config.php";

// Run isset()* to see if data send, actually exists. No invalid is allowed.
if (!isset($_POST["username"], $_POST["password"], $_POST["email"])) {
    // Error:
    echo '
<script language="javascript" type="text/javascript"> 
			 alert("Could not verify account.");
			 window.location = "/admin/register.php";
              </script>';
    exit();
}

// No empty boxes are allowed, create error if true
if (
    empty($_POST["username"]) ||
    empty($_POST["password"]) ||
    empty($_POST["email"])
) {
    // One or more values are empty.
    echo '
<script language="javascript" type="text/javascript"> 
			 alert("Please complete the registration form.");
			 window.location = "/admin/register.php";
             </script>';
    exit();
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    echo '
<script language="javascript" type="text/javascript"> 
	alert("E-Mail is not valid.");
	window.location = "/admin/register.php";
    </script>';
    exit();
}

if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["username"]) == 0) {
    echo '
<script language="javascript" type="text/javascript"> 
	alert("Username is not valid.");
	window.location = "/admin/register.php";
    </script>';
    exit();
}

if (strlen($_POST["password"]) > 20 || strlen($_POST["password"]) < 5) {
    echo '
<script language="javascript" type="text/javascript"> 
	alert("Password must be between 5 and 20 characters long.");
	window.location = "/admin/register.php";
    </script>';
    exit();
}

// Account duplication check:
if (
    $stmt = $conn->prepare(
        "SELECT id, password FROM accounts WHERE username = ?"
    )
) {
    // Bind parameters (s = string, i = int, b = blob, etc), hash password with php native encryption.
    $stmt->bind_param("s", $_POST["username"]);
    $stmt->execute();
    $stmt->store_result();
    // Store the result and check against DB.
    if ($stmt->num_rows > 0) {
        // Account exists, create error:
        echo '
<script language="javascript" type="text/javascript"> 
			 alert("Username already exists.");
			 window.location = "/admin/register.php";
             </script>';
        exit();
    } else {
        // Checks are fine. Create account:
        if (
            $stmt = $conn->prepare(
                "INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)"
            )
        ) {
            // Hash password when logging in, since DB is encrypted.
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $stmt->bind_param(
                "sss",
                $_POST["username"],
                $password,
                $_POST["email"]
            );
            $stmt->execute();
            echo '
<script language="javascript" type="text/javascript"> 
			alert("Account has been created. You can now login!");
			window.location = "/admin/login.php";
            </script>';
            exit();
        } else {
            // Issue with SQL statement, create error:
            echo '
<script language="javascript" type="text/javascript"> 
			alert("SQL statement error. Try again, or contact support.");
			window.location = "/admin/register.php";
            </script>';
            exit();
        }
    }
    $stmt->close();
} else {
    // Issue with SQL statement, database table 'accounts' doesn't exist. create error:
    echo '
<script language="javascript" type="text/javascript"> 
	alert("Fatal error. Contact support.");
	window.location = "/admin/register.php";
    </script>';
    exit();
}
$conn->close();
?>