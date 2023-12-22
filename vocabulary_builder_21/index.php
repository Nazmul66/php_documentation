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
                    <h5 class="text-secondary text-center mb-3">Login</h5>

                    <div class="mb-3">
                        <label for="Email" class="form-label text-secondary">Email</label>
                        <input type="Email" name="Email" class="form-control" id="Email" placeholder="Email Address">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label text-secondary">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>

                    <input type="submit" class="btn btn-success" value="Login">
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

<script>
  const locations = window.location.href;
  const split = locations.split("/")[5];
  console.log(split)
</script>
<?php
   include "footer.php";
?>