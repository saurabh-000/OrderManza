<?php 
include "connection.php";
   echo '
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="../css/cart.css">
            <script src="jquery-3.3.1.min.js"></script>
            <div class="container">
            <div class="col-md-5"  data-spy="affix"  data-offset-top="205">
            <h3><center>Subtotal</center></h3>
            <form action="order.php" method="GET
            ">
            <table class="table table-hover">
            <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            </tr>';
 
    

  if(isset($_COOKIE['product']))
  {

     foreach($_COOKIE['product'] as $cookies)
        {
           //echo  $cookies."<br>";
          $query="SELECT * FROM food_info WHERE catogery_id='".$cookies."'";
          $result = mysqli_query($conn,$query) or die(mysql_error());
            if($result->num_rows>0)
            {
              while($row=$result->fetch_assoc())
              {
                /*echo $row['item'];
                echo $row['rate'];
                echo $row['qty'];*/
                echo '
                    <tr><td>'.$row["item"].'</td>
                    <td>'.$row["rate"].'</td>
                    <td>';
                    $item =  $row["catogery_id"];
           $lengthItem =  strlen($item);
               foreach ($_COOKIE['productQty'] as $value)
                 {

                      if($item==substr($value,0,$lengthItem))
                     {
                      //echo "item=".$item;
                      echo $qty=substr($value,$lengthItem);

                     } 
                     
                 }
                    echo'</td>
                    
                    <td>'.$row["rate"]*$qty.'</td></tr>
                    ';

              }
            }

            else
            {

            }


        }
        echo '</table>
         <hr>';
      //echo ' &nbsp Total-'.$total;
      //echo '<hr>';
      echo '<input type="submit" value="check out">
      </form>';
                  echo '</div><br>';
                  echo '<div class="col-md-7">';
       foreach($_COOKIE['product'] as $cookies)
        {
           //echo  $cookies."<br>";
          $queryagain="SELECT * FROM food_info WHERE catogery_id='".$cookies."'";
          $resultagain = mysqli_query($conn,$queryagain) or die(mysql_error());
            if($resultagain->num_rows>0)
            {
              while($rowagain=$resultagain->fetch_assoc())
              {
                /*echo $row['item'];
                echo $row['rate'];
                echo $row['qty'];*/
                /*echo '
                    <tr><td>'.$rowa["item"].'</td>
                    <td>'.$row["rate"].'</td>
                    <td>'.$row["qty"].'</td></tr>
                    ';*/
                    
                  echo '<div id="main">
                  
                  <div id="favourite-item-div"><center>'.$rowagain["item"].'
    </center> <button class="close">&times;</button><br>
   
    <div class="row">
      <div class="column">      
      <div class="wishlist-item-price">
      Price- '.$rowagain["rate"].'
      </div>
      <div class="col-md-5">
    <button value="'.$cookies.'"  class="cart-qty-btn-plus">
           +
    </button>
        <div class="cart-qty-value" name="qty_value">
          ';
           $item =  $rowagain["catogery_id"];
           $lengthItem =  strlen($item);
               foreach ($_COOKIE['productQty'] as $value)
                 {
                      if($item==substr($value,0,$lengthItem))
                     {
                      echo substr($value,$lengthItem);
                     } 
                     
                 }

        echo'</div>
        <button value="'.$cookies.'"  class="cart-qty-btn-minus">
           -
        </button>
         <input type="hidden" name="catId" value="'.$rowagain["catogery_id"].'">

      </div>
      </div>
      <div class="col-md-7"><div class="wishlist-img-div"><img src="../images/sellerItemimg/'.$rowagain["item_img"].'"></div></div>
    </div>
  </div>
</div>

';


              }
              
            }

            else
            {

            }


        }
        echo "</div>
</div>";
  }
  else
  {
    echo "no product in card";
  }

 
        
 ?>
 <script>
      
        $(".cart-qty-btn-plus").click(function(){
            var item = this.value;

            $.ajax({
                type:"POST",
                url:"addToCart.php",
                data:"addProcat="+item,
                cache:false,
                success:function(result)
                {
                   location.reload();
                }
            });
        });
        $(".cart-qty-btn-minus").click(function(){
            var item = this.value;

            $.ajax({
                type:"POST",
                url:"addToCart.php",
                data:"subProcat="+item,
                cache:false,
                success:function(result)
                {
                   location.reload();
                }
            });
        });

           

        </script>


