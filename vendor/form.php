<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>EPF TECH HUB WORKFLOW SYSTEM</title>
</head>
<body>

<div class="container d-flex justify-content-center">
<form method="post" action="fileupload.php" enctype="multipart/form-data">

<h1 class="display-3">Workflow System</h1>
  <div class="mb-3">
    <?php  
    if (isset($_SESSION['message'])) 
    {
      echo "<h4>".$_SESSION['message']."</h4>";
      unset($_SESSION['message']);
    }
    
    ?>
    <label for="" class="form-label">First Name</label>
    <input type="text" name="fname" class="form-control" id="f_name">
   
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Last Name</label>
    <input type="text" name="lname" class="form-control" id="l_name">
   
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Birthday</label>
    <input type="date" name="dateOfBirth" class="form-control" id="date">
  </div>

  <div class="mb-3">
    <label for="">Upload File</label>
    <input type="file" name="fileUpload" class="the_file" id="file" />
  </div>

  <button type="submit" name="btnUpload" class="btn btn-primary">Send</button>
</form>

</div>
    
</body>
</html>