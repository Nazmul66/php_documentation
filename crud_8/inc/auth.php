<?php
  session_start([
    'cookie_lifetime' => 300 // 5 minutes
  ]);
  var_dump($_SESSION);

  include "../inc/header.php";

// [V.V.V.I]  Ensure session variable is initialized
    if (!isset($_SESSION['loggedIn'])) {
        $_SESSION['loggedIn'] = false;
    }
// [V.V.V.I] 
   $error = false;
   $fp = fopen("../assets/users.txt", "r");
   $username = filter_input(INPUT_POST, "UserName", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $Password = filter_input(INPUT_POST, "Password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

   // login user
  if( isset($username) && isset($Password) ){
      $_SESSION['loggedIn'] = false;
      $_SESSION['user'] = false;
      $_SESSION['role'] = false;

      while( $data = fgetcsv( $fp ) ){

        if( $data[0] == $username && $data[1] == sha1($Password)){
          $_SESSION['loggedIn'] = true;
          $_SESSION['user'] = $username;
          $_SESSION['role'] = $data[2];
          header("location: index.php");
       }
      }
      if(!$_SESSION['loggedIn']){
        $error = true;
      }
  }

  // logout the user
  if( isset($_GET["logout"] )){
      $_SESSION['loggedIn'] = false;
      $_SESSION['user'] = false;
      $_SESSION['role'] = false;
      session_destroy();
      header("location: index.php");
  }

?>


<section class="">
    <div class="container">
        <div class="row">
           <div class="text-center">
             <h1 class="mb-3 mt-3">Simple Auth Example</h1>
           </div>
           <div class="text-center">
           <p><?php
                if(true == $_SESSION['loggedIn']){
                    echo "Hello Admin, Welcome back";
                }
                else{
                    echo "Hello Stranger, Login Below";
                }
             ?></p>

           </div>

             <div class="col-lg-6 offset-lg-3">
                <?php 
                  if( true == $error ): 
                    echo "<blockquote>username & password didn't match.</blockquote>";
                ?>
                <?php endif; ?>

                <?php if (false == $_SESSION['loggedIn']): ?>
                <form method="POST" style="margin-top: 60px">
                    <div class="mb-3">
                      <label class="form-label">UserName</label>
                      <input type="text" name="UserName" class="form-control" autocomplete="off" placeholder="Enter your username">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input type="password" name="Password" class="form-control"  autocomplete="off" placeholder="Enter your Password">
                    </div>

                    <input type="submit" class="btn btn-success" value="Log In">
                </form>
                <?php 
                    else: 
                ?>       
                    <form action="auth.php" method="POST">
                       <input type="hidden" name="logout" value="1">
                       <input type="submit" class="btn btn-danger" value="Log out"> 
                    </form>
                <?php endif; ?>
             </div>
        </div>
    </div>
</section>


<?php
  include "../inc/footer.php";
?>