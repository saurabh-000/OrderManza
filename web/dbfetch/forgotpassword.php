<?php
if(isset($_POST['btn-getpswd']))
{
	//echo "getpswd is set";
	#modal submit button is set

	if(isset($_POST['fgt_pswd']))
	{
		//modal Field is set
		//echo "fgt_email is set";
		//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//require "PHPMAILERAutoload.php"
//Load composer's autoloader
//require 'vendor/autoload.php';

		include('connection.php');	
	echo	$email_Or_no=$_POST['fgt_pswd'];
	if(filter_var($email_Or_no, FILTER_VALIDATE_EMAIL))
	{
		#this is email address
		$sql="SELECT email_id FROM customer_info WHERE email_id='$email_Or_no'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)==0)
		{
		 echo	$error="This email address doesn't exists";
		}
		else
		{    
			 ini_set('SMTP','smtp.gmail.com');
             ini_set('smtp_port',587);
		    //echo "this email is exist";
		    $code=rand(999,999999);
		    $password_code=$email_Or_no . $code;
		    $hash_password = hash('sha256', $password_code);
		
		    /*require "PHPMAILERAutoload.php";
		     require "PHPMailer.php";
		      require "SMTP.php";
		    $mail=new PHPMailer();
	        $mail->IsSmtp();
		    $mail->SMTPDebug=1;
		    $mail->SMTPAuth=true;
		    $mail->SMTPSecure="ssl";
		    $mail->Host="smtp.gmail.com";
		    $mail->Port=587;
		    $mail->ISHTML(true);
		    $mail->Username="saurabhsrg19oct@gmail.com";
		    $mail->Password="gmail@1234";
		    $mail->SetFrom("saurabhsrg19oct@gmail.com");
		    $mail->Subject='New Password for Your Account';
		    $mail->AddAddress($mailto);
		    $mail->Body="<br><br><br><br>
		     This is the New Password for you Log in with that and change it any time.<br><br><br><br>
		      $password_code<br><br><br><br>
		
		      Please click this link to Login into your Account ------------------<br><br><br><br>
		
		      <a href='http://localhost/bhoj/login.php'>Click here to Log in to your Account</a>";

		       if($mail->send())
		         {
			       $sql="UPDATE customer_info SET password='$hash_password' WHERE email_id='$email'";
			       $result=mysqli_query($conn,$sql);
			       $success="We have sent Password to your email";*/
			       $to=$email_Or_no;
			       $subject="new password for your Account";
			       $msg="<br><br><br><br>
		     This is the New Password for you Log in with that and change it any time.<br><br><br><br>
		      $password_code<br><br><br><br>
		
		      Please click this link to Login into your Account ------------------<br><br><br><br>
		
		      <a href='http://localhost/bhojupdate2/login.php'>Click here to Log in to your Account</a>";
		      //$headers = "MIME-Version: 1.0" . "\r\n";
              //$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

              // More headers
              $headers = 'From: <saurabhsrg19oct@gmail.com>' . "\r\n";
              mail($to,$subject,$msg,$headers);
		         }

	}
	else if(!(is_nan($email_Or_no)))
	{
		$sql_mob="SELECT mob_no FROM customer_info WHERE mob_no='$email_Or_no'";
		$result_mob=mysqli_query($conn,$sql_mob);
		if(mysqli_num_rows($result_mob)==0)
		{
		 echo	$error="This mobile_no doesn't exists";
		}
		else
		{
			$sql_findEmail="SELECT email_id FROM customer_info WHERE mob_no='$email_Or_no'";
		$result_findEmail=mysqli_query($conn,$sql_findEmail);
		if(mysqli_num_rows($result_findEmail)==0)
		{
		 echo "There is no email id associated with this registered number";
		}
		else
		{
			while($row=$result_findEmail->fetch_assoc())
			{
               $findEmail=$row['email_id'];
           }
               $code=rand(999,999999);
		    $password_code=$findEmail.$code;
		    $hash_password = hash('sha256', $password_code);
		
		           $to=$findEmail;
			       $subject="new password for your Account";
			       $msg="<br><br><br><br>
		     This is the New Password for you Log in with that and change it any time.<br><br><br><br>
		      $password_code<br><br><br><br>
		
		      Please click this link to Login into your Account ------------------<br><br><br><br>
		
		      <a href='http://localhost/bhojupdate2/login.php'>Click here to Log in to your Account</a>";
		      
              $headers .= 'From: <saurabhsrg19oct@gmail.com>' . "\r\n";
              mail($to,$subject,$msg,$headers);
			
		}
		}
		
	}
		
        
	
	}
}
?>