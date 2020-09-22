<?php
    session_start();
	//$servername="https://www.ordermanza.com";
	//$username="ordermanza";
	//$password="Ordermanza@9";
	$servername="localhost";
	$username="root";
	$password="";
	$dbname = "bhojupdate";
	//create connection
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
	    die("connection failed :".$conn->connect_error);
	}
	//echo "connected successfully";
?>