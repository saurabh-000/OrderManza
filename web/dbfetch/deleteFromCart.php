<?php
include_once("connection.php");
if(isset($_SESSION['mob_no']))
{
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
       $cat_id=$_POST['cat_id'];
   $qry="DELETE FROM cart WHERE customer_id='".$user."' AND catogery_id='".$cat_id."'";
    $conn->query($qry);
    $qry1="SELECT catogery_id,item_qty FROM cart WHERE customer_id='".$user."'";
           $result=mysqli_query($conn,$qry1);
           $total=0;
    if($result->num_rows>0)
    {
        
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
    else 
    {
    	echo $total;
    }

   }
  }
  else
  {
  	//echo "number";
  	$qryFindid="SELECT customer_id from customer_info WHERE mob_no='".$_SESSION["mob_no"]."'";
    $resultFindid=mysqli_query($conn,$qryFindid) or die(mysql_error());
    if($resultFindid->num_rows>0) 
    {
      while($rowFindid=$resultFindid->fetch_assoc())
       {
        $user=$rowFindid['customer_id'];
       }
       $cat_id=$_POST['cat_id'];
   $qry="DELETE FROM cart WHERE customer_id='".$user."' AND catogery_id='".$cat_id."'";
    $conn->query($qry);
    $qry1="SELECT catogery_id,item_qty FROM cart WHERE customer_id='".$user."'";
           $result=mysqli_query($conn,$qry1);
           $total=0;
    if($result->num_rows>0)
    {
        
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
    else 
    {
    	echo $total;
    }
   }
  }	   
}
?>