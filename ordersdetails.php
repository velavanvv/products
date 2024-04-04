<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php require 'startsession.php'?>

<?php include 'connection.php'?>
<?php
  $deleteurl="";
  $url="ordersupdate.php";


 $str="select o.orders_id,u.username,u.phone,p.product_name,p.product_rupees,o.order_count,order_date
 from orders o join users u on o.user_id =u.user_id join
 products p on o.product_id = p.product_id ";
$result=$conn->query($str);
$deleteurl=$_SERVER["PHP_SELF"];
if($result->num_rows>0){
  
  
        echo "<table border='1'>
        <tr>
        <th>orders_id</th>
        <th>user_name</th>
        <th>user_phne</th>
        <th>product_name</th>
        <th>product_rupees</th>
        <th>order_count</th>
        <th>order_date</th>
        <th>toatal amount</th>

   
        ";
        while($row=$result->fetch_assoc()){
    echo "<tr>
    <td>".$row["orders_id"]."</td>
    <td>".$row["username"]."</td>
    <td>".$row["phone"]."</td>
    <td>".$row["product_name"]."</td>
    <td>".$row["product_rupees"]."</td>
    <td>".$row["order_count"]."</td>
    <td>".$row["order_date"]."</td>
    <td>".$row["order_count"]*$row["product_rupees"]."</td>
    <td><button><a href='$deleteurl?id=".$row['orders_id']."' style='text-decoration:none' method='post'>delete</a></button></td> 
    <td><button><a href='$url?id=".$row['orders_id']."' style='text-decoration:none'>update</a></button></td><td>
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
   
    $deleteurl=$_SERVER["PHP_SELF"];

    $delete="delete from orders where orders_id=$id";
    $conn->query($delete);
header("Location:orders.php");
    $conn->query($str);
}

} 
    
?> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>