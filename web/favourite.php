<?php
 include "dbfetch/connection.php";
include("templates/header.php");

 if(isset($_SESSION['mob_no']))
 {
   echo '<div class="cart-items">
  <div class="container">';
 	//global $conn;
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
       $query="SELECT catogery_id FROM wishlist WHERE customer_id='".$user."'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
      if($result->num_rows>0)
     {   

         while($row =$result->fetch_assoc())
         {
          $catogery_id=$row['catogery_id'];
          //echo $catogery_id;
          //echo strpos($catogery_id,"_");
          $table=substr($catogery_id,0,strpos($catogery_id,"_"));
          //echo $table;
         $query1="SELECT * FROM food_info where catogery_id='".$catogery_id."'";
          $result1=mysqli_query($conn,$query1)or die(mysql_error());
          if($result1->num_rows>0)
          {
            while ($row1=$result1->fetch_assoc()) 
            {
              echo '<div class="cart-header">
         <div class="close1" onclick="deleteWishlist(this)"> </div>
         <input type="hidden" value="'.$row1["catogery_id"].'">
         <div class="cart-sec simpleCart_shelfItem">
            <div class="cart-item cyc">
               <img src="images/sellerItemimg/'.$row1["item_img"].'" class="img-responsive" alt="">
            </div>
             <div class="cart-item-info">
            <h3><a href="#" style="text-transform:uppercase">'.$row1["item"].' </a><span>From : Chaudhary</span> </h3>
            <ul class="qty">
              
              <li>
                <p>Price : &#8377 <span>'.$row1["rate"].'</span></p>
              </li>
              <li><a href="dbfetch/dbcart.php?procat='.base64_encode($row1["catogery_id"]).'"><i class="fa fa-shopping-cart" title="Add To Cart"></i></a></li>
            </ul>
               <div class="delivery">
              
              <!--  <span>Delivered in 1-1:30 hours</span> -->
               <div class="clearfix"></div>
                </div>  
             </div>
             <div class="clearfix"></div>
                      
          </div>
       </div>';
               /*echo '<link rel="stylesheet" type="text/css" href="css/favourite.css">
      <div id="main">
  <div id="favourite-item-div"><center><b>'.$row1["item"].'</b>
    </center><br>
    <div class="row">
      <div class="column">
        
      <div class="wishlist-item-price">
      Rs- '.$row1["rate"].'
      </div>
      <a href="dbfetch/dbcart.php?procat='.base64_encode($row1["catogery_id"]).'"><button id="wishlist-item-add-to-cart-button">Add to cart</button></a>
      <br>
      <button id="wishlist-item-buy-button" >Buy Now</button>
      </div>
      <div class="column"><div class="wishlist-img-div"><img src="images/sellerItemimg/'.$row1["item_img"].'"></div></div>
    </div>
  </div>
</div>

';*/

              //echo $row1['item'];
              //echo $row1['rate'];
            } 
            
          }
    }     
}
else
{
 echo '<html>
       <head>
       <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.css">
       </head>
       <body>
       <div class="container" style="padding:15% 10% 10% 10% ;"><div class="alert alert-success"><h1>
    <center>Your &nbspWishlist &nbsp<strong>&nbspis&nbsp</strong>&nbspEmpty</center></h1>
  </div>
</div></body></html>';
}

     }
  }
  else
  {
    //echo "Number";
    $qryFindid="SELECT customer_id from customer_info WHERE mob_no='".$_SESSION["mob_no"]."'";
    $resultFindid=mysqli_query($conn,$qryFindid) or die(mysql_error());
    if($resultFindid->num_rows>0) 
    {
      while($rowFindid=$resultFindid->fetch_assoc())
       {
        $user=$rowFindid['customer_id'];
       }
       $query="SELECT catogery_id FROM wishlist WHERE customer_id='".$user."'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
      if($result->num_rows>0)
     {   

         while($row =$result->fetch_assoc())
         {
          $catogery_id=$row['catogery_id'];
          //echo $catogery_id;
          //echo strpos($catogery_id,"_");
          $table=substr($catogery_id,0,strpos($catogery_id,"_"));
          //echo $table;
         $query1="SELECT * FROM food_info where catogery_id='".$catogery_id."'";
          $result1=mysqli_query($conn,$query1)or die(mysql_error());
          if($result1->num_rows>0)
          {
            while ($row1=$result1->fetch_assoc()) 
            {
              echo '<div class="cart-header">
         <div class="close1" onclick="deleteWishlist(this)"> </div>
         <input type="hidden" value="'.$row1["catogery_id"].'">
         <div class="cart-sec simpleCart_shelfItem">
            <div class="cart-item cyc">
               <img src="images/sellerItemimg/'.$row1["item_img"].'" class="img-responsive" alt="">
            </div>
             <div class="cart-item-info">
            <h3><a href="#" style="text-transform:uppercase">'.$row1["item"].' </a><span>From : Chaudhary</span> </h3>
            <ul class="qty">
              
              <li>
                <p>Price : &#8377 <span>'.$row1["rate"].'</span></p>
              </li>
              <li><a href="dbfetch/dbcart.php?procat='.base64_encode($row1["catogery_id"]).'"><i class="fa fa-shopping-cart" title="Add To Cart"></i></a></li>
            </ul>
               <div class="delivery">
              
              <!--  <span>Delivered in 1-1:30 hours</span> -->
               <div class="clearfix"></div>
                </div>  
             </div>
             <div class="clearfix"></div>
                      
          </div>
       </div>';
      
            } 
            
          }
    }     
}
else
{
 echo '<html>
       <head>
       <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.css">
       </head>
       <body>
       <div class="container" style="padding:15% 10% 10% 10% ;"><div class="alert alert-success"><h1>
    <center>Your &nbspWishlist &nbsp<strong>&nbspis&nbsp</strong>&nbspEmpty</center></h1>
  </div>
</div></body></html>';
}

     }
  }
 	
}
else
{
  echo "please login to your account";
}
?>
<script>
  function deleteWishlist(str)
  {
    cat_id=$(str).next().val();
    $(str).parent().fadeOut('slow');
    $.ajax({
            type:"POST",
            url:"dbfetch/deleteWishlist.php",
            data:"cat_id="+cat_id,
            cache:false,
            success:function(result)
            {
              alert(result);
              //location.relode();
            
            }
          });
  }
</script>