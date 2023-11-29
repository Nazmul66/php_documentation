<?php require "../inc/function.php"; 

   $task = $_GET['task'] ?? "report";
   $error = $_GET['error'] ?? "0";

   // delete student data
   if( "delete" === $task ){
      $id = filter_input( INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
      deleteStudent($id);
      header("location: index.php?task=report");
   }
   
   $info = "";
   if("seed" == $task ){
      seed();
      $info = "files are saved";
   }

   // add student information
   $fname  = "";
   $lname  = "";
   $roll   = "";
   $phone  = "";

   if( isset($_POST['addStudent'] ) ){
       $fname = filter_input( INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS);
       $lname = filter_input( INPUT_POST, 'lname', FILTER_SANITIZE_SPECIAL_CHARS);
       $roll = filter_input( INPUT_POST, 'roll', FILTER_SANITIZE_SPECIAL_CHARS);
       $phone = filter_input( INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);

       if( $fname != "" && $lname != "" && $roll != "" && $phone != "" ){
           $result = addStudents($fname, $lname, $roll, $phone);
           if($result){
              header("location: index.php?task=report");
           }
           else{
             $error = 1;
           }
            
       }
   }


   // update student information
   if( isset( $_POST['updateStudent'] ) ){
      $id = filter_input( INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
      $fname = filter_input( INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS);
      $lname = filter_input( INPUT_POST, 'lname', FILTER_SANITIZE_SPECIAL_CHARS);
      $roll = filter_input( INPUT_POST, 'roll', FILTER_SANITIZE_SPECIAL_CHARS);
      $phone = filter_input( INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);

      if( $id != "" && $fname != "" && $lname != "" && $roll != "" && $phone != "" ){
         $result = resultStudents($id, $fname, $lname, $roll, $phone);
         if($result){
            header("location: index.php?task=report");
         }
         else{
            $error = 1;
         }

      }
   }
   
?>

<?php include "../inc/header.php"; ?>

   <div class="container">
     <div class="row">
       <div class="col-lg-12">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CRUD Project</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                           <a class="nav-link active text-warning-emphasis" aria-current="page" href="index.php?task=report">All Students</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-warning-emphasis" href="index.php?task=add">Add new students</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-warning-emphasis" href="index.php?task=seed">Seed</a>
                        </li>
                    </ul>
                </div>
            </div>
            </nav>
       </div>

         <div class="col-lg-12">
           <h2 class="text-center mt-3 mb-3 text-danger-emphasis">project-2 crud operation</h2>
           <p class="text-center mb-3 text-success">a sample project to perform CRUD operation using plain files and PHP</p>
         </div>

         <div class="col-lg-12">
            <?php 
              if( $info !== "" ){
                 echo "<p>{$info}</p>";
              }
            ?>
         </div>

         <div class="col-lg-12">
            <?php if ( "1" == $error ): ?>
               <span class="badge text-bg-danger mb-3">Duplicate roll classes</span>
            <?php endif ?>
         </div>

         <!-- report conditions -->
        <?php if ("report" == $task): ?>
         <div class="row">
            <div class="col-lg-12">
              <table class="table table-info table-striped">
                <thead>
                  <tr>
                    <th scope="col">SL.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                   $students = generateReport(); 
                   foreach ($students as $student){
                ?> 
                    <tr>
                      <th scope="row"><?php echo $student['id']; ?></th>
                      <td><?php printf("%s %s", $student['fname'], $student['lname']); ?></td>
                      <td><?php echo $student['roll']; ?></td>
                      <td><?php echo $student['phone']; ?></td>
                      <td>
                        <a class="text-success link-underline-light" style="text-decoration: none;" href="index.php?task=edit&id=<?php echo $student['id']; ?>">Edit</a> |
                         
                        <span data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $student['id']; ?>" class="text-danger link-underline-light c" style="text-decoration: none; cursor: pointer;" >Delete</span></td>
                    </tr>

                    <!-- Modal -->
                     <div class="modal fade" id="deleteModal<?php echo $student['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Do you want to delete this Student data</h1>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body d-flex justify-content-center mb-3 mt-3">
                                  <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button> 
                                  <a href="index.php?task=delete&id=<?php echo $student['id']; ?>" class="btn btn-danger ms-3">Confirm</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                  <?php
                   }
                ?>
                  </tbody>
                </table>
            </div>
         </div>
        <?php endif ?>



        <?php if("add" == $task): ?>
           <div class="row">
            <div class="col-lg-6 offset-lg-3">
               <form action="index.php?task=add" method="POST">
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">First Name</label>
                     <input type="text" name="fname" class="form-control" autocomplete="off" id="exampleFormControlInput1" value="<?php $fname; ?>" placeholder="First Name">
                  </div>

                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                     <input type="text" name="lname" class="form-control" autocomplete="off" id="exampleFormControlInput1" value="<?php $lname; ?>" placeholder="Last Name">
                  </div>

                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                     <input type="number" name="phone" class="form-control" autocomplete="off" id="exampleFormControlInput1" value="<?php $phone; ?>" placeholder="Enter your number">
                  </div>

                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Roll Number</label>
                     <input type="number" name="roll" class="form-control" autocomplete="off" id="exampleFormControlInput1" value="<?php $roll; ?>" placeholder="Enter your Roll Number">
                  </div>

                  <input type="submit" name="addStudent" class="btn btn-success" value="Save">
               </form>
            </div>
           </div>
        <?php endif ?>


        <?php if("edit" == $task): 
            $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $studentData = getStudent($id);
            if( $studentData ){
            //   print_r($studentData) ;
            ?>
               <div class="row">
               <div class="col-lg-6 offset-lg-3">
                  <form method="POST">
                      <input type="hidden" name="id" value="<?php echo $id; ?>">

                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">First Name</label>
                        <input type="text" name="fname" class="form-control" autocomplete="off" id="exampleFormControlInput1" value="<?php echo $studentData['fname']; ?>" placeholder="First Name">
                     </div>
   
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                        <input type="text" name="lname" class="form-control" autocomplete="off" id="exampleFormControlInput1" value="<?php echo $studentData['lname']; ?>" placeholder="Last Name">
                     </div>
   
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input type="number" name="phone" class="form-control" autocomplete="off" id="exampleFormControlInput1" value="<?php echo $studentData['phone']; ?>" placeholder="Enter your number">
                     </div>
   
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Roll Number</label>
                        <input type="number" name="roll" class="form-control" autocomplete="off" id="exampleFormControlInput1" value="<?php echo $studentData['roll']; ?>" placeholder="Enter your Roll Number">
                     </div>
   
                     <input type="submit" name="updateStudent" class="btn btn-primary" value="Update">
                  </form>
               </div>
              </div>
         <?php 
              } 
            ?>
        <?php endif ?>
         
     </div>
   </div>

<?php include "../inc/footer.php"; ?>

