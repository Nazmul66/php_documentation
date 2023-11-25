<?php
   // include php files for working purpose
    include_once "data_scramble_f.php";
    $task = "encode";

    if( isset($_GET['task']) && $_GET['task'] != "" ){
      $task = $_GET['task'];
    }

    $key = "abcdefghijklmnopqrstuvwxyz0123456789";
    // $data = "25, 25, 74, 40";

    if( "generateKey" == $task ){
      $key_original = str_split($key);
      shuffle($key_original);
      $key = join("", $key_original);
   }
    else if (isset($_POST['key']) && $_POST['key'] != ""){
        $key = $_POST['key'];
    }

    $scrambledData = "";
    if( "encode" == $task ){
       $data = $_POST['data'] ?? "";
       if( $data != ""){
        $scrambledData = OriginalData($data, $key);
       }
    }

    if( "decode" == $task ){
       $data = $_POST['data'] ?? "";
       if( $data != ""){
        $scrambledData = decodeData($data, $key);
       }
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Scramble</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>

      <div class="container" style="margin-top: 100px">
         <div class="row">
            <div class="col-lg-6 offset-lg-3">

            <blockquote class="blockquote">
               <p>Data Scramble</p>
            </blockquote>

            <ul class="list-group list-group-horizontal">
                <li class="list-group-item">
                  <a href="data_scramble.php?task=encode">Encode</a>
                </li>
                <li class="list-group-item">
                   <a href="data_scramble.php?task=decode">Decode</a>
                </li>
                <li class="list-group-item">
                   <a href="data_scramble.php?task=generateKey">Generate key</a>  
                </li>
            </ul>

                <form method="POST" action="data_scramble.php<?php if("decode" == $task){ echo "?task=decode"; } ?>">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">key</label>
                    <input type="text" name="key" class="form-control" <?php indexKey($key); ?> >
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Data</label>
                    <textarea class="form-control" name="data" rows="3"><?php 
                        if( isset($_POST['data']) ){
                           echo $_POST['data'];
                        }?></textarea>
                  </div>
                  
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Result</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $scrambledData; ?></textarea>
                  </div>

                  <input type="submit" value="Do it for me" class="btn btn-primary mt-3">
                </form>

            </div>
         </div>
      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>