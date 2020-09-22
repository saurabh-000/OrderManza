<?php 
       
       include_once 'templates/header.php'; 

 ?>

	<!-- header-section-ends -->
	<!-- content-section-starts -->
	
	<div class="Popular-Restaurants-content">
		<div class="Popular-Restaurants-grids">
			<div class="container">
				<?php
	
	global $conn;
	$query="SELECT * FROM restaurants where shop_type='Bakers'";
	$result  = $conn->query($query);
      if($result->num_rows>0)
      {
      	 while($row =$result->fetch_assoc())
      	 {
      	 	echo '<div class="Popular-Restaurants-grid wow fadeInRight" data-wow-delay="0.4s">
					<div class="col-md-3 restaurent-logo">
						<img src="images/sellerProfileimg/'.$row["img"].'" class="img-responsive" alt="" />
					</div>
					<div class="col-md-2 restaurent-title">
						<div class="logo-title">
							<h4><a href="#">'.$row["name"].'</a></h4>
						</div>
						<div class="rating">
							<span>ratings</span>
							<a href="#"> <img src="images/star1.png" class="img-responsive" alt="">(004)</a>
						</div>
					</div>
					<div class="col-md-7 buy">
						<a class="morebtn hvr-rectangle-in" href="bakersmenu.php?restaurantName='.base64_encode($row["reg_no"]).'">view</a>
					</div>
					<div class="clearfix"></div>
				</div>';
			}
		}
	?>
				
			</div>
		</div>
	</div>
	<?php 
        include_once 'templates/contact.php';
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