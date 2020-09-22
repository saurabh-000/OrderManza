<?php
include "connection.php";
if(isset($_SESSION['mob_no']))
{
	if(isset($_GET['qty-plus']))
	{
	   global $conn;
	   $query1="SELECT item_qty FROM cart WHERE mob_no='".$_SESSION['mob_no']."'AND catogery_id='".$_GET['catId']."'";
	   $result=mysqli_query($conn,$query1)or die(mysql_error());
	   $row= $result->fetch_assoc();
	   
	   /*if($result->num_rows>0)
	   {
	   	while($row =$result->fetch_assoc())
	   	{
	   		echo $row['pro_qty'];
	   	}
	   }*/
	   if( $row['item_qty']<10)
	   {
	       $query="UPDATE cart SET item_qty=item_qty+1 WHERE mob_no='".$_SESSION['mob_no']."' AND catogery_id='".$_GET['catId']."'";
	       $result = mysqli_query($conn,$query) or die(mysql_error());
	       header("location:../cart.php");
       }
       else
       {
       	 header("location:../cart.php?maxQty");
       }
       
	}
	if(isset($_GET['qty-minus']))
	{
		global $conn;
		$query1="SELECT item_qty FROM cart WHERE mob_no='".$_SESSION['mob_no']."'AND catogery_id='".$_GET['catId']."'";
	   $result=mysqli_query($conn,$query1)or die(mysql_error());
	   $row= $result->fetch_assoc();
	   if($row['item_qty']>1)
	   {
		$query="UPDATE cart SET item_qty=item_qty-1 WHERE mob_no='".$_SESSION['mob_no']."' AND catogery_id='".$_GET['catId']."'";
		$result=mysqli_query($conn,$query)or die(mysql_error());
		header("location:../cart.php");
	   }
	}
}
?>