<?php
	
	include_once '../dbfetch/connection.php';
         $name =  $_POST['s_item'];
         $rate = $_POST['s_rate'];
         $qty  = $_POST['s_quantity'];
         $cat  = $_POST['s_catogery'];
         $cuisine = $_POST['s_cuisine'];
         $imgSelected = $_FILES['s_image']['name']; 
         $id = $_POST['id'];
         $imgNameDb = $_POST['itemImg'];
    
         $reg = substr($imgNameDb,0, 12);
    
     if($imgSelected=="")
      {
          $img = $imgNameDb;
      }

      else
      {
        $imgSelected = $reg.'PR'.$imgSelected;
        if($imgSelected == $imgNameDb)
         {
           $img= $imgNameDb;
         }
         else
         {

             $img ="";
              // set selected image
             
           $img = $imgSelected;
            // for delete image
            $dirName = "../images/sellerItemimg/".$imgNameDb;
            unlink($dirName);
          // for new image upload
             $target_dir = "../images/sellerItemimg/";
             $target_file = $target_dir.$reg."PR".basename($_FILES["s_image"]["name"]);
            
            move_uploaded_file($_FILES["s_image"]["tmp_name"], $target_file);   
       
         }
      }
         
	$sql ="UPDATE `food_info` SET `item`='$name',`rate`='$rate',`qty`='$qty',`catogery`='$cat',`item_img`='$img',`cuisine_name`='$cuisine' WHERE id={$id}";

	if ($conn->query($sql) === TRUE) 
	{
	    echo "Record updated successfully";
	}
	else
	{	
	    echo "Error updating record: " . $conn->error;
	}
      



?>