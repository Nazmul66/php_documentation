<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <!-- <p><?php if(isset($_POST['bal'])) echo $_POST['bal']; ?></p>
     <p><?php if(isset($_POST['sal'])) echo $_POST['sal']; ?></p> -->

        <p>
        <?php 
            //  print_r($_POST);
            // echo "\n";
              print_r($_FILES);
        ?>
        </p>
 
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="bal">
        <input type="text" name="sal">
        <input type="submit" value="submit">
        <input type="file" name="photo" id="">
    </form>
      
</body>
</html>