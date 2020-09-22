<?php 
       //-------------------- cart increment and decrement of cookie ----------------------
     // add qty
include_once("connection.php");
         if(isset($_POST['addProcat']))
         {
         $item= $_POST['addProcat'];
          $lengthItem =  strlen($item);
           
         $cat_id = $item= $_POST['addProcat'];
        foreach ($_COOKIE['productQty'] as $value)
         {
            if($item==substr($value,0,$lengthItem))
             {
                 $preValue = substr($value,$lengthItem);
                 
                $preValue++;
                setcookie('productQty['.$cat_id.']',''.$item.$preValue,time()+(86400*365));
                //header("location:getCookie.php");
             } 
             
         }
         }
        // subtract  qty
         if(isset($_POST['subProcat']))
         {
              $item= $_POST['subProcat'];
            $lengthItem =  strlen($item);
           
         $cat_id = $item= $_POST['subProcat'];
        foreach ($_COOKIE['productQty'] as $value)
         {
            if($item==substr($value,0,$lengthItem))
             {
                 $preValue = substr($value,$lengthItem);
                 
                $preValue--;
                if($preValue<1)
                {
                   echo "cant not be null"; 
                }
                else
                {
                    setcookie('productQty['.$cat_id.']',''.$item.$preValue,time()+(86400*365));
                }
                //header("location:getCookie.php");
             } 
           
         }

     }
         

         //  --------cart increment and decrent of database----------

       if(isset($_POST['addCart']))
         {
             $item= $_POST['addCart'];
             $cat_id=$_POST['catogery_id'];
             $user=$_POST['user'];
            // do database code for update item qty
            $qry="UPDATE `cart` SET `item_qty`='{$item}' WHERE `catogery_id`='{$cat_id}' AND `customer_id`='{$user}'";
            $conn->query($qry);
            //echo "jojo";
            $qry1="SELECT catogery_id,item_qty FROM cart WHERE customer_id='".$user."'";
           $result=mysqli_query($conn,$qry1);
    if($result->num_rows>0)
    {
        $total=0;
        while($row=$result->fetch_assoc())
        {
            //echo $row['catogery_id'];
            $qryAgain="SELECT rate from food_info WHERE catogery_id='".$row['catogery_id']."'";
            $resultAgain=mysqli_query($conn,$qryAgain);
            
                if($resultAgain->num_rows>0)
                {
                    while($rowAgain=$resultAgain->fetch_assoc())
                    {
                        //echo "&nbsp&nbsp".$rowAgain['rate'];
                        $total=$total+($rowAgain['rate']*$row['item_qty']);
                    }
                }    
            //echo "&nbsp &nbsp";
            //echo $row['item_qty'];
            //echo "<br>";
        }
        echo $total;
    }
         }
       if(isset($_POST['minusCart']))
         {
            $item= $_POST['minusCart'];
            $cat_id=$_POST['catogery_id'];
            $user=$_POST['user'];
            // do database code for update item qty
            $qry="UPDATE `cart` SET `item_qty`='{$item}' WHERE `catogery_id`='{$cat_id}' AND `customer_id`='{$user}'";
            $conn->query($qry);
            $qry1="SELECT catogery_id,item_qty FROM cart WHERE customer_id='".$user."'";
           $result=mysqli_query($conn,$qry1);
    if($result->num_rows>0)
    {
        $total=0;
        while($row=$result->fetch_assoc())
        {
            //echo $row['catogery_id'];
            $qryAgain="SELECT rate from food_info WHERE catogery_id='".$row['catogery_id']."'";
            $resultAgain=mysqli_query($conn,$qryAgain);
            
                if($resultAgain->num_rows>0)
                {
                    while($rowAgain=$resultAgain->fetch_assoc())
                    {
                        //echo "&nbsp&nbsp".$rowAgain['rate'];
                        $total=$total+($rowAgain['rate']*$row['item_qty']);
                    }
                }    
        }
        echo $total;
    }    
         }
 ?>