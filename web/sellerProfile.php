<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
   
    <?php
       include_once("dbfetch/connection.php");
    ?>

</head>
<body>
 <div class="container  bg-primary">
    <h1><center>Profile</center></h1>
 </div>
 <br>
 <div class="container" style="margin-top":20px>
    <h3><u>Seller info</u></h3>
 </div><br><br>
  <div class="container">
       <table class="table">
             <tr>
                <th>Name</th> 
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Location</th>
                <th>Shop Type</th>
                <th>Image</th>
                <th>Action</th>
             </tr>
            
             <?php
                   include ("sellerhub/sellerfetchRecord.php");
                  echo '
              
        </table>
  
  </div>
  <div class="container">
    <h3><u>Item info</u></h3>
  </div>
  <div class="container" style="margin-top:20px;">
    <div class="row">
    <a href="selleraddItems.php?rn='.base64_encode($rn).'"><button class="btn btn-primary">
        Add Record</button></a>
        <a href="selleraddOffers.php?rn='.base64_encode($rn).'"><button class="btn btn-primary">
        Add Offers</button></a>
    </div>
 </div><br><br>


 <div class="container">
       <table class="table">
            <caption><h2 align="center">';
                      if(isset($_GET['deleted']))
                      {
                        echo 'Item deleted suceessfully!';
                      }

 echo '          </h2> </caption>   
             <tr>
                <th>Item</th> 
                <th>Rate</th>
                <th>Quantity</th>
                <th>Catogery</th>
                <th>Image</th>
                <th>Cuisine Name</th>
                <th>Action</th>
             </tr>';
             ?>
            
             <?php
                   include_once("sellerhub/sellerfetchitemRecord.php");
               ?>
        </table>
  
  </div>
    
</body>
</html>