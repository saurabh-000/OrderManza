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
        $id=$_POST['cat_id'];
  	    $qry="DELETE  FROM wishlist WHERE customer_id='".$user."' AND catogery_id='".$id."'";
  	    if($conn->query($qry)===TRUE)
  	    {
  		echo "This Item Is Deleted Successfully";
  	    }
  	    else
  	    {
  		echo "Item is not deleted successfully";
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
        $id=$_POST['cat_id'];
  	    $qry="DELETE  FROM wishlist WHERE customer_id='".$user."' AND catogery_id='".$id."'";
  	    if($conn->query($qry)===TRUE)
  	    {
  		echo "This Item Is Deleted Successfully";
  	    }
  	    else
  	    {
  		echo "Item is not deleted successfully";
  	    }
    }
  }
}
else
{
	echo "Please Login To Your Account";
}