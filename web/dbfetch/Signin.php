<!--<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="styleshee" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container"><div class="alert alert-success">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
</body>
</html>-->
<?php
include_once("connection.php");
if(isset($_POST['btn-login']))
{ 
  global $conn;
  $user=$_POST['lumn'];
  $password=$_POST['lpswd'];
  $query="SELECT * FROM customer_info where mob_no='".$user."' AND password='".$password."'|| email_id='".$user."' AND password='".$password."'";
   $result = mysqli_query($conn,$query) or die(mysql_error());
    if($result->num_rows>0)
    {
      $_SESSION['mob_no'] = $user;
       echo '
       <html>
       <head>
       <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
       </head>
       <body>
       <div class="container"><div class="alert alert-success"><h1>
    You Are successfully <strong>Login</strong> To Your Account.</h1>
  </div>
</div></body></html>';

      echo "<script>
      setTimeout(function(){
        window.location='../index.php'},800);
        </script>";

     

      //echo "<script>window.location='newhome.php'</script>";
      //echo "login successfull";
    }    
    else
    {
       //header("location:../login.php?notFound");
        //$_SESSION['mob_no'] = $user;
       echo '
       <html>
       <head>
       <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
       </head>
       <body>
       <div class="container"><div class="alert alert-success"><h1><center>
    Incorrect Mobile No or Password !</center><h1>
  </div>
</div></body></html>';

      echo "<script>
      setTimeout(function(){
        window.location='../login.php'},800);
        </script>";
    }
  }
?>