<?php
   require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
   ?>
   
<?php
   shell_exec('shutdown.exe /r /t 0');
      	    echo '<script language="javascript" type="text/javascript"> 
   			 alert("Server has been rebooted.");
   			 window.location = "/admin/server_actions.php";
                </script>';
   ?>