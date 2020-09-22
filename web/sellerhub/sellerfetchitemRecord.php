<?php
     $query = "SELECT reg_no from restaurants where seller_mob_no='". $_SESSION['seller_mob_no']."'";
     $resultSet =$conn->query($query);
     if($resultSet->num_rows>0)
     {
        while($row = $resultSet->fetch_assoc())
        {   
            $query1="Select * from food_info where reg_no='".$row['reg_no']."'";
            $resultSet1=$conn->query($query1);
            if($resultSet1->num_rows>0)
            {
              while($row1=$resultSet1->fetch_assoc())
              {
echo <<<heredoc
<tr>
                   <td>{$row1["item"]}</td>
                   <td>{$row1["rate"]}</td>
                   <td>{$row1["qty"]}</td>
                   <td>{$row1["catogery"]}</td>
                   
                    <td><img src="images/sellerItemimg/{$row1["item_img"]}" width="50px" height="50px" class="img img-rounded"/></td>
                   
                   <td>{$row1["cuisine_name"]}</td>
                   
                   <td>
                        <button class="btn btn-primary">
                           <a href="sellerhub/edit.php?id={$row1["id"]}" style="color:white"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        </button>
                        <button class="btn btn-danger" id="">
                           <a href="sellerhub/delete.php?id={$row1["id"]}&img={$row1["item_img"]}" style="color:white"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                        </button>
                   </td>
             </tr>
heredoc;
}
            }
            else
            {
              echo "<div>insert record<div>";
            }
        }
     }

     else
     {
         echo "record not found";
     }



?>