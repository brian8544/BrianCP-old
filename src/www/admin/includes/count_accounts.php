<?php
$sql = "SELECT * from accounts";
if ($result = mysqli_query($conn, $sql)) {
    $total_accounts = mysqli_num_rows( $result );
		echo($total_accounts);
 }