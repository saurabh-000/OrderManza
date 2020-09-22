<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="styleshee" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
   
    <?php
       include_once("../dbfetch/connection.php");
     ?>  

</head>
<body>
 <div class="container  bg-primary">
    <h1 class="text-center">Update Your Records</h1>
 </div>
 <br>
 <div class="container" style="margin-top:20px">
      <h4 class="text-center">Add Record </h4>
      <?php
             
          $query = "SELECT *FROM food_info WHERE id={$_GET['id']}";
          $resultSet=$conn->query($query);
            if($resultSet->num_rows>0)
            {
              $row=$resultSet->fetch_assoc();
echo <<<heredoc
<form method="POST" action="sellerUpdateRecord.php" enctype="multipart/form-data">
      <input type="hidden" name="id" value="{$row['id']}"/>
      <div class="form-group">
        <label for="id">Item Name</label>
        <input type="text" class="form-control" value="{$row['item']}" name="s_item">
      </div>
      <div class="form-group">
        <label for="name">Rate</label>
        <input type="text" class="form-control" value="{$row['rate']}" name="s_rate">
      </div>
      <div class="form-group">
        <label for="branch">Quantity</label>
        <input type="text" class="form-control" value="{$row['qty']}" name="s_quantity">
      </div>
      <div class="form-group">
        <label for="course">Category</label>
        <input type="text" class="form-control" value="{$row['catogery']}" name="s_catogery">
      </div>
      <div class="form-group">
        <label for="course">Cuisine Name</label>
        <input type="text" class="form-control" value="{$row['cuisine_name']}"  name="s_cuisine">
      </div>
      <div class="form-group">
         <label for="image">Item Image :</label>
        <div style="width:150px;">
               <img class="img  img-thumbnail" height="150" src="../images/sellerItemimg/{$row['item_img']}"/><br><br>
         </div>
         <input type="hidden" name="itemImg" value="{$row['item_img']}" />
        <input type="file" class="form-control"  value="{$row['item_img']}" name="s_image">
      </div>
      
       
      <input type="submit" class="btn btn-primary" name="btnUpdate" value="Update"/>

    </form>
heredoc;
}
      ?>

       
  </div>
    
</body>
</html>