<?php
include "dbfetch/connection.php";
global $conn;
$key=$_GET['q'];
$query="SELECT distinct cuisine_name FROM food_info WHERE cuisine_name like '".$key."%'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
    if($result->num_rows>0)
    {
       while($row=$result->fetch_assoc())
       {
       	
        echo <<<heredoc
<p onmouseover="mouseoverEventcuisine('{$row['cuisine_name']}')" onmouseclick="mouseclickEventcuisine('{$row['cuisine_name']}')">{$row['cuisine_name']}</p>
heredoc;
       }
    }
// Output "no suggestion" if no hint was found or output correct values 
    else
    {
       echo "no result found";
    }
?>