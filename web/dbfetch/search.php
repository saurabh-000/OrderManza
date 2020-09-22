<!DOCTYPE html>
<html>
<head>
<title>Food_Template Bootstrap Responsive Website Template | Popular-restaurant :: w3layouts</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>		
<script src="js/simpleCart.min.js"> </script>	
</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" class="img-responsive" alt="" /></a>
				</div>
				<div class="queries">
					<p>Questions? Call us Toll-free!<span>1800-0000-7777 </span><label>(11AM to 11PM)</label></p>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="cart.php">
								<h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty card</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li><a href="index.php">Home</a></li>|
						<li class="active"><a href="demo_restaurant.php" class="scroll">Bakers</a></li>|
						<li><a href="restaurants.php">Restaurants</a></li>|
						<li><a href="order.php">Order</a></li>|
						<li><a href="contact.php">contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<li><a href="favourite.php"><i class="fa fa-heart"></i></a> </li> |
						<?php
						if(isset($_SESSION["mob_no"]))
						{
						  echo '
						<li><a href="dbfetch/logout.php">Log out</a></li> |';
					    }
					    else
					    {
                             echo '<li><a href="login.php">Login</a>  </li> |';
					    }
						?>
						<li><a href="register.php">Register</a> </li> |
						<li><a href="#">Help</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>		
				</div>


	<!-- header-section-ends -->
<?php
include "connection.php";
$restaurant=$_GET['restaurant_Name'];
$cuisine=$_GET['cuisine_Name'];
echo "restaurant_Name=".$restaurant;
echo "cuisine_Name=".$cuisine;
echo "<br>";
if($cuisine=="" && $restaurant!="")
{
	#echo "only restaurant";
	$selectRestaurant="SELECT * FROM restaurants where name='".$restaurant."'";
	$resultselectRestaurant = mysqli_query($conn,$selectRestaurant) or die(mysql_error());
    if($resultselectRestaurant->num_rows>0)
    {
      while($rowRestaurant =$resultselectRestaurant->fetch_assoc())
	   	{
	   		echo $rowRestaurant['name'];
	   		echo $rowRestaurant['location'];
	   		echo $rowRestaurant['seller_mob_no'];
	   		echo $rowRestaurant['email'];
	   		echo $rowRestaurant['shop_type'];
	   	
	   	}
    }
}
elseif ($restaurant=="" && $cuisine!="") {
	# code...
	#echo "only cuisine";
	$selectCuisine="SELECT * FROM food_info where cuisine_name='".$cuisine."'";
	$resultselectCuisine = mysqli_query($conn,$selectCuisine) or die(mysql_error());
    if($resultselectCuisine->num_rows>0)
    {
      while($rowCuisine =$resultselectCuisine->fetch_assoc())
	   	{
	   		echo $rowCuisine['item'];
	   		echo $rowCuisine['rate'];
	   		echo $rowCuisine['item_img'];
	   		echo $rowCuisine['reg_no'];
	   		$selectShop="SELECT * FROM restaurants WHERE reg_no='".$rowCuisine['reg_no']."'";
	   		$resultselectShop = mysqli_query($conn,$selectShop) or die(mysql_error());
    if($resultselectShop->num_rows>0)
    {
      while($rowShop =$resultselectShop->fetch_assoc())
	   	{
	   		echo $rowShop['name'];
	   		echo $rowShop['location'];
	   		echo $rowShop['seller_mob_no'];
	   		echo $rowShop['shop_type'];		
	   	}
    }
	   	
	   	}
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
	   		echo $rowBoth['reg_no'];
	   		echo $rowBoth['name'];
	   		$qry="SELECT * FROM food_info WHERE reg_no='".$rowBoth['reg_no']."' AND cuisine_name='".$cuisine."'";
	   		$resultqry=mysqli_query($conn,$qry) or die(mysql_error());
	   		if($resultqry->num_rows>0)
	   		{
	   			while($rowqry=$resultqry->fetch_assoc())
	   			{
	   				echo $rowqry['item'];
	   		        echo $rowqry['rate'];
	   		        echo $rowqry['item_img'];
	   		        echo $rowqry['reg_no'];
	   			}
	   		}
	   		else
	   		{
	   			echo $rowBoth['name']." does not sell this cuisine";
	   		}
	   	
	   	}
    }
}
?>