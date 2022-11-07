<?php
$result = mysqli_query($conn,"SELECT * FROM site_settings where ID = 3");
while($row = mysqli_fetch_assoc($result))
{
echo "
<img src='" . $row['option']." . 'class='custom-logo''/>";
}
?>