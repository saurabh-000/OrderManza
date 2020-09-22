<?php
include "connection.php";
echo "okey";
if(isset($_SESSION["mob_no"]))
{
	echo "set";
	if(filter_var($_SESSION["mob_no"], FILTER_VALIDATE_EMAIL))
       {
        echo "Email";
        if(isset($_GET['btn-update']) && isset($_GET['u_mbno']))
	{
		$number=$_GET['u_mbno'];
        $queryexist="SELECT * FROM customer_info WHERE mob_no='".$number."'";
	     $resultexist = mysqli_query($conn,$queryexist) or die(mysql_error());
    if($resultexist->num_rows>0)
    {
      echo "This Mobile number is already registered";

        return false;
    }   
    else
    {
    	$sqlupdatequery ="UPDATE `customer_info` SET `mob_no`='$number',WHERE email_id={$_SESSION['mob_no']}";

	    if ($conn->query($sqlupdatequery) === TRUE) 
	    {
		   //$_SESSION['mob_no']=$number;
	       echo "Record updated successfully";
	    }
	    else
	    {	
	       echo "Error updating record: " . $conn->error;
	    }
    }
	}
	elseif (isset($_GET['btn-update']) && isset($_GET['u_email'])) 
	{
		# code...
			$email=$_GET['u_email'];
        $queryexist="SELECT * FROM customer_info WHERE email_id='".$email."'";
	     $resultexist = mysqli_query($conn,$queryexist) or die(mysql_error());
    if($resultexist->num_rows>0)
    {
      echo "This Email Id is already registered";

        return false;
    }   
    else
    {
    	$sqlupdatequery ="UPDATE `customer_info` SET `email_id`='$email',WHERE email_id={$_SESSION['mob_no']}";

	    if ($conn->query($sqlupdatequery) === TRUE) 
	    {
		   $_SESSION['mob_no']=$email;
	       echo "Record updated successfully";
	    }
	    else
	    {	
	       echo "Error updating record: " . $conn->error;
	    }
    }
	}
	elseif (isset($_GET['btn-update']) && isset($_GET['u_pswd']))
	{
		# code...
		$pswd=$_GET['u_pswd'];
		$sqlupdatequery ="UPDATE `customer_info` SET `password`='$pswd',WHERE email_id={$_SESSION['mob_no']}";

	    if ($conn->query($sqlupdatequery) === TRUE) 
	    {
		   //$_SESSION['mob_no']=$number;
	       echo "Record updated successfully";
	    }
	    else
	    {	
	       echo "Error updating record: " . $conn->error;
	    }
	}
       }
       else
       {
       	echo "Number";
       	if(isset($_GET['btn-update']) && isset($_GET['u_mbno']))
	{
		$number=$_GET['u_mbno'];
        $queryexist="SELECT * FROM customer_info WHERE mob_no='".$number."'";
	     $resultexist = mysqli_query($conn,$queryexist) or die(mysql_error());
    if($resultexist->num_rows>0)
    {
      echo "This Mobile number is already registered";

        return false;
    }   
    else
    {
    	$sqlupdatequery ="UPDATE `customer_info` SET `mob_no`='$number',WHERE mob_no={$_SESSION['mob_no']}";

	    if ($conn->query($sqlupdatequery) === TRUE) 
	    {
		   $_SESSION['mob_no']=$number;
	       echo "Record updated successfully";
	    }
	    else
	    {	
	       echo "Error updating record: " . $conn->error;
	    }
    }
	}
	elseif (isset($_GET['btn-update']) && isset($_GET['u_email'])) 
	{
		# code...
			$email=$_GET['u_email'];
        $queryexist="SELECT * FROM customer_info WHERE email_id='".$email."'";
	     $resultexist = mysqli_query($conn,$queryexist) or die(mysql_error());
    if($resultexist->num_rows>0)
    {
      echo "This Email Id is already registered";

        return false;
    }   
    else
    {
    	$sqlupdatequery ="UPDATE `customer_info` SET `email_id`='$email',WHERE mob_no={$_SESSION['mob_no']}";

	    if ($conn->query($sqlupdatequery) === TRUE) 
	    {
		   //$_SESSION['mob_no']=$number;
	       echo "Record updated successfully";
	    }
	    else
	    {	
	       echo "Error updating record: " . $conn->error;
	    }
    }
	}
	elseif (isset($_GET['btn-update']) && isset($_GET['u_pswd']))
	{
		# code...
		$pswd=$_GET['u_pswd'];
		$sqlupdatequery ="UPDATE `customer_info` SET `password`='$pswd',WHERE mob_no={$_SESSION['mob_no']}";

	    if ($conn->query($sqlupdatequery) === TRUE) 
	    {
		   //$_SESSION['mob_no']=$number;
	       echo "Record updated successfully";
	    }
	    else
	    {	
	       echo "Error updating record: " . $conn->error;
	    }
	}
	/*elseif(isset($_GET['btn-update']))
	{
		echo "btn set";
		$mail=$_GET['u_email'];
	    $number=$_GET['u_mbno'];
	    $pswd=$_GET['u_pswd'];
	    $queryexist="SELECT * FROM customer_info WHERE mob_no='".$number."' OR email_id='".$mail."'";
	     $resultexist = mysqli_query($conn,$queryexist) or die(mysql_error());
    if($resultexist->num_rows>0)
    {
      echo "This Mobile number or email id is already registered";

        return false;
    }   
    else
    {
    	if(filter_var($_SESSION["mob_no"], FILTER_VALIDATE_EMAIL))
       {
        //echo "Email";
        $qryFindmob="SELECT mob_no from customer_info WHERE email_id='".$_SESSION["mob_no"]."'";
         $resultFindmob=mysqli_query($conn,$qryFindmob) or die(mysql_error());
        if($resultFindmob->num_rows>0) 
          {
           while($rowFindmob=$resultFindmob->fetch_assoc())
            {
               $user=$rowFindmob['mob_no'];
            }
            $sqlupdatequery ="UPDATE `customer_info` SET `email_id`='$mail',`mob_no`='$number',`password`='$pswd' WHERE email_id={$_SESSION['mob_no']}";

	    if ($conn->query($sqlupdatequery) === TRUE) 
	    {
		   $_SESSION['mob_no']=$mail;
	       echo "Record updated successfully";
	    }
	    else
	    {	
	       echo "Error updating record: " . $conn->error;
	    }
          }
       }
       else
       {
       	//echo "Number";
       	$sqlupdatequery ="UPDATE `customer_info` SET `email_id`='$mail',`mob_no`='$number',`password`='$pswd' WHERE mob_no={$_SESSION['mob_no']}";

	    if ($conn->query($sqlupdatequery) === TRUE) 
	    {
		   $_SESSION['mob_no']=$number;
	       echo "Record updated successfully";
	    }
	    else
	    {	
	       echo "Error updating record: " . $conn->error;
	    }
       }
    	
    }

	    
	}
	*/
       }
	
	
}
else
{
	echo "Please Login TO Your Account";
}
?>