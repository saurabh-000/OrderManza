<?php

   include_once '../dbfetch/connection.php';
   if(isset($_GET["id"]))
   {
          $id =  $_GET['id'];
          $query="DELETE FROM `food_info` WHERE id={$id}";

          if (mysqli_query($conn, $query)) 
			{
                $img = "../images/sellerItemimg/".$_GET['img'];
                unlink($img);
                header('location:../sellerProfile.php?deleted');
			}
		  else
            {
               echo "Error: " . $query . "<br>" . mysqli_error($conn);
	        }

   }

?>