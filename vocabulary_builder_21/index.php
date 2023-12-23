<?php
   session_start();
   $user_id = $_SESSION['id'] ?? 0;
   if($user_id){
      header("Location: allWord.php");
   }
   include "function.php";
   include "header.php";
?>


<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
           <h1 class="text-danger text-center" style="margin: 80px 0;">My Vocabularies</h1>

           <div class="form">
              <div class="form_box">
                 <form method="POST" action="tasks.php">
                    <h5 class="text-secondary text-center mb-3">Login</h5>

                    <div class="mb-3">
                        <label for="email" class="form-label text-secondary">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label text-secondary">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>

                     <!-- NOTE: Error msg could be shown -->
                     <?php
                      if( isset($_GET['status']) ){
                         $status = $_GET['status'] ?? 0;
                         echo getStatusMessage($status) . "<br>";
                      }
                    ?>

                    <input type="submit" class="btn btn-success mt-3" value="Login">
                    <input type="hidden" name="action" value="login">
                 </form>

                  <div class="text-end mt-3">
                    <a href="register.php" class="text-success">Create New Account</a> 
                  </div>
              </div>
           </div>
        </div>
    </div>
  </div>

<?php
   include "footer.php";
?>