<?php
      $result = mysqli_query($conn,"SELECT * FROM site_settings where ID = 2");
      while($row = mysqli_fetch_assoc($result))
      {
      echo $row['option'];
      }
?>