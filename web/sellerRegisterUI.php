<?php
include "templates/sellerHeader.php";
?>
	<!-- content-section-starts -->
	<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	  <form action="sellerhub/sellerRegister.php" onsubmit="return validate()" method="POST" enctype="multipart/form-data"> 
				 <div class="register-top-grid">
					 <div class="wow fadeInLeft"  data-wow-delay="0.4s">
						<span>Mobile No<label>*</label></span>
						<input type="text" name="seller_smno" id="signup-form-mobile_no-field"> 
					 </div>
					 <div class="wow fadeInRight"  data-wow-delay="0.4s">
						<span>Email<label>*</label></span>
						<input type="text" name="seller_sem" id="signup-form-email-field"> 
					 </div>
					</div>
					<div class="register-top-grid">
					 <div class="wow fadeInLeft"  data-wow-delay="0.4s">
						<span>Shop Name <label>*</label></span>
						<input type="text" name="seller_shop" id="signup-form-mobile_no-field"> 
					 </div>
					 <div class="wow fadeInRight"  data-wow-delay="0.4s">
						<span>Location<label>*</label></span>
						<input type="text" name="seller_loc" id="signup-form-email-field"> 
					 </div>
					</div> 
					 
				     
					 <div class="register-bottom-grid">
						    
							 <div class="wow fadeInLeft" data-wow-delay="0.4s" >
								<span>Password<label>*</label></span>
								<input type="password" name="seller_spswd" id="signup-form-password-field">
							 </div>
							 <div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Confirm Password<label>*</label></span>
								<input type="password">
							 </div>
							  
					 </div>
					 <div class="register-top-grid">
					 <div class="wow fadeInLeft"  data-wow-delay="0.4s">
						<span>Shop Type <label>*</label></span><br>
						Restaurants
						<input type="radio" name="seller_shop_type" id="signup-form-mobile_no-field" value="Restaurants">|
				        Bakers
						<input type="radio" name="seller_shop_type" id="signup-form-mobile_no-field" value="Bakers"> 
					 </div>
					 <div class="wow fadeInRight"  data-wow-delay="0.4s">
						 <div class="form-group">
        <label for="image">Image :</label>
        <input type="file" class="form-control" name="s_profile_img">
      </div>
					 </div>

					 <input type="submit" value="Register" name="btn_form_seller_signup_insert">
					 <br>

					</div>
					 
					 <div id="userlbl"></div>
				</form>
				
		   </div>
	     </div>
	    </div>

<div class="clearfix"></div>
		<?php
		include_once("templates/contact.php");
		include_once("templates/footer.php");
		?>.
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
	
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
    }
   else*/  if(x4.length<=5 || x4.length>10)
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