<?php 
   include "./header.php"; 

   // get all complete task data only
   $CompleteTask = "SELECT * FROM task WHERE complete=0 ORDER BY id DESC";
   $getCompleteTask = mysqli_query($connection, $CompleteTask);

    // get all incomplete task data only 
    $inCompleteTask = "SELECT * FROM task WHERE complete=1 ORDER BY id DESC";
    $getInCompleteTask = mysqli_query($connection, $inCompleteTask);
?>


<section>
   <div class="container">
     <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <h1 class="text-secondary mb-3">Task Manager</h1>
          <p class="text-secondary mb-3">This is a simple project for managing our daily tasks.We are going to use HTML, CSS, PHP, Javascript and MySQL for this project. </p>

          <!-- show All incomplete task data -->
        <?php 
            if (mysqli_num_rows($getInCompleteTask) > 0){
            ?>
            <div class="all_task" style="margin-bottom: 30px;">
                <h5 class="text-secondary mb-3">Incomplete Task</h5>
    
                <table class="table mb-3">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col" class="text-secondary text-center">Id</th>
                            <th scope="col" class="text-secondary text-center">Task</th>
                            <th scope="col" class="text-secondary text-center">Date</th>
                            <th scope="col" class="text-secondary text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                $s = 0;
                while($row = mysqli_fetch_assoc($getInCompleteTask)){
                    $id     = $row['id'];
                    $task   = $row['task'];
                    $timeStamp = strtotime($row['date']); // date convert to timestamp
                    $date   = date("jS M, Y", $timeStamp);
                    $s++;
                ?>
                    <tr>
                    <td>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="<?php echo $id; ?>" >
                        </div>
                    </td>
                    <th scope="row" class="text-secondary text-center" ><?php echo $s; ?></th>
                    <td class="text-secondary text-center"><?php echo $task; ?></td>
                    <td class="text-secondary text-center"><?php echo $date; ?></td>
                    <td class="text-secondary text-center">
                        <span style="cursor: pointer;" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $id; ?>">Delete</span> |
                        <a href="inCompleteTask.php?incomplete=<?php echo $id; ?>" class="text-success">Mark Incomplete</a>
                    </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Do you want to delete this Student data</h1>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body d-flex justify-content-center mb-3 mt-3">
                                  <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button> 
                                  <a href="deleteTask.php?delete=<?php echo $id; ?>"" class="btn btn-danger ms-3">Confirm</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Modal -->

                  <?php
                  }
                 ?>
              </tbody>
            </table>
           </div>

        <?php
         }
       ?>
          <!-- show All incomplete task data -->


          <!-- All task data should be shown -->
          <div class="all_task" style="margin-bottom: 80px;">
            <h5 class="text-secondary mb-3">All Task</h5>
            
            <form method="POST" action="tasks.php">

              <table class="table mb-3">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col" class="text-secondary text-center">Id</th>
                    <th scope="col" class="text-secondary text-center">Task</th>
                    <th scope="col" class="text-secondary text-center">Date</th>
                    <th scope="col" class="text-secondary text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                 <?php 
                    if( mysqli_num_rows($getCompleteTask) == 0 ){
                       echo '<div class="alert alert-danger" role="alert">
                       There is no task data Found</div>';
                    }
                    else{
                        $s = 0;
                        while($row = mysqli_fetch_assoc($getCompleteTask)){
                            $id     = $row['id'];
                            $task   = $row['task'];
                            $timeStamp = strtotime($row['date']); // date convert to timestamp
                            $date   = date("jS M, Y", $timeStamp);
                            $s++;
                       ?>
                          <tr>
                            <td>
                              <div class="form-check form-check-inline">
                               <input class="form-check-input" type="checkbox" name="taskIds[]" value="<?php echo $id; ?>" >
                             </div>
                            </td>
                            <th scope="row" class="text-secondary text-center" ><?php echo $s; ?></th>
                            <td class="text-secondary text-center"><?php echo $task; ?></td>
                            <td class="text-secondary text-center"><?php echo $date; ?></td>
                            <td class="text-secondary text-center">
                                <span style="cursor: pointer;" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $id; ?>">Delete</span> |
                                <a href="completeTask.php?complete=<?php echo $id; ?>" class="text-success">Complete</a>
                            </td>
                          </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Do you want to delete this Student data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-center mb-3 mt-3">
                                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button> 
                                        <a href="deleteTask.php?delete=<?php echo $id; ?>" class="btn btn-danger ms-3">Confirm</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- Modal -->
                     <?php
                        }
                     }
                    ?>
                </tbody>
              </table>

              <div class="col-lg-6">
                <div class="d-flex">
                    <select class="form-select text-secondary selectBox" name="selectBox">
                        <option class="text-secondary" disabled selected>With selected</option>
                        <option class="text-secondary" value="bulkDelete">Delete</option>
                        <option class="text-secondary" value="bulkComplete">Mark As Read</option>
                    </select>

                    <input type="submit" class="btn btn-success ms-3" value="Submit">
                    <!-- very very important input -->
                    <input type="hidden" id="changeValue" name="action" value=""> 

                </div> 
              </div>
            </form>
          </div>
           <!-- All task data should be shown -->


           <!-- Add New task data should be added -->
          <div style="margin-bottom: 80px;">
              <h5 class="text-secondary mb-3">Add Task</h5>

              <form method="post" action="tasks.php">
                <fieldset>
                    <?php
                       if(isset($_GET['added'])){
                          echo '<div class="alert alert-light" role="alert">
                          New task added </div>'; 
                       }
                    ?>
                    <div class="mb-3">
                        <label for="task" class="form-label text-secondary">Task</label>
                        <input type="text" name="task" class="form-control" id="task" placeholder="Task Details">
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label text-secondary">Date</label>
                        <input type="date" name="date" class="form-control" id="date" placeholder="Task Date">
                    </div>

                    <input type="submit" class="btn btn-success" value="Add Task">
                    <input type="hidden" name="action" value="add">
                </fieldset>
              </form>
          </div>
          <!-- Add New task data should be added -->

        </div>
     </div>
   </div>
</section>


<?php include "./footer.php"; ?>
