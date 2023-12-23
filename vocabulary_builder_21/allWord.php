<?php
   session_start();
   $user_id = $_SESSION['id'] ?? 0;
   if(!$user_id){
      header("Location: index.php");
   }
   include "function.php";
   include "header.php";
?>

    <!-- sidebar section -->
    <?php include "sidebar.php"; ?>


    <!-- main div container start -->
    <div class="col-lg-10 offset-lg-2" style="padding: 0 40px;">
       <h1 class="text-danger text-center" style="margin: 80px 0 40px;">My Vocabularies</h1>

       <div class="col-lg-12">
           <div class="form">
              <div class="store_box">
                <div class="row">
                   <div class="col-lg-4">
                     <form method="GET" action="allWord.php">
                        <div class="d-flex">
                           <select class="form-select text-secondary" name="selectBox">
                              <option class="text-secondary" disabled selected>All Words</option>
                              <option class="text-secondary" value="a-z" <?php if(isset($_GET['selectBox']) && $_GET['selectBox']  == "a-z"){ echo "selected"; } ?> >A to Z (Ascending Order)</option>
                              <option class="text-secondary" value="z-a" <?php if(isset($_GET['selectBox']) && $_GET['selectBox'] == "z-a"){ echo "selected"; } ?> >Z to A (Descending Order)</option>
                           </select>
                           <input type="submit" class="btn btn-primary ms-3" name="action" value="sorts">
                        </div>
                     </form>
                   </div>

                   <div class="col-lg-4 offset-lg-4">
                     <form method="POST" action="">
                        <div class="d-flex">
                           <input type="search" name="search" placeholder="Search Here">
                           <input type="submit" name="submit" class="btn btn-primary ms-3" value="submit"> 
                        </div>
                     </form>
                   </div>
                </div>

                <hr style="margin: 30px 0 30px;">

                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col" style="width: 20%;">Word</th>
                          <th scope="col" style="width: 80%;">Definition</th>
                        </tr> 
                    </thead>
                    <tbody>
                    <?php 
                     // sorting Ascending and descending
                     $sort = "";
                     if(isset($_GET['selectBox'])){
                           if($_GET['selectBox'] == "a-z") {
                              $sort = "ASC";
                           }
                           else if($_GET['selectBox'] == "z-a") {
                              $sort = "DESC";
                           }
                     }

                      //  for search to find data
                      if(isset($_POST['submit'])){
                          $search = $_POST['search'];
                          $getData = getWords($user_id, $sort, $search); 
                      }
                      else{
                          $getData = getWords($user_id, $sort); 
                      }




                        if(count($getData) > 0){

                           $length = count($getData);
                           for( $i=0; $i < $length; $i++ ){
                           ?>
                            <tr>
                              <td style="width: 20%;"><?php echo $getData[$i]['word'] ?></td>
                              <td style="width: 80%;"><?php echo $getData[$i]['meaning'] ?></td>
                            </tr>
                           <?php 
                             }
                           }
                        ?>
                    </tbody>
                </table>
              </div>
           </div>
       </div>
    </div>
    <!-- main div container end -->



<?php
   include "footer.php";
?>