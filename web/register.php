

	<!-- header-section-ends -->
	
<?php
include_once("templates/header.php")
?>
	<!-- content-section-starts -->
	<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	  <form action="dbfetch/signup.php" onsubmit="return validate()"> 

				 <div class="register-top-grid">
					 <div class="wow fadeInLeft"  data-wow-delay="0.4s">
						<span>Mobile No<label>*</label></span>
						<input type="text" name="smno" id="signup-form-mobile_no-field"> 
					 </div>
					
					 <div class="wow fadeInLeft"  data-wow-delay="0.4s">
						<span>Email<label>*</label></span>
						<input type="text" name="sem" id="signup-form-email-field"> 
					 </div>
					</div> 
					 
				     <div class="register-bottom-grid">
						    
							 <div class="wow fadeInLeft" data-wow-delay="0.4s" >
								<span>Password<label>*</label></span>
								<input type="password" name="spswd" id="signup-form-password-field">
							 </div>
							 <div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Confirm Password<label>*</label></span>
								<input type="password" name="">
							 </div>
							  <input type="submit" value="Register" name="btn_form_signup_insert"><br>
							  
					 </div>
					 
					 <div id="userlbl"></div>
				</form>
				
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
<div class="clearfix"></div>
		<?php
		 include_once 'templates/contact.php';
		?>
	<!-- content-section-ends -->
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
<script type="text/javascript">
function validate()
{
  var x3=document.getElementById("signup-form-mobile_no-field").value;
  if(/^[6-9]+\d{9}$/.test(x3))
  {
  }
  else
  {
    document.getElementById("userlbl").style.display="block";
    document.getElementById("userlbl").innerHTML="please enter valid mobile no";
    return false; 
  }
  var x2=document.getElementById("signup-form-email-field").value;
  if(/^\w+@\w+\.\w{2,3}$/.test(x2))
  {
  }
  else
  {
    document.getElementById("userlbl").style.display="block";
    document.getElementById("userlbl").innerHTML="please enter valid email";
    return false;
  }
  var x4=document.getElementById("signup-form-password-field").value;
    /*if(/^[0-9]/.test(x4))
    {
      document.getElementById("userlbl").style.display="block";
    document.getElementById("userlbl").innerHTML="the first letter should be a letter";
    return false;
    }*/
   if(x4.length<=5 || x4.length>10)
   {
      document.getElementById("userlbl").style.display="block";
    document.getElementById("userlbl").innerHTML="the length of password must be 6-10";
    return false;
    }
  else
  {
    return true;
  }
}
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>