<?php
include "connection.php";
if(isset($_SESSION["mob_no"]))
{
  $id =  base64_decode($_GET['procat']);
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
       $query="SELECT *FROM cart where customer_id='".$user."'AND catogery_id='".$id."'";
    $result = mysqli_query($conn,$query) or die(mysql_error());
    if($result->num_rows>0)
    {
      
      echo  '<html>
       <head>
       <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.css">
       </head>
       <body>
       <div class="container" style="padding:15% 10% 10% 10% ;"><div class="alert alert-success"><h1>
    you have alredy <strong>Already</strong> selected this item.</h1>
  </div>
</div></body></html>';//apply javascript to show this message in attractive div
 echo "<script>
      setTimeout(function(){
        window.location='../checkout.php'},800);
        </script>";
      //header("location:../checkout.php"); 
    }  
    else
    {
      $query1 = "INSERT into cart(customer_id,catogery_id)values('$user','$id')";
      $conn->query($query1);
      header("location:../checkout.php");
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
       $query="SELECT *FROM cart where customer_id='".$user."'AND catogery_id='".$id."'";
    $result = mysqli_query($conn,$query) or die(mysql_error());
    if($result->num_rows>0)
    {
      
      echo  '<html>
       <head>
       <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.css">
       </head>
       <body>
       <div class="container" style="padding:15% 10% 10% 10% ;"><div class="alert alert-success"><h1>
    you have alredy <strong>Already</strong> selected this item.</h1>
  </div>
</div></body></html>';//apply javascript to show this message in attractive div
 echo "<script>
      setTimeout(function(){
        window.location='../checkout.php'},800);
        </script>";
      //header("location:../checkout.php"); 
    }  
    else
    {
      $query1 = "INSERT into cart(customer_id,catogery_id)values('$user','$id')";
      $conn->query($query1);
      header("location:../checkout.php");
    }
  }
    
}    
}
else
{
	//echo "Please login to your account";//apply javascript here to open login card(page)
  //header("location:../login.php");
  //$cart=[];
  if(isset($_GET['procat']))
  {
      $cat_id = base64_decode($_GET['procat']); 
   
       // setcookie("product",$cat_id, time() + 3600, '/');
        //setcookie ('product["product"]["$cat_id"]',$cat_id,0,'/');
        setcookie('product['.$cat_id.']',''.$cat_id.'',time()+(86400*365));
        
        setcookie('productQty['.$cat_id.']',''.$cat_id.'1',time()+(86400*365));
        
    header("location:getCookie.php");
      //header("location:../check.php");

  }
}
?>