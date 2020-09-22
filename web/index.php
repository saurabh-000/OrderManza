
<?php 
       
       include_once 'templates/header.php'; 

 ?>
		<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<h1>Network of over 50 Restaurants</h1>
						<div class="line">
							<h2> To Order Online</h2>
						</div>
					</div>
					<div class="form-list wow fadeInRight" data-wow-delay="0.5s">
						<form autocomplete="true" action="search.php">
						  
							<!--<li><span>Location Name</span>
							 <input type="text" class="text" value="Secunderabad" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Secunderabad';}">
							</li>-->
					<ul class="navmain">
								<li><span>Restaurant Name</span>
							 <input style="position:relative;" type="text" class="text" onfocus="this.value='';" name="restaurant_Name" onkeyup="showResultRestaurant(this.value)" id="inputRestaurant" >
							 <div style="position:absolute;"  id="livesearchRestaurant">	
							 </div></li>
						
							 
							 
							 	<li><span>Cuisine Name</span>
							 <input style="position:relative;" type="text" class="text" onfocus="this.value = '';"
							 name="cuisine_Name" onkeyup="showResultCuisine(this.value)" id="inputCuisine">
							 <div style="position: absolute;" id="livesearchCuisine" ></div></li>

						    	<div class="srch"><button type="submit"></button></div>
						    	</ul>
						    
						
						</form>
						</div>
					<!-- start search-->
	   
					
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
/*-----------------------------***************------------------------*/
		/*Events of Restaurant Search Field*/
		/*---------Start-------------------*/
		var boolRestaurant=0;
		function mouseclickEventrestaurant(m)
	    {
	    	boolRestaurant=1;
	    	document.getElementById('inputRestaurant').value = m;
	    	document.getElementById("livesearchRestaurant").style.display="none";
	    }
		function mouseoverEventrestaurant(n)
     {
     	document.getElementById('inputRestaurant').value = n;
     }
	   resdiv=document.getElementById("livesearchRestaurant");
	   if(boolRestaurant=0)
	   {
	   resdiv.addEventListener("mouseleave",function(){
          document.getElementById("inputRestaurant").value=" ";
	   });
	}
	var inpRestaurant=document.getElementById('inputRestaurant');
	inpRestaurant.addEventListener("input",function(){
       document.getElementById("livesearchRestaurant").style.display="block";
	});
	document.addEventListener("click",function(){
		document.getElementById("livesearchRestaurant").style.display="none";
	});
      /*Events of Restaurant Search Field*/
		/*---------END-------------------*/

/*-------------------------*********----------------------------------*/
        
		/*Events of Cuisine Search Field*/
		/*---------Start-------------------*/
		  var boolCuisine=0;
		function mouseclickEventcuisine(m)
	    {
	    	boolCuisine=1;
	    	document.getElementById('inputCuisine').value = m;
	    	document.getElementById("livesearchCuisine").style.display="none";
	    }
		function mouseoverEventcuisine(n)
     {
     	document.getElementById('inputCuisine').value = n;
     }
	   resdivCuisine=document.getElementById("livesearchCuisine");
	   if(boolCuisine=0)
	   {
	   resdivCuisine.addEventListener("mouseleave",function(){
          document.getElementById("inputCuisine").value=" ";
	   });
	}
	var inputCuisine=document.getElementById('inputCuisine');
	inputCuisine.addEventListener("input",function(){
       document.getElementById("livesearchCuisine").style.display="block";
	});
	document.addEventListener("click",function(){
		document.getElementById("livesearchCuisine").style.display="none";
	});
        /*Events of Cuisine Search Field*/
		/*--------------END-------------------*/
/*-------------------------***********--------------------------------*/
		function showResultRestaurant(str) {
  if (str.length==0) { 
    document.getElementById("livesearchRestaurant").innerHTML="";
    document.getElementById("livesearchRestaurant").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
     document.getElementById("livesearchRestaurant").innerHTML=this.responseText;

      document.getElementById("livesearchRestaurant").style.border="1px solid #A5ACB2";
      // arr.push(this.responseText);
      // alert(arr);
    }
  }
  xmlhttp.open("GET","searchrestaurantajax.php?q="+str,true);
  xmlhttp.send();

}

