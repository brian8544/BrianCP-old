<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
?>
<div id="wrapper"></div>
<script>
   // AJAX start...
   fetch("/admin/modules/server-functions/server_performance.php")
   
   // Return [object Response] with PHP
   .then(res => res.text())
   
   // Wrap text and send
   .then(txt => document.getElementById("wrapper").innerHTML = txt)
   
</script>