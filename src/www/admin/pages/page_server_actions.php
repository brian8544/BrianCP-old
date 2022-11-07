<?php
   require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
   ?>
<main class="content">
   <div class="container-fluid p-0">
      <h1 class="h3 mb-3">Server Actions</h1>
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title mb-0">Server Actions</h5>
               </div>
               <div class="card-body">
                  <p>
                     <a class="btn btn-warning" href="/admin/modules/server-functions/windows/system_reboot.php">Reboot Server</a>
                     <a class="btn btn-danger" href="/admin/modules/server-functions/windows/system_shutdown.php">Shutdown Server</a>
                  </p>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title mb-0"Server Information / Performance</h5>
               </div>
            <div class="card-body">
                  <?php require $_SERVER['DOCUMENT_ROOT']."/admin/modules/server-functions/module_loader.php"; ?> 
            </div>
            </div>
         </div>
      </div>
   </div>
</main>