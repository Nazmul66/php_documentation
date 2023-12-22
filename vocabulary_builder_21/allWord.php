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
              <div class="store_box">
                <div class="row">
                   <div class="col-lg-4">
                      <select class="form-select text-secondary" name="selectBox">
                        <option class="text-secondary" disabled selected>With selected</option>
                        <option class="text-secondary" value="a">#a</option>
                        <option class="text-secondary" value="b">#b</option>
                        <option class="text-secondary" value="c">#c</option>
                     </select>
                   </div>

                   <div class="col-lg-4 offset-lg-4">
                     <input type="search" name="search" placeholder="Search Here">
                   </div>
                </div>

                <hr style="margin: 30px 0 30px;">

                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">Word</th>
                          <th scope="col">Definition</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <tr>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
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