<?php 
       
       include_once 'templates/header.php'; 

 ?>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
	<div class="container">
		<div class="login-page">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Login
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="account_grid">
			   <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h3>NEW USER</h3>
				 <p>If you are a new user, please create an account.</p>
				 <a class="acount-btn" href="register.php">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<h3> <label class="text-danger" style="text-align:center">
				  	
				  	<?php
				  	   if(isset($_GET['notFound']))
				  	   {
				  	   	 echo "Invalid Username or Password";
				  	   }
				  	?>
				  </label> </h3>
				<form action="dbfetch/Signin.php" method="POST">
				  <div>
					<span>Email Address Or Mobile No.<label>*</label></span>
					<input type="text" name="lumn"> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="password" name="lpswd"> 
				  </div>
				  <!--<a class="forgot" href="forgotPassword.php">Forgot Your Password?</a>-->
				  
				  <input type="submit" value="Login" name="btn-login"><br><br>
                 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Forgot Your Password?</button>
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>



<!-- Modal start -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Type your Email Address</h4>
      </div>
      <form action="dbfetch/forgotpassword.php" method="POST" onsubmit="return emailValidate()">
      <div class="modal-body">
        	<div class="form-group">
    
    <input type="text" class="form-control" id="email" name=fgt_pswd>
  </div>
        <label id="userlbl" onkeypress="remove()"></label>
      </div>
      <div class="modal-footer">
        <button type="Submit" class="btn btn-default" name="btn-getpswd">Submit</button>
        <script>
        	function emailValidate()
        	{
        		var x2=document.getElementById("email").value;
        		if(isNaN(Number(x2)))
        		{
        			//"input is not a number";
        			if(/^\w+@\w+\.\w{2,3}$/.test(x2))
                    {
  	                  return true;
                    }  
                    else
                    {
                       document.getElementById("userlbl").style.display="block";
                       document.getElementById("userlbl").innerHTML="please enter valid email";
                       return false;
                    }
        		}
        		else
        		{
        			//input is a number
        			//var x3=document.getElementById("signup-form-mobile_no-field").value;
                    if(/^[6-9]+\d{9}$/.test(x2))
                    {
                    	return true;
                    }
                    else
                    {
                     document.getElementById("userlbl").style.display="block";
                     document.getElementById("userlbl").innerHTML="please enter valid mobile no";
                     return false; 
                    }
        		}
                
        	}
        	function blank()
        	{
        		var elem=document.getElementById("userlbl").value;
        		elem.remove()
        	}
        </script>
      </div>
  </form>
    </div>

  </div>
</div>
<!--end modal-->
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
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>