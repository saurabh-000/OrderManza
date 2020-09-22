
<!DOCTYPE html>
<html>
<head>
<title> Home :: The Bhoj</title>
<?php
 include_once("dbfetch/connection.php");
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/bakersmenu.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/cart.css" rel="stylesheet" type="text/css" media="all" />
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
<script src="Assets/bootstrap/js/1.js"> </script>
<script src="js/simpleCart.min.js"> </script>	
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
</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="./index.php"><img src="images/companyLogo4.png" class="img-responsive" alt="" /></a>
				</div>
				<div class="queries">
					<p>Reach us out at <span>95-320-200-95 </span><label>(10AM to 10PM)</label></p>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="./checkout.php.">
								<h3> <!--<span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)--><img src="images/bag.png" alt=""></h3>
							</a>	
							<!--<p><a href="javascript:;" class="simpleCart_empty">Empty card</a></p>-->
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
						<script>
							//alert(window.location);
							if(window.location=='http://localhost/bhojupdate2/web/index.php'|| window.location=='http://localhost/bhojupdate2/web/')
							{
                                document.write('<li class="active"><a href="index.php" class="scroll">Home</a></li>!<li><a href="demo_restaurants.php">Bakers</a></li>|<li><a href="restaurants.php">Restaurants</a></li>|	<li><a href="order.php">Order</a></li>|<li><a href="contact.php">contact</a></li><div class="clearfix"></div>');
							}
							else if(window.location=='http://localhost/bhojupdate2/web/demo_restaurants.php')
							{
                              document.write('<li><a href="index.php">Home</a></li>|<li class="active"><a href="demo_restaurant.php" class="scroll">Bakers</a></li>|<li><a href="restaurants.php">Restaurants</a></li>|<li><a href="order.php">Order</a></li>|<li><a href="contact.php">contact</a></li><div class="clearfix"></div>');
							}
							else if(window.location=='http://localhost/bhojupdate2/web/restaurants.php')
							{
								document.write('<li><a href="index.php">Home</a></li>|<li><a href="demo_restaurants.php">BAKERS</a></li>|<li class="active"><a href="restaurants.php" class="scroll">RESTAURANTS</a></li>|<li><a href="order.php">Order</a></li>|<li><a href="contact.php">contact</a></li><div class="clearfix"></div>');
							}
							else if(window.location=='http://localhost/bhojupdate2/web/order.php')
							{
								document.write('<li><a href="index.php">Home</a></li>|<li><a href="demo_restaurants.php">Bakers</a></li>|<li><a href="restaurants.php">Restaurants</a></li>|<li class="active"><a href="order.php" class="scroll">Order</a></li>|<li><a href="contact.php">contact</a></li>			<div class="clearfix"></div>');
							}
							else if(window.location=='http://localhost/bhojupdate2/web/contact.php')
							{
								document.write('<li><a href="index.php">Home</a></li>|<li><a href="demo_restaurants.php">Bakers</a></li>|<li><a href="restaurants.php">Restaurants</a></li>|<li><a href="order.php">Order</a></li>|<li class="active"><a href="#contact" class="scroll">contact</a></li><div class="clearfix"></div>');
							}
							else
							{
								document.write('<li><a href="index.php">Home</a></li>|<li><a href="demo_restaurants.php">Bakers</a></li>|<li><a href="restaurants.php">Restaurants</a></li>|<li><a href="order.php">Order</a></li>|<li><a href="contact.php">contact</a></li><div class="clearfix"></div>');
							}

					</script>
						
					</ul>
				</div>
				<div class="login-section">
						<ul>
						<li><a href="favourite.php"><i class="fa fa-heart"></i></a> </li> |
						<?php
						if(isset($_SESSION["mob_no"]))
						{
						  echo '
						<li><a href="dbfetch/logout.php">Log out</a></li> |
						<li><a href="profile.php">Account</a> </li> ';
					    }
					    else
					    {
                             echo '<li><a href="login.php">Login</a>  </li> |
                             <li><a href="register.php">Register</a> </li> ';
					    }
						?>
						<!--<li><a href="register.php">Register</a> </li> |-->
						<!--<li><a href="#">Help</a></li>-->
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>