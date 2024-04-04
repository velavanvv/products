<?php require 'startsession.php'?>
<?php include 'connection.php'?>
<?php




 $str="select * from seller";
$result=$conn->query($str);

if($result->num_rows>0){
  
  
        echo "<table border='1'>
        <tr>
        <th>user_id</th>
        <th>user_name</th>
        <th>user_password</th>
   
        ";
        while($row=$result->fetch_assoc()){
    echo "<tr>
    <td>".$row["admin_id"]."</td>
    <td>".$row["admin_name"]."</td>
    <td>".$row["admin_password"]."</td>
   
    </tr>";

       }    echo "</table>";
     
    }else{
        echo "no result";
    }




?> 