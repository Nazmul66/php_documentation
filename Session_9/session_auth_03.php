<?php
  session_start([
    'cookie_lifetime' => 30 // 5 minutes
  ]);

  include "../crud_8/inc/header.php";

// [V.V.V.I]  Ensure session variable is initialized
    if (!isset($_SESSION['loggedIn'])) {
        $_SESSION['loggedIn'] = false;
    }
// [V.V.V.I] 
   $error = false;

   // login user
  if( isset($_POST["UserName"] )&& isset($_POST["Password"])){
    if( "admin" == $_POST["UserName"] && "5f4dcc3b5aa765d61d8327deb882cf99" == md5($_POST["Password"])){
        $_SESSION['loggedIn'] = true;
    }
    else{
        $error = true;
        $_SESSION['loggedIn'] = false;
    }
  }

  // logout the user
  if( isset($_POST["logout"] )){
      $_SESSION['loggedIn'] = false;
      session_destroy();
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
                    <form action="session_auth_03.php" method="POST">
                       <input type="hidden" name="logout" value="1">
                       <input type="submit" class="btn btn-danger" value="Log out"> 
                    </form>
                <?php endif; ?>
             </div>
        </div>
    </div>
</section>


<?php
  include "../crud_8/inc/footer.php";
?>