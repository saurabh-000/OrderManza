<?php
include "connection.php";
global $conn;
if(isset($_GET["btn-add-restaurant"]))
{
	$name=$_GET["restaurantname"];
	$query="CREATE TABLE".$name."(id INT(10) UNSIGNED AUTO INCREMENT PRIMARY KEY,name VARCHAR(20) NOT NULL,half_price int(10) NOT NULL,full_price int(10) NOT NULL)";
	if(mysqli_query($conn,$query)===TRUE)
	{
		echo "created successfully";

	}
	else
	{
		echo "failed";
	}
}

?>