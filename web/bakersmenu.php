<?php
include "templates/header.php";
include_once("dbfetch/connection.php");
$shopname=base64_decode($_GET["restaurantName"]);
$query="SELECT distinct catogery FROM food_info where reg_no='".$shopname."'";
	//echo $query;
	 $result =$conn->query($query);
	 if($result->num_rows>0)
	 {
	 	while($rows=$result->fetch_assoc())
	 	{
	 		echo'<div class="cart-items">
	<div class="container">
			 <h1>'.$rows["catogery"].'</h1>';
	 		$query1="SELECT * FROM food_info WHERE catogery='".$rows["catogery"]."' AND reg_no='".$shopname."'";
	 		$result1=$conn->query($query1);
	 		if($result1->num_rows>0)
	 		{
	 			/*echo '<table class="table table-responsive"><tr><th>item</th>
	 			<th>Price</th>
	 			<th>Qty</th>
                <th>Whishlist</th>
                <th>Cart</th>
	 			<tr>';*/
                   
                   $dir = "images/sellerItemimg/";
	 			while($rows1=$result1->fetch_assoc())
	 			{
	 				echo '<div class="cart-header">
				 <!--<div class="close1"> </div>-->
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="'.$dir.$rows1['item_img'].'" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">'.$rows1["item"].'</a><span>Pickup time:</span></h3>
						<ul class="qty">
							<li><p><a href="dbfetch/wishlist.php?procat='.base64_encode($rows1["catogery_id"]).'"><i class="fa fa-heart"></i></a></p></li>
							<li><p><a href="dbfetch/dbcart.php?procat='.base64_encode($rows1["catogery_id"]).'"><i class="fa fa-shopping-cart"></i></a></p></li>
						</ul>
							 <div class="delivery">
							 <p>Price : &#8377 '.$rows1["rate"].'</p>
							 <span>Delivered in 1-1:30 hours</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>';
			 
	 				/*echo '<tr>
                      <td>
                         <img height="80" width="80" src="'.$dir.$rows1['item_img'].'" alt="">
                         <br>
                      <h4 style="text-transform:uppercase">'.$rows1["item"].'</h4></td>
	 				 <td>'.$rows1["rate"].'</td>
	 				<td>'.$rows1["qty"].'</td>
	 				<td><a href="dbfetch/wishlist.php?procat='.base64_encode($rows1["catogery_id"]).'"><i class="fa fa-heart"></i></a></td>
	 				<td><a href="dbfetch/dbcart.php?procat='.base64_encode($rows1["catogery_id"]).'"><i class="fa fa-shopping-cart"></i></a></td></tr>';*/
	 			}

	 			echo '</div>
	 			</div>';
	 		}
	 	}
	 }
	include_once("templates/contact.php");
	include_once("templates/footer.php");
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
	<!-- header-section-ends -->
	<?php
	/*include_once("templates/header.php");
	global $conn;
	$shopname=base64_decode($_GET["restaurantName"]);
	$queryMain="SELECT name,img from restaurants where reg_no='".$shopname."'";
	$resultMain=$conn->query($queryMain);
	if($resultMain->num_rows>0)
	{
		while($rowMain=$resultMain->fetch_assoc())
		 {
			echo '<div class="row"><br><h1 align="center" style="text-transform:uppercase">'.$rowMain["name"].'</h1></div><br><br><br>
	<div class="container">
	<div class="col-md-5">
	    <img class="img img-responsive" src="images/sellerProfileimg/'.$rowMain["img"].'">
	</div>
	<div class="col-md-7">

	</div>
	</div>';
		 }
	   }
	$query="SELECT distinct catogery FROM food_info where reg_no='".$shopname."'";
	//echo $query;
	 $result =$conn->query($query);
	 if($result->num_rows>0)
	 {
	 	while($rows=$result->fetch_assoc())
	 	{
	 		echo'<br><br><br><br><div class="row"><h3 class="text-center">' .$rows["catogery"].'</h3></div>';
	 		$query1="SELECT * FROM food_info WHERE catogery='".$rows["catogery"]."' AND reg_no='".$shopname."'";
	 		$result1=$conn->query($query1);
	 		if($result1->num_rows>0)
	 		{
	 			echo '<table class="table table-responsive"><tr><th>item</th>
	 			<th>Price</th>
	 			<th>Qty</th>
                <th>Whishlist</th>
                <th>Cart</th>
	 			<tr>';
                   
                   $dir = "images/sellerItemimg/";
	 			while($rows1=$result1->fetch_assoc())
	 			{
	 				echo '<tr>
                      <td>
                         <img height="80" width="80" src="'.$dir.$rows1['item_img'].'" alt="">
                         <br>
                      <h4 style="text-transform:uppercase">'.$rows1["item"].'</h4></td>
	 				 <td>'.$rows1["rate"].'</td>
	 				<td>'.$rows1["qty"].'</td>
	 				<td><a href="dbfetch/wishlist.php?procat='.base64_encode($rows1["catogery_id"]).'"><i class="fa fa-heart"></i></a></td>
	 				<td><a href="dbfetch/dbcart.php?procat='.base64_encode($rows1["catogery_id"]).'"><i class="fa fa-shopping-cart"></i></a></td></tr>';
	 			}
	 			echo '</table>';

	 		}
	 	}
	 }*/
    ?>
    