<?php
include("templates/header.php");
?>
	<!-- checkout -->
<div class="cart-items">
	<div class="container">
			<!-- <h1>My Shopping Bag (3)</h1>-->

	 <?php
if(isset($_SESSION["mob_no"]))
{
	//echo $_SESSION["mob_no"];
	if(filter_var($_SESSION["mob_no"], FILTER_VALIDATE_EMAIL))
	{
		//echo "Email";
		$qryFindid="SELECT customer_id from customer_info WHERE email_id='".$_SESSION["mob_no"]."'";
    $resultFindid=mysqli_query($conn,$qryFindid) or die(mysql_error());
    if($resultFindid->num_rows>0) 
    {
      while($rowFindid=$resultFindid->fetch_assoc())
       {
         $user=$rowFindid['customer_id'];
       }
       $query="SELECT catogery_id from cart where customer_id='".$user."'";
  //$result=mysqli_query($conn,$query)or die(mysql_error());
    //if($result->num_rows>0)
    //{ 
     
    	$resultagain=mysqli_query($conn,$query) or die(mysql_error());
                 if($resultagain->num_rows>0)
                    {
                  while($rowagain =$resultagain->fetch_assoc())
         {
           $catogery_idagain=$rowagain['catogery_id'];
          
         $queryagain="SELECT food_info.item,food_info.rate,food_info.item_img,cart.item_qty,cart.catogery_id from food_info INNER JOIN cart where food_info.catogery_id='".$catogery_idagain."' and cart.catogery_id='".$catogery_idagain."' and cart.customer_id='".$user."'";
          $resultagain1=mysqli_query($conn,$queryagain)or die(mysql_error());
          if($resultagain1->num_rows>0)
          {
             //$grandTotal=0;
            while ($rowagain1=$resultagain1->fetch_assoc()) 
            {
              
              //$grandTotal=$grandTotal+($rowagain1["rate"]*$rowagain1["item_qty"]);
              //$total = $rowagain1['item_qty'] * $rowagain1['rate'];
echo 
             
			 '<div class="cart-header">
				 <div class="close1" onclick="abc(this)"> </div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/sellerItemimg/'.$rowagain1["item_img"].'" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#" style="text-transform:uppercase">'.$rowagain1["item"].' </a><span>From : Chaudhary</span> </h3>
						<ul class="qty">
							<li>
<input type="submit" onclick="increaseItem(this,'.$user.')" class="cart-qty-btn-plus" value="+" name="qty-plus">
 
 <input class="cart-qty-value" type="number"  readonly name="qty_value" class="itemPrice" value="'.$rowagain1["item_qty"].'" style="width:42px;text-align:center;padding-left:10px" style="text-align:center;">
 
 <input type="submit" onclick="decreaseItem(this,'.$user.')" class="cart-qty-btn-minus" value="-" name="qty-minus">	
 <input type="hidden"   value="'.$catogery_idagain.'">
							</li>
							<li>
								<p>Price : &#8377 <span>'.$rowagain1["rate"].'</span></p>
							</li>
						</ul>
							 <div class="delivery">
							 <p>Total Charges :&#8377<span> '.$rowagain1["rate"]*$rowagain1["item_qty"].'</span></p>
							<!--  <span>Delivered in 1-1:30 hours</span> -->
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>';
			  
           }//whileClose
        }//ifClose
     }//whileClose
    }//ifClose
    else
    {
	   echo "there is no product in your cart";
    }
    }
	}
	else
	{
		echo "Number";
	    $qryFindid="SELECT customer_id from customer_info WHERE mob_no='".$_SESSION["mob_no"]."'";
    $resultFindid=mysqli_query($conn,$qryFindid) or die(mysql_error());
    if($resultFindid->num_rows>0) 
    {
      while($rowFindid=$resultFindid->fetch_assoc())
       {
         $user=$rowFindid['customer_id'];
       }
       $query="SELECT catogery_id from cart where customer_id='".$user."'";
  //$result=mysqli_query($conn,$query)or die(mysql_error());
    //if($result->num_rows>0)
    //{ 
     
    	$resultagain=mysqli_query($conn,$query) or die(mysql_error());
                 if($resultagain->num_rows>0)
                    {
                  while($rowagain =$resultagain->fetch_assoc())
         {
           $catogery_idagain=$rowagain['catogery_id'];
          
         $queryagain="SELECT food_info.item,food_info.rate,food_info.item_img,cart.item_qty,cart.catogery_id from food_info INNER JOIN cart where food_info.catogery_id='".$catogery_idagain."' and cart.catogery_id='".$catogery_idagain."' and cart.customer_id='".$user."'";
          $resultagain1=mysqli_query($conn,$queryagain)or die(mysql_error());
          if($resultagain1->num_rows>0)
          {
             //$grandTotal=0;
            while ($rowagain1=$resultagain1->fetch_assoc()) 
            {
              
              //$grandTotal=$grandTotal+($rowagain1["rate"]*$rowagain1["item_qty"]);
              //$total = $rowagain1['item_qty'] * $rowagain1['rate'];
echo 
             
			 '<div class="cart-header">
				 <div class="close1" onclick="abc(this)"> </div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/sellerItemimg/'.$rowagain1["item_img"].'" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#" style="text-transform:uppercase">'.$rowagain1["item"].' </a><span>From : Chaudhary</span> </h3>
						<ul class="qty">
							<li>
<input type="submit" onclick="increaseItem(this,'.$user.')" class="cart-qty-btn-plus" value="+" name="qty-plus">
 
 <input class="cart-qty-value" type="number"  readonly name="qty_value" class="itemPrice" value="'.$rowagain1["item_qty"].'" style="width:42px;text-align:center;padding-left:10px" style="text-align:center;">
 
 <input type="submit" onclick="decreaseItem(this,'.$user.')" class="cart-qty-btn-minus" value="-" name="qty-minus">	
 <input type="hidden"   value="'.$catogery_idagain.'">
							</li>
							<li>
								<p>Price : &#8377 <span>'.$rowagain1["rate"].'</span></p>
							</li>
						</ul>
							 <div class="delivery">
							 <p>Total Charges :&#8377<span> '.$rowagain1["rate"]*$rowagain1["item_qty"].'</span></p>
							<!--  <span>Delivered in 1-1:30 hours</span> -->
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>';
			  
           }//whileClose
        }//ifClose
     }//whileClose
    }//ifClose
    else
    {
	   echo "there is no product in your cart";
    }
    }	
  }
  
 }//ifClose
