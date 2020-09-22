<?php
include_once("connection.php");
if(isset($_GET['btn_form_signup_insert']))
{
    global $conn;
	$email_id=$_GET['sem'];
	$mobile_no=$_GET['smno'];
	$password=$_GET['spswd'];
    
    $queryexist="SELECT * FROM customer_info WHERE mob_no='".$mobile_no."' OR email_id='".$email_id."'";
         $result = mysqli_query($conn,$queryexist) or die(mysql_error());
    if($result->num_rows>0)
    {
      echo '<html>
       <head>
       <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.css">
       </head>
       <body>
       <div class="container" style="padding:15% 10% 10% 10% ;"><div class="alert alert-success"><h1>
    This Mobile No Or Email Id is <strong>Already</strong> Registered.</h1>
  </div>
</div></body></html>';

        return false;
    }   
    else
    {
	$query="INSERT INTO customer_info(email_id,mob_no,password)values('$email_id','$mobile_no','$password')";
        if($conn->query($query )===true)
         {
             echo '<html>
       <head>
       <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.css">
       </head>
       <body>
       <div class="container" style="padding:15% 10% 10% 10%;"><div class="alert alert-success"><h1>
    Your Account is <strong>Registered</strong> successfully.</h1>
  </div>
</div></body></html>';
echo "<script>
      setTimeout(function(){
        window.location='../index.php'},800);
        </script>";
         }
         else
         {
            echo "errr";
         }
     }
}
?>