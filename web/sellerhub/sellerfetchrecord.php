<?php 
     $query = "SELECT *FROM restaurants where seller_mob_no='". $_SESSION['seller_mob_no']."'";
     $resultSet =$conn->query($query);
     if($resultSet->num_rows>0)
     {
        while($row = $resultSet->fetch_assoc())
        {

            echo
            '<tr>
                   <td>'.$row["name"].'</td>
                   <td>'.$row["seller_mob_no"].'</td>
                   <td>'.$row["email"].'</td>
                   <td>'.$row["location"].'</td>
                   <td>'.$row["shop_type"].'</td>


                   <td><img src="images/sellerProfileimg/'.$row["img"].'" width="50px" height="50px" class="img img-rounded"/></td>
                   
                   <td>
                        <button class="btn btn-primary">
                           <span class="glyphicon glyphicon-edit"></span> Edit
                        </button>
                        <button class="btn btn-danger">
                           <span class="glyphicon glyphicon-trash   "></span> Delete
                        </button>
                   </td>
             </tr>';
             $rn=$row["reg_no"];
        }
      
       
     }

     else
     {
         echo "record not found";
     }
?>
<!--<td><img src="Assets/img/'.$row["st_image"].'" width="50px" height="50px" class="img img-rounded"/></td>-->