<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<?php
	include "dbfetch/connection.php";
	?>
<title>OrderManja.com</title>
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
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
 $(window).load(function(){
      $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              prevBu:'.prev',
              nextBu:'.next',
              playBu:false,
              duration:800,
              preset:'fade', 
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:8000,
              numStatus:false,
              banners:false,
          waitBannerAnimation:false,
        progressBar:false
      })  
      });
      
     $(window).load (
    function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
      visible : {min: 1,
       max: 4
},
height: 'auto',
 width: 240,

    }, responsive: false, 
    
    scroll: 1, 
    
    mousewheel: false,
    
    swipe: {onMouse: false, onTouch: false}});
    
    
    });      

     </script>
<script src="js/jquery.easydropdown.js"></script>
<script src="js/simpleCart.min.js"> </script>	
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
					<p>Questions? Call us !<span>95-320-200-95</span><label>(10AM to 10PM)</label></p>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="cart.php">
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
						<li><a href="index.php">Home</a></li>|
						<li><a href="demo_restaurants.php">Bakers</a></li>|
						<li><a href="restaurants.php">Restaurants</a></li>|
						<li class="active"><a href="order.php" class="scroll">Order</a></li>|
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
						<li><a href="dbfetch/logout.php">Log out</a></li> |
						<li><a href="profile.php">Account</a> </li> ';
					    }
					    else
					    {
                             echo '<li><a href="login.php">Login</a>  </li> |
                             <li><a href="register.php">Register</a> </li> ';
					    }
						?>

						
						<!--<li><a href="#">Help</a></li>-->
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
	<!-- header-section-ends -->
	<div class="order-section-page">
		<div class="ordering-form">
			<div class="container">
			<div class="order-form-head text-center wow bounceInLeft" data-wow-delay="0.4s">
						<h3>Restaurant Order Form</h3>
						<p>Ordering Food Was Never So Simple !!!!!!</p>
					</div>
				
				<div class="col-md-12 ordering-image wow bounceIn" data-wow-delay="0.4s">
					<?php

if(isset($_SESSION["mob_no"]))
{
  global $conn;
  $total=0;
  $query="SELECT catogery_id from cart where mob_no='".$_SESSION["mob_no"]."'";
  $result=mysqli_query($conn,$query)or die(mysql_error());
  
    if($result->num_rows>0)
    {
      echo '
            <link rel="stylesheet" type="text/css" href="css/cart.css">
            
            <div>
            <h3><center>Subtotal</center></h3>
            <form action="order.php" method="GET
            ">
            <table class="table table-responsive">
            <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Shop Name</th>
            </tr>';
      while($row=$result->fetch_assoc())
      {
        //echo $row["catogery_id"];
        $catogery_id=$row['catogery_id'];
          //echo $catogery_id;
          //echo strpos($catogery_id,"_");
          $table=substr($catogery_id,0,strpos($catogery_id,"_"));
          //echo $table;
          $query1="SELECT food_info.item,food_info.rate,food_info.item_img,cart.item_qty from food_info INNER JOIN cart where food_info.catogery_id='".$catogery_id."' and cart.catogery_id='".$catogery_id."' and cart.mob_no='".$_SESSION["mob_no"]."'";
          $result1=mysqli_query($conn,$query1)or die(mysql_error());
          if($result1->num_rows>0)
          {
            while($row1=$result1->fetch_assoc())
            {
              echo '
              <tr><td name="item-name">'.$row1["item"].'</td>
              <td name="item-rate">'.$row1["rate"].'</td>
              <td name="item-qty">'.$row1["item_qty"].'</td>
              <td name="item-total">'.$row1["rate"]*$row1["item_qty"].'</td>
              <td>'.$table.'</td></tr>';
               $total=$total+($row1["rate"]*$row1["item_qty"]);
            }
          }
      }
      
      echo '</table>';
      echo '<hr>';
      echo ' &nbsp Total-'.$total;
      echo '<hr>';
  }
}
      ?>
				</div>
				<div class="col-md-12 order-form-grids">
					<div class="order-form-grid  wow fadeInLeft" data-wow-delay="0.4s">
						<form action="dbfetch/order_info.php" action="GET">
						<h5>Order Information</h5>
								<span>Name</span><br>
								<input type="text" name="o_name" class="text" id="order-customer-name">
								<br>
								<span>Locality or Area or Street</span><br>
								<input type="text" name="o_area" class="text">
								<br>
								<span>Building Name/Flat No.</span><br>
								<input type="text" name="o_flat" class="text">
								<br>
								<span>Alternative Phone No</span><br>
								<input type="text" name="o_number" class="text" id=order-form-mobile_no-field>
								<br>
								<?php
								
								global $conn;
								if(isset($_SESSION['mob_no']))
								{
									$query="SELECT email_id from customer_info where mob_no='".$_SESSION['mob_no']."'";
								 $result=mysqli_query($conn,$query)or die(mysql_error());
                                 if($result->num_rows>0)
                                  {
                                  while ($row=$result->fetch_assoc()) 
                                  {
                                     $getEmail=$row['email_id'];
                                  }
                                  }
                                  echo '<span>Email id</span><br>
								<input type="text" name="o_flat" class="text" value="'.$getEmail.'">';
								}
								else
								{
                                   echo '<span>Email id</span><br>
								<input type="text" name="o_flat" class="text" value=" ">';
								}
								

								?>
								
					<div class="wow swing animated" data-wow-delay= "0.4s">
					<input type="submit" value="order Confirm" onclick="orederFormValidte()"><br>
					</div>
					<br>
					<script>
						function orederFormValidte()
{
	var x2=document.getElementById("order-customer-name").value;
  if(x2!=NAN || x2=="")
  {

  }
  else
  {
  	document.getElementById("orderlbl").style.display="block";
    document.getElementById("orderlbl").innerHTML="please enter valid name+";
  }
  var x3=document.getElementById("order-form-mobile_no-field").value;
  if(/^[6-9]+\d{9}$/.test(x3))
  {
  }
  else
  {
    document.getElementById("orderlbl").style.display="block";
    document.getElementById("orderlbl").innerHTML="please enter valid mobile no";
    return false; 
  }
  
  else
  {
    return true;
  }
}
					</script>
				</form>
					</div>
					<div id="orderlbl"></div>
				</div>
			</div>
		</div>
<div class="special-offers-section">
			<div class="container">
				<div class="special-offers-section-head text-center dotted-line">
					<h4>Special Offers</h4>
				</div>
				<div class="special-offers-section-grids">
				 <div class="m_3"><span class="middle-dotted-line"> </span> </div>
				   <div class="container">
					  <ul id="flexiselDemo3">
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p1.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Olister Combo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p2.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Chicken Jumbo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p1.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Crab Combo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p2.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Chicken Jumbo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
					    </li>
					 </ul>
				 <script type="text/javascript">
					$(window).load(function() {
						
						$("#flexiselDemo3").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				    </script>
				    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- footer-section-starts -->
	<?php 
       
       include_once 'templates/footer.php'; 

 ?>
	<!-- footer-section-ends -->
	  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>