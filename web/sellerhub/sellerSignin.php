<?php
include_once("../dbfetch/connection.php");
if(isset($_POST['btn_form_seller_login']))
{ 
 // global $conn;

  $user=$_POST["seller_lumn"];
  $password=$_POST["seller_lpswd"];
  $query="SELECT * FROM restaurants where seller_mob_no='".$user."' AND slpswd='".$password."'|| email='".$user."' AND slpswd='".$password."'";
     $result = mysqli_query($conn,$query) or die(mysql_error());
    if($result->num_rows>0)
    {
      $_SESSION['seller_mob_no'] = $user;
      header("location:../sellerProfile.php");
    }   
    else
    {
       echo "no user found";
    }  
  }
  else
  {
    echo "not ok";
  }
?>