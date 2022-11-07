<?php
   require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
   ?>
<main class="content">
   <div class="container-fluid p-0">
   <h1 class="h3 mb-3">Profile Create</h1>
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <h5 class="card-title mb-0">Creates an account.</h5>
            </div>
            <div class="card-body">
               
               <form class="toggle-class" action="/admin/includes/admin_create_account.php" method="post">
                  <fieldset>
                     <div>
                        <div>
                           <input name="username" class="form-control p-2 mt-1" maxlength="255" placeholder="Username" type="text">
                        </div>
                     </div>
                     </br>
                     <div>
                        <div>
                           <input name="email" class="form-control p-2 mt-1" maxlength="100" placeholder="E-Mail" type="email">
                        </div>
                        </br>
                        <div>
                           <div>
                              <input name="password" class="form-control p-2 mt-1" maxlength="255" placeholder="Password" type="password">
                           </div>
                        </div>
                        </br>
                        <div class="uk-margin-bottom">
                           <button type="submit" class="btn btn-primary">Create Account</button>
                        </div>
                  </fieldset>
               </form>
               
               </div>
            </div>
         </div>
      </div>
   </div>
</main>