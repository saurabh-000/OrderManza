<?php
include "dbfetch/connection.php";
global $conn;
$key=$_GET['q'];
//$key="c";
  
   
$query="SELECT *FROM restaurants WHERE name like '".$key."%'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
    if($result->num_rows>0)
    {
       while($row=$result->fetch_assoc())
       {
echo <<<heredoc
<p onmouseover="mouseoverEventrestaurant('{$row['name']}')" onmouseclick="mouseclickEventrestaurant('{$row['name']}')">{$row['name']}</p>
heredoc;
}
        
         
       }
// Output "no suggestion" if no hint was found or output correct values 
    else
    {
       echo "no result found";
    }
?>