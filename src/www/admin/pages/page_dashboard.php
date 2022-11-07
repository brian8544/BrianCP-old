<?php
   require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
   ?>
<div class="container-fluid p-0">
   <h1 class="h3 mb-3"><strong>BrianCP</strong> Dashboard</h1>
   <div class="row">
      <div class="col-xl-6 col-xxl-5 d-flex">
         <div class="w-100">
            <div class="row">
               <div class="col-sm-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="row">
                           <div class="col mt-0">
                              <h5 class="card-title">Registered Accounts</h5>
                           </div>
                           <div class="col-auto">
                              <div class="stat text-primary">
                                 <i class="align-middle" data-feather="users"></i>
                              </div>
                           </div>
                        </div>
                        <h1 class="mt-1 mb-3"><?php require_once $_SERVER['DOCUMENT_ROOT']."/admin/includes/count_accounts.php"; ?></h1>
                        <div class="mb-0">
                           <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                           <span class="text-muted">Since last week</span>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-body">
                        <div class="row">
                           <div class="col mt-0">
                              <h5 class="card-title">Visitors</h5>
                           </div>
                           <div class="col-auto">
                              <div class="stat text-primary">
                                 <i class="align-middle" data-feather="users"></i>
                              </div>
                           </div>
                        </div>
                        <h1 class="mt-1 mb-3">14.212</h1>
                        <div class="mb-0">
                           <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
                           <span class="text-muted">Since last week</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="row">
                           <div class="col mt-0">
                              <h5 class="card-title">Total Posts</h5>
                           </div>
                           <div class="col-auto">
                              <div class="stat text-primary">
                                 <i class="align-middle" data-feather="file-text"></i>
                              </div>
                           </div>
                        </div>
                        <h1 class="mt-1 mb-3"></h1>
                        <div class="mb-0">
                           <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
                           <span class="text-muted">Since last week</span>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-body">
                        <div class="row">
                           <div class="col mt-0">
                              <h5 class="card-title">Orders</h5>
                           </div>
                           <div class="col-auto">
                              <div class="stat text-primary">
                                 <i class="align-middle" data-feather="shopping-cart"></i>
                              </div>
                           </div>
                        </div>
                        <h1 class="mt-1 mb-3">64</h1>
                        <div class="mb-0">
                           <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
                           <span class="text-muted">Since last week</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-6 col-xxl-7">
         <div class="card flex-fill w-100">
            <div class="card-header">
               <h5 class="card-title mb-0">Server Information / Performance</h5>
            </div>
            <div class="card-body">
               <?php require_once $_SERVER['DOCUMENT_ROOT']."/admin/modules/server-functions/module_loader.php"; ?> 
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="d-flex">
         <div class="card flex-fill">
            <div class="card-header">
               <h5 class="card-title mb-0">Latest Posts</h5>
            </div>
            <div class="card-body">
               
            </div>
         </div>
      </div>
   </div>
</div>