else
{
	echo "please Login to Your Account";
}

	?>
	<footer class="navbar-default navbar-fixed-bottom">
  <div class="container-fluid" style="background-color:#e24425;padding: 10px;font-size: 20px;color: white;"><span style="color:white;margin-left:40px;font-size: 20px;">Total - &#8377</span>
  	   <span style="color:white;margin-left:5px;font-size: 20px;" class="calculateTotal"></span>
       <a href="order.php"  class="btn btn-success pull-right">Checkout</a>
  </div>
</footer>			
<!-- checkout -->
	 <?php
  include_once("templates/contact.php");
  include_once("templates/footer.php");
  ?>
	<!-- footer-section-ends -->
	  <script type="text/javascript">
	      
	      	$(document).ready(function() {
							$().UItoTop({ easingType: 'easeOutQuart' });

              });
			}			
		</script>
	<script type="text/javascript">
		 // increase qty 
		 $(document).ready(function(){
                     $.ajax({
                type:"POST",
                url:"dbfetch/calculateCart.php",
                cache:false,
                success:function(result)
                {
                   //location.reload();
                  
                   $(".calculateTotal").text(result);

                }
                  });
              });
		function  increaseItem(item,user)
	      {
	      	//alert("hello");
	      	var cat_id=$(item).next().next().next().val();
	      	     var qty = $(item).next('input').val();
	      	     //var total=$(item).parent().parent().next().children().children().text();
	      	     var price=$(item).parent().next().children().children().text();
	      	     //alert(price);
	      	     qty++;
	      	      if (qty>10)
	      	       {
                       alert("Product cant not more than 10");
	      	       }
	      	       else
	      	       {
    	      	       $(item).next('input').val(qty);
    	      	        $.ajax({
                type:"POST",
                url:"dbfetch/addToCart.php",
                data:"addCart="+qty+"&catogery_id="+cat_id+"&user="+user,
                cache:false,
                success:function(result)
                {
                   //location.reload();
                   $(item).parent().parent().next().children().children().text(price*qty);
                   $(".calculateTotal").text(result);

                }
                  });
	      	   }
	      	       
	      }
	      //decrease qty
	      function  decreaseItem(item,user)
	      {
	      		var cat_id=$(item).next().val();
	      		
	      	     var qty = $(item).prev('input').val();

	      	      qty--;
	      	      if (qty<1)
	      	       {
                       alert("Product cant not less than 1");
	      	       }
	      	       else
	      	       {
    	      	       $(item).prev('input').val(qty);
    	      	        $.ajax({
                type:"POST",
                url:"dbfetch/addToCart.php",
                data:"minusCart="+qty+"&catogery_id="+cat_id+"&user="+user,
                cache:false,
                success:function(result)
                {
                	var price=$(item).parent().next().children().children().text();
                   //location.reload();
                   $(item).parent().parent().next().children().children().text(price*qty);
                   $(".calculateTotal").text(result);
                }
            });
	      	       }
	      }
	      function abc(str)
	      {
	      	var cat_id=$(str).next().children().next().children().next().children().children().next().next().next().val();
	      	$(str).parent().fadeOut('slow');
	      	$.ajax({
	      		type:"POST",
	      		url:"dbfetch/deleteFromCart.php",
	      		data:"cat_id="+cat_id,
	      		cache:false,
	      		success:function(result)
	      		{
	      			//alert("successfully removed");
	      			//location.relode();
	      			$(".calculateTotal").text(result);
	      		}
	      	});
	      }					
	</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>