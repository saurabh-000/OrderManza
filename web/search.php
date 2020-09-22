<?php
include_once("dbfetch/connection.php");
include_once("templates/header.php");
?>
	<!-- header-section-ends -->
<?php

$restaurant=$_GET['restaurant_Name'];
$cuisine=$_GET['cuisine_Name'];

if($cuisine=="" && $restaurant!="")
{
	#echo "only restaurant";
	$selectRestaurant="SELECT * FROM restaurants where name='".$restaurant."'";
	$resultselectRestaurant = mysqli_query($conn,$selectRestaurant) or die(mysql_error());
    if($resultselectRestaurant->num_rows>0)
    {
    	echo '<div class="Popular-Restaurants-content">
		<div class="Popular-Restaurants-grids">
			<div class="container">';
      while($rowRestaurant =$resultselectRestaurant->fetch_assoc())
	   	{
	   	    
	 #-----------------------------html----start------------------------#
	   		echo '<div class="Popular-Restaurants-grid wow fadeInRight" data-wow-delay="0.4s">
					<div class="col-md-3 restaurent-logo">
						<img src="images/sellerProfileimg/'.$rowRestaurant["img"].'" class="img-responsive" alt="" />
					</div>
					<div class="col-md-2 restaurent-title">
						<div class="logo-title">
							<h4><a href="#">'.$rowRestaurant["name"].'</a></h4>
						</div>
						<div class="rating">
							<span>ratings</span>
							<a href="#"> <img src="images/star1.png" class="img-responsive" alt="">(004)</a>
						</div>
					</div>
					<div class="col-md-7 buy">
						<a class="morebtn hvr-rectangle-in" href="bakersmenu.php?restaurantName='.base64_encode($rowRestaurant["reg_no"]).'">view</a>
					</div>
					<div class="clearfix"></div>
				</div>';
     #-----------------------------html----end--------------------------#



	   	}
	   	echo '</div>
		</div>
	</div>';
    }
}
elseif ($restaurant=="" && $cuisine!="") {
	# code...
	#echo "only cuisine";
	echo'<div class="Popular-Restaurants-content">
		<div class="Popular-Restaurants-grids">
			<div class="container">';
	$selectCuisine="SELECT * FROM food_info where cuisine_name='".$cuisine."'";
	$resultselectCuisine = mysqli_query($conn,$selectCuisine) or die(mysql_error());
    if($resultselectCuisine->num_rows>0)
    {
    	/*echo '
    	<div class="container">
    	<table class="table"><tr><th>item</th>
	 			<th>Price</th>
	 			<th>Qty</th>
                <th>Whishlist</th>
                <th>Cart</th>
                <th>Shop Name</th>
	 			<tr>';
	 			 $dir = "images/sellerItemimg/";*/
      while($rowCuisine =$resultselectCuisine->fetch_assoc())
	   	{
	   		
	   		echo '<div class="Popular-Restaurants-grid wow fadeInRight" data-wow-delay="0.4s">
					<div class="col-md-3 restaurent-logo">
						<img src="images/sellerItemimg/'.$rowCuisine["item_img"].'" class="img-responsive" alt="" />
					</div>
					<div class="col-md-2 restaurent-title">
						<div class="logo-title">
							<h4><a href="#">'.$rowCuisine["item"].'</a></h4>
						</div>
						<div class="rating">';
						$qryshop="SELECT * FROM restaurants WHERE reg_no='".$rowCuisine['reg_no']."'";
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
					<span>'.$rowCuisine['rate'].'</span>
						<a class="morebtn hvr-rectangle-in" href="dbfetch/dbcart.php?procat='.$rowCuisine['catogery_id'].'">Buy</a>
					</div>
					<div class="clearfix"></div>
				</div>';
	   			
	   	}
    }
    
    else
    {

    	echo "no result";
    }
}
elseif ($restaurant=="" && $cuisine=="") {
	# code...
	echo "please enter values";
}
else
{
	#echo "both";
	$selectBoth="SELECT * FROM restaurants WHERE name='".$restaurant."'";
	$resultselectBoth = mysqli_query($conn,$selectBoth) or die(mysql_error());
    if($resultselectBoth->num_rows>0)
    {
      while($rowBoth =$resultselectBoth->fetch_assoc())
	   	{
	   		
	echo'<div class="cart-items">
	<div class="container">
			 <h1>'.$rowBoth["name"].'</h1>';
	   		$qry="SELECT * FROM food_info WHERE reg_no='".$rowBoth['reg_no']."' AND cuisine_name='".$cuisine."'";
	   		$resultqry=mysqli_query($conn,$qry) or die(mysql_error());
	   		if($resultqry->num_rows>0)
	   		{
	 			$dir = "images/sellerItemimg/";
	   			while($rowqry=$resultqry->fetch_assoc())
	   			{
	   				
	 				echo '<div class="cart-header">
				 <!--<div class="close1"> </div>-->
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="'.$dir.$rowqry['item_img'].'" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">'.$rowqry["item"].'</a><span>Pickup time:</span></h3>
						<ul class="qty">
							<li><p><a href="dbfetch/wishlist.php?procat='.base64_encode($rowqry["catogery_id"]).'"><i class="fa fa-heart"></i></a></p></li>
							<li><p><a href="dbfetch/dbcart.php?procat='.base64_encode($rowqry["catogery_id"]).'"><i class="fa fa-shopping-cart"></i></a></p></li>
						</ul>
							 <div class="delivery">
							 <p>Price : &#8377 '.$rowqry["rate"].'</p>
							 <span>Delivered in 1-1:30 hours</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>';
	   			}
	   			echo '</div>
	 			</div>';
	   		}
	   		else
	   		{
	   			echo $rowBoth['name']." does not sell this cuisine";
	   		}
	   	
	   	}
    }
}
?>