<?php
   include "header.php";
?>


    <!-- sidebar section -->
    <?php include "sidebar.php"; ?>


    <!-- main div container start -->
    <div class="col-lg-10 offset-lg-2" style="padding: 0 40px;">
       <h1 class="text-danger text-center" style="margin: 80px 0 40px;">My Vocabularies</h1>

       <div class="col-lg-12">
           <div class="form">
              <div class="form_box">
                 <form method="POST" action="">
                    <h5 class="text-secondary text-center mb-3">Add New Word</h5>

                    <div class="mb-3">
                        <label for="text" class="form-label text-secondary">Word</label>
                        <input type="text" name="text" class="form-control" id="text" placeholder="Word">
                    </div>

                    <div class="mb-3">
                        <label for="Meaning" class="form-label text-secondary">Meaning</label>
                        <textarea class="form-control" name="Meaning" id="Meaning" placeholder="Meaning"></textarea>
                    </div>

                    <input type="submit" class="btn btn-success" value="Add Word">
                 </form>
              </div>
           </div>
       </div>
    </div>
    <!-- main div container end -->


<?php
   include "footer.php";
?>