function showResultCuisine(str) {
  if (str.length==0) { 
    document.getElementById("livesearchCuisine").innerHTML="";
    document.getElementById("livesearchCuisine").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  var i=0;
  xmlhttp.onreadystatechange=function() {
  	
    if (this.readyState==4 && this.status==200) {
    	
      document.getElementById("livesearchCuisine").innerHTML=this.responseText;
      //
      document.getElementById("livesearchCuisine").style.border="1px solid #A5ACB2";
      //

    }
  }
  xmlhttp.open("GET","searchCuisineAjax.php?q="+str,true);
  xmlhttp.send();
}
     
	</script>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
		<div class="ordering-section" id="Order">
			<div class="container">
				<div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
					<h3>Ordering food was never so easy</h3>
					<div class="dotted-line">
						<h4>Just 4 steps to follow </h4>
					</div>
				</div>
				<div class="ordering-section-grids">
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="one"></i><br>
							<i class="one-icon"></i>
							<p>Choose <span>Your Restaurant</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="two"></i><br>
							<i class="two-icon"></i>
							<p>Order  <span>Your Cuisine</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="three"></i><br>
							<i class="three-icon"></i>
							<p>Pay   <span> online / on delivery</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="four"></i><br>
							<i class="four-icon"></i>
							<p>Enjoy <span>your food </span></p>
						</div>
					</div>
					<div class="clearfix"></div>
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
									<p>Coming Soon</p>
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
									<p>Coming Soon</p>
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
									<p>Coming Soon</p>
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
									<p>Coming Soon</p>
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
							autoPlay: false,
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
		<div class="popular-restaurents" id="Popular-Restaurants">
			<div class="container">
				<div class="col-md-4 top-restaurents">
					<div class="top-restaurent-head">
						<h3>Top Restaurants</h3>
					</div>
					<div class="top-restaurent-grids">
						<div class="top-restaurent-logos">
							<div class="res-img-1 wow bounceIn" data-wow-delay="0.4s">
								<img src="images/restaurent-1.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-2 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-2.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-1 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-3.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-2 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-4.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-1 nth-grid1 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-5.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-2 nth-grid1 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-6.jpg" class="img-responsive" alt="" />
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-8 top-cuisines">
					<div class="top-cuisine-head">
						<h3>Top Cuisines</h3>
					</div>
					<div class="top-cuisine-grids">
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine1.jpg" class="img-responsive" alt="" /> </a>
							<label onclick="topCuisine(this.firstChild.nodeValue.toLowerCase())">Pizza</label>
					    </div>
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine2.jpg" class="img-responsive" alt="" /> </a>
							<label onclick="topCuisine(this.firstChild.nodeValue)">Burger</label>
					    </div>
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine3.jpg" class="img-responsive" alt="" /> </a>
							<label onclick="topCuisine(this.firstChild.nodeValue)">HotDog</label>
					    </div>
						<div class="top-cuisine-grid nth-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/vegmanchurian.jpg" class="img-responsive" alt="" /> </a>
							<label onclick="topCuisine(this.firstChild.nodeValue)">Veg Manchur</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/chickenlollipop.jpg" class="img-responsive" alt="" /> </a>
							<label onclick="topCuisine(this.firstChild.nodeValue)">Chicken Lollipop</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/chillipaneer.jpg" class="img-responsive" alt="" /> </a>
							<label onclick="topCuisine(this.firstChild.nodeValue)">Chilli Paneer</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/chickenchilli.jpg" class="img-responsive" alt="" /> </a>
							<label onclick="topCuisine(this.firstChild.nodeValue)">Chicken Chilli</label>
					    </div>
						<div class="top-cuisine-grid nth-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/biryani.jpg" class="img-responsive" alt="" /> </a>
							<label onclick="topCuisine(this.firstChild.nodeValue)">Chicken Biryani</label>
					    </div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<script>
			function topCuisine(str)
			{
				window.location.href="http://localhost/bhojupdate2/web/topCuisine.php"+"?cuisine="+str;
			}
		</script>
		<div class="service-section">
			<div class="service-section-top-row">
				<div class="container">
					<div class="service-section-top-row-grids wow bounceInLeft" data-wow-delay="0.4s">
					<div class="col-md-4 service-section-top-row-grid1">
						<h3>First we eat ,then we do else</h3>
					</div>
					<!--<div class="col-md-2 service-section-top-row-grid2">
						<ul>
							<li><i class="arrow"></i></li>
							<li class="lists">Party Orders</li>
						</ul>
						<ul>
							<li><i class="arrow"></i></li>
							<li class="lists">Home Made Food</li>
						</ul>
						<ul>
							<li><i class="arrow"></i></li>
							<li class="lists"> Diet Food </li>
						</ul>
					</div>-->
					<div class="col-md-4 service-section-top-row-grid3">
						<img src="images/lunch.png" class="img-responsive" alt="" />
					</div>
					<!--<div class="col-md-2 service-section-top-row-grid4 wow swing animated" data-wow-delay= "0.4s">
						<a href="order.html"><input type="submit" value="Order Now"></a>
					</div>-->
					<div class="col-md-4 service-section-top-row-grid1">
						<h3>You don't need a silver fork to eat good food</h3>
					</div>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="service-section-bottom-row">
				<div class="container">
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="images/icon1.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>100% Service Guarantee</h4>
							<!--<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>-->
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="images/icon2.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Fully Secure Payment</h4>
							<!--<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>-->
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="images/icon3.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Fast Delivery</h4>
							<!--<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>-->
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
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