<?php   
     include "connection.php";
     if(isset($_SESSION['mob_no']))
     {
       $id =  base64_decode($_GET['procat']);
      if(filter_var($_SESSION["mob_no"], FILTER_VALIDATE_EMAIL))
       {
        echo "Email";
        $qryFindid="SELECT customer_id from customer_info WHERE email_id='".$_SESSION["mob_no"]."'";
         $resultFindid=mysqli_query($conn,$qryFindid) or die(mysql_error());
        if($resultFindid->num_rows>0) 
          {
           while($rowFindid=$resultFindid->fetch_assoc())
            {
               $user=$rowFindid['customer_id'];
            }
            $query="SELECT *FROM wishlist where customer_id='".$user."'AND catogery_id='".$id."'";
            $result = mysqli_query($conn,$query) or die(mysql_error());
            if($result->num_rows>0)
            {
      
             //header(string)
                echo "you are alredy selected this item";//apply javascript to show this message in attractive div

            }  
            else
             {
                $query1 = "INSERT into wishlist(customer_id,catogery_id)values('$user','$id')";
                $conn->query($query1);
                header("../favourite.php");
              }
          }
      }
       else
       {
        echo "Number";
        /*$mob=$_SESSION['mob_no'];
        $query="SELECT *FROM wishlist where mob_no='".$mob."'AND catogery_id='".$id."'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        if($result->num_rows>0)
        {
      
        //header(string)
        echo "you are alredy selected this item";//apply javascript to show this message in attractive div

        }  
        else
        {
         $query1 = "INSERT into wishlist(mob_no,catogery_id)values('$mob','$id')";
         $conn->query($query1);
         header("../favourite.php");
        }*/
        $qryFindid="SELECT customer_id from customer_info WHERE mob_no='".$_SESSION["mob_no"]."'";
         $resultFindid=mysqli_query($conn,$qryFindid) or die(mysql_error());
        if($resultFindid->num_rows>0) 
          {
           while($rowFindid=$resultFindid->fetch_assoc())
            {
               $user=$rowFindid['customer_id'];
            }
            $query="SELECT *FROM wishlist where customer_id='".$user."'AND catogery_id='".$id."'";
            $result = mysqli_query($conn,$query) or die(mysql_error());
            if($result->num_rows>0)
            {
      
             //header(string)
                echo "you are alredy selected this item";//apply javascript to show this message in attractive div

            }  
            else
             {
                $query1 = "INSERT into wishlist(customer_id,catogery_id)values('$user','$id')";
                $conn->query($query1);
                header("../favourite.php");
              }
          }
       }
    
    
}
else
{
	echo "Please login to your account";//apply javascript here to open login card(page)
  header("location:../login.php");
}

 ?>