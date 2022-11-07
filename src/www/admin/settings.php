<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <title><?php require 'includes/site_title.php' ?> - Server Actions</title>
      <link href="/admin/assets/css/app.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
      <script src="/admin/assets/js/app.js"></script>
   </head>
   <body>
      <div class="wrapper">
         <?php require_once 'side_bar.php' ?>
         <div class="main">
            <?php require_once 'top_bar.php' ?>
            <main class="content">
               <?php require_once 'pages/page_settings.php' ?>
            </main>
            <?php require_once 'footer.php' ?>
         </div>
      </div>
   </body>
</html>