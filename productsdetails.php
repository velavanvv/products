<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product deatails</title>
</head>
<body>

<?php require 'startsession.php'?>
<?php include 'connection.php'?>
<?php



 $str="select * from products";
$result=$conn->query($str);
$url="productupdate.php";
$deleteurl=$_SERVER["PHP_SELF"];
if($result->num_rows>0){
  
  
        echo "<table border='1'>
        <tr>
        <th>product_id</th>
        <th>product_name</th>
        <th>product_count</th>
        <th>product_email</th>
        <th>product_number</th>
        <th>product_rupees</th>
        <th>product_date</th>

   
        ";
        while($row=$result->fetch_assoc()){
    echo "<tr>
    <td>".$row["product_id"]."</td>
    <td>".$row["product_name"]."</td>
    <td>".$row["product_count"]."</td>
    <td>".$row["product_email"]."</td>
    <td>".$row["product_number"]."</td>
    <td>".$row["product_rupees"]."</td>
    <td>".$row["product_date"]."</td>
    <td><button><a href='$url?id=".$row['product_id']."' style='text-decoration:none'>update</a></button>
     <button><a href='$deleteurl?id=".$row['product_id']."' style='text-decoration:none' method='post'>delete</a></button></td>
   
    </tr>";

       }    echo "</table>";
     
    }
    else{
        echo "<table border='1'>
        <tr>
        <th>product_id</th>
        <th>product_name</th>
        <th>product_count</th>
        <th>product_email</th>
        <th>product_number</th>
        <th>product_rupees</th>
        <th>product_date</th>
</tr></table>";
    }

if($_SERVER["REQUEST_METHOD"]=="GET"){

if(isset($_GET['id'])){
    $id=$_GET['id'];
   


    $delete="delete from products where product_id=$id";
    $conn->query($delete);
header("Location:products.php");   
}
} 
    
?>     
</body>
</html>