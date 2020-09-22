<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="styleshee" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
   
    <?php
       include_once("dbfetch/connection.php");
       $rgn=base64_decode($_GET['rn']);

  echo '

</head>
<body>
 <div class="container  bg-primary">
    <h1 class="text-center">Insert Your Records</h1>
 </div>
 <br>
 <div class="container" style="margin-top:20px">
      <h4 class="text-center">Add Record </h4>
      <form method="POST" action="sellerhub/sellerinsertRecord.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="id">Item Name</label>
        <input type="text" class="form-control" name="s_item">
      </div>
      <div class="form-group">
        <label for="name">Rate</label>
        <input type="text" class="form-control" name="s_rate">
      </div>
      <div class="form-group">
        <label for="branch">Quantity</label>
        <input type="text" class="form-control" name="s_quantity">
      </div>
      <div class="form-group">
        <label for="course">Catogery</label>
        <input type="text" class="form-control" name="s_catogery">
      </div>
      <div class="form-group">
        <label for="course">Cuisine Name</label>
        <input type="text" class="form-control" name="s_cuisine">
      </div>
      <div class="form-group">
        <label for="image">Item Image :</label>
        <input type="file" class="form-control" name="s_image">
      </div>
      <input type="hidden" name="s_rgn" value="'.$rgn.'">
      <input type="submit" class="btn btn-primary" name="btnInsert" value="Insert"/>
    </form> 
  </div>
    
</body>
</html>';
?>