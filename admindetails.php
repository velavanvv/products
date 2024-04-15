<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../products/css/details.css">   
</head>
<body>
    
</body>
</html>
<?php require 'startsession.php'?>
<?php include 'connection.php'?>
<?php



$deleteurl=$_SERVER['PHP_SELF'];
 $str="select * from seller where admin_id=1";
$result=$conn->query($str);

$str1="select * from seller where admin_id > 1";
$result1=$conn->query($str1);
if($result->num_rows>0){
  
  
        echo "<div class='table-wrapper'>
        <table class='fl-table'><thead>
        <tr>
        <th>user_id</th>
        <th>user_name</th>
        <th>user_password</th></tr>
   </thead><tbody>
        ";
        $row=$result->fetch_assoc();
            echo "<tr>
            <td>".$row["admin_id"]."</td>
            <td>".$row["admin_name"]."</td>
            <td>".password_hash($row["admin_password"],PASSWORD_DEFAULT)."</td>
           
            </tr>";
        
               
        while($row=$result1->fetch_assoc()){
    echo "<tr>
    <td>".$row["admin_id"]."</td>
    <td>".$row["admin_name"]."</td>
    <td>".password_hash($row["admin_password"],PASSWORD_DEFAULT)."</td>
   <td><button class='update' style='  display:inline-block;
   padding: 10px 20px;
   font-size:16px;
   font-weight:bold;
   text-align: center;
   text-decoration: none;
   border: 2px solid #000;
   border-radius:5px;
   background-color: #fff;
   cursor: pointer;'><a style='color:black;text-decoration:none;' href='$deleteurl?id=".$row['admin_id']."' style='text-decoration:none' method='post'>delete</a></button></td>
  
    </tr>";

       }    echo "</tbody></table></div>";
     
    }
    if($_SERVER["REQUEST_METHOD"]=="GET"){

        if(isset($_GET['id'])){
            $id=$_GET['id'];
           
        
        
            $delete="delete from seller where admin_id=$id";
            $conn->query($delete);
      
        }
        } 



?> 