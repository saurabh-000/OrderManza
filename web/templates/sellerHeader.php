
<!DOCTYPE html>
<html>
<head>
<title> Home :: The Bhoj</title>
<?php
 include_once("dbfetch/connection.php");
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
					<a href="index.php"><img src="images/companyLogo4.png" class="img-responsive" alt="" /></a>
				</div>
				<div class="queries">
					<p>Reach us out at <span>95-320-200-95 </span><label>(10AM to 10PM)</label></p>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="./cart.php">
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
							if(window.location=='http://localhost/bhojupdate2/web/sellerRegisterUI.php')
							{
                                document.write('<li class="active"><a href="sellerRegisterUI.php" class="scroll">Register</a> </li> |						<?php
						if(isset($_SESSION["seller_mob_no"]))
						{
						  echo '
						<li><a href="sellerhub/sellerLogout.php">Log out</a></li> |';
					    }
					    else
					    {
                             echo '<li><a href="sellerLogin.php">Login</a>  </li> |';
					    }
						?><li><a href="contact.php">contact</a></li><div class="clearfix"></div>');
							}
							else if(window.location=='http://localhost/bhojupdate2/web/sellerLogin.php')
							{
								document.write('<li><a href="sellerRegisterUI.php">Register</a> </li> |						<?php
						if(isset($_SESSION["seller_mob_no"]))
						{
						  echo '
						<li class="active"><a href="sellerhub/sellerLogout.php" class="scroll">Log out</a></li> |';
					    }
					    else
					    {
                             echo '<li class="active"><a href="sellerLogin.php" class="scroll">Login</a>  </li> |';
					    }
						?><li><a href="contact.php">contact</a></li><div class="clearfix"></div>')
							}
						</script>
						
						
					</ul>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>