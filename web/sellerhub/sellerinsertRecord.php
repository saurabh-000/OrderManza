<?php
    include "../dbfetch/connection.php";
    if(isset($_POST['btnInsert']))
    { 
         $reg=$_POST['s_rgn'];
         $item =  $_POST['s_item'];
         $rate =  $_POST['s_rate'];
         $quantity =  $_POST['s_quantity'];
         $catogery =  $_POST['s_catogery'];
         $cuisine=$_POST['s_cuisine'];
         $image =  $reg."PR".$_FILES['s_image']['name'];
         $catId=$reg."_".$catogery."_".preg_replace('/\s+/', '', $item);

         $query = "INSERT INTO food_info(item,rate,qty,catogery,item_img,catogery_id,cuisine_name,reg_no) VALUES('$item','$rate','$quantity','$catogery','$image','$catId','$cuisine','$reg')";
         if($conn->query($query )===true)
         {
             echo "Record inserted successfully";
             
         }
         else
         {
            echo "errr";
         }
$target_dir = "../images/sellerItemimg/";
$target_file = $target_dir .$reg."PR".basename($_FILES["s_image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_GET["submit"])) {
    $check = getimagesize($_FILES["s_image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
//if ($_FILES["fileToUpload"]["size"] > 500000) {
    //echo "Sorry, your file is too large.";
    //$uploadOk = 0;
//}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["s_image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["s_image"]["name"]). " has been uploaded.";
         header("location:../sellerProfile.php");
    }   
     else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}    
?>