<?php
include_once("../dbfetch/connection.php");

if(isset($_POST['btn_form_seller_signup_insert']))
{
    global $conn;

	$email_id=$_POST['seller_sem'];
	$mobile_no=$_POST['seller_smno'];
	$password=$_POST['seller_spswd'];
    $shop=$_POST['seller_shop'];
    $locality=$_POST['seller_loc'];
    $type=$_POST['seller_shop_type'];

    echo ""
    $queryexist="SELECT * FROM restaurants WHERE seller_mob_no='".$mobile_no."' OR email='".$email_id."'";
         $result = mysqli_query($conn,$queryexist) or die(mysql_error());
    if($result->num_rows>0)
    {
      echo "<div class='jumbotron'>This Shop is already registered</div>";

        return false;
    }   
    else
    {   
        //getting id of last record
        $querygetlast="SELECT id from restaurants ORDER BY id DESC LIMIT 1";
        $resultget=mysqli_query($conn,$querygetlast)or die(mysql_error());
        if($resultget->num_rows>0)
        {
            while($rows=$resultget->fetch_assoc())
            { 
            $rg=(int)$rows['id'];
            echo $rg;
            echo $rg++;
            }
        }
        else
        {
            $rg=1;
        }
        if($type=="Bakers")
        {
        
        $reg="st2116sl".$rg."CB";
        }
        else
        {
        $reg="st2116sl".$rg."CR";
        //$photoid=generateRestaurantsphotoid();
        }
        $image=$reg."SPR".$_FILES['s_profile_img']['name'];
	$query="INSERT INTO restaurants(email,seller_mob_no,slpswd,name,location,shop_type,reg_no,img)values('$email_id','$mobile_no','$password','$shop','$locality','$type','$reg','$image')";
        if($conn->query($query)===true)
         {
                   $target_dir = "../images/sellerProfileimg/";
$target_file = $target_dir .$reg."SPR".basename($_FILES["s_profile_img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["s_profile_img"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<div class='container'>File is not an image.</div>";
        $uploadOk = 0;
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
    if (move_uploaded_file($_FILES["s_profile_img"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["s_profile_img"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
             echo "shop is registered successfully";
             /*$create_Query="CREATE TABLE ".$reg."(id int(20),item varchar(40) NOT NULL,rate
                int(40) NOT NULL,qty int(20) NOT NULL,catogery varchar(50) NOT NULL,item_img varchar(50),catogery_id varchar(50),cuisine_name varchar(50) NOT NULL,
                PRIMARY KEY(id))";
                if ($conn->query($create_Query) === TRUE) 
                {
                 echo "Table created successfully";
                }  
                else 
                {
                 echo "Error creating table: " . $conn->error;
                }*/
                 header("location:../sellerRegisterUI.php"); 

         }
             }

         else
         {
            echo "errr";
         }
     }
}

?>