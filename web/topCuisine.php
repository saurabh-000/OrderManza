<!--<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h1>fdkj</h1>
</div>

</body>
</html>-->

<?php
//global $conn;
include_once 'templates/header.php'; 
echo'<div class="Popular-Restaurants-content">
		<div class="Popular-Restaurants-grids">
			<div class="container">';
//echo $cuisine=$_GET['cuisine'];
//echo "<br>";
//echo $cuisine;

$query="SELECT * FROM food_info WHERE cuisine_name='".$_GET['cuisine']."'";
	$result = mysqli_query($conn,$query) or die(mysqli_error());
      if($result->num_rows>0)
     {
      	 while($row =$result->fetch_assoc())
      	 {
      	 	//echo $row['item'];
      	 	//echo $row['rate'];
      	 	//echo $row['qty'];
      	 	//echo $row['reg_no'];
      	 	
      	 	echo '<div class="Popular-Restaurants-grid wow fadeInRight" data-wow-delay="0.4s">
					<div class="col-md-3 restaurent-logo">
						<img src="images/sellerItemimg/'.$row["item_img"].'" class="img-responsive" alt="" />
					</div>
					<div class="col-md-2 restaurent-title">
						<div class="logo-title">
							<h4><a href="#">'.$row["item"].'</a></h4>
						</div>
						<div class="rating">';
						$qryshop="SELECT * FROM restaurants WHERE reg_no='".$row['reg_no']."'";
      	     $result_shop = mysqli_query($conn,$qryshop) or die(mysqli_error());
      if($result_shop->num_rows>0)
     {
      	 while($row_shop =$result_shop->fetch_assoc())
      	 {
      	 	echo '<span>'.$row_shop["name"].'</span>';
      	 	}
      }
							
							
						echo '</div>
					</div>
					<div class="col-md-7 buy">
					<span>'.$row['rate'].'</span>
						<a class="morebtn hvr-rectangle-in" href="dbfetch/dbcart.php?procat='.$row['catogery_id'].'">Buy</a>
					</div>
					<div class="clearfix"></div>
				</div>';
      	 
      	 }
      }
      else
      {
      	echo "no result";
      }
 
?>