<?php
   include "header.php";
?>


<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
           <h1 class="text-danger text-center" style="margin: 80px 0;">My Vocabularies</h1>

           <div class="form">
              <div class="form_box">
                 <form method="POST" action="tasks.php">
                    <h5 class="text-secondary text-center mb-3">Register</h5>

                    <div class="mb-3">
                        <label for="Email" class="form-label text-secondary">Email</label>
                        <input type="Email" name="email" class="form-control" id="Email" placeholder="Email Address" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label text-secondary">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    </div>

                    <input type="submit" class="btn btn-success" value="Register">
                    <input type="hidden" name="action" value="register">
                 </form>

                 <div class="text-end mt-3">
                    <a href="index.php" class="text-success">Already Have An Account</a>
                  </div>
              </div>
           </div>
        </div>
    </div>
  </div>


<?php
   include "footer.php";
?>