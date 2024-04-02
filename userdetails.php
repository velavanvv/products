<?php require 'startsession.php'?>
<?php



$server='localhost';
$user='root';
$password='';
$database='test';



 
$conn=new mysqli($server,$user,$password,$database);
if(!$conn){
    die(mysqli_connect_error());
}
 $str="select * from users";
$result=$conn->query($str);

if($result->num_rows>0){
  
  
        echo "<table border='1'>
        <tr>
        <th>user_id</th>
        <th>user_name</th>
        <th>user_gender</th>
        <th>user_adress</th>
        <th>user_phone</th>
        <th>user_gmail</th>
        <th>isssue_Date</th></tr>";
        while($row=$result->fetch_assoc()){
    echo "<tr>
    <td>".$row["user_id"]."</td>
    <td>".$row["username"]."</td>
    <td>".$row["gender"]."</td>
    <td>".$row["user_adress"]."</td>
    <td>".$row["phone"]."</td>
    <td>".$row["user_email"]."</td>
    <td>".$row["issued_date"]."</td>
    </tr>";

       }    echo "</table>";
     
    }else{
        echo "no result";
    }




?>