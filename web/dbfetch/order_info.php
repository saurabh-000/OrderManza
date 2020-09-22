<?php
include("connection.php");
if(isset($_SESSION['mob_no']))
{
	 global $conn;
	 $name=$_GET['o_name'];
	 $area=$_GET['o_area'];
	 $flat=$_GET['o_flat'];
	 $number=$_GET['o_number'];
     $query="INSERT INTO sell(name,locality,building_name,alternate_no)values('$name','$area','$flat','$number')";
        if($conn->query($query )===true)
         {
             echo "Record inserted successfully";
         }
         else
         {
            echo "errr";
         }
}
?>