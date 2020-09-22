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
       $qry="SELECT catogery_id,item_qty FROM cart WHERE customer_id='".$user."'";
	$result=mysqli_query($conn,$qry);
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
	else
	{
		echo 0;
	}

    }
  }
  else
  {
  	$qryFindid="SELECT customer_id from customer_info WHERE mob_no='".$_SESSION["mob_no"]."'";
    $resultFindid=mysqli_query($conn,$qryFindid) or die(mysql_error());
    if($resultFindid->num_rows>0) 
    {
      while($rowFindid=$resultFindid->fetch_assoc())
       {
        $user=$rowFindid['customer_id'];
       }
       $qry="SELECT catogery_id,item_qty FROM cart WHERE customer_id='".$user."'";
	$result=mysqli_query($conn,$qry);
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
	else
	{
		echo 0;
	}

    }
  }
}
else
{
	echo "Please Login To Your Account To See Your Cart";
}

?>