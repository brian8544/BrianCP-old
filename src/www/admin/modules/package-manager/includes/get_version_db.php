<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';


$result = mysqli_query($conn,"SELECT * FROM version where ID = 2");
	while($row = mysqli_fetch_assoc($result))
	{
      echo $row['version'];
    }
?>

