<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .row
	{
	  margin:50px;	
	}
	.btn-edit
	{
		padding 50px;
	}
  .form-group input
  {
    margin-bottom: 30px;
  }
  .btn-update
  { color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
  border-radius: 4px;
   padding: 6px 12px;
  }
  .btn-update:hover,
{
  text-decoration: none;
    background-color: #449d44;
}
@media screen and (max-width:800px)
{
  *{
    font-size: 3vw;
  }
}
</style>
</head>
<body>
	<div class="container-fluid">
	<div class="row"><h1>Account Setting</h1></div>

	<?php
	include "dbfetch/connection.php";
	$query="SELECT * FROM customer_info where mob_no='".$_SESSION['mob_no']."' OR email_id='".$_SESSION['mob_no']."'";
     $result = mysqli_query($conn,$query) or die(mysql_error());
     if($result->num_rows>0)
     {
     	while($rows=$result->fetch_assoc())
     	{
     		echo '
        <div class="row">
        <div class="col-md-12"><b>Mobile No<b></div>
        </div>
        <div class="row">
        <div class="col-md-6">'.$rows["mob_no"].'</div>
        <div class="col-md-6"><button class="btn btn-success" data-toggle="modal" data-target="#ModalupdateNumber">Edit</button></div>
        </div>
        <div class="row">
        <div class="col-md-12"><b>Email Id<b></div>
        </div>
        <div class="row">
        <div class="col-md-6">'.$rows["email_id"].'</div>
        <div class="col-md-6"><button class="btn btn-success" data-toggle="modal" data-target="#ModalupdateEmail">Edit</button></div>
        </div>
        <div class="row">
        <div class="col-md-12"><b>Password<b></div>
        </div>
        <div class="row">
        <div class="col-md-6">'.$rows["password"].'</div>
        <div class="col-md-6"><button class="btn btn-success" data-toggle="modal" data-target="#ModalupdatePassword">Edit</button></div>
        </div>

 

<div id="ModalupdateNumber" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update your Mobile Number</h4>
      </div>
      <form method="GET" onsubmit="return validate()" action="dbfetch/updateProfile.php">
      <div class="modal-body">
          <div class="form-group">
    <input type="text" class="form-control" id="update-form-mobile_no-field" placeholder="New Mobile No" name="u_mbno">
    <label id="userlbl"></label>
  </div>
        
      </div>
      <div class="modal-footer">
      
        <input type="submit" name="btn-update" class="btn-update">
      </div>
  </form>
    </div>

  </div>
</div>
<div id="ModalupdateEmail" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Your Email Id</h4>
      </div>
      <form method="GET" onsubmit="return validate()" action="dbfetch/updateProfile.php">
      <div class="modal-body">
          <div class="form-group">
    
    <input type="email" class="form-control" id="update-form-email-field" placeholder="New Email" name="u_email">
    <label id="userlbl"></label>
  </div>
        
      </div>
      <div class="modal-footer">
      
        <input type="submit" name="btn-update" class="btn-update">
      </div>
  </form>
    </div>

  </div>
</div>
<div id="ModalupdatePassword" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update your Password</h4>
      </div>
      <form method="GET" onsubmit="return validate()" action="dbfetch/updateProfile.php">
      <div class="modal-body">
          <div class="form-group">
    <input type="password" class="form-control" id="update-form-password-field" placeholder="New Password" name="u_pswd">
    <label id="userlbl"></label>
  </div>
        
      </div>
      <div class="modal-footer">
      
        <input type="submit" name="btn-update" class="btn-update">
      </div>
  </form>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="myModalupdate" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update your profile</h4>
      </div>
      <form method="GET" onsubmit="return validate()" action="dbfetch/updateProfile.php">
      <div class="modal-body">
          <div class="form-group">
    
    <input type="email" class="form-control" id="update-form-email-field" placeholder="Email" name="u_email">
    <input type="text" class="form-control" id="update-form-mobile_no-field" placeholder="Mobile No" name="u_mbno">
    <input type="password" class="form-control" id="update-form-password-field" placeholder="Password" name="u_pswd">
    <label id="userlbl"></label>
  </div>
        
      </div>
      <div class="modal-footer">
      
        <input type="submit" name="btn-update" class="btn-update">
      </div>
  </form>
    </div>

  </div>
</div>
<script type="text/javascript">
function validate()
{
  var x3=document.getElementById("update-form-mobile_no-field").value;
  if(/^[6-9]+\d{9}$/.test(x3))
  {
  }
  else
  {
    document.getElementById("userlbl").style.display="block";
    document.getElementById("userlbl").innerHTML="please enter valid mobile no";
    return false; 
  }
  var x2=document.getElementById("update-form-email-field").value;
  if(/^\w+@\w+\.\w{2,3}$/.test(x2))
  {
  }
  else
  {
    document.getElementById("userlbl").style.display="block";
    document.getElementById("userlbl").innerHTML="please enter valid email";
    return false;
  }
  var x4=document.getElementById("update-form-password-field").value;
    if(/^[0-9]/.test(x4))
    {
      document.getElementById("userlbl").style.display="block";
    document.getElementById("userlbl").innerHTML="the first letter should be a letter";
    return false;
    }
   else  if(x4.length<=5 || x4.length>10)
   {
      document.getElementById("userlbl").style.display="block";
    document.getElementById("userlbl").innerHTML="the length of password must be 6-10";
    return false;
    }
  else
  {
    return true;
  }
}
          </script>';

;
     	}
     }	


?>

</div>
</body>
</html>