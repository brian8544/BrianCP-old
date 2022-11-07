<?php
   require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
   function get_cpu_percentage()
       {
           $load = null;
   
               if (stristr(PHP_OS, "win"))
               {
                   $cmd = "wmic cpu get loadpercentage /all";
                   @exec($cmd, $output);
   
                       if ($output)
                           {
                           // filter wmic result, otherwise it will echo "LoadPercentage x.x%".
                           foreach ($output as $line)
                               {
                                   if ($line && preg_match("/^[0-9]+\$/", $line))
                                       {
                                           $load = $line;
                                           break;
                                       }
                               }
                           }               
               }
    return $load;
   }
   
   $cpu_usage = get_cpu_percentage();
   {
       echo $cpu_usage . "%";
   }
   
   
   ?>